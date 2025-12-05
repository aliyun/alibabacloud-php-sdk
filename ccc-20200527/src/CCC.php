<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200527;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CCC\V20200527\Models\CheckServiceLinkedRoleForDeletingRequest;
use AlibabaCloud\SDK\CCC\V20200527\Models\CheckServiceLinkedRoleForDeletingResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CCC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'ccc.aliyuncs.com',
            'ap-south-1' => 'ccc.aliyuncs.com',
            'ap-southeast-1' => 'ccc.aliyuncs.com',
            'ap-southeast-2' => 'ccc.aliyuncs.com',
            'ap-southeast-3' => 'ccc.aliyuncs.com',
            'ap-southeast-5' => 'ccc.aliyuncs.com',
            'cn-beijing' => 'ccc.aliyuncs.com',
            'cn-chengdu' => 'ccc.aliyuncs.com',
            'cn-hongkong' => 'ccc.aliyuncs.com',
            'cn-huhehaote' => 'ccc.aliyuncs.com',
            'cn-qingdao' => 'ccc.aliyuncs.com',
            'cn-shenzhen' => 'ccc.aliyuncs.com',
            'cn-zhangjiakou' => 'ccc.aliyuncs.com',
            'eu-central-1' => 'ccc.aliyuncs.com',
            'eu-west-1' => 'ccc.aliyuncs.com',
            'me-east-1' => 'ccc.aliyuncs.com',
            'us-east-1' => 'ccc.aliyuncs.com',
            'us-west-1' => 'ccc.aliyuncs.com',
            'cn-hangzhou-finance' => 'ccc.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ccc.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ccc.aliyuncs.com',
            'cn-north-2-gov-1' => 'ccc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ccc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - CheckServiceLinkedRoleForDeletingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleForDeletingResponse
     *
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeletingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionTaskId) {
            @$query['DeletionTaskId'] = $request->deletionTaskId;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->SPIRegionId) {
            @$query['SPIRegionId'] = $request->SPIRegionId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRoleForDeleting',
            'version' => '2020-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckServiceLinkedRoleForDeletingRequest
     *
     * @returns CheckServiceLinkedRoleForDeletingResponse
     *
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeleting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleForDeletingWithOptions($request, $runtime);
    }
}
