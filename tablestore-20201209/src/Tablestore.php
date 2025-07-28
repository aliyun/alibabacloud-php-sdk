<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Changes the resource group to which an instance belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Changes the resource group to which an instance belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Checks the validity of a Resource Access Management (RAM) policy for an instance.
     *  *
     * @param CheckInstancePolicyRequest $request CheckInstancePolicyRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckInstancePolicyResponse CheckInstancePolicyResponse
     */
    public function checkInstancePolicyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Checks the validity of a Resource Access Management (RAM) policy for an instance.
     *  *
     * @param CheckInstancePolicyRequest $request CheckInstancePolicyRequest
     *
     * @return CheckInstancePolicyResponse CheckInstancePolicyResponse
     */
    public function checkInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstancePolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates an instance.
     *  *
     * @description *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   Each Alibaba Cloud account can create up to 10 instances. The name of an instance must be unique within the region in which the instance resides.
     * *   After you create an instance, you cannot change the type of the instance. Proceed with caution.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterType)) {
            $body['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->disableReplication)) {
            $body['DisableReplication'] = $request->disableReplication;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $body['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->network)) {
            $body['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->networkSourceACL)) {
            $body['NetworkSourceACL'] = $request->networkSourceACL;
        }
        if (!Utils::isUnset($request->networkTypeACL)) {
            $body['NetworkTypeACL'] = $request->networkTypeACL;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates an instance.
     *  *
     * @description *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   Each Alibaba Cloud account can create up to 10 instances. The name of an instance must be unique within the region in which the instance resides.
     * *   After you create an instance, you cannot change the type of the instance. Proceed with caution.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建VCU实例
     *  *
     * @param CreateVCUInstanceRequest $request CreateVCUInstanceRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVCUInstanceResponse CreateVCUInstanceResponse
     */
    public function createVCUInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliasName)) {
            $body['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->autoRenewPeriodInMonth)) {
            $body['AutoRenewPeriodInMonth'] = $request->autoRenewPeriodInMonth;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $body['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enableAutoRenew)) {
            $body['EnableAutoRenew'] = $request->enableAutoRenew;
        }
        if (!Utils::isUnset($request->enableElasticVCU)) {
            $body['EnableElasticVCU'] = $request->enableElasticVCU;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $body['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->periodInMonth)) {
            $body['PeriodInMonth'] = $request->periodInMonth;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->VCU)) {
            $body['VCU'] = $request->VCU;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建VCU实例
     *  *
     * @param CreateVCUInstanceRequest $request CreateVCUInstanceRequest
     *
     * @return CreateVCUInstanceResponse CreateVCUInstanceResponse
     */
    public function createVCUInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVCUInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes an instance.
     *  *
     * @description *   Before you delete an instance, make sure that all data tables and time series tables in the instance are deleted and virtual private clouds (VPCs) are unbound from the instance.
     * *   To prevent conflicts, do not create an instance that has the same name as the instance that is being deleted.
     * *   After an instance is deleted, the instance becomes unavailable and the tables, table data, and related indexes in the instance cannot be recovered. Proceed with caution.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes an instance.
     *  *
     * @description *   Before you delete an instance, make sure that all data tables and time series tables in the instance are deleted and virtual private clouds (VPCs) are unbound from the instance.
     * *   To prevent conflicts, do not create an instance that has the same name as the instance that is being deleted.
     * *   After an instance is deleted, the instance becomes unavailable and the tables, table data, and related indexes in the instance cannot be recovered. Proceed with caution.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a Resource Access Management (RAM) policy of an instance.
     *  *
     * @description *   You cannot recover a deleted instance policy. Proceed with caution.
     * *   After you delete an instance policy, the access control that is specified by the instance policy becomes invalid. Make sure that your instance is in a secure environment.
     *  *
     * @param DeleteInstancePolicyRequest $request DeleteInstancePolicyRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstancePolicyResponse DeleteInstancePolicyResponse
     */
    public function deleteInstancePolicyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $body['PolicyVersion'] = $request->policyVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes a Resource Access Management (RAM) policy of an instance.
     *  *
     * @description *   You cannot recover a deleted instance policy. Proceed with caution.
     * *   After you delete an instance policy, the access control that is specified by the instance policy becomes invalid. Make sure that your instance is in a secure environment.
     *  *
     * @param DeleteInstancePolicyRequest $request DeleteInstancePolicyRequest
     *
     * @return DeleteInstancePolicyResponse DeleteInstancePolicyResponse
     */
    public function deleteInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstancePolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries supported regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries supported regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries instance information.
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries instance information.
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries instances.
     *  *
     * @param ListInstancesRequest $tmpReq  ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceNameList)) {
            $request->instanceNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceNameList, 'InstanceNameList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceNameListShrink)) {
            $query['InstanceNameList'] = $request->instanceNameListShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries instances.
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries tagged resources.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['ResourceIds'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries tagged resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Adds tags to instances.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Adds tags to instances.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes tags from resources.
     *  *
     * @description Removing tags from resources helps simplify resource management, optimize system performance, and mitigate potential security vulnerabilities. After a tag is removed from a resource, the system automatically deletes the tag if the tag is not added to other resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $body['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Removes tags from resources.
     *  *
     * @description Removing tags from resources helps simplify resource management, optimize system performance, and mitigate potential security vulnerabilities. After a tag is removed from a resource, the system automatically deletes the tag if the tag is not added to other resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates instance information.
     *  *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliasName)) {
            $body['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $body['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->network)) {
            $body['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->networkSourceACL)) {
            $body['NetworkSourceACL'] = $request->networkSourceACL;
        }
        if (!Utils::isUnset($request->networkTypeACL)) {
            $body['NetworkTypeACL'] = $request->networkTypeACL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Updates instance information.
     *  *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the upper limit for the VCUs of an instance in VCU mode (formerly reserved mode).
     *  *
     * @description *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   After you enable scalability for an instance, the default upper limit for the VCUs of the instance is the sum of the scalability and the reserved VCUs.
     * *   To use more computing resources when your business grows, you can modify the upper limit for the VCUs of your instance. The new upper limit for the VCUs of your instance immediately takes effect.
     *  *
     * @param UpdateInstanceElasticVCUUpperLimitRequest $request UpdateInstanceElasticVCUUpperLimitRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceElasticVCUUpperLimitResponse UpdateInstanceElasticVCUUpperLimitResponse
     */
    public function updateInstanceElasticVCUUpperLimitWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticVCUUpperLimit)) {
            $body['ElasticVCUUpperLimit'] = $request->elasticVCUUpperLimit;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the upper limit for the VCUs of an instance in VCU mode (formerly reserved mode).
     *  *
     * @description *   **Before you call this operation, you must understand the billing and pricing of Tablestore. For more information, see [Billing overview](https://help.aliyun.com/document_detail/27291.html).**
     * *   After you enable scalability for an instance, the default upper limit for the VCUs of the instance is the sum of the scalability and the reserved VCUs.
     * *   To use more computing resources when your business grows, you can modify the upper limit for the VCUs of your instance. The new upper limit for the VCUs of your instance immediately takes effect.
     *  *
     * @param UpdateInstanceElasticVCUUpperLimitRequest $request UpdateInstanceElasticVCUUpperLimitRequest
     *
     * @return UpdateInstanceElasticVCUUpperLimitResponse UpdateInstanceElasticVCUUpperLimitResponse
     */
    public function updateInstanceElasticVCUUpperLimit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceElasticVCUUpperLimitWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies a Resource Access Management (RAM) policy for an instance.
     *  *
     * @param UpdateInstancePolicyRequest $request UpdateInstancePolicyRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstancePolicyResponse UpdateInstancePolicyResponse
     */
    public function updateInstancePolicyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $body['PolicyVersion'] = $request->policyVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies a Resource Access Management (RAM) policy for an instance.
     *  *
     * @param UpdateInstancePolicyRequest $request UpdateInstancePolicyRequest
     *
     * @return UpdateInstancePolicyResponse UpdateInstancePolicyResponse
     */
    public function updateInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstancePolicyWithOptions($request, $headers, $runtime);
    }
}
