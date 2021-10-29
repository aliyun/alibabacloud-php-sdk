<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsAccountRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsAccountResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateReadOnlyAccountRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\CreateReadOnlyAccountResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DeleteDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DeleteDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DeleteFailedDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DeleteFailedDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeCreateDrdsInstanceStatusRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeCreateDrdsInstanceStatusResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBsRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBsResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceDbMonitorRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceDbMonitorResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceMonitorRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceMonitorResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeReadOnlyAccountRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeReadOnlyAccountResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDbConnectionInfoRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDbConnectionInfoResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDBsRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDBsResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\EnableInstanceRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\EnableInstanceResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsDBPasswdRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsDBPasswdResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsInstanceDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsInstanceDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyDrdsIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyFullTableScanRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyFullTableScanResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyRdsReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyRdsReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyReadOnlyAccountPasswordRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\ModifyReadOnlyAccountPasswordResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\QueryInstanceInfoByConnRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\QueryInstanceInfoByConnResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\RemoveDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\RemoveDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20171016\Models\RemoveReadOnlyAccountRequest;
use AlibabaCloud\SDK\Drds\V20171016\Models\RemoveReadOnlyAccountResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Drds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'drds.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'drds.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'drds.aliyuncs.com',
            'cn-beijing-gov-1'            => 'drds.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'drds.aliyuncs.com',
            'cn-chengdu'                  => 'drds.aliyuncs.com',
            'cn-edge-1'                   => 'drds.aliyuncs.com',
            'cn-fujian'                   => 'drds.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'drds.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'drds.aliyuncs.com',
            'cn-hangzhou-finance'         => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'drds.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'drds.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'drds.aliyuncs.com',
            'cn-qingdao-nebula'           => 'drds.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'drds.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'drds.aliyuncs.com',
            'cn-shanghai-inner'           => 'drds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'drds.aliyuncs.com',
            'cn-shenzhen-inner'           => 'drds.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'drds.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'drds.aliyuncs.com',
            'cn-wuhan'                    => 'drds.aliyuncs.com',
            'cn-yushanfang'               => 'drds.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'drds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'drds.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'drds.aliyuncs.com',
            'eu-central-1'                => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'drds.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'drds.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('drds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDrdsAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDrdsAccountResponse
     */
    public function createDrdsAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Password']       = $request->password;
        $query['UserName']       = $request->userName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsAccount',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsAccountRequest $request
     *
     * @return CreateDrdsAccountResponse
     */
    public function createDrdsAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Encode']         = $request->encode;
        $query['Password']       = $request->password;
        $query['RdsInstances']   = $request->rdsInstances;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsDB',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBRequest $request
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['Description']    = $request->description;
        $query['Duration']       = $request->duration;
        $query['InstanceSeries'] = $request->instanceSeries;
        $query['IsAutoRenew']    = $request->isAutoRenew;
        $query['IsHa']           = $request->isHa;
        $query['PayType']        = $request->payType;
        $query['PricingCycle']   = $request->pricingCycle;
        $query['Quantity']       = $request->quantity;
        $query['RegionId']       = $request->regionId;
        $query['Specification']  = $request->specification;
        $query['Type']           = $request->type;
        $query['VpcId']          = $request->vpcId;
        $query['VswitchId']      = $request->vswitchId;
        $query['ZoneId']         = $request->zoneId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsInstance',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateReadOnlyAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateReadOnlyAccountResponse
     */
    public function createReadOnlyAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['password']       = $request->password;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateReadOnlyAccount',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateReadOnlyAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateReadOnlyAccountRequest $request
     *
     * @return CreateReadOnlyAccountResponse
     */
    public function createReadOnlyAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReadOnlyAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDrdsDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDrdsDBResponse
     */
    public function deleteDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDrdsDB',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDrdsDBRequest $request
     *
     * @return DeleteDrdsDBResponse
     */
    public function deleteDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFailedDrdsDBRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFailedDrdsDBResponse
     */
    public function deleteFailedDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFailedDrdsDB',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFailedDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFailedDrdsDBRequest $request
     *
     * @return DeleteFailedDrdsDBResponse
     */
    public function deleteFailedDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFailedDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCreateDrdsInstanceStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCreateDrdsInstanceStatusResponse
     */
    public function describeCreateDrdsInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCreateDrdsInstanceStatus',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCreateDrdsInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCreateDrdsInstanceStatusRequest $request
     *
     * @return DescribeCreateDrdsInstanceStatusResponse
     */
    public function describeCreateDrdsInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreateDrdsInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDB',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBRequest $request
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['GroupName']      = $request->groupName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBIpWhiteList',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBs',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstance',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['Key']            = $request->key;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceDbMonitor',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceDbMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['Key']            = $request->key;
        $query['PeriodMultiple'] = $request->periodMultiple;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceMonitor',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceNetInfoForInnerRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDrdsInstanceNetInfoForInnerResponse
     */
    public function describeDrdsInstanceNetInfoForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceNetInfoForInner',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceNetInfoForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceNetInfoForInnerRequest $request
     *
     * @return DescribeDrdsInstanceNetInfoForInnerResponse
     */
    public function describeDrdsInstanceNetInfoForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceNetInfoForInnerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['Tags']     = $request->tags;
        $query['Type']     = $request->type;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstances',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRdsListResponse
     */
    public function describeRdsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsList',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsListRequest $request
     *
     * @return DescribeRdsListResponse
     */
    public function describeRdsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReadOnlyAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeReadOnlyAccountResponse
     */
    public function describeReadOnlyAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeReadOnlyAccount',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeReadOnlyAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReadOnlyAccountRequest $request
     *
     * @return DescribeReadOnlyAccountResponse
     */
    public function describeReadOnlyAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReadOnlyAccountWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DescribeShardDBsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeShardDBsResponse
     */
    public function describeShardDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardDBs',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeShardDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardDBsRequest $request
     *
     * @return DescribeShardDBsResponse
     */
    public function describeShardDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardDbConnectionInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeShardDbConnectionInfoResponse
     */
    public function describeShardDbConnectionInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['SubDbName']      = $request->subDbName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardDbConnectionInfo',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeShardDbConnectionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardDbConnectionInfoRequest $request
     *
     * @return DescribeShardDbConnectionInfoResponse
     */
    public function describeShardDbConnectionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardDbConnectionInfoWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableInstanceResponse
     */
    public function enableInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BackupId']        = $request->backupId;
        $query['ClientToken']     = $request->clientToken;
        $query['DbInstanceClass'] = $request->dbInstanceClass;
        $query['DrdsInstanceId']  = $request->drdsInstanceId;
        $query['EngineVersion']   = $request->engineVersion;
        $query['RestoreTime']     = $request->restoreTime;
        $query['SourceDbInstId']  = $request->sourceDbInstId;
        $query['SwitchId']        = $request->switchId;
        $query['VpcId']           = $request->vpcId;
        $query['ZoneId']          = $request->zoneId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EnableInstance',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInstanceRequest $request
     *
     * @return EnableInstanceResponse
     */
    public function enableInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsDBPasswdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDrdsDBPasswdResponse
     */
    public function modifyDrdsDBPasswdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['NewPasswd']      = $request->newPasswd;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsDBPasswd',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsDBPasswdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsDBPasswdRequest $request
     *
     * @return ModifyDrdsDBPasswdResponse
     */
    public function modifyDrdsDBPasswd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsDBPasswdWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Description']    = $request->description;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsInstanceDescription',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['GroupAttribute'] = $request->groupAttribute;
        $query['GroupName']      = $request->groupName;
        $query['IpWhiteList']    = $request->ipWhiteList;
        $query['Mode']           = $request->mode;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsIpWhiteList',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFullTableScanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyFullTableScanResponse
     */
    public function modifyFullTableScanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['FullTableScan']  = $request->fullTableScan;
        $query['TableNames']     = $request->tableNames;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFullTableScan',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFullTableScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFullTableScanRequest $request
     *
     * @return ModifyFullTableScanResponse
     */
    public function modifyFullTableScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullTableScanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['InstanceNames']  = $request->instanceNames;
        $query['Weights']        = $request->weights;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyRdsReadWeight',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRdsReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRdsReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReadOnlyAccountPasswordRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyReadOnlyAccountPasswordResponse
     */
    public function modifyReadOnlyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['NewPasswd']      = $request->newPasswd;
        $query['OriginPassword'] = $request->originPassword;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyReadOnlyAccountPassword',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyReadOnlyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReadOnlyAccountPasswordRequest $request
     *
     * @return ModifyReadOnlyAccountPasswordResponse
     */
    public function modifyReadOnlyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadOnlyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param QueryInstanceInfoByConnRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryInstanceInfoByConnResponse
     */
    public function queryInstanceInfoByConnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Host']     = $request->host;
        $query['Port']     = $request->port;
        $query['UserName'] = $request->userName;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceInfoByConn',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceInfoByConnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInstanceInfoByConnRequest $request
     *
     * @return QueryInstanceInfoByConnResponse
     */
    public function queryInstanceInfoByConn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceInfoByConnWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsInstance',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveReadOnlyAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveReadOnlyAccountResponse
     */
    public function removeReadOnlyAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveReadOnlyAccount',
            'version'     => '2017-10-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveReadOnlyAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveReadOnlyAccountRequest $request
     *
     * @return RemoveReadOnlyAccountResponse
     */
    public function removeReadOnlyAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeReadOnlyAccountWithOptions($request, $runtime);
    }
}
