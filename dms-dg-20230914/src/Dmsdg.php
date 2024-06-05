<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\AddDatabaseListRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\AddDatabaseListResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\AddDatabaseRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\AddDatabaseResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\CheckDGEnabledResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ConnectDatabaseRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ConnectDatabaseResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\CreateGatewayVerifyCodeRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\CreateGatewayVerifyCodeResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteGatewayInstanceRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteGatewayInstanceResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DownloadGatewayProgramRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\DownloadGatewayProgramResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\FindUserGatewayByIdRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\FindUserGatewayByIdResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewayInstancesRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewayInstancesResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewaysRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewaysResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ListDatabaseAccessPointRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ListDatabaseAccessPointResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ModifyDatabaseRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ModifyDatabaseResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ModifyGatewayRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ModifyGatewayResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\RetryDatabaseRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\RetryDatabaseResponse;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\StopGatewayRequest;
use AlibabaCloud\SDK\Dmsdg\V20230914\Models\StopGatewayResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dmsdg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms-dg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDatabaseRequest $request AddDatabaseRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDatabaseResponse AddDatabaseResponse
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
            'version'     => '2023-09-14',
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
     * @param AddDatabaseRequest $request AddDatabaseRequest
     *
     * @return AddDatabaseResponse AddDatabaseResponse
     */
    public function addDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param AddDatabaseListRequest $request AddDatabaseListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDatabaseListResponse AddDatabaseListResponse
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
            'version'     => '2023-09-14',
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
     * @param AddDatabaseListRequest $request AddDatabaseListRequest
     *
     * @return AddDatabaseListResponse AddDatabaseListResponse
     */
    public function addDatabaseList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatabaseListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDGEnabledResponse CheckDGEnabledResponse
     */
    public function checkDGEnabledWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckDGEnabled',
            'version'     => '2023-09-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDGEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckDGEnabledResponse CheckDGEnabledResponse
     */
    public function checkDGEnabled()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDGEnabledWithOptions($runtime);
    }

    /**
     * @param ConnectDatabaseRequest $request ConnectDatabaseRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConnectDatabaseResponse ConnectDatabaseResponse
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
            'version'     => '2023-09-14',
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
     * @param ConnectDatabaseRequest $request ConnectDatabaseRequest
     *
     * @return ConnectDatabaseResponse ConnectDatabaseResponse
     */
    public function connectDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary 创建网关
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayResponse CreateGatewayResponse
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
            'version'     => '2023-09-14',
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
     * @summary 创建网关
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     *
     * @return CreateGatewayResponse CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary 创建网关的随机验证码
     *  *
     * @param CreateGatewayVerifyCodeRequest $request CreateGatewayVerifyCodeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayVerifyCodeResponse CreateGatewayVerifyCodeResponse
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
            'version'     => '2023-09-14',
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
     * @summary 创建网关的随机验证码
     *  *
     * @param CreateGatewayVerifyCodeRequest $request CreateGatewayVerifyCodeRequest
     *
     * @return CreateGatewayVerifyCodeResponse CreateGatewayVerifyCodeResponse
     */
    public function createGatewayVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
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
            'version'     => '2023-09-14',
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
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary 删除网关
     *  *
     * @param DeleteGatewayRequest $request DeleteGatewayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
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
            'version'     => '2023-09-14',
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
     * @summary 删除网关
     *  *
     * @param DeleteGatewayRequest $request DeleteGatewayRequest
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayInstanceRequest $request DeleteGatewayInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayInstanceResponse DeleteGatewayInstanceResponse
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
            'version'     => '2023-09-14',
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
     * @param DeleteGatewayInstanceRequest $request DeleteGatewayInstanceRequest
     *
     * @return DeleteGatewayInstanceResponse DeleteGatewayInstanceResponse
     */
    public function deleteGatewayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
            'version'     => '2023-09-14',
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
     * @param DownloadGatewayProgramRequest $request DownloadGatewayProgramRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadGatewayProgramResponse DownloadGatewayProgramResponse
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
            'version'     => '2023-09-14',
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
     * @param DownloadGatewayProgramRequest $request DownloadGatewayProgramRequest
     *
     * @return DownloadGatewayProgramResponse DownloadGatewayProgramResponse
     */
    public function downloadGatewayProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadGatewayProgramWithOptions($request, $runtime);
    }

    /**
     * @summary 根据GatewayId查找网关详情
     *  *
     * @param FindUserGatewayByIdRequest $request FindUserGatewayByIdRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FindUserGatewayByIdResponse FindUserGatewayByIdResponse
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
            'version'     => '2023-09-14',
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
     * @summary 根据GatewayId查找网关详情
     *  *
     * @param FindUserGatewayByIdRequest $request FindUserGatewayByIdRequest
     *
     * @return FindUserGatewayByIdResponse FindUserGatewayByIdResponse
     */
    public function findUserGatewayById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUserGatewayByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserDatabasesRequest $request GetUserDatabasesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserDatabasesResponse GetUserDatabasesResponse
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
            'version'     => '2023-09-14',
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
     * @param GetUserDatabasesRequest $request GetUserDatabasesRequest
     *
     * @return GetUserDatabasesResponse GetUserDatabasesResponse
     */
    public function getUserDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param GetUserGatewayInstancesRequest $request GetUserGatewayInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGatewayInstancesResponse GetUserGatewayInstancesResponse
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
            'version'     => '2023-09-14',
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
     * @param GetUserGatewayInstancesRequest $request GetUserGatewayInstancesRequest
     *
     * @return GetUserGatewayInstancesResponse GetUserGatewayInstancesResponse
     */
    public function getUserGatewayInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGatewayInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户DG网关列表
     *  *
     * @param GetUserGatewaysRequest $request GetUserGatewaysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGatewaysResponse GetUserGatewaysResponse
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
            'version'     => '2023-09-14',
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
     * @summary 获取用户DG网关列表
     *  *
     * @param GetUserGatewaysRequest $request GetUserGatewaysRequest
     *
     * @return GetUserGatewaysResponse GetUserGatewaysResponse
     */
    public function getUserGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param ListDatabaseAccessPointRequest $request ListDatabaseAccessPointRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseAccessPointResponse ListDatabaseAccessPointResponse
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
            'version'     => '2023-09-14',
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
     * @param ListDatabaseAccessPointRequest $request ListDatabaseAccessPointRequest
     *
     * @return ListDatabaseAccessPointResponse ListDatabaseAccessPointResponse
     */
    public function listDatabaseAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseAccessPointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseRequest $request ModifyDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseResponse ModifyDatabaseResponse
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
            'version'     => '2023-09-14',
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
     * @param ModifyDatabaseRequest $request ModifyDatabaseRequest
     *
     * @return ModifyDatabaseResponse ModifyDatabaseResponse
     */
    public function modifyDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary 修改网关信息
     *  *
     * @param ModifyGatewayRequest $request ModifyGatewayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGatewayResponse ModifyGatewayResponse
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
            'version'     => '2023-09-14',
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
     * @summary 修改网关信息
     *  *
     * @param ModifyGatewayRequest $request ModifyGatewayRequest
     *
     * @return ModifyGatewayResponse ModifyGatewayResponse
     */
    public function modifyGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayWithOptions($request, $runtime);
    }

    /**
     * @param RetryDatabaseRequest $request RetryDatabaseRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryDatabaseResponse RetryDatabaseResponse
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
            'version'     => '2023-09-14',
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
     * @param RetryDatabaseRequest $request RetryDatabaseRequest
     *
     * @return RetryDatabaseResponse RetryDatabaseResponse
     */
    public function retryDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary 停止网关实例
     *  *
     * @param StopGatewayRequest $request StopGatewayRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopGatewayResponse StopGatewayResponse
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
            'version'     => '2023-09-14',
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
     * @summary 停止网关实例
     *  *
     * @param StopGatewayRequest $request StopGatewayRequest
     *
     * @return StopGatewayResponse StopGatewayResponse
     */
    public function stopGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGatewayWithOptions($request, $runtime);
    }
}
