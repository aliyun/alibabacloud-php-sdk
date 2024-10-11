<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\AllocateVirtualWareHousePublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\AllocateVirtualWareHousePublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckCreateClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckCreateClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckCreateVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckCreateVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckDeleteVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckDeleteVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckModifyVirtualWareHouseResourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckModifyVirtualWareHouseResourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteClusterSecurityIPGroupRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteClusterSecurityIPGroupResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DeleteVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterSecurityInfoRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterSecurityInfoResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterStatusSetResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeRunningQueryRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeRunningQueryResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryTrendRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryTrendResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseClassSetResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseEndpointInfoRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseEndpointInfoResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseStatusSetResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\GetDistributedTablesBufferSizeRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\GetDistributedTablesBufferSizeResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\KillQueryRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\KillQueryResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListClustersRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListClustersResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListVirtualWareHouseConfigsRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListVirtualWareHouseConfigsResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListVirtualWareHousesRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListVirtualWareHousesResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyAccountPrivilegeRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyAccountPrivilegeResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyClusterDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyClusterDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseConfigShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseResourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseResourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\PatchClusterSecurityIPGroupRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\PatchClusterSecurityIPGroupResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ReleaseVirtualWareHousePublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ReleaseVirtualWareHousePublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\RestartVirtualWareHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\RestartVirtualWareHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\UpgradeClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\UpsertClusterSecurityIPGroupRequest;
use AlibabaCloud\SDK\Clickhouse\V20220101\Models\UpsertClusterSecurityIPGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Clickhouse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'clickhouse.aliyuncs.com',
            'ap-southeast-1'              => 'clickhouse.aliyuncs.com',
            'cn-beijing'                  => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-1'        => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'clickhouse.aliyuncs.com',
            'cn-beijing-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'clickhouse.aliyuncs.com',
            'cn-edge-1'                   => 'clickhouse.aliyuncs.com',
            'cn-fujian'                   => 'clickhouse.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou'                 => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-finance'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'clickhouse.aliyuncs.com',
            'cn-hongkong'                 => 'clickhouse.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'clickhouse.aliyuncs.com',
            'cn-north-2-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-qingdao'                  => 'clickhouse.aliyuncs.com',
            'cn-qingdao-nebula'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai'                 => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'clickhouse.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shanghai-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen'                 => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'clickhouse.aliyuncs.com',
            'cn-wuhan'                    => 'clickhouse.aliyuncs.com',
            'cn-yushanfang'               => 'clickhouse.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'clickhouse.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'clickhouse.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'clickhouse.aliyuncs.com',
            'eu-west-1-oxs'               => 'clickhouse.aliyuncs.com',
            'me-east-1'                   => 'clickhouse.aliyuncs.com',
            'rus-west-1-pop'              => 'clickhouse.aliyuncs.com',
            'us-east-1'                   => 'clickhouse.aliyuncs.com',
            'us-west-1'                   => 'clickhouse.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('clickhouse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 申请计算组公网SLB
     *  *
     * @param AllocateVirtualWareHousePublicConnectionRequest $request AllocateVirtualWareHousePublicConnectionRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateVirtualWareHousePublicConnectionResponse AllocateVirtualWareHousePublicConnectionResponse
     */
    public function allocateVirtualWareHousePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateVirtualWareHousePublicConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateVirtualWareHousePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 申请计算组公网SLB
     *  *
     * @param AllocateVirtualWareHousePublicConnectionRequest $request AllocateVirtualWareHousePublicConnectionRequest
     *
     * @return AllocateVirtualWareHousePublicConnectionResponse AllocateVirtualWareHousePublicConnectionResponse
     */
    public function allocateVirtualWareHousePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateVirtualWareHousePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实例检查
     *  *
     * @param CheckCreateClusterRequest $request CheckCreateClusterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCreateClusterResponse CheckCreateClusterResponse
     */
    public function checkCreateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseDescription)) {
            $query['VirtualWareHouseDescription'] = $request->virtualWareHouseDescription;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCreateCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例检查
     *  *
     * @param CheckCreateClusterRequest $request CheckCreateClusterRequest
     *
     * @return CheckCreateClusterResponse CheckCreateClusterResponse
     */
    public function checkCreateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建计算组检查
     *  *
     * @param CheckCreateVirtualWareHouseRequest $request CheckCreateVirtualWareHouseRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCreateVirtualWareHouseResponse CheckCreateVirtualWareHouseResponse
     */
    public function checkCreateVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseDescription)) {
            $query['VirtualWareHouseDescription'] = $request->virtualWareHouseDescription;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCreateVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCreateVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建计算组检查
     *  *
     * @param CheckCreateVirtualWareHouseRequest $request CheckCreateVirtualWareHouseRequest
     *
     * @return CheckCreateVirtualWareHouseResponse CheckCreateVirtualWareHouseResponse
     */
    public function checkCreateVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 删除计算组检查
     *  *
     * @param CheckDeleteVirtualWareHouseRequest $request CheckDeleteVirtualWareHouseRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDeleteVirtualWareHouseResponse CheckDeleteVirtualWareHouseResponse
     */
    public function checkDeleteVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDeleteVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDeleteVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除计算组检查
     *  *
     * @param CheckDeleteVirtualWareHouseRequest $request CheckDeleteVirtualWareHouseRequest
     *
     * @return CheckDeleteVirtualWareHouseResponse CheckDeleteVirtualWareHouseResponse
     */
    public function checkDeleteVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDeleteVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 计算组变配检查
     *  *
     * @param CheckModifyVirtualWareHouseResourceRequest $request CheckModifyVirtualWareHouseResourceRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckModifyVirtualWareHouseResourceResponse CheckModifyVirtualWareHouseResourceResponse
     */
    public function checkModifyVirtualWareHouseResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckModifyVirtualWareHouseResource',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckModifyVirtualWareHouseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 计算组变配检查
     *  *
     * @param CheckModifyVirtualWareHouseResourceRequest $request CheckModifyVirtualWareHouseResourceRequest
     *
     * @return CheckModifyVirtualWareHouseResourceResponse CheckModifyVirtualWareHouseResourceResponse
     */
    public function checkModifyVirtualWareHouseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkModifyVirtualWareHouseResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实例账户
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordSha256Hex)) {
            $query['PasswordSha256Hex'] = $request->passwordSha256Hex;
        }
        if (!Utils::isUnset($request->privilegeType)) {
            $query['PrivilegeType'] = $request->privilegeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例账户
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseDescription)) {
            $query['VirtualWareHouseDescription'] = $request->virtualWareHouseDescription;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建计算组
     *  *
     * @param CreateVirtualWareHouseRequest $request CreateVirtualWareHouseRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVirtualWareHouseResponse CreateVirtualWareHouseResponse
     */
    public function createVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseDescription)) {
            $query['VirtualWareHouseDescription'] = $request->virtualWareHouseDescription;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建计算组
     *  *
     * @param CreateVirtualWareHouseRequest $request CreateVirtualWareHouseRequest
     *
     * @return CreateVirtualWareHouseResponse CreateVirtualWareHouseResponse
     */
    public function createVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实例账户
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实例账户
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实例
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实例
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实例IP白名单组
     *  *
     * @param DeleteClusterSecurityIPGroupRequest $request DeleteClusterSecurityIPGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterSecurityIPGroupResponse DeleteClusterSecurityIPGroupResponse
     */
    public function deleteClusterSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterSecurityIPGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实例IP白名单组
     *  *
     * @param DeleteClusterSecurityIPGroupRequest $request DeleteClusterSecurityIPGroupRequest
     *
     * @return DeleteClusterSecurityIPGroupResponse DeleteClusterSecurityIPGroupResponse
     */
    public function deleteClusterSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除计算组
     *  *
     * @param DeleteVirtualWareHouseRequest $request DeleteVirtualWareHouseRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualWareHouseResponse DeleteVirtualWareHouseResponse
     */
    public function deleteVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除计算组
     *  *
     * @param DeleteVirtualWareHouseRequest $request DeleteVirtualWareHouseRequest
     *
     * @return DeleteVirtualWareHouseResponse DeleteVirtualWareHouseResponse
     */
    public function deleteVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例账户详情
     *  *
     * @param DescribeAccountRequest $request DescribeAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountResponse DescribeAccountResponse
     */
    public function describeAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccount',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例账户详情
     *  *
     * @param DescribeAccountRequest $request DescribeAccountRequest
     *
     * @return DescribeAccountResponse DescribeAccountResponse
     */
    public function describeAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例详情
     *  *
     * @param DescribeClusterRequest $request DescribeClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResponse DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例详情
     *  *
     * @param DescribeClusterRequest $request DescribeClusterRequest
     *
     * @return DescribeClusterResponse DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例白名单配置
     *  *
     * @param DescribeClusterSecurityInfoRequest $request DescribeClusterSecurityInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterSecurityInfoResponse DescribeClusterSecurityInfoResponse
     */
    public function describeClusterSecurityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterSecurityInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterSecurityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例白名单配置
     *  *
     * @param DescribeClusterSecurityInfoRequest $request DescribeClusterSecurityInfoRequest
     *
     * @return DescribeClusterSecurityInfoResponse DescribeClusterSecurityInfoResponse
     */
    public function describeClusterSecurityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterSecurityInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例状态集合
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterStatusSetResponse DescribeClusterStatusSetResponse
     */
    public function describeClusterStatusSetWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeClusterStatusSet',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterStatusSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例状态集合
     *  *
     * @return DescribeClusterStatusSetResponse DescribeClusterStatusSetResponse
     */
    public function describeClusterStatusSet()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterStatusSetWithOptions($runtime);
    }

    /**
     * @summary 查看可服务Region和Zone
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看可服务Region和Zone
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组正在运行查询列表
     *  *
     * @param DescribeRunningQueryRequest $request DescribeRunningQueryRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRunningQueryResponse DescribeRunningQueryResponse
     */
    public function describeRunningQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        if (!Utils::isUnset($request->queryKeyWord)) {
            $query['QueryKeyWord'] = $request->queryKeyWord;
        }
        if (!Utils::isUnset($request->queryUser)) {
            $query['QueryUser'] = $request->queryUser;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRunningQuery',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRunningQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组正在运行查询列表
     *  *
     * @param DescribeRunningQueryRequest $request DescribeRunningQueryRequest
     *
     * @return DescribeRunningQueryResponse DescribeRunningQueryResponse
     */
    public function describeRunningQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRunningQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组慢查询详情
     *  *
     * @param DescribeSlowQueryRequest $request DescribeSlowQueryRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowQueryResponse DescribeSlowQueryResponse
     */
    public function describeSlowQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowQuery',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组慢查询详情
     *  *
     * @param DescribeSlowQueryRequest $request DescribeSlowQueryRequest
     *
     * @return DescribeSlowQueryResponse DescribeSlowQueryResponse
     */
    public function describeSlowQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组慢查询趋势 以1分钟为间隔统计
     *  *
     * @param DescribeSlowQueryTrendRequest $request DescribeSlowQueryTrendRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowQueryTrendResponse DescribeSlowQueryTrendResponse
     */
    public function describeSlowQueryTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowQueryTrend',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowQueryTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组慢查询趋势 以1分钟为间隔统计
     *  *
     * @param DescribeSlowQueryTrendRequest $request DescribeSlowQueryTrendRequest
     *
     * @return DescribeSlowQueryTrendResponse DescribeSlowQueryTrendResponse
     */
    public function describeSlowQueryTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowQueryTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组详情
     *  *
     * @param DescribeVirtualWareHouseRequest $request DescribeVirtualWareHouseRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVirtualWareHouseResponse DescribeVirtualWareHouseResponse
     */
    public function describeVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组详情
     *  *
     * @param DescribeVirtualWareHouseRequest $request DescribeVirtualWareHouseRequest
     *
     * @return DescribeVirtualWareHouseResponse DescribeVirtualWareHouseResponse
     */
    public function describeVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组规格码集合
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVirtualWareHouseClassSetResponse DescribeVirtualWareHouseClassSetResponse
     */
    public function describeVirtualWareHouseClassSetWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVirtualWareHouseClassSet',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualWareHouseClassSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组规格码集合
     *  *
     * @return DescribeVirtualWareHouseClassSetResponse DescribeVirtualWareHouseClassSetResponse
     */
    public function describeVirtualWareHouseClassSet()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualWareHouseClassSetWithOptions($runtime);
    }

    /**
     * @summary 查看计算组链接信息
     *  *
     * @param DescribeVirtualWareHouseEndpointInfoRequest $request DescribeVirtualWareHouseEndpointInfoRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVirtualWareHouseEndpointInfoResponse DescribeVirtualWareHouseEndpointInfoResponse
     */
    public function describeVirtualWareHouseEndpointInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVirtualWareHouseEndpointInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualWareHouseEndpointInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组链接信息
     *  *
     * @param DescribeVirtualWareHouseEndpointInfoRequest $request DescribeVirtualWareHouseEndpointInfoRequest
     *
     * @return DescribeVirtualWareHouseEndpointInfoResponse DescribeVirtualWareHouseEndpointInfoResponse
     */
    public function describeVirtualWareHouseEndpointInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualWareHouseEndpointInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组状态集合
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVirtualWareHouseStatusSetResponse DescribeVirtualWareHouseStatusSetResponse
     */
    public function describeVirtualWareHouseStatusSetWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVirtualWareHouseStatusSet',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualWareHouseStatusSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组状态集合
     *  *
     * @return DescribeVirtualWareHouseStatusSetResponse DescribeVirtualWareHouseStatusSetResponse
     */
    public function describeVirtualWareHouseStatusSet()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualWareHouseStatusSetWithOptions($runtime);
    }

    /**
     * @summary 查询分布式表缓存大小
     *  *
     * @param GetDistributedTablesBufferSizeRequest $request GetDistributedTablesBufferSizeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDistributedTablesBufferSizeResponse GetDistributedTablesBufferSizeResponse
     */
    public function getDistributedTablesBufferSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDistributedTablesBufferSize',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDistributedTablesBufferSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询分布式表缓存大小
     *  *
     * @param GetDistributedTablesBufferSizeRequest $request GetDistributedTablesBufferSizeRequest
     *
     * @return GetDistributedTablesBufferSizeResponse GetDistributedTablesBufferSizeResponse
     */
    public function getDistributedTablesBufferSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDistributedTablesBufferSizeWithOptions($request, $runtime);
    }

    /**
     * @summary Kill计算组查询
     *  *
     * @param KillQueryRequest $request KillQueryRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return KillQueryResponse KillQueryResponse
     */
    public function killQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->queryIds)) {
            $query['QueryIds'] = $request->queryIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillQuery',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Kill计算组查询
     *  *
     * @param KillQueryRequest $request KillQueryRequest
     *
     * @return KillQueryResponse KillQueryResponse
     */
    public function killQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例账户详情列表
     *  *
     * @param ListAccountsRequest $request ListAccountsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountsResponse ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccounts',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例账户详情列表
     *  *
     * @param ListAccountsRequest $request ListAccountsRequest
     *
     * @return ListAccountsResponse ListAccountsResponse
     */
    public function listAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例详情列表
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBClusterStatus)) {
            $query['DBClusterStatus'] = $request->DBClusterStatus;
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例详情列表
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组参数配置列表
     *  *
     * @param ListVirtualWareHouseConfigsRequest $request ListVirtualWareHouseConfigsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVirtualWareHouseConfigsResponse ListVirtualWareHouseConfigsResponse
     */
    public function listVirtualWareHouseConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualWareHouseConfigs',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualWareHouseConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组参数配置列表
     *  *
     * @param ListVirtualWareHouseConfigsRequest $request ListVirtualWareHouseConfigsRequest
     *
     * @return ListVirtualWareHouseConfigsResponse ListVirtualWareHouseConfigsResponse
     */
    public function listVirtualWareHouseConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualWareHouseConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算组详情列表
     *  *
     * @param ListVirtualWareHousesRequest $request ListVirtualWareHousesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVirtualWareHousesResponse ListVirtualWareHousesResponse
     */
    public function listVirtualWareHousesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualWareHouses',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualWareHousesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算组详情列表
     *  *
     * @param ListVirtualWareHousesRequest $request ListVirtualWareHousesRequest
     *
     * @return ListVirtualWareHousesResponse ListVirtualWareHousesResponse
     */
    public function listVirtualWareHouses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualWareHousesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例账户备注
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例账户备注
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例账户权限级别
     *  *
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->privilegeType)) {
            $query['PrivilegeType'] = $request->privilegeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountPrivilege',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例账户权限级别
     *  *
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例描述信息
     *  *
     * @param ModifyClusterDescriptionRequest $request ModifyClusterDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterDescriptionResponse ModifyClusterDescriptionResponse
     */
    public function modifyClusterDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterDescription',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例描述信息
     *  *
     * @param ModifyClusterDescriptionRequest $request ModifyClusterDescriptionRequest
     *
     * @return ModifyClusterDescriptionResponse ModifyClusterDescriptionResponse
     */
    public function modifyClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改计算组参数配置
     *  *
     * @param ModifyVirtualWareHouseConfigRequest $tmpReq  ModifyVirtualWareHouseConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVirtualWareHouseConfigResponse ModifyVirtualWareHouseConfigResponse
     */
    public function modifyVirtualWareHouseConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyVirtualWareHouseConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configChanges)) {
            $request->configChangesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configChanges, 'ConfigChanges', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configChangesShrink)) {
            $query['ConfigChanges'] = $request->configChangesShrink;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVirtualWareHouseConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVirtualWareHouseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改计算组参数配置
     *  *
     * @param ModifyVirtualWareHouseConfigRequest $request ModifyVirtualWareHouseConfigRequest
     *
     * @return ModifyVirtualWareHouseConfigResponse ModifyVirtualWareHouseConfigResponse
     */
    public function modifyVirtualWareHouseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualWareHouseConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 修改计算组描述信息
     *  *
     * @param ModifyVirtualWareHouseDescriptionRequest $request ModifyVirtualWareHouseDescriptionRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVirtualWareHouseDescriptionResponse ModifyVirtualWareHouseDescriptionResponse
     */
    public function modifyVirtualWareHouseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseDescription)) {
            $query['VirtualWareHouseDescription'] = $request->virtualWareHouseDescription;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVirtualWareHouseDescription',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVirtualWareHouseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改计算组描述信息
     *  *
     * @param ModifyVirtualWareHouseDescriptionRequest $request ModifyVirtualWareHouseDescriptionRequest
     *
     * @return ModifyVirtualWareHouseDescriptionResponse ModifyVirtualWareHouseDescriptionResponse
     */
    public function modifyVirtualWareHouseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualWareHouseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 计算组变配
     *  *
     * @param ModifyVirtualWareHouseResourceRequest $request ModifyVirtualWareHouseResourceRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVirtualWareHouseResourceResponse ModifyVirtualWareHouseResourceResponse
     */
    public function modifyVirtualWareHouseResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseCacheStorage)) {
            $query['VirtualWareHouseCacheStorage'] = $request->virtualWareHouseCacheStorage;
        }
        if (!Utils::isUnset($request->virtualWareHouseClass)) {
            $query['VirtualWareHouseClass'] = $request->virtualWareHouseClass;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVirtualWareHouseResource',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVirtualWareHouseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 计算组变配
     *  *
     * @param ModifyVirtualWareHouseResourceRequest $request ModifyVirtualWareHouseResourceRequest
     *
     * @return ModifyVirtualWareHouseResourceResponse ModifyVirtualWareHouseResourceResponse
     */
    public function modifyVirtualWareHouseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualWareHouseResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 实例IP白名单组添加IP
     *  *
     * @param PatchClusterSecurityIPGroupRequest $request PatchClusterSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return PatchClusterSecurityIPGroupResponse PatchClusterSecurityIPGroupResponse
     */
    public function patchClusterSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PatchClusterSecurityIPGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PatchClusterSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例IP白名单组添加IP
     *  *
     * @param PatchClusterSecurityIPGroupRequest $request PatchClusterSecurityIPGroupRequest
     *
     * @return PatchClusterSecurityIPGroupResponse PatchClusterSecurityIPGroupResponse
     */
    public function patchClusterSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->patchClusterSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 释放计算组公网SLB
     *  *
     * @param ReleaseVirtualWareHousePublicConnectionRequest $request ReleaseVirtualWareHousePublicConnectionRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseVirtualWareHousePublicConnectionResponse ReleaseVirtualWareHousePublicConnectionResponse
     */
    public function releaseVirtualWareHousePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseVirtualWareHousePublicConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseVirtualWareHousePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放计算组公网SLB
     *  *
     * @param ReleaseVirtualWareHousePublicConnectionRequest $request ReleaseVirtualWareHousePublicConnectionRequest
     *
     * @return ReleaseVirtualWareHousePublicConnectionResponse ReleaseVirtualWareHousePublicConnectionResponse
     */
    public function releaseVirtualWareHousePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseVirtualWareHousePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary 重置实例账户密码
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordSha256Hex)) {
            $query['PasswordSha256Hex'] = $request->passwordSha256Hex;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置实例账户密码
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 重启计算组
     *  *
     * @param RestartVirtualWareHouseRequest $request RestartVirtualWareHouseRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartVirtualWareHouseResponse RestartVirtualWareHouseResponse
     */
    public function restartVirtualWareHouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualWareHouseId)) {
            $query['VirtualWareHouseId'] = $request->virtualWareHouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartVirtualWareHouse',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartVirtualWareHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启计算组
     *  *
     * @param RestartVirtualWareHouseRequest $request RestartVirtualWareHouseRequest
     *
     * @return RestartVirtualWareHouseResponse RestartVirtualWareHouseResponse
     */
    public function restartVirtualWareHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartVirtualWareHouseWithOptions($request, $runtime);
    }

    /**
     * @summary 实例小版本升级(内核向前兼容)
     *  *
     * @param UpgradeClusterRequest $request UpgradeClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例小版本升级(内核向前兼容)
     *  *
     * @param UpgradeClusterRequest $request UpgradeClusterRequest
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 重置实例IP白名单组IP列表
     *  *
     * @param UpsertClusterSecurityIPGroupRequest $request UpsertClusterSecurityIPGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpsertClusterSecurityIPGroupResponse UpsertClusterSecurityIPGroupResponse
     */
    public function upsertClusterSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpsertClusterSecurityIPGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpsertClusterSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置实例IP白名单组IP列表
     *  *
     * @param UpsertClusterSecurityIPGroupRequest $request UpsertClusterSecurityIPGroupRequest
     *
     * @return UpsertClusterSecurityIPGroupResponse UpsertClusterSecurityIPGroupResponse
     */
    public function upsertClusterSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertClusterSecurityIPGroupWithOptions($request, $runtime);
    }
}
