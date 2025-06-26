<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oms\V20160615;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteDomainPartByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteDomainPartByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteDomainPartRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteDomainPartResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteMeasureDataRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\DeleteMeasureDataResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetDomainPartByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetDomainPartByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetDomainPartRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetDomainPartResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetIncrementMeasureDataByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetIncrementMeasureDataByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetMeasureDataRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetMeasureDataResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetReadyFlagByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetReadyFlagByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetReadyFlagRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\GetReadyFlagResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutDomainPartByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutDomainPartByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutDomainPartRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutDomainPartResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutMeasureDataByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutMeasureDataByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutMeasureDataRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutMeasureDataResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutReadyFlagByProxyRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutReadyFlagByProxyResponse;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutReadyFlagRequest;
use AlibabaCloud\SDK\Oms\V20160615\Models\PutReadyFlagResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Oms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-southeast-1' => 'oms.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'pre-oms.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 删除domainPart.
     *
     * @param request - DeleteDomainPartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainPartResponse
     *
     * @param DeleteDomainPartRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDomainPartResponse
     */
    public function deleteDomainPartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->part) {
            @$query['Part'] = $request->part;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainPart',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainPartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除domainPart.
     *
     * @param request - DeleteDomainPartRequest
     *
     * @returns DeleteDomainPartResponse
     *
     * @param DeleteDomainPartRequest $request
     *
     * @return DeleteDomainPartResponse
     */
    public function deleteDomainPart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainPartWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDomainPartByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainPartByProxyResponse
     *
     * @param DeleteDomainPartByProxyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDomainPartByProxyResponse
     */
    public function deleteDomainPartByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->part) {
            @$query['Part'] = $request->part;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainPartByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainPartByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDomainPartByProxyRequest
     *
     * @returns DeleteDomainPartByProxyResponse
     *
     * @param DeleteDomainPartByProxyRequest $request
     *
     * @return DeleteDomainPartByProxyResponse
     */
    public function deleteDomainPartByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainPartByProxyWithOptions($request, $runtime);
    }

    /**
     * 删除记录数据.
     *
     * @param request - DeleteMeasureDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMeasureDataResponse
     *
     * @param DeleteMeasureDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMeasureDataResponse
     */
    public function deleteMeasureDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMeasureData',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMeasureDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除记录数据.
     *
     * @param request - DeleteMeasureDataRequest
     *
     * @returns DeleteMeasureDataResponse
     *
     * @param DeleteMeasureDataRequest $request
     *
     * @return DeleteMeasureDataResponse
     */
    public function deleteMeasureData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMeasureDataWithOptions($request, $runtime);
    }

    /**
     * 获取domainPart.
     *
     * @param request - GetDomainPartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainPartResponse
     *
     * @param GetDomainPartRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDomainPartResponse
     */
    public function getDomainPartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomainPart',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainPartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取domainPart.
     *
     * @param request - GetDomainPartRequest
     *
     * @returns GetDomainPartResponse
     *
     * @param GetDomainPartRequest $request
     *
     * @return GetDomainPartResponse
     */
    public function getDomainPart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainPartWithOptions($request, $runtime);
    }

    /**
     * @param request - GetDomainPartByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainPartByProxyResponse
     *
     * @param GetDomainPartByProxyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDomainPartByProxyResponse
     */
    public function getDomainPartByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compressEnable) {
            @$query['CompressEnable'] = $request->compressEnable;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->part) {
            @$query['Part'] = $request->part;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomainPartByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainPartByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDomainPartByProxyRequest
     *
     * @returns GetDomainPartByProxyResponse
     *
     * @param GetDomainPartByProxyRequest $request
     *
     * @return GetDomainPartByProxyResponse
     */
    public function getDomainPartByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainPartByProxyWithOptions($request, $runtime);
    }

    /**
     * 查询增量表的原始计量数据.
     *
     * @param request - GetIncrementMeasureDataByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIncrementMeasureDataByProxyResponse
     *
     * @param GetIncrementMeasureDataByProxyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetIncrementMeasureDataByProxyResponse
     */
    public function getIncrementMeasureDataByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIncrementMeasureDataByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIncrementMeasureDataByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询增量表的原始计量数据.
     *
     * @param request - GetIncrementMeasureDataByProxyRequest
     *
     * @returns GetIncrementMeasureDataByProxyResponse
     *
     * @param GetIncrementMeasureDataByProxyRequest $request
     *
     * @return GetIncrementMeasureDataByProxyResponse
     */
    public function getIncrementMeasureDataByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIncrementMeasureDataByProxyWithOptions($request, $runtime);
    }

    /**
     * 查询计量数据.
     *
     * @param request - GetMeasureDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMeasureDataResponse
     *
     * @param GetMeasureDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetMeasureDataResponse
     */
    public function getMeasureDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressEnable) {
            @$query['CompressEnable'] = $request->compressEnable;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->queryField) {
            @$query['QueryField'] = $request->queryField;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMeasureData',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMeasureDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询计量数据.
     *
     * @param request - GetMeasureDataRequest
     *
     * @returns GetMeasureDataResponse
     *
     * @param GetMeasureDataRequest $request
     *
     * @return GetMeasureDataResponse
     */
    public function getMeasureData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMeasureDataWithOptions($request, $runtime);
    }

    /**
     * 查询readyflag.
     *
     * @param request - GetReadyFlagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReadyFlagResponse
     *
     * @param GetReadyFlagRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetReadyFlagResponse
     */
    public function getReadyFlagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReadyFlag',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReadyFlagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询readyflag.
     *
     * @param request - GetReadyFlagRequest
     *
     * @returns GetReadyFlagResponse
     *
     * @param GetReadyFlagRequest $request
     *
     * @return GetReadyFlagResponse
     */
    public function getReadyFlag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReadyFlagWithOptions($request, $runtime);
    }

    /**
     * @param request - GetReadyFlagByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReadyFlagByProxyResponse
     *
     * @param GetReadyFlagByProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetReadyFlagByProxyResponse
     */
    public function getReadyFlagByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressEnable) {
            @$query['CompressEnable'] = $request->compressEnable;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReadyFlagByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReadyFlagByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetReadyFlagByProxyRequest
     *
     * @returns GetReadyFlagByProxyResponse
     *
     * @param GetReadyFlagByProxyRequest $request
     *
     * @return GetReadyFlagByProxyResponse
     */
    public function getReadyFlagByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReadyFlagByProxyWithOptions($request, $runtime);
    }

    /**
     * 设置domainPart.
     *
     * @param request - PutDomainPartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDomainPartResponse
     *
     * @param PutDomainPartRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutDomainPartResponse
     */
    public function putDomainPartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDomainPart',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDomainPartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置domainPart.
     *
     * @param request - PutDomainPartRequest
     *
     * @returns PutDomainPartResponse
     *
     * @param PutDomainPartRequest $request
     *
     * @return PutDomainPartResponse
     */
    public function putDomainPart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDomainPartWithOptions($request, $runtime);
    }

    /**
     * @param request - PutDomainPartByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDomainPartByProxyResponse
     *
     * @param PutDomainPartByProxyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutDomainPartByProxyResponse
     */
    public function putDomainPartByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDomainPartByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDomainPartByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutDomainPartByProxyRequest
     *
     * @returns PutDomainPartByProxyResponse
     *
     * @param PutDomainPartByProxyRequest $request
     *
     * @return PutDomainPartByProxyResponse
     */
    public function putDomainPartByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDomainPartByProxyWithOptions($request, $runtime);
    }

    /**
     * 推送计量数据.
     *
     * @param request - PutMeasureDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMeasureDataResponse
     *
     * @param PutMeasureDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->sourceRequestId) {
            @$query['SourceRequestId'] = $request->sourceRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMeasureData',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMeasureDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送计量数据.
     *
     * @param request - PutMeasureDataRequest
     *
     * @returns PutMeasureDataResponse
     *
     * @param PutMeasureDataRequest $request
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureDataWithOptions($request, $runtime);
    }

    /**
     * @param request - PutMeasureDataByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMeasureDataByProxyResponse
     *
     * @param PutMeasureDataByProxyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutMeasureDataByProxyResponse
     */
    public function putMeasureDataByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMeasureDataByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMeasureDataByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutMeasureDataByProxyRequest
     *
     * @returns PutMeasureDataByProxyResponse
     *
     * @param PutMeasureDataByProxyRequest $request
     *
     * @return PutMeasureDataByProxyResponse
     */
    public function putMeasureDataByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureDataByProxyWithOptions($request, $runtime);
    }

    /**
     * 推送readyflag.
     *
     * @param request - PutReadyFlagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutReadyFlagResponse
     *
     * @param PutReadyFlagRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutReadyFlagResponse
     */
    public function putReadyFlagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->sourceRequestId) {
            @$query['SourceRequestId'] = $request->sourceRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutReadyFlag',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutReadyFlagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送readyflag.
     *
     * @param request - PutReadyFlagRequest
     *
     * @returns PutReadyFlagResponse
     *
     * @param PutReadyFlagRequest $request
     *
     * @return PutReadyFlagResponse
     */
    public function putReadyFlag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putReadyFlagWithOptions($request, $runtime);
    }

    /**
     * @param request - PutReadyFlagByProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutReadyFlagByProxyResponse
     *
     * @param PutReadyFlagByProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutReadyFlagByProxyResponse
     */
    public function putReadyFlagByProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->compressed) {
            @$query['Compressed'] = $request->compressed;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutReadyFlagByProxy',
            'version' => '2016-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutReadyFlagByProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutReadyFlagByProxyRequest
     *
     * @returns PutReadyFlagByProxyResponse
     *
     * @param PutReadyFlagByProxyRequest $request
     *
     * @return PutReadyFlagByProxyResponse
     */
    public function putReadyFlagByProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putReadyFlagByProxyWithOptions($request, $runtime);
    }
}
