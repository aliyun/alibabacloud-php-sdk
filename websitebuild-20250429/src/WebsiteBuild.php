<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceTicketRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceTicketResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainCertificateRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainCertificateResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainRedirectRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DeleteAppDomainRedirectResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DescribeAppDomainDnsRecordRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DescribeAppDomainDnsRecordResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DispatchConsoleAPIForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\DispatchConsoleAPIForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserAccessTokenForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserAccessTokenForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppDomainRedirectRecordsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppDomainRedirectRecordsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstancesShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyAppInstanceSpecRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModifyAppInstanceSpecResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefreshAppInstanceTicketRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefreshAppInstanceTicketResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefundAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RefundAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppInstanceRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppInstanceResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SetAppDomainCertificateRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SetAppDomainCertificateResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UnbindAppDomainRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UnbindAppDomainResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WebsiteBuild extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('websitebuild', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 绑定应用域名.
     *
     * @param request - BindAppDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAppDomainResponse
     *
     * @param BindAppDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindAppDomainResponse
     */
    public function bindAppDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAppDomain',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAppDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定应用域名.
     *
     * @param request - BindAppDomainRequest
     *
     * @returns BindAppDomainResponse
     *
     * @param BindAppDomainRequest $request
     *
     * @return BindAppDomainResponse
     */
    public function bindAppDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAppDomainWithOptions($request, $runtime);
    }

    /**
     * Create a website instance.
     *
     * @param request - CreateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a website instance.
     *
     * @param request - CreateAppInstanceRequest
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceWithOptions($request, $runtime);
    }

    /**
     * 免登ticket.
     *
     * @param request - CreateAppInstanceTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceTicketResponse
     *
     * @param CreateAppInstanceTicketRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAppInstanceTicketResponse
     */
    public function createAppInstanceTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstanceTicket',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 免登ticket.
     *
     * @param request - CreateAppInstanceTicketRequest
     *
     * @returns CreateAppInstanceTicketResponse
     *
     * @param CreateAppInstanceTicketRequest $request
     *
     * @return CreateAppInstanceTicketResponse
     */
    public function createAppInstanceTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceTicketWithOptions($request, $runtime);
    }

    /**
     * 提交创建Logo任务
     *
     * @param request - CreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logoVersion) {
            @$query['LogoVersion'] = $request->logoVersion;
        }

        if (null !== $request->negativePrompt) {
            @$query['NegativePrompt'] = $request->negativePrompt;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交创建Logo任务
     *
     * @param request - CreateLogoTaskRequest
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogoTaskWithOptions($request, $runtime);
    }

    /**
     * 删除域名的SSL证书.
     *
     * @param request - DeleteAppDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppDomainCertificateResponse
     *
     * @param DeleteAppDomainCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAppDomainCertificateResponse
     */
    public function deleteAppDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppDomainCertificate',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除域名的SSL证书.
     *
     * @param request - DeleteAppDomainCertificateRequest
     *
     * @returns DeleteAppDomainCertificateResponse
     *
     * @param DeleteAppDomainCertificateRequest $request
     *
     * @return DeleteAppDomainCertificateResponse
     */
    public function deleteAppDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * 删除域名的跳转规则.
     *
     * @param request - DeleteAppDomainRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppDomainRedirectResponse
     *
     * @param DeleteAppDomainRedirectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAppDomainRedirectResponse
     */
    public function deleteAppDomainRedirectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppDomainRedirect',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppDomainRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除域名的跳转规则.
     *
     * @param request - DeleteAppDomainRedirectRequest
     *
     * @returns DeleteAppDomainRedirectResponse
     *
     * @param DeleteAppDomainRedirectRequest $request
     *
     * @return DeleteAppDomainRedirectResponse
     */
    public function deleteAppDomainRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppDomainRedirectWithOptions($request, $runtime);
    }

    /**
     * 查询域名的DNS解析记录.
     *
     * @param request - DescribeAppDomainDnsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppDomainDnsRecordResponse
     *
     * @param DescribeAppDomainDnsRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAppDomainDnsRecordResponse
     */
    public function describeAppDomainDnsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->purpose) {
            @$query['Purpose'] = $request->purpose;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppDomainDnsRecord',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppDomainDnsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名的DNS解析记录.
     *
     * @param request - DescribeAppDomainDnsRecordRequest
     *
     * @returns DescribeAppDomainDnsRecordResponse
     *
     * @param DescribeAppDomainDnsRecordRequest $request
     *
     * @return DescribeAppDomainDnsRecordResponse
     */
    public function describeAppDomainDnsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppDomainDnsRecordWithOptions($request, $runtime);
    }

    /**
     * DispatchConsoleAPIForPartner.
     *
     * @param request - DispatchConsoleAPIForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DispatchConsoleAPIForPartnerResponse
     *
     * @param DispatchConsoleAPIForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DispatchConsoleAPIForPartnerResponse
     */
    public function dispatchConsoleAPIForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->liveToken) {
            @$query['LiveToken'] = $request->liveToken;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->siteHost) {
            @$query['SiteHost'] = $request->siteHost;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DispatchConsoleAPIForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DispatchConsoleAPIForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DispatchConsoleAPIForPartner.
     *
     * @param request - DispatchConsoleAPIForPartnerRequest
     *
     * @returns DispatchConsoleAPIForPartnerResponse
     *
     * @param DispatchConsoleAPIForPartnerRequest $request
     *
     * @return DispatchConsoleAPIForPartnerResponse
     */
    public function dispatchConsoleAPIForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dispatchConsoleAPIForPartnerWithOptions($request, $runtime);
    }

    /**
     * 查询应用实例详情.
     *
     * @param request - GetAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceResponse
     *
     * @param GetAppInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAppInstanceResponse
     */
    public function getAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用实例详情.
     *
     * @param request - GetAppInstanceRequest
     *
     * @returns GetAppInstanceResponse
     *
     * @param GetAppInstanceRequest $request
     *
     * @return GetAppInstanceResponse
     */
    public function getAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceWithOptions($request, $runtime);
    }

    /**
     * 查询Logo创建任务
     *
     * @param request - GetCreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Logo创建任务
     *
     * @param request - GetCreateLogoTaskRequest
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateLogoTaskWithOptions($request, $runtime);
    }

    /**
     * 提供给服务商的域名查询接口.
     *
     * @param request - GetDomainInfoForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainInfoForPartnerResponse
     *
     * @param GetDomainInfoForPartnerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDomainInfoForPartnerResponse
     */
    public function getDomainInfoForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomainInfoForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提供给服务商的域名查询接口.
     *
     * @param request - GetDomainInfoForPartnerRequest
     *
     * @returns GetDomainInfoForPartnerResponse
     *
     * @param GetDomainInfoForPartnerRequest $request
     *
     * @return GetDomainInfoForPartnerResponse
     */
    public function getDomainInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * 查询域名备案信息.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIcpFilingInfoForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIcpFilingInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名备案信息.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIcpFilingInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * 通过授权码得到accessToken.
     *
     * @param request - GetUserAccessTokenForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAccessTokenForPartnerResponse
     *
     * @param GetUserAccessTokenForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserAccessTokenForPartnerResponse
     */
    public function getUserAccessTokenForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteHost) {
            @$query['SiteHost'] = $request->siteHost;
        }

        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserAccessTokenForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAccessTokenForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过授权码得到accessToken.
     *
     * @param request - GetUserAccessTokenForPartnerRequest
     *
     * @returns GetUserAccessTokenForPartnerResponse
     *
     * @param GetUserAccessTokenForPartnerRequest $request
     *
     * @return GetUserAccessTokenForPartnerResponse
     */
    public function getUserAccessTokenForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAccessTokenForPartnerWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴获取用户SLR角色授权临时凭证
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPurpose) {
            @$query['AuthPurpose'] = $request->authPurpose;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->serviceLinkedRole) {
            @$query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserTmpIdentityForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserTmpIdentityForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴获取用户SLR角色授权临时凭证
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTmpIdentityForPartnerWithOptions($request, $runtime);
    }

    /**
     * 查询域名的跳转规则列表.
     *
     * @param request - ListAppDomainRedirectRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppDomainRedirectRecordsResponse
     *
     * @param ListAppDomainRedirectRecordsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAppDomainRedirectRecordsResponse
     */
    public function listAppDomainRedirectRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppDomainRedirectRecords',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppDomainRedirectRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名的跳转规则列表.
     *
     * @param request - ListAppDomainRedirectRecordsRequest
     *
     * @returns ListAppDomainRedirectRecordsResponse
     *
     * @param ListAppDomainRedirectRecordsRequest $request
     *
     * @return ListAppDomainRedirectRecordsResponse
     */
    public function listAppDomainRedirectRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppDomainRedirectRecordsWithOptions($request, $runtime);
    }

    /**
     * 查询应用实例下的所有域名列表.
     *
     * @param request - ListAppInstanceDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstanceDomainsResponse
     *
     * @param ListAppInstanceDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAppInstanceDomainsResponse
     */
    public function listAppInstanceDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInstanceDomains',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用实例下的所有域名列表.
     *
     * @param request - ListAppInstanceDomainsRequest
     *
     * @returns ListAppInstanceDomainsResponse
     *
     * @param ListAppInstanceDomainsRequest $request
     *
     * @return ListAppInstanceDomainsResponse
     */
    public function listAppInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * 建站实例列表查询.
     *
     * @param tmpReq - ListAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAppInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->endTimeBegin) {
            @$query['EndTimeBegin'] = $request->endTimeBegin;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInstances',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 建站实例列表查询.
     *
     * @param request - ListAppInstancesRequest
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstancesWithOptions($request, $runtime);
    }

    /**
     * 建站实例变配.
     *
     * @param request - ModifyAppInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInstanceSpecResponse
     *
     * @param ModifyAppInstanceSpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAppInstanceSpecResponse
     */
    public function modifyAppInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployArea) {
            @$query['DeployArea'] = $request->deployArea;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstanceSpec',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 建站实例变配.
     *
     * @param request - ModifyAppInstanceSpecRequest
     *
     * @returns ModifyAppInstanceSpecResponse
     *
     * @param ModifyAppInstanceSpecRequest $request
     *
     * @return ModifyAppInstanceSpecResponse
     */
    public function modifyAppInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴操作应用.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴操作应用.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴操作应用服务
     *
     * @param request - OperateAppServiceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppServiceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppServiceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴操作应用服务
     *
     * @param request - OperateAppServiceForPartnerRequest
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppServiceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 刷新ticket.
     *
     * @param request - RefreshAppInstanceTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAppInstanceTicketResponse
     *
     * @param RefreshAppInstanceTicketRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RefreshAppInstanceTicketResponse
     */
    public function refreshAppInstanceTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshAppInstanceTicket',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAppInstanceTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 刷新ticket.
     *
     * @param request - RefreshAppInstanceTicketRequest
     *
     * @returns RefreshAppInstanceTicketResponse
     *
     * @param RefreshAppInstanceTicketRequest $request
     *
     * @return RefreshAppInstanceTicketResponse
     */
    public function refreshAppInstanceTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAppInstanceTicketWithOptions($request, $runtime);
    }

    /**
     * 渠道业务退款接口.
     *
     * @param request - RefundAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundAppInstanceForPartnerResponse
     *
     * @param RefundAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RefundAppInstanceForPartnerResponse
     */
    public function refundAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->refundReason) {
            @$query['RefundReason'] = $request->refundReason;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefundAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 渠道业务退款接口.
     *
     * @param request - RefundAppInstanceForPartnerRequest
     *
     * @returns RefundAppInstanceForPartnerResponse
     *
     * @param RefundAppInstanceForPartnerRequest $request
     *
     * @return RefundAppInstanceForPartnerResponse
     */
    public function refundAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 建站实例续费.
     *
     * @param request - RenewAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppInstanceResponse
     *
     * @param RenewAppInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RenewAppInstanceResponse
     */
    public function renewAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAppInstance',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 建站实例续费.
     *
     * @param request - RenewAppInstanceRequest
     *
     * @returns RenewAppInstanceResponse
     *
     * @param RenewAppInstanceRequest $request
     *
     * @return RenewAppInstanceResponse
     */
    public function renewAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppInstanceWithOptions($request, $runtime);
    }

    /**
     * 图片检索.
     *
     * @param tmpReq - SearchImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'simple');
        }

        $query = [];
        if (null !== $request->colorHex) {
            @$query['ColorHex'] = $request->colorHex;
        }

        if (null !== $request->hasPerson) {
            @$query['HasPerson'] = $request->hasPerson;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageRatio) {
            @$query['ImageRatio'] = $request->imageRatio;
        }

        if (null !== $request->maxHeight) {
            @$query['MaxHeight'] = $request->maxHeight;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->maxWidth) {
            @$query['MaxWidth'] = $request->maxWidth;
        }

        if (null !== $request->minHeight) {
            @$query['MinHeight'] = $request->minHeight;
        }

        if (null !== $request->minWidth) {
            @$query['MinWidth'] = $request->minWidth;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchImage',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片检索.
     *
     * @param request - SearchImageRequest
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageWithOptions($request, $runtime);
    }

    /**
     * 设置域名的SSL证书.
     *
     * @param request - SetAppDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAppDomainCertificateResponse
     *
     * @param SetAppDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetAppDomainCertificateResponse
     */
    public function setAppDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->certificateName) {
            @$query['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->certificateType) {
            @$query['CertificateType'] = $request->certificateType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->publicKey) {
            @$query['PublicKey'] = $request->publicKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAppDomainCertificate',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAppDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置域名的SSL证书.
     *
     * @param request - SetAppDomainCertificateRequest
     *
     * @returns SetAppDomainCertificateResponse
     *
     * @param SetAppDomainCertificateRequest $request
     *
     * @return SetAppDomainCertificateResponse
     */
    public function setAppDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴同步应用实例.
     *
     * @param tmpReq - SyncAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartnerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncAppInstanceForPartnerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appInstance) {
            $request->appInstanceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appInstance, 'AppInstance', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceShrink) {
            @$query['AppInstance'] = $request->appInstanceShrink;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        if (null !== $request->sourceBizId) {
            @$query['SourceBizId'] = $request->sourceBizId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴同步应用实例.
     *
     * @param request - SyncAppInstanceForPartnerRequest
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $request
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 解绑应用域名.
     *
     * @param request - UnbindAppDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAppDomainResponse
     *
     * @param UnbindAppDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindAppDomainResponse
     */
    public function unbindAppDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindAppDomain',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAppDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑应用域名.
     *
     * @param request - UnbindAppDomainRequest
     *
     * @returns UnbindAppDomainResponse
     *
     * @param UnbindAppDomainRequest $request
     *
     * @return UnbindAppDomainResponse
     */
    public function unbindAppDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAppDomainWithOptions($request, $runtime);
    }
}
