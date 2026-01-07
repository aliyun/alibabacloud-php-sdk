<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\GetCallerIdentityResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'sts.aliyuncs.com',
            'ap-south-1' => 'sts.aliyuncs.com',
            'ap-southeast-2' => 'sts.aliyuncs.com',
            'cn-beijing-finance-pop' => 'sts.aliyuncs.com',
            'cn-beijing-gov-1' => 'sts.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'sts.aliyuncs.com',
            'cn-edge-1' => 'sts.aliyuncs.com',
            'cn-fujian' => 'sts.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'sts.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'sts.aliyuncs.com',
            'cn-hangzhou-test-306' => 'sts.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'sts.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'sts.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'sts.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'sts.aliyuncs.com',
            'cn-shanghai-inner' => 'sts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'sts.aliyuncs.com',
            'cn-shenzhen-inner' => 'sts.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'sts.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'sts.aliyuncs.com',
            'cn-wuhan' => 'sts.aliyuncs.com',
            'cn-yushanfang' => 'sts.aliyuncs.com',
            'cn-zhangbei' => 'sts.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'sts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'sts.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'sts.aliyuncs.com',
            'eu-west-1-oxs' => 'sts.aliyuncs.com',
            'rus-west-1-pop' => 'sts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Obtains a Security Token Service (STS) token to assume a Resource Access Management (RAM) role.
     *
     * @remarks
     * ### Prerequisites
     * You cannot use an Alibaba Cloud account to call this operation. The requester of this operation can only be a RAM user or RAM role. Make sure that the AliyunSTSAssumeRoleAccess policy is attached to the requester. After this policy is attached to the requester, the requester has the management permissions on STS.
     * If you do not attach the AliyunSTSAssumeRoleAccess policy to the requester, the following error message is returned:
     * `You are not authorized to do this action. You should be authorized by RAM.`
     * You can refer to the following information to troubleshoot the error:
     * *   Cause of the error: The policy that is required to assume a RAM role is not attached to the requester. To resolve this issue, attach the AliyunSTSAssumeRoleAccess policy or a custom policy to the requester. For more information, see [Can I specify the RAM role that a RAM user can assume?](https://help.aliyun.com/document_detail/39744.html) and [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/116146.html).
     * *   Cause of the error: The requester is not authorized to assume the RAM role. To resolve this issue, add the requester to the Principal element in the trust policy of the RAM role For more information, see [Edit the trust policy of a RAM role](https://help.aliyun.com/document_detail/116819.html).
     * ### Best practices
     * An STS token is valid for a period of time after it is issued, and the number of STS tokens that can be issued within an interval is also limited. Therefore, we recommend that you configure a proper validity period for an STS token and repeatedly use the token within this period. This prevents frequent issuing of STS tokens from adversely affecting your services if a large number of requests are sent. For more information about the limit, see [Is the number of STS API requests limited?](https://help.aliyun.com/document_detail/39744.html) You can configure the `DurationSeconds` parameter to specify a validity period for an STS token.
     * When you upload or download Object Storage Service (OSS) objects on mobile devices, a large number of STS API requests are sent. In this case, repeated use of an STS token may not meet your business requirements. To avoid the limit on STS API requests from affecting access to OSS, you can **add a signature to the URL of an OSS object**. For more information, see [Add signatures to URLs](https://help.aliyun.com/document_detail/31952.html) and [Obtain signature information from the server and upload data to OSS](https://help.aliyun.com/document_detail/31926.html).
     *
     * @param request - AssumeRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssumeRoleResponse
     *
     * @param AssumeRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssumeRoleResponse
     */
    public function assumeRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->durationSeconds) {
            @$query['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->externalId) {
            @$query['ExternalId'] = $request->externalId;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->roleSessionName) {
            @$query['RoleSessionName'] = $request->roleSessionName;
        }

        if (null !== $request->sourceIdentity) {
            @$query['SourceIdentity'] = $request->sourceIdentity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssumeRole',
            'version' => '2015-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssumeRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a Security Token Service (STS) token to assume a Resource Access Management (RAM) role.
     *
     * @remarks
     * ### Prerequisites
     * You cannot use an Alibaba Cloud account to call this operation. The requester of this operation can only be a RAM user or RAM role. Make sure that the AliyunSTSAssumeRoleAccess policy is attached to the requester. After this policy is attached to the requester, the requester has the management permissions on STS.
     * If you do not attach the AliyunSTSAssumeRoleAccess policy to the requester, the following error message is returned:
     * `You are not authorized to do this action. You should be authorized by RAM.`
     * You can refer to the following information to troubleshoot the error:
     * *   Cause of the error: The policy that is required to assume a RAM role is not attached to the requester. To resolve this issue, attach the AliyunSTSAssumeRoleAccess policy or a custom policy to the requester. For more information, see [Can I specify the RAM role that a RAM user can assume?](https://help.aliyun.com/document_detail/39744.html) and [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/116146.html).
     * *   Cause of the error: The requester is not authorized to assume the RAM role. To resolve this issue, add the requester to the Principal element in the trust policy of the RAM role For more information, see [Edit the trust policy of a RAM role](https://help.aliyun.com/document_detail/116819.html).
     * ### Best practices
     * An STS token is valid for a period of time after it is issued, and the number of STS tokens that can be issued within an interval is also limited. Therefore, we recommend that you configure a proper validity period for an STS token and repeatedly use the token within this period. This prevents frequent issuing of STS tokens from adversely affecting your services if a large number of requests are sent. For more information about the limit, see [Is the number of STS API requests limited?](https://help.aliyun.com/document_detail/39744.html) You can configure the `DurationSeconds` parameter to specify a validity period for an STS token.
     * When you upload or download Object Storage Service (OSS) objects on mobile devices, a large number of STS API requests are sent. In this case, repeated use of an STS token may not meet your business requirements. To avoid the limit on STS API requests from affecting access to OSS, you can **add a signature to the URL of an OSS object**. For more information, see [Add signatures to URLs](https://help.aliyun.com/document_detail/31952.html) and [Obtain signature information from the server and upload data to OSS](https://help.aliyun.com/document_detail/31926.html).
     *
     * @param request - AssumeRoleRequest
     *
     * @returns AssumeRoleResponse
     *
     * @param AssumeRoleRequest $request
     *
     * @return AssumeRoleResponse
     */
    public function assumeRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithOptions($request, $runtime);
    }

    /**
     * Queries a Security Token Service (STS) token to assume a Resource Access Management (RAM) role during role-based single sign-on (SSO) by using OpenID Connect (OIDC).
     *
     * @remarks
     * ### Prerequisites
     * *   An OIDC token is obtained from an external identity provider (IdP).
     * *   An OIDC IdP is created in the RAM console. For more information, see [Create an OIDC IdP](https://help.aliyun.com/document_detail/327123.html) or [CreateOIDCProvider](https://help.aliyun.com/document_detail/327135.html).
     * *   A RAM role whose trusted entity is an OIDC IdP is created in the RAM console. For more information, see [Create a RAM role for a trusted IdP](https://help.aliyun.com/document_detail/116805.html) or [CreateRole](https://help.aliyun.com/document_detail/28710.html).
     *
     * @param request - AssumeRoleWithOIDCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssumeRoleWithOIDCResponse
     *
     * @param AssumeRoleWithOIDCRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AssumeRoleWithOIDCResponse
     */
    public function assumeRoleWithOIDCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->durationSeconds) {
            @$query['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->OIDCProviderArn) {
            @$query['OIDCProviderArn'] = $request->OIDCProviderArn;
        }

        if (null !== $request->OIDCToken) {
            @$query['OIDCToken'] = $request->OIDCToken;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->roleSessionName) {
            @$query['RoleSessionName'] = $request->roleSessionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssumeRoleWithOIDC',
            'version' => '2015-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssumeRoleWithOIDCResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries a Security Token Service (STS) token to assume a Resource Access Management (RAM) role during role-based single sign-on (SSO) by using OpenID Connect (OIDC).
     *
     * @remarks
     * ### Prerequisites
     * *   An OIDC token is obtained from an external identity provider (IdP).
     * *   An OIDC IdP is created in the RAM console. For more information, see [Create an OIDC IdP](https://help.aliyun.com/document_detail/327123.html) or [CreateOIDCProvider](https://help.aliyun.com/document_detail/327135.html).
     * *   A RAM role whose trusted entity is an OIDC IdP is created in the RAM console. For more information, see [Create a RAM role for a trusted IdP](https://help.aliyun.com/document_detail/116805.html) or [CreateRole](https://help.aliyun.com/document_detail/28710.html).
     *
     * @param request - AssumeRoleWithOIDCRequest
     *
     * @returns AssumeRoleWithOIDCResponse
     *
     * @param AssumeRoleWithOIDCRequest $request
     *
     * @return AssumeRoleWithOIDCResponse
     */
    public function assumeRoleWithOIDC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithOIDCWithOptions($request, $runtime);
    }

    /**
     * Obtains a Security Token Service (STS) token to assume a Resource Access Management (RAM) role during role-based single sign-on (SSO) by using Security Assertion Markup Language (SAML).
     *
     * @remarks
     * ###
     * *   A SAML response is obtained from an external identity provider (IdP).
     * *   A SAML IdP is created in the RAM console. For more information, see [Create a SAML IdP](https://help.aliyun.com/document_detail/116083.html) or [CreateSAMLProvider](https://help.aliyun.com/document_detail/186846.html).
     * *   A RAM role whose trusted entity is a SAML IdP is created in the RAM console. For more information, see [Create a RAM role for a trusted IdP](https://help.aliyun.com/document_detail/116805.html) or [CreateRole](https://help.aliyun.com/document_detail/28710.html).
     *
     * @param request - AssumeRoleWithSAMLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssumeRoleWithSAMLResponse
     *
     * @param AssumeRoleWithSAMLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AssumeRoleWithSAMLResponse
     */
    public function assumeRoleWithSAMLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->durationSeconds) {
            @$query['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->SAMLAssertion) {
            @$query['SAMLAssertion'] = $request->SAMLAssertion;
        }

        if (null !== $request->SAMLProviderArn) {
            @$query['SAMLProviderArn'] = $request->SAMLProviderArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssumeRoleWithSAML',
            'version' => '2015-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssumeRoleWithSAMLResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Obtains a Security Token Service (STS) token to assume a Resource Access Management (RAM) role during role-based single sign-on (SSO) by using Security Assertion Markup Language (SAML).
     *
     * @remarks
     * ###
     * *   A SAML response is obtained from an external identity provider (IdP).
     * *   A SAML IdP is created in the RAM console. For more information, see [Create a SAML IdP](https://help.aliyun.com/document_detail/116083.html) or [CreateSAMLProvider](https://help.aliyun.com/document_detail/186846.html).
     * *   A RAM role whose trusted entity is a SAML IdP is created in the RAM console. For more information, see [Create a RAM role for a trusted IdP](https://help.aliyun.com/document_detail/116805.html) or [CreateRole](https://help.aliyun.com/document_detail/28710.html).
     *
     * @param request - AssumeRoleWithSAMLRequest
     *
     * @returns AssumeRoleWithSAMLResponse
     *
     * @param AssumeRoleWithSAMLRequest $request
     *
     * @return AssumeRoleWithSAMLResponse
     */
    public function assumeRoleWithSAML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithSAMLWithOptions($request, $runtime);
    }

    /**
     * The ID of the Alibaba Cloud account to which the current requester belongs.
     *
     * @param request - GetCallerIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallerIdentityResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetCallerIdentityResponse
     */
    public function getCallerIdentityWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetCallerIdentity',
            'version' => '2015-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallerIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the Alibaba Cloud account to which the current requester belongs.
     *
     * @returns GetCallerIdentityResponse
     *
     * @return GetCallerIdentityResponse
     */
    public function getCallerIdentity()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallerIdentityWithOptions($runtime);
    }
}
