<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CheckInstancePolicyRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CheckInstancePolicyResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateVCUInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateVCUInstanceResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteInstancePolicyRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteInstancePolicyResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteVCUInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DeleteVCUInstanceResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListClusterTypeResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstanceElasticVCUUpperLimitRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstanceElasticVCUUpperLimitResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstancePolicyRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstancePolicyResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\UpdateInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Tablestore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tablestore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Changes the resource group to which an instance belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/changeresourcegroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which an instance belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Checks the validity of a Resource Access Management (RAM) policy for an instance.
     *
     * @param request - CheckInstancePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstancePolicyResponse
     *
     * @param CheckInstancePolicyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CheckInstancePolicyResponse
     */
    public function checkInstancePolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstancePolicy',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/checkinstancepolicy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInstancePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the validity of a Resource Access Management (RAM) policy for an instance.
     *
     * @param request - CheckInstancePolicyRequest
     *
     * @returns CheckInstancePolicyResponse
     *
     * @param CheckInstancePolicyRequest $request
     *
     * @return CheckInstancePolicyResponse
     */
    public function checkInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstancePolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @remarks
     *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   Each Alibaba Cloud account can create up to 10 instances. The name of an instance must be unique within the region in which the instance resides.
     * *   After you create an instance, you cannot change the type of the instance. Proceed with caution.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterType) {
            @$body['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->disableReplication) {
            @$body['DisableReplication'] = $request->disableReplication;
        }

        if (null !== $request->instanceDescription) {
            @$body['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->network) {
            @$body['Network'] = $request->network;
        }

        if (null !== $request->networkSourceACL) {
            @$body['NetworkSourceACL'] = $request->networkSourceACL;
        }

        if (null !== $request->networkTypeACL) {
            @$body['NetworkTypeACL'] = $request->networkTypeACL;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/createinstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @remarks
     *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   Each Alibaba Cloud account can create up to 10 instances. The name of an instance must be unique within the region in which the instance resides.
     * *   After you create an instance, you cannot change the type of the instance. Proceed with caution.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建VCU实例.
     *
     * @param request - CreateVCUInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVCUInstanceResponse
     *
     * @param CreateVCUInstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVCUInstanceResponse
     */
    public function createVCUInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliasName) {
            @$body['AliasName'] = $request->aliasName;
        }

        if (null !== $request->autoRenewPeriodInMonth) {
            @$body['AutoRenewPeriodInMonth'] = $request->autoRenewPeriodInMonth;
        }

        if (null !== $request->clusterType) {
            @$body['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableAutoRenew) {
            @$body['EnableAutoRenew'] = $request->enableAutoRenew;
        }

        if (null !== $request->enableElasticVCU) {
            @$body['EnableElasticVCU'] = $request->enableElasticVCU;
        }

        if (null !== $request->instanceDescription) {
            @$body['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->periodInMonth) {
            @$body['PeriodInMonth'] = $request->periodInMonth;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->VCU) {
            @$body['VCU'] = $request->VCU;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVCUInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/createvcuinstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVCUInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建VCU实例.
     *
     * @param request - CreateVCUInstanceRequest
     *
     * @returns CreateVCUInstanceResponse
     *
     * @param CreateVCUInstanceRequest $request
     *
     * @return CreateVCUInstanceResponse
     */
    public function createVCUInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVCUInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an instance.
     *
     * @remarks
     *   Before you delete an instance, make sure that all data tables and time series tables in the instance are deleted and virtual private clouds (VPCs) are unbound from the instance.
     * *   To prevent conflicts, do not create an instance that has the same name as the instance that is being deleted.
     * *   After an instance is deleted, the instance becomes unavailable and the tables, table data, and related indexes in the instance cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/deleteinstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an instance.
     *
     * @remarks
     *   Before you delete an instance, make sure that all data tables and time series tables in the instance are deleted and virtual private clouds (VPCs) are unbound from the instance.
     * *   To prevent conflicts, do not create an instance that has the same name as the instance that is being deleted.
     * *   After an instance is deleted, the instance becomes unavailable and the tables, table data, and related indexes in the instance cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) policy of an instance.
     *
     * @remarks
     *   You cannot recover a deleted instance policy. Proceed with caution.
     * *   After you delete an instance policy, the access control that is specified by the instance policy becomes invalid. Make sure that your instance is in a secure environment.
     *
     * @param request - DeleteInstancePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstancePolicyResponse
     *
     * @param DeleteInstancePolicyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInstancePolicyResponse
     */
    public function deleteInstancePolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->policyVersion) {
            @$body['PolicyVersion'] = $request->policyVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstancePolicy',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/deleteinstancepolicy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstancePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) policy of an instance.
     *
     * @remarks
     *   You cannot recover a deleted instance policy. Proceed with caution.
     * *   After you delete an instance policy, the access control that is specified by the instance policy becomes invalid. Make sure that your instance is in a secure environment.
     *
     * @param request - DeleteInstancePolicyRequest
     *
     * @returns DeleteInstancePolicyResponse
     *
     * @param DeleteInstancePolicyRequest $request
     *
     * @return DeleteInstancePolicyResponse
     */
    public function deleteInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstancePolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除VCU实例.
     *
     * @param request - DeleteVCUInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVCUInstanceResponse
     *
     * @param DeleteVCUInstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVCUInstanceResponse
     */
    public function deleteVCUInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVCUInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/deletevcuinstance',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVCUInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除VCU实例.
     *
     * @param request - DeleteVCUInstanceRequest
     *
     * @returns DeleteVCUInstanceResponse
     *
     * @param DeleteVCUInstanceRequest $request
     *
     * @return DeleteVCUInstanceResponse
     */
    public function deleteVCUInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVCUInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries supported regions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/region/DescribeRegions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries supported regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries instance information.
     *
     * @param request - GetInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/getinstance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance information.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举集群类型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterTypeResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterTypeResponse
     */
    public function listClusterTypeWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusterType',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/listclustertype',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举集群类型.
     *
     * @returns ListClusterTypeResponse
     *
     * @return ListClusterTypeResponse
     */
    public function listClusterType()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterTypeWithOptions($headers, $runtime);
    }

    /**
     * Queries instances.
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceNameList) {
            $request->instanceNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceNameList, 'InstanceNameList', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceNameListShrink) {
            @$query['InstanceNameList'] = $request->instanceNameListShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/listinstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instances.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries tagged resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'simple');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/listtagresources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tagged resources.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds tags to instances.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/tagresources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to instances.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @remarks
     * Removing tags from resources helps simplify resource management, optimize system performance, and mitigate potential security vulnerabilities. After a tag is removed from a resource, the system automatically deletes the tag if the tag is not added to other resources.
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$body['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/untagresources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @remarks
     * Removing tags from resources helps simplify resource management, optimize system performance, and mitigate potential security vulnerabilities. After a tag is removed from a resource, the system automatically deletes the tag if the tag is not added to other resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates instance information.
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliasName) {
            @$body['AliasName'] = $request->aliasName;
        }

        if (null !== $request->instanceDescription) {
            @$body['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->network) {
            @$body['Network'] = $request->network;
        }

        if (null !== $request->networkSourceACL) {
            @$body['NetworkSourceACL'] = $request->networkSourceACL;
        }

        if (null !== $request->networkTypeACL) {
            @$body['NetworkTypeACL'] = $request->networkTypeACL;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/updateinstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates instance information.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the upper limit for the VCUs of an instance in VCU mode (formerly reserved mode).
     *
     * @remarks
     *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   After you enable scalability for an instance, the default upper limit for the VCUs of the instance is the sum of the scalability and the reserved VCUs.
     * *   To use more computing resources when your business grows, you can modify the upper limit for the VCUs of your instance. The new upper limit for the VCUs of your instance immediately takes effect.
     *
     * @param request - UpdateInstanceElasticVCUUpperLimitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceElasticVCUUpperLimitResponse
     *
     * @param UpdateInstanceElasticVCUUpperLimitRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateInstanceElasticVCUUpperLimitResponse
     */
    public function updateInstanceElasticVCUUpperLimitWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticVCUUpperLimit) {
            @$body['ElasticVCUUpperLimit'] = $request->elasticVCUUpperLimit;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceElasticVCUUpperLimit',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/updateinstanceelasticvcuupperlimit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceElasticVCUUpperLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the upper limit for the VCUs of an instance in VCU mode (formerly reserved mode).
     *
     * @remarks
     *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   After you enable scalability for an instance, the default upper limit for the VCUs of the instance is the sum of the scalability and the reserved VCUs.
     * *   To use more computing resources when your business grows, you can modify the upper limit for the VCUs of your instance. The new upper limit for the VCUs of your instance immediately takes effect.
     *
     * @param request - UpdateInstanceElasticVCUUpperLimitRequest
     *
     * @returns UpdateInstanceElasticVCUUpperLimitResponse
     *
     * @param UpdateInstanceElasticVCUUpperLimitRequest $request
     *
     * @return UpdateInstanceElasticVCUUpperLimitResponse
     */
    public function updateInstanceElasticVCUUpperLimit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceElasticVCUUpperLimitWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies a Resource Access Management (RAM) policy for an instance.
     *
     * @param request - UpdateInstancePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstancePolicyResponse
     *
     * @param UpdateInstancePolicyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateInstancePolicyResponse
     */
    public function updateInstancePolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        if (null !== $request->policyVersion) {
            @$body['PolicyVersion'] = $request->policyVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstancePolicy',
            'version' => '2020-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/openapi/updateinstancepolicy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstancePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Resource Access Management (RAM) policy for an instance.
     *
     * @param request - UpdateInstancePolicyRequest
     *
     * @returns UpdateInstancePolicyResponse
     *
     * @param UpdateInstancePolicyRequest $request
     *
     * @return UpdateInstancePolicyResponse
     */
    public function updateInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstancePolicyWithOptions($request, $headers, $runtime);
    }
}
