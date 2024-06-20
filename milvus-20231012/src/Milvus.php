<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdatePublicNetworkStatusRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdatePublicNetworkStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Milvus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('milvus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 获取Milvus公网访问ACL信息
     *  *
     * @param DescribeAccessControlListRequest $request DescribeAccessControlListRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessControlListResponse DescribeAccessControlListResponse
     */
    public function describeAccessControlListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessControlList',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/milvus/describe_access_control_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Milvus公网访问ACL信息
     *  *
     * @param DescribeAccessControlListRequest $request DescribeAccessControlListRequest
     *
     * @return DescribeAccessControlListResponse DescribeAccessControlListResponse
     */
    public function describeAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAccessControlListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询实例用户配置
     *  *
     * @param DescribeInstanceConfigsRequest $request DescribeInstanceConfigsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceConfigsResponse DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceConfigs',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/config/describe_milvus_user_config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例用户配置
     *  *
     * @param DescribeInstanceConfigsRequest $request DescribeInstanceConfigsRequest
     *
     * @return DescribeInstanceConfigsResponse DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据集群ID获取集群的详细信息
     *  *
     * @param GetInstanceDetailRequest $request GetInstanceDetailRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceDetailResponse GetInstanceDetailResponse
     */
    public function getInstanceDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceDetail',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据集群ID获取集群的详细信息
     *  *
     * @param GetInstanceDetailRequest $request GetInstanceDetailRequest
     *
     * @return GetInstanceDetailResponse GetInstanceDetailResponse
     */
    public function getInstanceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据集群ID或者名称等信息过滤集群
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据集群ID或者名称等信息过滤集群
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
     * @summary 修改实例配置
     *  *
     * @param ModifyInstanceConfigRequest $request ModifyInstanceConfigRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceConfigResponse ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->userConfig)) {
            $query['UserConfig'] = $request->userConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceConfig',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/config/modify_milvus_config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例配置
     *  *
     * @param ModifyInstanceConfigRequest $request ModifyInstanceConfigRequest
     *
     * @return ModifyInstanceConfigResponse ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新Milvus公网访问ACL信息
     *  *
     * @param UpdateAccessControlListRequest $request UpdateAccessControlListRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccessControlListResponse UpdateAccessControlListResponse
     */
    public function updateAccessControlListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessControlList',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/milvus/update_access_control_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新Milvus公网访问ACL信息
     *  *
     * @param UpdateAccessControlListRequest $request UpdateAccessControlListRequest
     *
     * @return UpdateAccessControlListResponse UpdateAccessControlListResponse
     */
    public function updateAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAccessControlListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改集群名称
     *  *
     * @param UpdateInstanceNameRequest $request UpdateInstanceNameRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceNameResponse UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceName',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/update_name',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改集群名称
     *  *
     * @param UpdateInstanceNameRequest $request UpdateInstanceNameRequest
     *
     * @return UpdateInstanceNameResponse UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 该接口用于开通/关闭 Proxy的公网SLB。
     *  *
     * @param UpdatePublicNetworkStatusRequest $request UpdatePublicNetworkStatusRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicNetworkStatusResponse UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentType)) {
            $query['ComponentType'] = $request->componentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicNetworkEnabled)) {
            $query['PublicNetworkEnabled'] = $request->publicNetworkEnabled;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicNetworkStatus',
            'version'     => '2023-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/network/updatePublicNetworkStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicNetworkStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 该接口用于开通/关闭 Proxy的公网SLB。
     *  *
     * @param UpdatePublicNetworkStatusRequest $request UpdatePublicNetworkStatusRequest
     *
     * @return UpdatePublicNetworkStatusResponse UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicNetworkStatusWithOptions($request, $headers, $runtime);
    }
}
