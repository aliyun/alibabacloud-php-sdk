<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Bailian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 将临时上传的文档导入百炼数据中心，导入成功之后会自动触发文档解析。
     *  *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request     AddFileRequest
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return AddFileResponse AddFileResponse
     */
    public function addFileWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->leaseId)) {
            $body['LeaseId'] = $request->leaseId;
        }
        if (!Utils::isUnset($request->parser)) {
            $body['Parser'] = $request->parser;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFile',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/file',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将临时上传的文档导入百炼数据中心，导入成功之后会自动触发文档解析。
     *  *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request     AddFileRequest
     *
     * @return AddFileResponse AddFileResponse
     */
    public function addFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 请求文档上传租约，进行文档上传。
     *  *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request     ApplyFileUploadLeaseRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return ApplyFileUploadLeaseResponse ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->md5)) {
            $body['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->sizeInBytes)) {
            $body['SizeInBytes'] = $request->sizeInBytes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyFileUploadLease',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/category/' . OpenApiUtilClient::getEncodeParam($CategoryId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyFileUploadLeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 请求文档上传租约，进行文档上传。
     *  *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request     ApplyFileUploadLeaseRequest
     *
     * @return ApplyFileUploadLeaseResponse ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLease($CategoryId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文档基本信息，包括文档名称、类型、状态等。
     *  *
     * @param string         $WorkspaceId
     * @param string         $FileId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeFileResponse DescribeFileResponse
     */
    public function describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeFile',
            'version'     => '2023-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/datacenter/file/' . OpenApiUtilClient::getEncodeParam($FileId) . '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文档基本信息，包括文档名称、类型、状态等。
     *  *
     * @param string $WorkspaceId
     * @param string $FileId
     *
     * @return DescribeFileResponse DescribeFileResponse
     */
    public function describeFile($WorkspaceId, $FileId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFileWithOptions($WorkspaceId, $FileId, $headers, $runtime);
    }
}
