<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListUsersRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListUsersResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\RegisterAuthenticatorRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\RegisterAuthenticatorResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ServiceInvokeRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ServiceInvokeResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\UpdateAuthenticatorAttributeRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\UpdateAuthenticatorAttributeResponse;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationRequest;
use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAuthenticatorRegistrationResponse::fromMap($this->doRPCRequest('CreateAuthenticatorRegistration', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserAuthenticateOptionsResponse::fromMap($this->doRPCRequest('CreateUserAuthenticateOptions', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeregisterAuthenticatorResponse::fromMap($this->doRPCRequest('DeregisterAuthenticator', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchAccessTokenResponse::fromMap($this->doRPCRequest('FetchAccessToken', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthenticatorResponse::fromMap($this->doRPCRequest('GetAuthenticator', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAuthenticationLogsResponse::fromMap($this->doRPCRequest('ListAuthenticationLogs', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAuthenticatorOpsLogsResponse::fromMap($this->doRPCRequest('ListAuthenticatorOpsLogs', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAuthenticatorsResponse::fromMap($this->doRPCRequest('ListAuthenticators', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListPwnedPasswordsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPwnedPasswordsResponse
     */
    public function listPwnedPasswordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPwnedPasswordsResponse::fromMap($this->doRPCRequest('ListPwnedPasswords', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RegisterAuthenticatorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RegisterAuthenticatorResponse
     */
    public function registerAuthenticatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterAuthenticatorResponse::fromMap($this->doRPCRequest('RegisterAuthenticator', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ServiceInvokeResponse::fromMap($this->doRPCRequest('ServiceInvoke', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAuthenticatorAttributeResponse::fromMap($this->doRPCRequest('UpdateAuthenticatorAttribute', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyUserAuthenticationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return VerifyUserAuthenticationResponse
     */
    public function verifyUserAuthenticationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyUserAuthenticationResponse::fromMap($this->doRPCRequest('VerifyUserAuthentication', '2021-05-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
