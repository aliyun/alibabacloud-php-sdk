<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\CreateAuthenticatorRegistrationRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\CreateAuthenticatorRegistrationResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\CreateUserAuthenticateOptionsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\CreateUserAuthenticateOptionsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\DeregisterAuthenticatorRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\DeregisterAuthenticatorResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\FetchAccessTokenRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\FetchAccessTokenResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\GetAuthenticatorRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\GetAuthenticatorResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticationLogsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticationLogsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorOpsLogsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorOpsLogsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListCostUnitOrdersRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListCostUnitOrdersResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListOrderConsumeStatisticRecordsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListOrderConsumeStatisticRecordsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListUsersRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListUsersResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsReportsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsReportsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsUpsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\RegisterAuthenticatorRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\RegisterAuthenticatorResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ServiceInvokeRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ServiceInvokeResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\UpdateAuthenticatorAttributeRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\UpdateAuthenticatorAttributeResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyIdTokenRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyIdTokenResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Idaasdoraemon extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'idaas-doraemon.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('idaas-doraemon', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建认证器请求
     *  *
     * @param CreateAuthenticatorRegistrationRequest $request CreateAuthenticatorRegistrationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuthenticatorRegistrationResponse CreateAuthenticatorRegistrationResponse
     */
    public function createAuthenticatorRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->clientExtendParamsJson)) {
            $query['ClientExtendParamsJson'] = $request->clientExtendParamsJson;
        }
        if (!Utils::isUnset($request->clientExtendParamsJsonSign)) {
            $query['ClientExtendParamsJsonSign'] = $request->clientExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->registrationContext)) {
            $query['RegistrationContext'] = $request->registrationContext;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->userDisplayName)) {
            $query['UserDisplayName'] = $request->userDisplayName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthenticatorRegistration',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthenticatorRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建认证器请求
     *  *
     * @param CreateAuthenticatorRegistrationRequest $request CreateAuthenticatorRegistrationRequest
     *
     * @return CreateAuthenticatorRegistrationResponse CreateAuthenticatorRegistrationResponse
     */
    public function createAuthenticatorRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthenticatorRegistrationWithOptions($request, $runtime);
    }

    /**
     * @summary 创建用户认证请求
     *  *
     * @param CreateUserAuthenticateOptionsRequest $request CreateUserAuthenticateOptionsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserAuthenticateOptionsResponse CreateUserAuthenticateOptionsResponse
     */
    public function createUserAuthenticateOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->bindHashBase64)) {
            $query['BindHashBase64'] = $request->bindHashBase64;
        }
        if (!Utils::isUnset($request->clientExtendParamsJson)) {
            $query['ClientExtendParamsJson'] = $request->clientExtendParamsJson;
        }
        if (!Utils::isUnset($request->clientExtendParamsJsonSign)) {
            $query['ClientExtendParamsJsonSign'] = $request->clientExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserAuthenticateOptions',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserAuthenticateOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建用户认证请求
     *  *
     * @param CreateUserAuthenticateOptionsRequest $request CreateUserAuthenticateOptionsRequest
     *
     * @return CreateUserAuthenticateOptionsResponse CreateUserAuthenticateOptionsResponse
     */
    public function createUserAuthenticateOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserAuthenticateOptionsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除认证器
     *  *
     * @param DeregisterAuthenticatorRequest $request DeregisterAuthenticatorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterAuthenticatorResponse DeregisterAuthenticatorResponse
     */
    public function deregisterAuthenticatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorUuid)) {
            $query['AuthenticatorUuid'] = $request->authenticatorUuid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterAuthenticator',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeregisterAuthenticatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除认证器
     *  *
     * @param DeregisterAuthenticatorRequest $request DeregisterAuthenticatorRequest
     *
     * @return DeregisterAuthenticatorResponse DeregisterAuthenticatorResponse
     */
    public function deregisterAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @summary 获取access_token
     *  *
     * @param FetchAccessTokenRequest $request FetchAccessTokenRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchAccessTokenResponse FetchAccessTokenResponse
     */
    public function fetchAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->mobileExtendParamsJson)) {
            $query['MobileExtendParamsJson'] = $request->mobileExtendParamsJson;
        }
        if (!Utils::isUnset($request->mobileExtendParamsJsonSign)) {
            $query['MobileExtendParamsJsonSign'] = $request->mobileExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->XClientIp)) {
            $query['XClientIp'] = $request->XClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FetchAccessToken',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FetchAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取access_token
     *  *
     * @param FetchAccessTokenRequest $request FetchAccessTokenRequest
     *
     * @return FetchAccessTokenResponse FetchAccessTokenResponse
     */
    public function fetchAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchAccessTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单个认证器
     *  *
     * @param GetAuthenticatorRequest $request GetAuthenticatorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthenticatorResponse GetAuthenticatorResponse
     */
    public function getAuthenticatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorUuid)) {
            $query['AuthenticatorUuid'] = $request->authenticatorUuid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthenticator',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthenticatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个认证器
     *  *
     * @param GetAuthenticatorRequest $request GetAuthenticatorRequest
     *
     * @return GetAuthenticatorResponse GetAuthenticatorResponse
     */
    public function getAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询认证事件日志
     *  *
     * @param ListAuthenticationLogsRequest $request ListAuthenticationLogsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthenticationLogsResponse ListAuthenticationLogsResponse
     */
    public function listAuthenticationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->authenticatorUuid)) {
            $query['AuthenticatorUuid'] = $request->authenticatorUuid;
        }
        if (!Utils::isUnset($request->credentialId)) {
            $query['CredentialId'] = $request->credentialId;
        }
        if (!Utils::isUnset($request->fromTime)) {
            $query['FromTime'] = $request->fromTime;
        }
        if (!Utils::isUnset($request->logTag)) {
            $query['LogTag'] = $request->logTag;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->toTime)) {
            $query['ToTime'] = $request->toTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthenticationLogs',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthenticationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询认证事件日志
     *  *
     * @param ListAuthenticationLogsRequest $request ListAuthenticationLogsRequest
     *
     * @return ListAuthenticationLogsResponse ListAuthenticationLogsResponse
     */
    public function listAuthenticationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticationLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询认证器操作日志
     *  *
     * @param ListAuthenticatorOpsLogsRequest $request ListAuthenticatorOpsLogsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthenticatorOpsLogsResponse ListAuthenticatorOpsLogsResponse
     */
    public function listAuthenticatorOpsLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->authenticatorUuid)) {
            $query['AuthenticatorUuid'] = $request->authenticatorUuid;
        }
        if (!Utils::isUnset($request->fromTime)) {
            $query['FromTime'] = $request->fromTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->toTime)) {
            $query['ToTime'] = $request->toTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthenticatorOpsLogs',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthenticatorOpsLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询认证器操作日志
     *  *
     * @param ListAuthenticatorOpsLogsRequest $request ListAuthenticatorOpsLogsRequest
     *
     * @return ListAuthenticatorOpsLogsResponse ListAuthenticatorOpsLogsResponse
     */
    public function listAuthenticatorOpsLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticatorOpsLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询认证器
     *  *
     * @param ListAuthenticatorsRequest $request ListAuthenticatorsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthenticatorsResponse ListAuthenticatorsResponse
     */
    public function listAuthenticatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthenticators',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthenticatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询认证器
     *  *
     * @param ListAuthenticatorsRequest $request ListAuthenticatorsRequest
     *
     * @return ListAuthenticatorsResponse ListAuthenticatorsResponse
     */
    public function listAuthenticators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticatorsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询按量计费订单列表
     *  *
     * @param ListCostUnitOrdersRequest $request ListCostUnitOrdersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCostUnitOrdersResponse ListCostUnitOrdersResponse
     */
    public function listCostUnitOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginDate)) {
            $query['BeginDate'] = $request->beginDate;
        }
        if (!Utils::isUnset($request->finalDate)) {
            $query['FinalDate'] = $request->finalDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCostUnitOrders',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCostUnitOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询按量计费订单列表
     *  *
     * @param ListCostUnitOrdersRequest $request ListCostUnitOrdersRequest
     *
     * @return ListCostUnitOrdersResponse ListCostUnitOrdersResponse
     */
    public function listCostUnitOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCostUnitOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用量消费统计记录列表
     *  *
     * @param ListOrderConsumeStatisticRecordsRequest $request ListOrderConsumeStatisticRecordsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrderConsumeStatisticRecordsResponse ListOrderConsumeStatisticRecordsResponse
     */
    public function listOrderConsumeStatisticRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliOrderCode)) {
            $query['AliOrderCode'] = $request->aliOrderCode;
        }
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->statisticTimeMax)) {
            $query['StatisticTimeMax'] = $request->statisticTimeMax;
        }
        if (!Utils::isUnset($request->statisticTimeMin)) {
            $query['StatisticTimeMin'] = $request->statisticTimeMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrderConsumeStatisticRecords',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOrderConsumeStatisticRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用量消费统计记录列表
     *  *
     * @param ListOrderConsumeStatisticRecordsRequest $request ListOrderConsumeStatisticRecordsRequest
     *
     * @return ListOrderConsumeStatisticRecordsResponse ListOrderConsumeStatisticRecordsResponse
     */
    public function listOrderConsumeStatisticRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderConsumeStatisticRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 弱密码检测
     *  *
     * @param ListPwnedPasswordsRequest $request ListPwnedPasswordsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPwnedPasswordsResponse ListPwnedPasswordsResponse
     */
    public function listPwnedPasswordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->prefixHexPasswordSha1Hash)) {
            $query['PrefixHexPasswordSha1Hash'] = $request->prefixHexPasswordSha1Hash;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPwnedPasswords',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPwnedPasswordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 弱密码检测
     *  *
     * @param ListPwnedPasswordsRequest $request ListPwnedPasswordsRequest
     *
     * @return ListPwnedPasswordsResponse ListPwnedPasswordsResponse
     */
    public function listPwnedPasswords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPwnedPasswordsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用用户
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询应用用户
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 短信回执查询
     *  *
     * @param QuerySmsReportsRequest $request QuerySmsReportsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsReportsResponse QuerySmsReportsResponse
     */
    public function querySmsReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsReports',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 短信回执查询
     *  *
     * @param QuerySmsReportsRequest $request QuerySmsReportsRequest
     *
     * @return QuerySmsReportsResponse QuerySmsReportsResponse
     */
    public function querySmsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsReportsWithOptions($request, $runtime);
    }

    /**
     * @summary 短信上行查询
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsUpsResponse QuerySmsUpsResponse
     */
    public function querySmsUpsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QuerySmsUps',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsUpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 短信上行查询
     *  *
     * @return QuerySmsUpsResponse QuerySmsUpsResponse
     */
    public function querySmsUps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsUpsWithOptions($runtime);
    }

    /**
     * @summary 注册认证器
     *  *
     * @param RegisterAuthenticatorRequest $request RegisterAuthenticatorRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterAuthenticatorResponse RegisterAuthenticatorResponse
     */
    public function registerAuthenticatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorName)) {
            $query['AuthenticatorName'] = $request->authenticatorName;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->clientExtendParamsJson)) {
            $query['ClientExtendParamsJson'] = $request->clientExtendParamsJson;
        }
        if (!Utils::isUnset($request->clientExtendParamsJsonSign)) {
            $query['ClientExtendParamsJsonSign'] = $request->clientExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->logParams)) {
            $query['LogParams'] = $request->logParams;
        }
        if (!Utils::isUnset($request->registrationContext)) {
            $query['RegistrationContext'] = $request->registrationContext;
        }
        if (!Utils::isUnset($request->requireChallengeBase64)) {
            $query['RequireChallengeBase64'] = $request->requireChallengeBase64;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userSourceIp)) {
            $query['UserSourceIp'] = $request->userSourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterAuthenticator',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterAuthenticatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册认证器
     *  *
     * @param RegisterAuthenticatorRequest $request RegisterAuthenticatorRequest
     *
     * @return RegisterAuthenticatorResponse RegisterAuthenticatorResponse
     */
    public function registerAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @summary 认证接口
     *  *
     * @param ServiceInvokeRequest $request ServiceInvokeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ServiceInvokeResponse ServiceInvokeResponse
     */
    public function serviceInvokeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->doraemonAction)) {
            $query['DoraemonAction'] = $request->doraemonAction;
        }
        if (!Utils::isUnset($request->mobileExtendParamsJson)) {
            $query['MobileExtendParamsJson'] = $request->mobileExtendParamsJson;
        }
        if (!Utils::isUnset($request->mobileExtendParamsJsonSign)) {
            $query['MobileExtendParamsJsonSign'] = $request->mobileExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->testModel)) {
            $query['TestModel'] = $request->testModel;
        }
        if (!Utils::isUnset($request->XClientIp)) {
            $query['XClientIp'] = $request->XClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ServiceInvoke',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ServiceInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 认证接口
     *  *
     * @param ServiceInvokeRequest $request ServiceInvokeRequest
     *
     * @return ServiceInvokeResponse ServiceInvokeResponse
     */
    public function serviceInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->serviceInvokeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新认证器名字
     *  *
     * @param UpdateAuthenticatorAttributeRequest $request UpdateAuthenticatorAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuthenticatorAttributeResponse UpdateAuthenticatorAttributeResponse
     */
    public function updateAuthenticatorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticatorName)) {
            $query['AuthenticatorName'] = $request->authenticatorName;
        }
        if (!Utils::isUnset($request->authenticatorUuid)) {
            $query['AuthenticatorUuid'] = $request->authenticatorUuid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthenticatorAttribute',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthenticatorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新认证器名字
     *  *
     * @param UpdateAuthenticatorAttributeRequest $request UpdateAuthenticatorAttributeRequest
     *
     * @return UpdateAuthenticatorAttributeResponse UpdateAuthenticatorAttributeResponse
     */
    public function updateAuthenticatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthenticatorAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 验证id_token
     *  *
     * @param VerifyIdTokenRequest $request VerifyIdTokenRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyIdTokenResponse VerifyIdTokenResponse
     */
    public function verifyIdTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->jwtIdToken)) {
            $query['JwtIdToken'] = $request->jwtIdToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyIdToken',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyIdTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证id_token
     *  *
     * @param VerifyIdTokenRequest $request VerifyIdTokenRequest
     *
     * @return VerifyIdTokenResponse VerifyIdTokenResponse
     */
    public function verifyIdToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyIdTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 认证用户
     *  *
     * @param VerifyUserAuthenticationRequest $request VerifyUserAuthenticationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyUserAuthenticationResponse VerifyUserAuthenticationResponse
     */
    public function verifyUserAuthenticationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationExternalId)) {
            $query['ApplicationExternalId'] = $request->applicationExternalId;
        }
        if (!Utils::isUnset($request->authenticationContext)) {
            $query['AuthenticationContext'] = $request->authenticationContext;
        }
        if (!Utils::isUnset($request->authenticatorType)) {
            $query['AuthenticatorType'] = $request->authenticatorType;
        }
        if (!Utils::isUnset($request->clientExtendParamsJson)) {
            $query['ClientExtendParamsJson'] = $request->clientExtendParamsJson;
        }
        if (!Utils::isUnset($request->clientExtendParamsJsonSign)) {
            $query['ClientExtendParamsJsonSign'] = $request->clientExtendParamsJsonSign;
        }
        if (!Utils::isUnset($request->logParams)) {
            $query['LogParams'] = $request->logParams;
        }
        if (!Utils::isUnset($request->logTag)) {
            $query['LogTag'] = $request->logTag;
        }
        if (!Utils::isUnset($request->requireBindHashBase64)) {
            $query['RequireBindHashBase64'] = $request->requireBindHashBase64;
        }
        if (!Utils::isUnset($request->requireChallengeBase64)) {
            $query['RequireChallengeBase64'] = $request->requireChallengeBase64;
        }
        if (!Utils::isUnset($request->serverExtendParamsJson)) {
            $query['ServerExtendParamsJson'] = $request->serverExtendParamsJson;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userSourceIp)) {
            $query['UserSourceIp'] = $request->userSourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyUserAuthentication',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyUserAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 认证用户
     *  *
     * @param VerifyUserAuthenticationRequest $request VerifyUserAuthenticationRequest
     *
     * @return VerifyUserAuthenticationResponse VerifyUserAuthenticationResponse
     */
    public function verifyUserAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyUserAuthenticationWithOptions($request, $runtime);
    }
}
