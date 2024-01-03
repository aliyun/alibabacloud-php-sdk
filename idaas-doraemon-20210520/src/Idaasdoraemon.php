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
     * @param CreateAuthenticatorRegistrationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateAuthenticatorRegistrationResponse
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
     * @param CreateAuthenticatorRegistrationRequest $request
     *
     * @return CreateAuthenticatorRegistrationResponse
     */
    public function createAuthenticatorRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthenticatorRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserAuthenticateOptionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateUserAuthenticateOptionsResponse
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
     * @param CreateUserAuthenticateOptionsRequest $request
     *
     * @return CreateUserAuthenticateOptionsResponse
     */
    public function createUserAuthenticateOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserAuthenticateOptionsWithOptions($request, $runtime);
    }

    /**
     * @param DeregisterAuthenticatorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeregisterAuthenticatorResponse
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
     * @param DeregisterAuthenticatorRequest $request
     *
     * @return DeregisterAuthenticatorResponse
     */
    public function deregisterAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @param FetchAccessTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FetchAccessTokenResponse
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
     * @param FetchAccessTokenRequest $request
     *
     * @return FetchAccessTokenResponse
     */
    public function fetchAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchAccessTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthenticatorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAuthenticatorResponse
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
     * @param GetAuthenticatorRequest $request
     *
     * @return GetAuthenticatorResponse
     */
    public function getAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthenticationLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAuthenticationLogsResponse
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
     * @param ListAuthenticationLogsRequest $request
     *
     * @return ListAuthenticationLogsResponse
     */
    public function listAuthenticationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticationLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthenticatorOpsLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAuthenticatorOpsLogsResponse
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
     * @param ListAuthenticatorOpsLogsRequest $request
     *
     * @return ListAuthenticatorOpsLogsResponse
     */
    public function listAuthenticatorOpsLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticatorOpsLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthenticatorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAuthenticatorsResponse
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
     * @param ListAuthenticatorsRequest $request
     *
     * @return ListAuthenticatorsResponse
     */
    public function listAuthenticators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthenticatorsWithOptions($request, $runtime);
    }

    /**
     * @param ListCostUnitOrdersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCostUnitOrdersResponse
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
     * @param ListCostUnitOrdersRequest $request
     *
     * @return ListCostUnitOrdersResponse
     */
    public function listCostUnitOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCostUnitOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListOrderConsumeStatisticRecordsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListOrderConsumeStatisticRecordsResponse
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
     * @param ListOrderConsumeStatisticRecordsRequest $request
     *
     * @return ListOrderConsumeStatisticRecordsResponse
     */
    public function listOrderConsumeStatisticRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderConsumeStatisticRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ListPwnedPasswordsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPwnedPasswordsResponse
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
     * @param ListPwnedPasswordsRequest $request
     *
     * @return ListPwnedPasswordsResponse
     */
    public function listPwnedPasswords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPwnedPasswordsWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
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
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsReportsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySmsReportsResponse
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
     * @param QuerySmsReportsRequest $request
     *
     * @return QuerySmsReportsResponse
     */
    public function querySmsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsReportsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QuerySmsUpsResponse
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
     * @return QuerySmsUpsResponse
     */
    public function querySmsUps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsUpsWithOptions($runtime);
    }

    /**
     * @param RegisterAuthenticatorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RegisterAuthenticatorResponse
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
     * @param RegisterAuthenticatorRequest $request
     *
     * @return RegisterAuthenticatorResponse
     */
    public function registerAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * @param ServiceInvokeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ServiceInvokeResponse
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
     * @param ServiceInvokeRequest $request
     *
     * @return ServiceInvokeResponse
     */
    public function serviceInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->serviceInvokeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthenticatorAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAuthenticatorAttributeResponse
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
     * @param UpdateAuthenticatorAttributeRequest $request
     *
     * @return UpdateAuthenticatorAttributeResponse
     */
    public function updateAuthenticatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthenticatorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param VerifyIdTokenRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifyIdTokenResponse
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
     * @param VerifyIdTokenRequest $request
     *
     * @return VerifyIdTokenResponse
     */
    public function verifyIdToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyIdTokenWithOptions($request, $runtime);
    }

    /**
     * @param VerifyUserAuthenticationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return VerifyUserAuthenticationResponse
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
     * @param VerifyUserAuthenticationRequest $request
     *
     * @return VerifyUserAuthenticationResponse
     */
    public function verifyUserAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyUserAuthenticationWithOptions($request, $runtime);
    }
}
