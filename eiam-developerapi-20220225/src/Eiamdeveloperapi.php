<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateDeviceCodeRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateDeviceCodeResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateTokenRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateTokenResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetApplicationProvisioningScopeHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitIdByExternalIdResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByEmailResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByPhoneNumberResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserIdByUserExternalIdResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserInfoHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitParentIdsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitParentIdsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserHeaders;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserResponse;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RevokeTokenRequest;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\RevokeTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eiamdeveloperapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eiam-developerapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrganizationalUnitHeaders([]);

        return $this->createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param CreateOrganizationalUnitRequest $request
     * @param CreateOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnitWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->organizationalUnitExternalId)) {
            $body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $body['organizationalUnitName'] = $request->organizationalUnitName;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['parentId'] = $request->parentId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrganizationalUnit',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateUserHeaders([]);

        return $this->createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string            $instanceId
     * @param string            $applicationId
     * @param CreateUserRequest $request
     * @param CreateUserHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $body['emailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $body['phoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->primaryOrganizationalUnitId)) {
            $body['primaryOrganizationalUnitId'] = $request->primaryOrganizationalUnitId;
        }
        if (!Utils::isUnset($request->userExternalId)) {
            $body['userExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteOrganizationalUnitHeaders([]);

        return $this->deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param string                          $applicationId
     * @param string                          $organizationalUnitId
     * @param DeleteOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $instanceId           = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId        = OpenApiUtilClient::getEncodeParam($applicationId);
        $organizationalUnitId = OpenApiUtilClient::getEncodeParam($organizationalUnitId);
        $realHeaders          = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteOrganizationalUnit',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits/' . $organizationalUnitId . '',
            'method'      => 'DELETE',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUserHeaders([]);

        return $this->deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @param string            $instanceId
     * @param string            $applicationId
     * @param string            $userId
     * @param DeleteUserHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $userId        = OpenApiUtilClient::getEncodeParam($userId);
        $realHeaders   = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/' . $userId . '',
            'method'      => 'DELETE',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request
     *
     * @return GenerateDeviceCodeResponse
     */
    public function generateDeviceCode($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $instanceId
     * @param string                    $applicationId
     * @param GenerateDeviceCodeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateDeviceCodeResponse
     */
    public function generateDeviceCodeWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $query         = [];
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDeviceCode',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/oauth2/device/code',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateDeviceCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request
     *
     * @return GenerateTokenResponse
     */
    public function generateToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $instanceId
     * @param string               $applicationId
     * @param GenerateTokenRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateTokenResponse
     */
    public function generateTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $query         = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $query['client_secret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->code)) {
            $query['code'] = $request->code;
        }
        if (!Utils::isUnset($request->codeVerifier)) {
            $query['code_verifier'] = $request->codeVerifier;
        }
        if (!Utils::isUnset($request->deviceCode)) {
            $query['device_code'] = $request->deviceCode;
        }
        if (!Utils::isUnset($request->exclusiveTag)) {
            $query['exclusive_tag'] = $request->exclusiveTag;
        }
        if (!Utils::isUnset($request->grantType)) {
            $query['grant_type'] = $request->grantType;
        }
        if (!Utils::isUnset($request->password)) {
            $query['password'] = $request->password;
        }
        if (!Utils::isUnset($request->redirectUri)) {
            $query['redirect_uri'] = $request->redirectUri;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $query['refresh_token'] = $request->refreshToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->username)) {
            $query['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateToken',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/oauth2/token',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScope($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetApplicationProvisioningScopeHeaders([]);

        return $this->getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param GetApplicationProvisioningScopeHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScopeWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $realHeaders   = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetApplicationProvisioningScope',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/provisioningScope',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitHeaders([]);

        return $this->getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $applicationId
     * @param string                       $organizationalUnitId
     * @param GetOrganizationalUnitHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $instanceId           = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId        = OpenApiUtilClient::getEncodeParam($applicationId);
        $organizationalUnitId = OpenApiUtilClient::getEncodeParam($organizationalUnitId);
        $realHeaders          = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationalUnit',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits/' . $organizationalUnitId . '',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrganizationalUnitIdByExternalIdHeaders([]);

        return $this->getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                                     $instanceId
     * @param string                                     $applicationId
     * @param GetOrganizationalUnitIdByExternalIdRequest $request
     * @param GetOrganizationalUnitIdByExternalIdHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return GetOrganizationalUnitIdByExternalIdResponse
     */
    public function getOrganizationalUnitIdByExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->organizationalUnitExternalId)) {
            $body['organizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }
        if (!Utils::isUnset($request->organizationalUnitSourceId)) {
            $body['organizationalUnitSourceId'] = $request->organizationalUnitSourceId;
        }
        if (!Utils::isUnset($request->organizationalUnitSourceType)) {
            $body['organizationalUnitSourceType'] = $request->organizationalUnitSourceType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationalUnitIdByExternalId',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits/_/actions/getOrganizationalUnitIdByExternalId',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrganizationalUnitIdByExternalIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     * @param string $userId
     *
     * @return GetUserResponse
     */
    public function getUser($instanceId, $applicationId, $userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $applicationId
     * @param string         $userId
     * @param GetUserHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($instanceId, $applicationId, $userId, $headers, $runtime)
    {
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $userId        = OpenApiUtilClient::getEncodeParam($userId);
        $realHeaders   = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/' . $userId . '',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request
     *
     * @return GetUserIdByEmailResponse
     */
    public function getUserIdByEmail($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByEmailHeaders([]);

        return $this->getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $applicationId
     * @param GetUserIdByEmailRequest $request
     * @param GetUserIdByEmailHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserIdByEmailResponse
     */
    public function getUserIdByEmailWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserIdByEmail',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/_/actions/getUserIdByEmail',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserIdByEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request
     *
     * @return GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumber($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByPhoneNumberHeaders([]);

        return $this->getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $instanceId
     * @param string                        $applicationId
     * @param GetUserIdByPhoneNumberRequest $request
     * @param GetUserIdByPhoneNumberHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetUserIdByPhoneNumberResponse
     */
    public function getUserIdByPhoneNumberWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserIdByPhoneNumber',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/_/actions/getUserIdByPhoneNumber',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserIdByPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request
     *
     * @return GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalId($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByUserExternalIdHeaders([]);

        return $this->getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $instanceId
     * @param string                           $applicationId
     * @param GetUserIdByUserExternalIdRequest $request
     * @param GetUserIdByUserExternalIdHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUserIdByUserExternalIdResponse
     */
    public function getUserIdByUserExternalIdWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $body          = [];
        if (!Utils::isUnset($request->userExternalId)) {
            $body['userExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->userSourceId)) {
            $body['userSourceId'] = $request->userSourceId;
        }
        if (!Utils::isUnset($request->userSourceType)) {
            $body['userSourceType'] = $request->userSourceType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserIdByUserExternalId',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/_/actions/getUserIdByExternalId',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserIdByUserExternalIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($instanceId, $applicationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserInfoHeaders([]);

        return $this->getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param string             $applicationId
     * @param GetUserInfoHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($instanceId, $applicationId, $headers, $runtime)
    {
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $realHeaders   = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetUserInfo',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/oauth2/userinfo',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $applicationId
     * @param string $organizationalUnitId
     *
     * @return ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIds($instanceId, $applicationId, $organizationalUnitId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitParentIdsHeaders([]);

        return $this->listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime);
    }

    /**
     * @param string                                 $instanceId
     * @param string                                 $applicationId
     * @param string                                 $organizationalUnitId
     * @param ListOrganizationalUnitParentIdsHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListOrganizationalUnitParentIdsResponse
     */
    public function listOrganizationalUnitParentIdsWithOptions($instanceId, $applicationId, $organizationalUnitId, $headers, $runtime)
    {
        $instanceId           = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId        = OpenApiUtilClient::getEncodeParam($applicationId);
        $organizationalUnitId = OpenApiUtilClient::getEncodeParam($organizationalUnitId);
        $realHeaders          = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationalUnitParentIds',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits/' . $organizationalUnitId . '/parentIds',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationalUnitParentIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListOrganizationalUnitsHeaders([]);

        return $this->listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param ListOrganizationalUnitsRequest $request
     * @param ListOrganizationalUnitsHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnitsWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $query         = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['parentId'] = $request->parentId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationalUnits',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUsersHeaders([]);

        return $this->listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param string           $applicationId
     * @param ListUsersRequest $request
     * @param ListUsersHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $query         = [];
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['organizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request
     *
     * @return PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnit($instanceId, $applicationId, $organizationalUnitId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchOrganizationalUnitHeaders([]);

        return $this->patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param string                         $applicationId
     * @param string                         $organizationalUnitId
     * @param PatchOrganizationalUnitRequest $request
     * @param PatchOrganizationalUnitHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PatchOrganizationalUnitResponse
     */
    public function patchOrganizationalUnitWithOptions($instanceId, $applicationId, $organizationalUnitId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId           = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId        = OpenApiUtilClient::getEncodeParam($applicationId);
        $organizationalUnitId = OpenApiUtilClient::getEncodeParam($organizationalUnitId);
        $body                 = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $body['organizationalUnitName'] = $request->organizationalUnitName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PatchOrganizationalUnit',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/organizationalUnits/' . $organizationalUnitId . '',
            'method'      => 'PATCH',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PatchOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request
     *
     * @return PatchUserResponse
     */
    public function patchUser($instanceId, $applicationId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchUserHeaders([]);

        return $this->patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param string           $applicationId
     * @param string           $userId
     * @param PatchUserRequest $request
     * @param PatchUserHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return PatchUserResponse
     */
    public function patchUserWithOptions($instanceId, $applicationId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $userId        = OpenApiUtilClient::getEncodeParam($userId);
        $body          = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $body['emailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['phoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $body['phoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $body['phoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PatchUser',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/users/' . $userId . '',
            'method'      => 'PATCH',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PatchUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request
     *
     * @return RevokeTokenResponse
     */
    public function revokeToken($instanceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param string             $applicationId
     * @param RevokeTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RevokeTokenResponse
     */
    public function revokeTokenWithOptions($instanceId, $applicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId    = OpenApiUtilClient::getEncodeParam($instanceId);
        $applicationId = OpenApiUtilClient::getEncodeParam($applicationId);
        $query         = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $query['client_secret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        if (!Utils::isUnset($request->tokenTypeHint)) {
            $query['token_type_hint'] = $request->tokenTypeHint;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeToken',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/' . $instanceId . '/' . $applicationId . '/oauth2/revoke',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
