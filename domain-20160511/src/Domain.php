<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Domain\V20160511\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\DeleteContactTemplateRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\DeleteContactTemplateResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskDetailListRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskDetailListResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskListRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskListResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactTemplateRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactTemplateResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainBySaleIdRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainBySaleIdResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainListRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainListResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryFailReasonListRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryFailReasonListResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveContactTemplateCredentialRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveContactTemplateCredentialResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveContactTemplateRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveContactTemplateResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForModifyingDomainDnsRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForModifyingDomainDnsResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForSubmittingDomainNameCredentialByTemplateIdRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForSubmittingDomainNameCredentialRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForSubmittingDomainNameCredentialResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForUpdatingContactByTempateIdRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForUpdatingContactByTempateIdResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForUpdatingContactByTemplateIdRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\SaveTaskForUpdatingContactByTemplateIdResponse;
use AlibabaCloud\SDK\Domain\V20160511\Models\WhoisProtectionRequest;
use AlibabaCloud\SDK\Domain\V20160511\Models\WhoisProtectionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Domain extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('domain', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 域名检查.
     *
     * @param request - CheckDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomain',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 域名检查.
     *
     * @param request - CheckDomainRequest
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     *
     * @return CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * 删除联系人模板
     *
     * @param request - DeleteContactTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactTemplateResponse
     *
     * @param DeleteContactTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteContactTemplateResponse
     */
    public function deleteContactTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactTemplate',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除联系人模板
     *
     * @param request - DeleteContactTemplateRequest
     *
     * @returns DeleteContactTemplateResponse
     *
     * @param DeleteContactTemplateRequest $request
     *
     * @return DeleteContactTemplateResponse
     */
    public function deleteContactTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactTemplateWithOptions($request, $runtime);
    }

    /**
     * 查询任务详情列表.
     *
     * @param request - QueryBatchTaskDetailListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBatchTaskDetailListResponse
     *
     * @param QueryBatchTaskDetailListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryBatchTaskDetailListResponse
     */
    public function queryBatchTaskDetailListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->taskNo) {
            @$query['TaskNo'] = $request->taskNo;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBatchTaskDetailList',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBatchTaskDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务详情列表.
     *
     * @param request - QueryBatchTaskDetailListRequest
     *
     * @returns QueryBatchTaskDetailListResponse
     *
     * @param QueryBatchTaskDetailListRequest $request
     *
     * @return QueryBatchTaskDetailListResponse
     */
    public function queryBatchTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBatchTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * 查询任务列表.
     *
     * @param request - QueryBatchTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBatchTaskListResponse
     *
     * @param QueryBatchTaskListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryBatchTaskListResponse
     */
    public function queryBatchTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginCreateTime) {
            @$query['BeginCreateTime'] = $request->beginCreateTime;
        }

        if (null !== $request->endCreateTime) {
            @$query['EndCreateTime'] = $request->endCreateTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBatchTaskList',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBatchTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务列表.
     *
     * @param request - QueryBatchTaskListRequest
     *
     * @returns QueryBatchTaskListResponse
     *
     * @param QueryBatchTaskListRequest $request
     *
     * @return QueryBatchTaskListResponse
     */
    public function queryBatchTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBatchTaskListWithOptions($request, $runtime);
    }

    /**
     * 查询联系人.
     *
     * @param request - QueryContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContactResponse
     *
     * @param QueryContactRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryContactResponse
     */
    public function queryContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryContact',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人.
     *
     * @param request - QueryContactRequest
     *
     * @returns QueryContactResponse
     *
     * @param QueryContactRequest $request
     *
     * @return QueryContactResponse
     */
    public function queryContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactWithOptions($request, $runtime);
    }

    /**
     * 查询联系人模板
     *
     * @param request - QueryContactTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContactTemplateResponse
     *
     * @param QueryContactTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryContactTemplateResponse
     */
    public function queryContactTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->CCompany) {
            @$query['CCompany'] = $request->CCompany;
        }

        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->defaultTemplate) {
            @$query['DefaultTemplate'] = $request->defaultTemplate;
        }

        if (null !== $request->ECompany) {
            @$query['ECompany'] = $request->ECompany;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regType) {
            @$query['RegType'] = $request->regType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryContactTemplate',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContactTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人模板
     *
     * @param request - QueryContactTemplateRequest
     *
     * @returns QueryContactTemplateResponse
     *
     * @param QueryContactTemplateRequest $request
     *
     * @return QueryContactTemplateResponse
     */
    public function queryContactTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactTemplateWithOptions($request, $runtime);
    }

    /**
     * 根据saleId查询域名信息.
     *
     * @param request - QueryDomainBySaleIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainBySaleIdResponse
     *
     * @param QueryDomainBySaleIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDomainBySaleIdResponse
     */
    public function queryDomainBySaleIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainBySaleId',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainBySaleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据saleId查询域名信息.
     *
     * @param request - QueryDomainBySaleIdRequest
     *
     * @returns QueryDomainBySaleIdResponse
     *
     * @param QueryDomainBySaleIdRequest $request
     *
     * @return QueryDomainBySaleIdResponse
     */
    public function queryDomainBySaleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainBySaleIdWithOptions($request, $runtime);
    }

    /**
     * 查询域名列表.
     *
     * @param request - QueryDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deadEndDate) {
            @$query['DeadEndDate'] = $request->deadEndDate;
        }

        if (null !== $request->deadStartDate) {
            @$query['DeadStartDate'] = $request->deadStartDate;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderByType) {
            @$query['OrderByType'] = $request->orderByType;
        }

        if (null !== $request->orderKeyType) {
            @$query['OrderKeyType'] = $request->orderKeyType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productDomainType) {
            @$query['ProductDomainType'] = $request->productDomainType;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->regEndDate) {
            @$query['RegEndDate'] = $request->regEndDate;
        }

        if (null !== $request->regStartDate) {
            @$query['RegStartDate'] = $request->regStartDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainList',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名列表.
     *
     * @param request - QueryDomainListRequest
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainListWithOptions($request, $runtime);
    }

    /**
     * 查询失败原因列表.
     *
     * @param request - QueryFailReasonListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailReasonListResponse
     *
     * @param QueryFailReasonListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryFailReasonListResponse
     */
    public function queryFailReasonListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailReasonList',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailReasonListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询失败原因列表.
     *
     * @param request - QueryFailReasonListRequest
     *
     * @returns QueryFailReasonListResponse
     *
     * @param QueryFailReasonListRequest $request
     *
     * @return QueryFailReasonListResponse
     */
    public function queryFailReasonList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailReasonListWithOptions($request, $runtime);
    }

    /**
     * 保存联系人模板
     *
     * @param request - SaveContactTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactTemplateResponse
     *
     * @param SaveContactTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SaveContactTemplateResponse
     */
    public function saveContactTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CCity) {
            @$query['CCity'] = $request->CCity;
        }

        if (null !== $request->CCompany) {
            @$query['CCompany'] = $request->CCompany;
        }

        if (null !== $request->CCountry) {
            @$query['CCountry'] = $request->CCountry;
        }

        if (null !== $request->CName) {
            @$query['CName'] = $request->CName;
        }

        if (null !== $request->CProvince) {
            @$query['CProvince'] = $request->CProvince;
        }

        if (null !== $request->CVenu) {
            @$query['CVenu'] = $request->CVenu;
        }

        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->defaultTemplate) {
            @$query['DefaultTemplate'] = $request->defaultTemplate;
        }

        if (null !== $request->ECity) {
            @$query['ECity'] = $request->ECity;
        }

        if (null !== $request->ECompany) {
            @$query['ECompany'] = $request->ECompany;
        }

        if (null !== $request->EName) {
            @$query['EName'] = $request->EName;
        }

        if (null !== $request->EProvince) {
            @$query['EProvince'] = $request->EProvince;
        }

        if (null !== $request->EVenu) {
            @$query['EVenu'] = $request->EVenu;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->regType) {
            @$query['RegType'] = $request->regType;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telMain) {
            @$query['TelMain'] = $request->telMain;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveContactTemplate',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存联系人模板
     *
     * @param request - SaveContactTemplateRequest
     *
     * @returns SaveContactTemplateResponse
     *
     * @param SaveContactTemplateRequest $request
     *
     * @return SaveContactTemplateResponse
     */
    public function saveContactTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactTemplateWithOptions($request, $runtime);
    }

    /**
     * 保存联系人模板实名资料.
     *
     * @param request - SaveContactTemplateCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactTemplateCredentialResponse
     *
     * @param SaveContactTemplateCredentialRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SaveContactTemplateCredentialResponse
     */
    public function saveContactTemplateCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->credential) {
            @$query['Credential'] = $request->credential;
        }

        if (null !== $request->credentialNo) {
            @$query['CredentialNo'] = $request->credentialNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveContactTemplateCredential',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactTemplateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存联系人模板实名资料.
     *
     * @param request - SaveContactTemplateCredentialRequest
     *
     * @returns SaveContactTemplateCredentialResponse
     *
     * @param SaveContactTemplateCredentialRequest $request
     *
     * @return SaveContactTemplateCredentialResponse
     */
    public function saveContactTemplateCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactTemplateCredentialWithOptions($request, $runtime);
    }

    /**
     * 修改域名dns任务,对外开放接口，用于domain中.
     *
     * @param request - SaveTaskForModifyingDomainDnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForModifyingDomainDnsResponse
     *
     * @param SaveTaskForModifyingDomainDnsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SaveTaskForModifyingDomainDnsResponse
     */
    public function saveTaskForModifyingDomainDnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunDns) {
            @$query['AliyunDns'] = $request->aliyunDns;
        }

        if (null !== $request->dnsList) {
            @$query['DnsList'] = $request->dnsList;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForModifyingDomainDns',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForModifyingDomainDnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改域名dns任务,对外开放接口，用于domain中.
     *
     * @param request - SaveTaskForModifyingDomainDnsRequest
     *
     * @returns SaveTaskForModifyingDomainDnsResponse
     *
     * @param SaveTaskForModifyingDomainDnsRequest $request
     *
     * @return SaveTaskForModifyingDomainDnsResponse
     */
    public function saveTaskForModifyingDomainDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForModifyingDomainDnsWithOptions($request, $runtime);
    }

    /**
     * 保存域名实名资料任务
     *
     * @param request - SaveTaskForSubmittingDomainNameCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForSubmittingDomainNameCredentialResponse
     *
     * @param SaveTaskForSubmittingDomainNameCredentialRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return SaveTaskForSubmittingDomainNameCredentialResponse
     */
    public function saveTaskForSubmittingDomainNameCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credential) {
            @$query['Credential'] = $request->credential;
        }

        if (null !== $request->credentialNo) {
            @$query['CredentialNo'] = $request->credentialNo;
        }

        if (null !== $request->credentialType) {
            @$query['CredentialType'] = $request->credentialType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForSubmittingDomainNameCredential',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForSubmittingDomainNameCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存域名实名资料任务
     *
     * @param request - SaveTaskForSubmittingDomainNameCredentialRequest
     *
     * @returns SaveTaskForSubmittingDomainNameCredentialResponse
     *
     * @param SaveTaskForSubmittingDomainNameCredentialRequest $request
     *
     * @return SaveTaskForSubmittingDomainNameCredentialResponse
     */
    public function saveTaskForSubmittingDomainNameCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainNameCredentialWithOptions($request, $runtime);
    }

    /**
     * 根据模板保存域名的实名认证信息.
     *
     * @param request - SaveTaskForSubmittingDomainNameCredentialByTemplateIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse
     *
     * @param SaveTaskForSubmittingDomainNameCredentialByTemplateIdRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse
     */
    public function saveTaskForSubmittingDomainNameCredentialByTemplateIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForSubmittingDomainNameCredentialByTemplateId',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据模板保存域名的实名认证信息.
     *
     * @param request - SaveTaskForSubmittingDomainNameCredentialByTemplateIdRequest
     *
     * @returns SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse
     *
     * @param SaveTaskForSubmittingDomainNameCredentialByTemplateIdRequest $request
     *
     * @return SaveTaskForSubmittingDomainNameCredentialByTemplateIdResponse
     */
    public function saveTaskForSubmittingDomainNameCredentialByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainNameCredentialByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * 保存修改联系人的任务
     *
     * @param request - SaveTaskForUpdatingContactByTempateIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForUpdatingContactByTempateIdResponse
     *
     * @param SaveTaskForUpdatingContactByTempateIdRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveTaskForUpdatingContactByTempateIdResponse
     */
    public function saveTaskForUpdatingContactByTempateIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addTransferLock) {
            @$query['AddTransferLock'] = $request->addTransferLock;
        }

        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForUpdatingContactByTempateId',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForUpdatingContactByTempateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存修改联系人的任务
     *
     * @param request - SaveTaskForUpdatingContactByTempateIdRequest
     *
     * @returns SaveTaskForUpdatingContactByTempateIdResponse
     *
     * @param SaveTaskForUpdatingContactByTempateIdRequest $request
     *
     * @return SaveTaskForUpdatingContactByTempateIdResponse
     */
    public function saveTaskForUpdatingContactByTempateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingContactByTempateIdWithOptions($request, $runtime);
    }

    /**
     * 保存修改联系人的任务
     *
     * @param request - SaveTaskForUpdatingContactByTemplateIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForUpdatingContactByTemplateIdResponse
     *
     * @param SaveTaskForUpdatingContactByTemplateIdRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveTaskForUpdatingContactByTemplateIdResponse
     */
    public function saveTaskForUpdatingContactByTemplateIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addTransferLock) {
            @$query['AddTransferLock'] = $request->addTransferLock;
        }

        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForUpdatingContactByTemplateId',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForUpdatingContactByTemplateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存修改联系人的任务
     *
     * @param request - SaveTaskForUpdatingContactByTemplateIdRequest
     *
     * @returns SaveTaskForUpdatingContactByTemplateIdResponse
     *
     * @param SaveTaskForUpdatingContactByTemplateIdRequest $request
     *
     * @return SaveTaskForUpdatingContactByTemplateIdResponse
     */
    public function saveTaskForUpdatingContactByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingContactByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * 开启或者关闭whois保护.
     *
     * @param request - WhoisProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WhoisProtectionResponse
     *
     * @param WhoisProtectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return WhoisProtectionResponse
     */
    public function whoisProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataContent) {
            @$query['DataContent'] = $request->dataContent;
        }

        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->whoisProtect) {
            @$query['WhoisProtect'] = $request->whoisProtect;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WhoisProtection',
            'version' => '2016-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WhoisProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启或者关闭whois保护.
     *
     * @param request - WhoisProtectionRequest
     *
     * @returns WhoisProtectionResponse
     *
     * @param WhoisProtectionRequest $request
     *
     * @return WhoisProtectionResponse
     */
    public function whoisProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->whoisProtectionWithOptions($request, $runtime);
    }
}
