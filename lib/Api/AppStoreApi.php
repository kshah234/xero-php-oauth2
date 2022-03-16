<?php
/**
 * AppStoreApi
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP AppStore
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero AppStore API
 *
 * These endpoints are for Xero Partners to interact with the App Store Billing platform
 *
 * OpenAPI spec version: 2.19.3
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use XeroAPI\XeroPHP\ApiException;
use XeroAPI\XeroPHP\Configuration;
use XeroAPI\XeroPHP\HeaderSelector;
use XeroAPI\XeroPHP\AppStoreObjectSerializer;

/**
 * AppStoreApi Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppStoreApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSubscription
     * Retrieves a subscription for a given subscriptionId
     * @param  string $subscription_id Unique identifier for Subscription object (required)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \XeroAPI\XeroPHP\Models\AppStore\Subscription|\XeroAPI\XeroPHP\Models\AppStore\ProblemDetails
     */
    public function getSubscription($subscription_id)
    {
        list($response) = $this->getSubscriptionWithHttpInfo($subscription_id);
        return $response;
    }
    /**
     * Operation getSubscriptionWithHttpInfo
     * Retrieves a subscription for a given subscriptionId
     * @param  string $subscription_id Unique identifier for Subscription object (required)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \XeroAPI\XeroPHP\Models\AppStore\Subscription|\XeroAPI\XeroPHP\Models\AppStore\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionWithHttpInfo($subscription_id)
    {
        $request = $this->getSubscriptionRequest($subscription_id);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\XeroAPI\XeroPHP\Models\AppStore\Subscription' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }
                    return [
                        AppStoreObjectSerializer::deserialize($content, '\XeroAPI\XeroPHP\Models\AppStore\Subscription', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\XeroAPI\XeroPHP\Models\AppStore\ProblemDetails' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }
                    return [
                        AppStoreObjectSerializer::deserialize($content, '\XeroAPI\XeroPHP\Models\AppStore\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }
            $returnType = '\XeroAPI\XeroPHP\Models\AppStore\Subscription';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }
            return [
                AppStoreObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = AppStoreObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\XeroAPI\XeroPHP\Models\AppStore\Subscription',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = AppStoreObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\XeroAPI\XeroPHP\Models\AppStore\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation getSubscriptionAsync
     * Retrieves a subscription for a given subscriptionId
     * @param  string $subscription_id Unique identifier for Subscription object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubscriptionAsync($subscription_id)
    {
        return $this->getSubscriptionAsyncWithHttpInfo($subscription_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation getSubscriptionAsyncWithHttpInfo
     * Retrieves a subscription for a given subscriptionId
     * @param  string $subscription_id Unique identifier for Subscription object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface */
    public function getSubscriptionAsyncWithHttpInfo($subscription_id)
    {
        $returnType = '\XeroAPI\XeroPHP\Models\AppStore\Subscription';
        $request = $this->getSubscriptionRequest($subscription_id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }
                    return [
                        AppStoreObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSubscription'
     * @param  string $subscription_id Unique identifier for Subscription object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request  */
    protected function getSubscriptionRequest($subscription_id)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null || (is_array($subscription_id) && count($subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subscription_id when calling getSubscription'
            );
        }
        $resourcePath = '/subscriptions/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                '{' . 'subscriptionId' . '}',
                AppStoreObjectSerializer::toPathValue($subscription_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(AppStoreObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [
                    [
                        'Content-type' => 'multipart/form-data',
                    ]
                ];
                
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHostAppStore() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
