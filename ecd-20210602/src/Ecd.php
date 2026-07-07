<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ecd\V20210602\Models\CreateTenantSkillRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\CreateTenantSkillResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\CreateTenantSkillShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\DeleteTenantSkillsRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\DeleteTenantSkillsResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\GetOssStsTokenRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\GetOssStsTokenResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\GetParseProgressRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\GetParseProgressResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSecureSkillIdentitiesRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSecureSkillIdentitiesResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillAuthedIdentitiesRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillAuthedIdentitiesResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillsRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillsResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ParseSkillPackageRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ParseSkillPackageResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillAuthRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillAuthResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillSecurityRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillSecurityResponse;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetTenantSkillEnabledRequest;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetTenantSkillEnabledResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'ecd.us-west-1.aliyuncs.com',
            'us-east-1' => 'ecd.us-east-1.aliyuncs.com',
            'me-east-1' => 'ecd.me-east-1.aliyuncs.com',
            'me-central-1' => 'ecd.me-central-1.aliyuncs.com',
            'eu-west-1' => 'ecd.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'ecd.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'ecd.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'ecd.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'ecd.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ecd.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'ecd.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'ecd.cn-qingdao.aliyuncs.com',
            'cn-nanjing' => 'ecd.cn-nanjing.aliyuncs.com',
            'cn-hongkong' => 'ecd.cn-hongkong.aliyuncs.com',
            'cn-hangzhou-finance' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou' => 'ecd.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'ecd.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'ecd.cn-chengdu.aliyuncs.com',
            'cn-beijing' => 'ecd.cn-beijing.aliyuncs.com',
            'ap-southeast-7' => 'ecd.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'ecd.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'ecd.ap-southeast-5.aliyuncs.com',
            'ap-southeast-1' => 'ecd.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'ecd.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a tenant skill.
     *
     * @param tmpReq - CreateTenantSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantSkillResponse
     *
     * @param CreateTenantSkillRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTenantSkillResponse
     */
    public function createTenantSkillWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTenantSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->envVars) {
            $request->envVarsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->envVars, 'EnvVars', 'json');
        }

        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->envVarsShrink) {
            @$query['EnvVars'] = $request->envVarsShrink;
        }

        if (null !== $request->iconETag) {
            @$query['IconETag'] = $request->iconETag;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillIcon) {
            @$query['SkillIcon'] = $request->skillIcon;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        if (null !== $request->slug) {
            @$query['Slug'] = $request->slug;
        }

        if (null !== $request->taskKey) {
            @$query['TaskKey'] = $request->taskKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTenantSkill',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTenantSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tenant skill.
     *
     * @param request - CreateTenantSkillRequest
     *
     * @returns CreateTenantSkillResponse
     *
     * @param CreateTenantSkillRequest $request
     *
     * @return CreateTenantSkillResponse
     */
    public function createTenantSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantSkillWithOptions($request, $runtime);
    }

    /**
     * Deletes skills in batches.
     *
     * @param request - DeleteTenantSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTenantSkillsResponse
     *
     * @param DeleteTenantSkillsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTenantSkillsResponse
     */
    public function deleteTenantSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTenantSkills',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTenantSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes skills in batches.
     *
     * @param request - DeleteTenantSkillsRequest
     *
     * @returns DeleteTenantSkillsResponse
     *
     * @param DeleteTenantSkillsRequest $request
     *
     * @return DeleteTenantSkillsResponse
     */
    public function deleteTenantSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantSkillsWithOptions($request, $runtime);
    }

    /**
     * 获取 OSS STS 令牌.
     *
     * @remarks
     * 获取到的SecurityToken有效期为15分钟。
     *
     * @param request - GetOssStsTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssStsTokenResponse
     *
     * @param GetOssStsTokenRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOssStsTokenResponse
     */
    public function getOssStsTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssStsToken',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssStsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 OSS STS 令牌.
     *
     * @remarks
     * 获取到的SecurityToken有效期为15分钟。
     *
     * @param request - GetOssStsTokenRequest
     *
     * @returns GetOssStsTokenResponse
     *
     * @param GetOssStsTokenRequest $request
     *
     * @return GetOssStsTokenResponse
     */
    public function getOssStsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssStsTokenWithOptions($request, $runtime);
    }

    /**
     * Retrieves the parsed content of a skill package.
     *
     * @remarks
     * Call the ParseSkillPackage operation first. Poll this operation every 3 seconds.
     *
     * @param request - GetParseProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParseProgressResponse
     *
     * @param GetParseProgressRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetParseProgressResponse
     */
    public function getParseProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskKey) {
            @$query['TaskKey'] = $request->taskKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParseProgress',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetParseProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the parsed content of a skill package.
     *
     * @remarks
     * Call the ParseSkillPackage operation first. Poll this operation every 3 seconds.
     *
     * @param request - GetParseProgressRequest
     *
     * @returns GetParseProgressResponse
     *
     * @param GetParseProgressRequest $request
     *
     * @return GetParseProgressResponse
     */
    public function getParseProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParseProgressWithOptions($request, $runtime);
    }

    /**
     * Queries the list of identities for which security policies are enabled.
     *
     * @remarks
     * The resource type supports only cloud computers.
     *
     * @param request - ListSecureSkillIdentitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecureSkillIdentitiesResponse
     *
     * @param ListSecureSkillIdentitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSecureSkillIdentitiesResponse
     */
    public function listSecureSkillIdentitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecureSkillIdentities',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecureSkillIdentitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of identities for which security policies are enabled.
     *
     * @remarks
     * The resource type supports only cloud computers.
     *
     * @param request - ListSecureSkillIdentitiesRequest
     *
     * @returns ListSecureSkillIdentitiesResponse
     *
     * @param ListSecureSkillIdentitiesRequest $request
     *
     * @return ListSecureSkillIdentitiesResponse
     */
    public function listSecureSkillIdentities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecureSkillIdentitiesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of identities authorized for a skill.
     *
     * @remarks
     * Authorized objects support only cloud computers.
     *
     * @param request - ListSkillAuthedIdentitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillAuthedIdentitiesResponse
     *
     * @param ListSkillAuthedIdentitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSkillAuthedIdentitiesResponse
     */
    public function listSkillAuthedIdentitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillAuthedIdentities',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillAuthedIdentitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of identities authorized for a skill.
     *
     * @remarks
     * Authorized objects support only cloud computers.
     *
     * @param request - ListSkillAuthedIdentitiesRequest
     *
     * @returns ListSkillAuthedIdentitiesResponse
     *
     * @param ListSkillAuthedIdentitiesRequest $request
     *
     * @return ListSkillAuthedIdentitiesResponse
     */
    public function listSkillAuthedIdentities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillAuthedIdentitiesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of skills.
     *
     * @param request - ListSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        if (null !== $request->supplierType) {
            @$query['SupplierType'] = $request->supplierType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of skills.
     *
     * @param request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillsWithOptions($request, $runtime);
    }

    /**
     * Parses a skill package.
     *
     * @param request - ParseSkillPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ParseSkillPackageResponse
     *
     * @param ParseSkillPackageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ParseSkillPackageResponse
     */
    public function parseSkillPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossObjectETag) {
            @$query['OssObjectETag'] = $request->ossObjectETag;
        }

        if (null !== $request->ossObjectKey) {
            @$query['OssObjectKey'] = $request->ossObjectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ParseSkillPackage',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ParseSkillPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parses a skill package.
     *
     * @param request - ParseSkillPackageRequest
     *
     * @returns ParseSkillPackageResponse
     *
     * @param ParseSkillPackageRequest $request
     *
     * @return ParseSkillPackageResponse
     */
    public function parseSkillPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->parseSkillPackageWithOptions($request, $runtime);
    }

    /**
     * Sets skill permissions for an identity.
     *
     * @remarks
     * The authorized object supports only cloud computers.
     *
     * @param request - SetIdentitySkillAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetIdentitySkillAuthResponse
     *
     * @param SetIdentitySkillAuthRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetIdentitySkillAuthResponse
     */
    public function setIdentitySkillAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoInstall) {
            @$query['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->identities) {
            @$query['Identities'] = $request->identities;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetIdentitySkillAuth',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetIdentitySkillAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets skill permissions for an identity.
     *
     * @remarks
     * The authorized object supports only cloud computers.
     *
     * @param request - SetIdentitySkillAuthRequest
     *
     * @returns SetIdentitySkillAuthResponse
     *
     * @param SetIdentitySkillAuthRequest $request
     *
     * @return SetIdentitySkillAuthResponse
     */
    public function setIdentitySkillAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIdentitySkillAuthWithOptions($request, $runtime);
    }

    /**
     * Sets the security policy for identity skills.
     *
     * @remarks
     * The resource type supports only cloud computers.
     *
     * @param request - SetIdentitySkillSecurityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetIdentitySkillSecurityResponse
     *
     * @param SetIdentitySkillSecurityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetIdentitySkillSecurityResponse
     */
    public function setIdentitySkillSecurityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->identityIds) {
            @$query['IdentityIds'] = $request->identityIds;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetIdentitySkillSecurity',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetIdentitySkillSecurityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the security policy for identity skills.
     *
     * @remarks
     * The resource type supports only cloud computers.
     *
     * @param request - SetIdentitySkillSecurityRequest
     *
     * @returns SetIdentitySkillSecurityResponse
     *
     * @param SetIdentitySkillSecurityRequest $request
     *
     * @return SetIdentitySkillSecurityResponse
     */
    public function setIdentitySkillSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIdentitySkillSecurityWithOptions($request, $runtime);
    }

    /**
     * 设置租户技能启用状态
     *
     * @param request - SetTenantSkillEnabledRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTenantSkillEnabledResponse
     *
     * @param SetTenantSkillEnabledRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetTenantSkillEnabledResponse
     */
    public function setTenantSkillEnabledWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->skillChannel) {
            @$query['SkillChannel'] = $request->skillChannel;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTenantSkillEnabled',
            'version' => '2021-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTenantSkillEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置租户技能启用状态
     *
     * @param request - SetTenantSkillEnabledRequest
     *
     * @returns SetTenantSkillEnabledResponse
     *
     * @param SetTenantSkillEnabledRequest $request
     *
     * @return SetTenantSkillEnabledResponse
     */
    public function setTenantSkillEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTenantSkillEnabledWithOptions($request, $runtime);
    }
}
