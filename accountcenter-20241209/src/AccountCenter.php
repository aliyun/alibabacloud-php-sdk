<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseOrgQueryLoadTreeRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseOrgQueryLoadTreeResponse;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRegisterAccountRequest;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRegisterAccountResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AccountCenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('accountcenter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 组织目录树查询.
     *
     * @param request - EnterpriseOrgQueryLoadTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseOrgQueryLoadTreeResponse
     *
     * @param EnterpriseOrgQueryLoadTreeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnterpriseOrgQueryLoadTreeResponse
     */
    public function enterpriseOrgQueryLoadTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->loadOrgOnly) {
            @$query['LoadOrgOnly'] = $request->loadOrgOnly;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseOrgQueryLoadTree',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseOrgQueryLoadTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 组织目录树查询.
     *
     * @param request - EnterpriseOrgQueryLoadTreeRequest
     *
     * @returns EnterpriseOrgQueryLoadTreeResponse
     *
     * @param EnterpriseOrgQueryLoadTreeRequest $request
     *
     * @return EnterpriseOrgQueryLoadTreeResponse
     */
    public function enterpriseOrgQueryLoadTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseOrgQueryLoadTreeWithOptions($request, $runtime);
    }

    /**
     * 创建成员账号.
     *
     * @param request - EnterpriseRegisterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterpriseRegisterAccountResponse
     *
     * @param EnterpriseRegisterAccountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnterpriseRegisterAccountResponse
     */
    public function enterpriseRegisterAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->encryptPassword) {
            @$query['EncryptPassword'] = $request->encryptPassword;
        }

        if (null !== $request->encryptTicket) {
            @$query['EncryptTicket'] = $request->encryptTicket;
        }

        if (null !== $request->loginEmail) {
            @$query['LoginEmail'] = $request->loginEmail;
        }

        if (null !== $request->organizationId) {
            @$query['OrganizationId'] = $request->organizationId;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->showCompleteInfo) {
            @$query['ShowCompleteInfo'] = $request->showCompleteInfo;
        }

        if (null !== $request->siteNick) {
            @$query['SiteNick'] = $request->siteNick;
        }

        $body = [];
        if (null !== $request->orientedEcId) {
            @$body['OrientedEcId'] = $request->orientedEcId;
        }

        if (null !== $request->orientedLeId) {
            @$body['OrientedLeId'] = $request->orientedLeId;
        }

        if (null !== $request->orientedNbId) {
            @$body['OrientedNbId'] = $request->orientedNbId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnterpriseRegisterAccount',
            'version' => '2024-12-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterpriseRegisterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建成员账号.
     *
     * @param request - EnterpriseRegisterAccountRequest
     *
     * @returns EnterpriseRegisterAccountResponse
     *
     * @param EnterpriseRegisterAccountRequest $request
     *
     * @return EnterpriseRegisterAccountResponse
     */
    public function enterpriseRegisterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterpriseRegisterAccountWithOptions($request, $runtime);
    }
}
