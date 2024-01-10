<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dg\V20190327\Models\AddDatabaseListRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\AddDatabaseListResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\AddDatabaseRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\AddDatabaseResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\ConnectDatabaseRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\ConnectDatabaseResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateDatabaseAccessPointRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateDatabaseAccessPointResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateGatewayVerifyCodeRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\CreateGatewayVerifyCodeResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteDatabaseAccessPointRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteDatabaseAccessPointResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteGatewayInstanceRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteGatewayInstanceResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\DownloadGatewayProgramRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\DownloadGatewayProgramResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\FindUserGatewayByIdRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\FindUserGatewayByIdResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserDatabasesRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserDatabasesResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserGatewayInstancesRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserGatewayInstancesResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserGatewaysRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\GetUserGatewaysResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\ListDatabaseAccessPointRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\ListDatabaseAccessPointResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\ModifyDatabaseRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\ModifyDatabaseResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\ModifyGatewayRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\ModifyGatewayResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\RetryDatabaseRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\RetryDatabaseResponse;
use AlibabaCloud\SDK\Dg\V20190327\Models\StopGatewayRequest;
use AlibabaCloud\SDK\Dg\V20190327\Models\StopGatewayResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'dg.aliyuncs.com',
            'ap-northeast-2-pop'          => 'dg.aliyuncs.com',
            'ap-south-1'                  => 'dg.aliyuncs.com',
            'ap-southeast-1'              => 'dg.aliyuncs.com',
            'ap-southeast-2'              => 'dg.aliyuncs.com',
            'ap-southeast-3'              => 'dg.aliyuncs.com',
            'ap-southeast-5'              => 'dg.aliyuncs.com',
            'cn-beijing'                  => 'dg.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dg.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dg.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dg.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dg.aliyuncs.com',
            'cn-chengdu'                  => 'dg.aliyuncs.com',
            'cn-edge-1'                   => 'dg.aliyuncs.com',
            'cn-fujian'                   => 'dg.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dg.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dg.aliyuncs.com',
            'cn-hangzhou-finance'         => 'dg.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dg.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dg.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dg.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dg.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dg.aliyuncs.com',
            'cn-hongkong'                 => 'dg.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dg.aliyuncs.com',
            'cn-huhehaote'                => 'dg.aliyuncs.com',
            'cn-north-2-gov-1'            => 'dg.aliyuncs.com',
            'cn-qingdao'                  => 'dg.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dg.aliyuncs.com',
            'cn-shanghai'                 => 'dg.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dg.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dg.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'dg.aliyuncs.com',
            'cn-shanghai-inner'           => 'dg.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dg.aliyuncs.com',
            'cn-shenzhen'                 => 'dg.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'dg.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dg.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dg.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dg.aliyuncs.com',
            'cn-wuhan'                    => 'dg.aliyuncs.com',
            'cn-yushanfang'               => 'dg.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dg.aliyuncs.com',
            'cn-zhangjiakou'              => 'dg.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dg.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dg.aliyuncs.com',
            'eu-central-1'                => 'dg.aliyuncs.com',
            'eu-west-1'                   => 'dg.aliyuncs.com',
            'eu-west-1-oxs'               => 'dg.aliyuncs.com',
            'me-east-1'                   => 'dg.aliyuncs.com',
            'rus-west-1-pop'              => 'dg.aliyuncs.com',
            'us-east-1'                   => 'dg.aliyuncs.com',
            'us-west-1'                   => 'dg.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDatabaseRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddDatabaseResponse
     */
    public function addDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbDescription)) {
            $body['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbPassword)) {
            $body['DbPassword'] = $request->dbPassword;
        }
        if (!Utils::isUnset($request->dbType)) {
            $body['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->dbUserName)) {
            $body['DbUserName'] = $request->dbUserName;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDatabase',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDatabaseRequest $request
     *
     * @return AddDatabaseResponse
     */
    public function addDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param AddDatabaseListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDatabaseListResponse
     */
    public function addDatabaseListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseString)) {
            $body['DatabaseString'] = $request->databaseString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDatabaseList',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDatabaseListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDatabaseListRequest $request
     *
     * @return AddDatabaseListResponse
     */
    public function addDatabaseList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatabaseListWithOptions($request, $runtime);
    }

    /**
     * @param ConnectDatabaseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConnectDatabaseResponse
     */
    public function connectDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbPassword)) {
            $body['DbPassword'] = $request->dbPassword;
        }
        if (!Utils::isUnset($request->dbType)) {
            $body['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->dbUserName)) {
            $body['DbUserName'] = $request->dbUserName;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConnectDatabase',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConnectDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConnectDatabaseRequest $request
     *
     * @return ConnectDatabaseResponse
     */
    public function connectDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatabaseAccessPointRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDatabaseAccessPointResponse
     */
    public function createDatabaseAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcAZone)) {
            $body['VpcAZone'] = $request->vpcAZone;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $body['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabaseAccessPoint',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatabaseAccessPointRequest $request
     *
     * @return CreateDatabaseAccessPointResponse
     */
    public function createDatabaseAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayDesc)) {
            $body['GatewayDesc'] = $request->gatewayDesc;
        }
        if (!Utils::isUnset($request->gatewayName)) {
            $body['GatewayName'] = $request->gatewayName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGateway',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayVerifyCodeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateGatewayVerifyCodeResponse
     */
    public function createGatewayVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayVerifyCode',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayVerifyCodeRequest $request
     *
     * @return CreateGatewayVerifyCodeResponse
     */
    public function createGatewayVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseAccessPointRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDatabaseAccessPointResponse
     */
    public function deleteDatabaseAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcAZone)) {
            $body['VpcAZone'] = $request->vpcAZone;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $body['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabaseAccessPoint',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatabaseAccessPointRequest $request
     *
     * @return DeleteDatabaseAccessPointResponse
     */
    public function deleteDatabaseAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGatewayInstanceResponse
     */
    public function deleteGatewayInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayInstanceId)) {
            $body['GatewayInstanceId'] = $request->gatewayInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayInstance',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayInstanceRequest $request
     *
     * @return DeleteGatewayInstanceResponse
     */
    public function deleteGatewayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-03-27',
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
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DownloadGatewayProgramRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DownloadGatewayProgramResponse
     */
    public function downloadGatewayProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dgVersion)) {
            $body['DgVersion'] = $request->dgVersion;
        }
        if (!Utils::isUnset($request->userOS)) {
            $body['UserOS'] = $request->userOS;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadGatewayProgram',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadGatewayProgramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadGatewayProgramRequest $request
     *
     * @return DownloadGatewayProgramResponse
     */
    public function downloadGatewayProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadGatewayProgramWithOptions($request, $runtime);
    }

    /**
     * @param FindUserGatewayByIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FindUserGatewayByIdResponse
     */
    public function findUserGatewayByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FindUserGatewayById',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindUserGatewayByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FindUserGatewayByIdRequest $request
     *
     * @return FindUserGatewayByIdResponse
     */
    public function findUserGatewayById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUserGatewayByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserDatabasesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserDatabasesResponse
     */
    public function getUserDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbType)) {
            $body['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserDatabases',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserDatabasesRequest $request
     *
     * @return GetUserDatabasesResponse
     */
    public function getUserDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param GetUserGatewayInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUserGatewayInstancesResponse
     */
    public function getUserGatewayInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserGatewayInstances',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGatewayInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserGatewayInstancesRequest $request
     *
     * @return GetUserGatewayInstancesResponse
     */
    public function getUserGatewayInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGatewayInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetUserGatewaysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUserGatewaysResponse
     */
    public function getUserGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserGateways',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserGatewaysRequest $request
     *
     * @return GetUserGatewaysResponse
     */
    public function getUserGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param ListDatabaseAccessPointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDatabaseAccessPointResponse
     */
    public function listDatabaseAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDatabaseAccessPoint',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabaseAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDatabaseAccessPointRequest $request
     *
     * @return ListDatabaseAccessPointResponse
     */
    public function listDatabaseAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDatabaseResponse
     */
    public function modifyDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbDescription)) {
            $body['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbPassword)) {
            $body['DbPassword'] = $request->dbPassword;
        }
        if (!Utils::isUnset($request->dbType)) {
            $body['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->dbUserName)) {
            $body['DbUserName'] = $request->dbUserName;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabase',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatabaseRequest $request
     *
     * @return ModifyDatabaseResponse
     */
    public function modifyDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyGatewayResponse
     */
    public function modifyGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayDesc)) {
            $body['GatewayDesc'] = $request->gatewayDesc;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayName)) {
            $body['GatewayName'] = $request->gatewayName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyGateway',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayRequest $request
     *
     * @return ModifyGatewayResponse
     */
    public function modifyGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayWithOptions($request, $runtime);
    }

    /**
     * @param RetryDatabaseRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RetryDatabaseResponse
     */
    public function retryDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbDescription)) {
            $body['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbPassword)) {
            $body['DbPassword'] = $request->dbPassword;
        }
        if (!Utils::isUnset($request->dbType)) {
            $body['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->dbUserName)) {
            $body['DbUserName'] = $request->dbUserName;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RetryDatabase',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryDatabaseRequest $request
     *
     * @return RetryDatabaseResponse
     */
    public function retryDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param StopGatewayRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopGatewayResponse
     */
    public function stopGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayInstanceId)) {
            $body['GatewayInstanceId'] = $request->gatewayInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopGateway',
            'version'     => '2019-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopGatewayRequest $request
     *
     * @return StopGatewayResponse
     */
    public function stopGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGatewayWithOptions($request, $runtime);
    }
}
