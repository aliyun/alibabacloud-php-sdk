<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eduaiservice\V20231218;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eduaiservice\V20231218\Models\QueryOrgLabRecordListRequest;
use AlibabaCloud\SDK\Eduaiservice\V20231218\Models\QueryOrgLabRecordListResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eduaiservice extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eduaiservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 查询指定学生实验记录.
     *
     * @param request - QueryOrgLabRecordListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrgLabRecordListResponse
     *
     * @param QueryOrgLabRecordListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryOrgLabRecordListResponse
     */
    public function queryOrgLabRecordListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunUid) {
            @$query['AliyunUid'] = $request->aliyunUid;
        }

        if (null !== $request->labId) {
            @$query['LabId'] = $request->labId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['OrderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOrgLabRecordList',
            'version' => '2023-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrgLabRecordListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定学生实验记录.
     *
     * @param request - QueryOrgLabRecordListRequest
     *
     * @returns QueryOrgLabRecordListResponse
     *
     * @param QueryOrgLabRecordListRequest $request
     *
     * @return QueryOrgLabRecordListResponse
     */
    public function queryOrgLabRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrgLabRecordListWithOptions($request, $runtime);
    }
}
