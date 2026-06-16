<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\CreateDocParserJobAdvanceRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\CreateDocParserJobRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\CreateDocParserJobResponse;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\DescribeDocParserJobResultRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\DescribeDocParserJobResultResponse;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\DescribeDocParserJobStatusRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\DescribeDocParserJobStatusResponse;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\WebFetchRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\WebFetchResponse;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\WebSearchRequest;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\WebSearchResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DtsAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dtsai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 网页搜索.
     *
     * @param Request - CreateDocParserJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocParserJobResponse
     *
     * @param CreateDocParserJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileFormat) {
            @$query['FileFormat'] = $request->fileFormat;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->outputFormat) {
            @$query['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDocParserJob',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDocParserJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网页搜索.
     *
     * @param Request - CreateDocParserJobRequest
     *
     * @returns CreateDocParserJobResponse
     *
     * @param CreateDocParserJobRequest $request
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocParserJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateDocParserJobAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJobAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'DtsAI',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $createDocParserJobReq = new CreateDocParserJobRequest([]);
        Utils::convert($request, $createDocParserJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $createDocParserJobReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->createDocParserJobWithOptions($createDocParserJobReq, $runtime);
    }

    /**
     * 网页搜索.
     *
     * @param Request - DescribeDocParserJobResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocParserJobResultResponse
     *
     * @param DescribeDocParserJobResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDocParserJobResultResponse
     */
    public function describeDocParserJobResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDocParserJobResult',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocParserJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网页搜索.
     *
     * @param Request - DescribeDocParserJobResultRequest
     *
     * @returns DescribeDocParserJobResultResponse
     *
     * @param DescribeDocParserJobResultRequest $request
     *
     * @return DescribeDocParserJobResultResponse
     */
    public function describeDocParserJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocParserJobResultWithOptions($request, $runtime);
    }

    /**
     * 网页搜索.
     *
     * @param Request - DescribeDocParserJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocParserJobStatusResponse
     *
     * @param DescribeDocParserJobStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDocParserJobStatusResponse
     */
    public function describeDocParserJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDocParserJobStatus',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocParserJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网页搜索.
     *
     * @param Request - DescribeDocParserJobStatusRequest
     *
     * @returns DescribeDocParserJobStatusResponse
     *
     * @param DescribeDocParserJobStatusRequest $request
     *
     * @return DescribeDocParserJobStatusResponse
     */
    public function describeDocParserJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocParserJobStatusWithOptions($request, $runtime);
    }

    /**
     * 网页搜索.
     *
     * @param Request - WebFetchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WebFetchResponse
     *
     * @param WebFetchRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return WebFetchResponse
     */
    public function webFetchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFormat) {
            @$query['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WebFetch',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WebFetchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网页搜索.
     *
     * @param Request - WebFetchRequest
     *
     * @returns WebFetchResponse
     *
     * @param WebFetchRequest $request
     *
     * @return WebFetchResponse
     */
    public function webFetch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->webFetchWithOptions($request, $runtime);
    }

    /**
     * 网页搜索.
     *
     * @param Request - WebSearchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WebSearchResponse
     *
     * @param WebSearchRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return WebSearchResponse
     */
    public function webSearchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WebSearch',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WebSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网页搜索.
     *
     * @param Request - WebSearchRequest
     *
     * @returns WebSearchResponse
     *
     * @param WebSearchRequest $request
     *
     * @return WebSearchResponse
     */
    public function webSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->webSearchWithOptions($request, $runtime);
    }
}
