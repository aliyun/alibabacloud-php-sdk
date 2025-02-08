<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OpenAPIExplorer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openapiexplorer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 根据提供的错误码获取对应的解决方案.
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过POST或GET方法调用。
     * - `Accept-Language`请求头必须设置为`zh-CN`或`en-US`之一，用于指定返回结果的语言类型。
     * - 错误码格式需符合特定规则，特别是针对OSS的错误码应遵循正则表达式`[0-9]{4}-[0-9]{8}`。
     * - 当前实现中未使用`maxResults`和`nextToken`参数。
     * - 如果请求失败，将根据不同的错误情况返回相应的错误代码及描述信息。
     *
     * @param request - GetErrorCodeSolutionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetErrorCodeSolutionsResponse
     *
     * @param GetErrorCodeSolutionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetErrorCodeSolutionsResponse
     */
    public function getErrorCodeSolutionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->errorCode) {
            @$query['errorCode'] = $request->errorCode;
        }

        if (null !== $request->errorMessage) {
            @$query['errorMessage'] = $request->errorMessage;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetErrorCodeSolutions',
            'version'     => '2024-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/getErrorCodeSolutions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErrorCodeSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErrorCodeSolutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据提供的错误码获取对应的解决方案.
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过POST或GET方法调用。
     * - `Accept-Language`请求头必须设置为`zh-CN`或`en-US`之一，用于指定返回结果的语言类型。
     * - 错误码格式需符合特定规则，特别是针对OSS的错误码应遵循正则表达式`[0-9]{4}-[0-9]{8}`。
     * - 当前实现中未使用`maxResults`和`nextToken`参数。
     * - 如果请求失败，将根据不同的错误情况返回相应的错误代码及描述信息。
     *
     * @param request - GetErrorCodeSolutionsRequest
     * @returns GetErrorCodeSolutionsResponse
     *
     * @param GetErrorCodeSolutionsRequest $request
     *
     * @return GetErrorCodeSolutionsResponse
     */
    public function getErrorCodeSolutions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getErrorCodeSolutionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过API RequestId 查询当前账号调用OpenAPI的日志详情，用于故障排查。
     *
     * @remarks
     * ## 请求说明
     * - 本接口主要用于帮助用户通过提供具体的`apiRequestId`来获取相关API请求的详细日志信息。
     * - `apiRequestId`必须是大写形式的UUID，并且应确保该ID确实来自于您之前对某个OpenAPI的实际调用。
     * - 如果提供的`apiRequestId`无效或者没有找到对应的日志记录，系统将返回相应的错误提示。
     * - 在使用此接口时，请注意检查您的网络环境以及权限设置，以保证能够顺利访问到所需资源。
     *
     * @param request - GetOwnRequestLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOwnRequestLogResponse
     *
     * @param GetOwnRequestLogRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetOwnRequestLogResponse
     */
    public function getOwnRequestLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logRequestId) {
            @$query['logRequestId'] = $request->logRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOwnRequestLog',
            'version'     => '2024-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/getOwnRequestLog',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOwnRequestLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOwnRequestLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过API RequestId 查询当前账号调用OpenAPI的日志详情，用于故障排查。
     *
     * @remarks
     * ## 请求说明
     * - 本接口主要用于帮助用户通过提供具体的`apiRequestId`来获取相关API请求的详细日志信息。
     * - `apiRequestId`必须是大写形式的UUID，并且应确保该ID确实来自于您之前对某个OpenAPI的实际调用。
     * - 如果提供的`apiRequestId`无效或者没有找到对应的日志记录，系统将返回相应的错误提示。
     * - 在使用此接口时，请注意检查您的网络环境以及权限设置，以保证能够顺利访问到所需资源。
     *
     * @param request - GetOwnRequestLogRequest
     * @returns GetOwnRequestLogResponse
     *
     * @param GetOwnRequestLogRequest $request
     *
     * @return GetOwnRequestLogResponse
     */
    public function getOwnRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOwnRequestLogWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过API请求ID查询特定请求的日志详情，用于故障排查。
     *
     * @remarks
     * ## 请求说明
     * - 本接口主要用于帮助用户通过提供具体的`apiRequestId`来获取相关API请求的详细日志信息。
     * - `apiRequestId`必须是大写形式的UUID，并且应确保该ID确实来自于您之前对某个OpenAPI的实际调用。
     * - 如果提供的`apiRequestId`无效或者没有找到对应的日志记录，系统将返回相应的错误提示。
     * - 在使用此接口时，请注意检查您的网络环境以及权限设置，以保证能够顺利访问到所需资源。
     *
     * @param request - GetRequestLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRequestLogResponse
     *
     * @param GetRequestLogRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetRequestLogResponse
     */
    public function getRequestLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logRequestId) {
            @$query['logRequestId'] = $request->logRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRequestLog',
            'version'     => '2024-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/getRequestLog',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRequestLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRequestLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过API请求ID查询特定请求的日志详情，用于故障排查。
     *
     * @remarks
     * ## 请求说明
     * - 本接口主要用于帮助用户通过提供具体的`apiRequestId`来获取相关API请求的详细日志信息。
     * - `apiRequestId`必须是大写形式的UUID，并且应确保该ID确实来自于您之前对某个OpenAPI的实际调用。
     * - 如果提供的`apiRequestId`无效或者没有找到对应的日志记录，系统将返回相应的错误提示。
     * - 在使用此接口时，请注意检查您的网络环境以及权限设置，以保证能够顺利访问到所需资源。
     *
     * @param request - GetRequestLogRequest
     * @returns GetRequestLogResponse
     *
     * @param GetRequestLogRequest $request
     *
     * @return GetRequestLogResponse
     */
    public function getRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRequestLogWithOptions($request, $headers, $runtime);
    }
}
