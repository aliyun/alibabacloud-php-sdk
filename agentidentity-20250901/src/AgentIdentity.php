<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListAPIKeyCredentialProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListAPIKeyCredentialProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListOAuth2CredentialProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListOAuth2CredentialProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListWorkloadIdentitiesRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListWorkloadIdentitiesResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentIdentity extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentidentity', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建一个 API 密钥凭证提供商.
     *
     * @param request - CreateAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAPIKeyCredentialProviderResponse
     *
     * @param CreateAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateAPIKeyCredentialProviderResponse
     */
    public function createAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKey) {
            @$body['APIKey'] = $request->APIKey;
        }

        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个 API 密钥凭证提供商.
     *
     * @param request - CreateAPIKeyCredentialProviderRequest
     *
     * @returns CreateAPIKeyCredentialProviderResponse
     *
     * @param CreateAPIKeyCredentialProviderRequest $request
     *
     * @return CreateAPIKeyCredentialProviderResponse
     */
    public function createAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 创建IdentityProvider.
     *
     * @param tmpReq - CreateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderResponse
     *
     * @param CreateIdentityProviderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedAudience) {
            $request->allowedAudienceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedAudience, 'AllowedAudience', 'json');
        }

        $body = [];
        if (null !== $request->allowedAudienceShrink) {
            @$body['AllowedAudience'] = $request->allowedAudienceShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->discoveryURL) {
            @$body['DiscoveryURL'] = $request->discoveryURL;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建IdentityProvider.
     *
     * @param request - CreateIdentityProviderRequest
     *
     * @returns CreateIdentityProviderResponse
     *
     * @param CreateIdentityProviderRequest $request
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 创建 OAuth2 凭证提供商.
     *
     * @param tmpReq - CreateOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOAuth2CredentialProviderResponse
     *
     * @param CreateOAuth2CredentialProviderRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateOAuth2CredentialProviderResponse
     */
    public function createOAuth2CredentialProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOAuth2CredentialProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->OAuth2ProviderConfig) {
            $request->OAuth2ProviderConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->OAuth2ProviderConfig, 'OAuth2ProviderConfig', 'json');
        }

        $body = [];
        if (null !== $request->callbackURL) {
            @$body['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->credentialProviderVendor) {
            @$body['CredentialProviderVendor'] = $request->credentialProviderVendor;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->OAuth2ProviderConfigShrink) {
            @$body['OAuth2ProviderConfig'] = $request->OAuth2ProviderConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 OAuth2 凭证提供商.
     *
     * @param request - CreateOAuth2CredentialProviderRequest
     *
     * @returns CreateOAuth2CredentialProviderResponse
     *
     * @param CreateOAuth2CredentialProviderRequest $request
     *
     * @return CreateOAuth2CredentialProviderResponse
     */
    public function createOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 创建WorkloadIdentity.
     *
     * @param tmpReq - CreateWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkloadIdentityResponse
     *
     * @param CreateWorkloadIdentityRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWorkloadIdentityResponse
     */
    public function createWorkloadIdentityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkloadIdentityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedResourceOAuth2ReturnURLs) {
            $request->allowedResourceOAuth2ReturnURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedResourceOAuth2ReturnURLs, 'AllowedResourceOAuth2ReturnURLs', 'json');
        }

        $body = [];
        if (null !== $request->allowedResourceOAuth2ReturnURLsShrink) {
            @$body['AllowedResourceOAuth2ReturnURLs'] = $request->allowedResourceOAuth2ReturnURLsShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建WorkloadIdentity.
     *
     * @param request - CreateWorkloadIdentityRequest
     *
     * @returns CreateWorkloadIdentityResponse
     *
     * @param CreateWorkloadIdentityRequest $request
     *
     * @return CreateWorkloadIdentityResponse
     */
    public function createWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * 删除一个 API 密钥凭证提供商.
     *
     * @param request - DeleteAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAPIKeyCredentialProviderResponse
     *
     * @param DeleteAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAPIKeyCredentialProviderResponse
     */
    public function deleteAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个 API 密钥凭证提供商.
     *
     * @param request - DeleteAPIKeyCredentialProviderRequest
     *
     * @returns DeleteAPIKeyCredentialProviderResponse
     *
     * @param DeleteAPIKeyCredentialProviderRequest $request
     *
     * @return DeleteAPIKeyCredentialProviderResponse
     */
    public function deleteAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 删除IdentityProvider.
     *
     * @param request - DeleteIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIdentityProviderResponse
     *
     * @param DeleteIdentityProviderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除IdentityProvider.
     *
     * @param request - DeleteIdentityProviderRequest
     *
     * @returns DeleteIdentityProviderResponse
     *
     * @param DeleteIdentityProviderRequest $request
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 删除 OAuth2 凭证提供商.
     *
     * @param request - DeleteOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOAuth2CredentialProviderResponse
     *
     * @param DeleteOAuth2CredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteOAuth2CredentialProviderResponse
     */
    public function deleteOAuth2CredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 OAuth2 凭证提供商.
     *
     * @param request - DeleteOAuth2CredentialProviderRequest
     *
     * @returns DeleteOAuth2CredentialProviderResponse
     *
     * @param DeleteOAuth2CredentialProviderRequest $request
     *
     * @return DeleteOAuth2CredentialProviderResponse
     */
    public function deleteOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 删除WorkloadIdentity.
     *
     * @param request - DeleteWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkloadIdentityResponse
     *
     * @param DeleteWorkloadIdentityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWorkloadIdentityResponse
     */
    public function deleteWorkloadIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除WorkloadIdentity.
     *
     * @param request - DeleteWorkloadIdentityRequest
     *
     * @returns DeleteWorkloadIdentityResponse
     *
     * @param DeleteWorkloadIdentityRequest $request
     *
     * @return DeleteWorkloadIdentityResponse
     */
    public function deleteWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * 查询一个 API 密钥凭证提供商.
     *
     * @param request - GetAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAPIKeyCredentialProviderResponse
     *
     * @param GetAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAPIKeyCredentialProviderResponse
     */
    public function getAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一个 API 密钥凭证提供商.
     *
     * @param request - GetAPIKeyCredentialProviderRequest
     *
     * @returns GetAPIKeyCredentialProviderResponse
     *
     * @param GetAPIKeyCredentialProviderRequest $request
     *
     * @return GetAPIKeyCredentialProviderResponse
     */
    public function getAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param request - GetIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderResponse
     *
     * @param GetIdentityProviderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - GetIdentityProviderRequest
     *
     * @returns GetIdentityProviderResponse
     *
     * @param GetIdentityProviderRequest $request
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 查询 OAuth2 凭证提供商.
     *
     * @param request - GetOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOAuth2CredentialProviderResponse
     *
     * @param GetOAuth2CredentialProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetOAuth2CredentialProviderResponse
     */
    public function getOAuth2CredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 OAuth2 凭证提供商.
     *
     * @param request - GetOAuth2CredentialProviderRequest
     *
     * @returns GetOAuth2CredentialProviderResponse
     *
     * @param GetOAuth2CredentialProviderRequest $request
     *
     * @return GetOAuth2CredentialProviderResponse
     */
    public function getOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param request - GetWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadIdentityResponse
     *
     * @param GetWorkloadIdentityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkloadIdentityResponse
     */
    public function getWorkloadIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - GetWorkloadIdentityRequest
     *
     * @returns GetWorkloadIdentityResponse
     *
     * @param GetWorkloadIdentityRequest $request
     *
     * @return GetWorkloadIdentityResponse
     */
    public function getWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * 列出 API 密钥凭证提供商.
     *
     * @param request - ListAPIKeyCredentialProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAPIKeyCredentialProvidersResponse
     *
     * @param ListAPIKeyCredentialProvidersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAPIKeyCredentialProvidersResponse
     */
    public function listAPIKeyCredentialProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAPIKeyCredentialProviders',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAPIKeyCredentialProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出 API 密钥凭证提供商.
     *
     * @param request - ListAPIKeyCredentialProvidersRequest
     *
     * @returns ListAPIKeyCredentialProvidersResponse
     *
     * @param ListAPIKeyCredentialProvidersRequest $request
     *
     * @return ListAPIKeyCredentialProvidersResponse
     */
    public function listAPIKeyCredentialProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAPIKeyCredentialProvidersWithOptions($request, $runtime);
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListIdentityProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProvidersResponse
     *
     * @param ListIdentityProvidersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIdentityProviders',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdentityProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListIdentityProvidersRequest
     *
     * @returns ListIdentityProvidersResponse
     *
     * @param ListIdentityProvidersRequest $request
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdentityProvidersWithOptions($request, $runtime);
    }

    /**
     * 列出 OAuth2 凭证提供商.
     *
     * @param request - ListOAuth2CredentialProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOAuth2CredentialProvidersResponse
     *
     * @param ListOAuth2CredentialProvidersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOAuth2CredentialProvidersResponse
     */
    public function listOAuth2CredentialProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOAuth2CredentialProviders',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOAuth2CredentialProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出 OAuth2 凭证提供商.
     *
     * @param request - ListOAuth2CredentialProvidersRequest
     *
     * @returns ListOAuth2CredentialProvidersResponse
     *
     * @param ListOAuth2CredentialProvidersRequest $request
     *
     * @return ListOAuth2CredentialProvidersResponse
     */
    public function listOAuth2CredentialProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOAuth2CredentialProvidersWithOptions($request, $runtime);
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListWorkloadIdentitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkloadIdentitiesResponse
     *
     * @param ListWorkloadIdentitiesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListWorkloadIdentitiesResponse
     */
    public function listWorkloadIdentitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWorkloadIdentities',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkloadIdentitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListWorkloadIdentitiesRequest
     *
     * @returns ListWorkloadIdentitiesResponse
     *
     * @param ListWorkloadIdentitiesRequest $request
     *
     * @return ListWorkloadIdentitiesResponse
     */
    public function listWorkloadIdentities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkloadIdentitiesWithOptions($request, $runtime);
    }

    /**
     * 更新一个 API 密钥凭证提供商.
     *
     * @param request - UpdateAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAPIKeyCredentialProviderResponse
     *
     * @param UpdateAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateAPIKeyCredentialProviderResponse
     */
    public function updateAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKey) {
            @$body['APIKey'] = $request->APIKey;
        }

        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个 API 密钥凭证提供商.
     *
     * @param request - UpdateAPIKeyCredentialProviderRequest
     *
     * @returns UpdateAPIKeyCredentialProviderResponse
     *
     * @param UpdateAPIKeyCredentialProviderRequest $request
     *
     * @return UpdateAPIKeyCredentialProviderResponse
     */
    public function updateAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 更新IdentityProvider.
     *
     * @param tmpReq - UpdateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdentityProviderResponse
     *
     * @param UpdateIdentityProviderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedAudience) {
            $request->allowedAudienceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedAudience, 'AllowedAudience', 'json');
        }

        $body = [];
        if (null !== $request->allowedAudienceShrink) {
            @$body['AllowedAudience'] = $request->allowedAudienceShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->discoveryURL) {
            @$body['DiscoveryURL'] = $request->discoveryURL;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新IdentityProvider.
     *
     * @param request - UpdateIdentityProviderRequest
     *
     * @returns UpdateIdentityProviderResponse
     *
     * @param UpdateIdentityProviderRequest $request
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 修改 OAuth2 凭证提供商.
     *
     * @param tmpReq - UpdateOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOAuth2CredentialProviderResponse
     *
     * @param UpdateOAuth2CredentialProviderRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateOAuth2CredentialProviderResponse
     */
    public function updateOAuth2CredentialProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateOAuth2CredentialProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->OAuth2ProviderConfig) {
            $request->OAuth2ProviderConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->OAuth2ProviderConfig, 'OAuth2ProviderConfig', 'json');
        }

        $body = [];
        if (null !== $request->callbackURL) {
            @$body['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->credentialProviderVendor) {
            @$body['CredentialProviderVendor'] = $request->credentialProviderVendor;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->OAuth2ProviderConfigShrink) {
            @$body['OAuth2ProviderConfig'] = $request->OAuth2ProviderConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改 OAuth2 凭证提供商.
     *
     * @param request - UpdateOAuth2CredentialProviderRequest
     *
     * @returns UpdateOAuth2CredentialProviderResponse
     *
     * @param UpdateOAuth2CredentialProviderRequest $request
     *
     * @return UpdateOAuth2CredentialProviderResponse
     */
    public function updateOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param tmpReq - UpdateWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkloadIdentityResponse
     *
     * @param UpdateWorkloadIdentityRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWorkloadIdentityResponse
     */
    public function updateWorkloadIdentityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkloadIdentityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedResourceOAuth2ReturnURLs) {
            $request->allowedResourceOAuth2ReturnURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedResourceOAuth2ReturnURLs, 'AllowedResourceOAuth2ReturnURLs', 'json');
        }

        $body = [];
        if (null !== $request->allowedResourceOAuth2ReturnURLsShrink) {
            @$body['AllowedResourceOAuth2ReturnURLs'] = $request->allowedResourceOAuth2ReturnURLsShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - UpdateWorkloadIdentityRequest
     *
     * @returns UpdateWorkloadIdentityResponse
     *
     * @param UpdateWorkloadIdentityRequest $request
     *
     * @return UpdateWorkloadIdentityResponse
     */
    public function updateWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkloadIdentityWithOptions($request, $runtime);
    }
}
