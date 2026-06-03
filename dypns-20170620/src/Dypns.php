<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ConfigVerifySceneAppInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ConfigVerifySceneAppInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CopySchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CopySchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CopyVerifySchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CopyVerifySchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyCallBackTestRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyCallBackTestResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyMessageCallBackRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyMessageCallBackResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyMessageQueueRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateDypnsSmsVerifyMessageQueueResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateFileByBizRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateFileByBizResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateGateVerifyExportLogRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateGateVerifyExportLogResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateGraphicAuthSchemeConfigRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateGraphicAuthSchemeConfigResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateProductRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateProductResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSchemeConfigRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSchemeConfigResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsTemplateRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsTemplateResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsVerifyStatisticRecordsExportTaskRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateSmsVerifyStatisticRecordsExportTaskResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreatetVerifySmsExportTaskRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreatetVerifySmsExportTaskResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateVerifySchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\CreateVerifySchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\DeleteSceneRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\DeleteSchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\DeleteSchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetDownLoadFileUrlRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetDownLoadFileUrlResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetEnterpriseInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetEnterpriseInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOpenSubProductStatusRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOpenSubProductStatusResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOssUploadForEnterpriseRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOssUploadForEnterpriseResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOssUploadSignRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetOssUploadSignResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsCodeLimitConfigRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsCodeLimitConfigResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsSignRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsSignResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListAuditPassEnterpriseInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListAuditPassEnterpriseInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListCertificateRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListCertificateResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListEnterpriseInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListEnterpriseInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSchemeRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSchemeResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsSignRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsSignResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsTemplateRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsTemplateResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\OpenCommonProductRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\OpenCommonProductResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonBillingRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonBillingResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonCustInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonCustInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonStatisticPreviewRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonStatisticPreviewResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonStatisticRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryCommonStatisticResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDayuMigrateStatusRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDayuMigrateStatusResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDictDataItemRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDictDataItemResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyBillingRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyBillingResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyRecordListRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyRecordListResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyStatisticRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryGateVerifyStatisticResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsConfigRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsConfigResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageDetailRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageDetailResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageListRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageListResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageStatisticsRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryPnsPackageStatisticsResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QuerySceneListRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QuerySceneListResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QuerySdkVersionRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QuerySdkVersionResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryTagStatusRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryTagStatusResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\RemoveGateVerifyExportLogRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\RemoveGateVerifyExportLogResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\SubmitEnterpriseInfoRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\SubmitEnterpriseInfoResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\UpdateExportLogStateRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\UpdateExportLogStateResponse;
use AlibabaCloud\SDK\Dypns\V20170620\Models\UpdateSmsCodeLimitConfigRequest;
use AlibabaCloud\SDK\Dypns\V20170620\Models\UpdateSmsCodeLimitConfigResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dypns extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dypns', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 配置认证方案APP信息.
     *
     * @param request - ConfigVerifySceneAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigVerifySceneAppInfoResponse
     *
     * @param ConfigVerifySceneAppInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfigVerifySceneAppInfoResponse
     */
    public function configVerifySceneAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CM) {
            @$query['CM'] = $request->CM;
        }

        if (null !== $request->CT) {
            @$query['CT'] = $request->CT;
        }

        if (null !== $request->CU) {
            @$query['CU'] = $request->CU;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->ipWhitelist) {
            @$query['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigVerifySceneAppInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigVerifySceneAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置认证方案APP信息.
     *
     * @param request - ConfigVerifySceneAppInfoRequest
     *
     * @returns ConfigVerifySceneAppInfoResponse
     *
     * @param ConfigVerifySceneAppInfoRequest $request
     *
     * @return ConfigVerifySceneAppInfoResponse
     */
    public function configVerifySceneAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configVerifySceneAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - CopySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopySchemeResponse
     *
     * @param CopySchemeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CopySchemeResponse
     */
    public function copySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeId) {
            @$query['SchemeId'] = $request->schemeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CopySchemeRequest
     *
     * @returns CopySchemeResponse
     *
     * @param CopySchemeRequest $request
     *
     * @return CopySchemeResponse
     */
    public function copyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySchemeWithOptions($request, $runtime);
    }

    /**
     * 复制号码认证方案信息.
     *
     * @param request - CopyVerifySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyVerifySchemeResponse
     *
     * @param CopyVerifySchemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CopyVerifySchemeResponse
     */
    public function copyVerifySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cmApiCode) {
            @$query['CmApiCode'] = $request->cmApiCode;
        }

        if (null !== $request->cmNewFlag) {
            @$query['CmNewFlag'] = $request->cmNewFlag;
        }

        if (null !== $request->ctApiCode) {
            @$query['CtApiCode'] = $request->ctApiCode;
        }

        if (null !== $request->ctNewFlag) {
            @$query['CtNewFlag'] = $request->ctNewFlag;
        }

        if (null !== $request->cuApiCode) {
            @$query['CuApiCode'] = $request->cuApiCode;
        }

        if (null !== $request->cuNewFlag) {
            @$query['CuNewFlag'] = $request->cuNewFlag;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->modelSceneCode) {
            @$query['ModelSceneCode'] = $request->modelSceneCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyVerifyScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 复制号码认证方案信息.
     *
     * @param request - CopyVerifySchemeRequest
     *
     * @returns CopyVerifySchemeResponse
     *
     * @param CopyVerifySchemeRequest $request
     *
     * @return CopyVerifySchemeResponse
     */
    public function copyVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * 创建短信认证2.0http回执测试.
     *
     * @param request - CreateDypnsSmsVerifyCallBackTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDypnsSmsVerifyCallBackTestResponse
     *
     * @param CreateDypnsSmsVerifyCallBackTestRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateDypnsSmsVerifyCallBackTestResponse
     */
    public function createDypnsSmsVerifyCallBackTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDypnsSmsVerifyCallBackTest',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDypnsSmsVerifyCallBackTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短信认证2.0http回执测试.
     *
     * @param request - CreateDypnsSmsVerifyCallBackTestRequest
     *
     * @returns CreateDypnsSmsVerifyCallBackTestResponse
     *
     * @param CreateDypnsSmsVerifyCallBackTestRequest $request
     *
     * @return CreateDypnsSmsVerifyCallBackTestResponse
     */
    public function createDypnsSmsVerifyCallBackTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDypnsSmsVerifyCallBackTestWithOptions($request, $runtime);
    }

    /**
     * 创建短信认证2.0http回执url.
     *
     * @param request - CreateDypnsSmsVerifyMessageCallBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDypnsSmsVerifyMessageCallBackResponse
     *
     * @param CreateDypnsSmsVerifyMessageCallBackRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateDypnsSmsVerifyMessageCallBackResponse
     */
    public function createDypnsSmsVerifyMessageCallBackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDypnsSmsVerifyMessageCallBack',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDypnsSmsVerifyMessageCallBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短信认证2.0http回执url.
     *
     * @param request - CreateDypnsSmsVerifyMessageCallBackRequest
     *
     * @returns CreateDypnsSmsVerifyMessageCallBackResponse
     *
     * @param CreateDypnsSmsVerifyMessageCallBackRequest $request
     *
     * @return CreateDypnsSmsVerifyMessageCallBackResponse
     */
    public function createDypnsSmsVerifyMessageCallBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDypnsSmsVerifyMessageCallBackWithOptions($request, $runtime);
    }

    /**
     * 创建短信认证2.0mns回执队列.
     *
     * @param request - CreateDypnsSmsVerifyMessageQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDypnsSmsVerifyMessageQueueResponse
     *
     * @param CreateDypnsSmsVerifyMessageQueueRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateDypnsSmsVerifyMessageQueueResponse
     */
    public function createDypnsSmsVerifyMessageQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryQueueTypes) {
            @$query['QueryQueueTypes'] = $request->queryQueueTypes;
        }

        if (null !== $request->queueType) {
            @$query['QueueType'] = $request->queueType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDypnsSmsVerifyMessageQueue',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDypnsSmsVerifyMessageQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短信认证2.0mns回执队列.
     *
     * @param request - CreateDypnsSmsVerifyMessageQueueRequest
     *
     * @returns CreateDypnsSmsVerifyMessageQueueResponse
     *
     * @param CreateDypnsSmsVerifyMessageQueueRequest $request
     *
     * @return CreateDypnsSmsVerifyMessageQueueResponse
     */
    public function createDypnsSmsVerifyMessageQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDypnsSmsVerifyMessageQueueWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateFileByBizRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileByBizResponse
     *
     * @param CreateFileByBizRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFileByBizResponse
     */
    public function createFileByBizWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->saveOssFileName) {
            @$query['SaveOssFileName'] = $request->saveOssFileName;
        }

        if (null !== $request->userViewFileName) {
            @$query['UserViewFileName'] = $request->userViewFileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileByBiz',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileByBizResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateFileByBizRequest
     *
     * @returns CreateFileByBizResponse
     *
     * @param CreateFileByBizRequest $request
     *
     * @return CreateFileByBizResponse
     */
    public function createFileByBiz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileByBizWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateGateVerifyExportLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGateVerifyExportLogResponse
     *
     * @param CreateGateVerifyExportLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateGateVerifyExportLogResponse
     */
    public function createGateVerifyExportLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryMonth) {
            @$query['QueryMonth'] = $request->queryMonth;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGateVerifyExportLog',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGateVerifyExportLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateGateVerifyExportLogRequest
     *
     * @returns CreateGateVerifyExportLogResponse
     *
     * @param CreateGateVerifyExportLogRequest $request
     *
     * @return CreateGateVerifyExportLogResponse
     */
    public function createGateVerifyExportLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGateVerifyExportLogWithOptions($request, $runtime);
    }

    /**
     * 创建图形认证方案号.
     *
     * @param request - CreateGraphicAuthSchemeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGraphicAuthSchemeConfigResponse
     *
     * @param CreateGraphicAuthSchemeConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateGraphicAuthSchemeConfigResponse
     */
    public function createGraphicAuthSchemeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGraphicAuthSchemeConfig',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGraphicAuthSchemeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建图形认证方案号.
     *
     * @param request - CreateGraphicAuthSchemeConfigRequest
     *
     * @returns CreateGraphicAuthSchemeConfigResponse
     *
     * @param CreateGraphicAuthSchemeConfigRequest $request
     *
     * @return CreateGraphicAuthSchemeConfigResponse
     */
    public function createGraphicAuthSchemeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGraphicAuthSchemeConfigWithOptions($request, $runtime);
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * 融合认证-新增方案.
     *
     * @param request - CreateSchemeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSchemeConfigResponse
     *
     * @param CreateSchemeConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidPackageName) {
            @$query['AndroidPackageName'] = $request->androidPackageName;
        }

        if (null !== $request->androidPackageSign) {
            @$query['AndroidPackageSign'] = $request->androidPackageSign;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->h5Origin) {
            @$query['H5Origin'] = $request->h5Origin;
        }

        if (null !== $request->h5Url) {
            @$query['H5Url'] = $request->h5Url;
        }

        if (null !== $request->iosBundleId) {
            @$query['IosBundleId'] = $request->iosBundleId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSchemeConfig',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSchemeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 融合认证-新增方案.
     *
     * @param request - CreateSchemeConfigRequest
     *
     * @returns CreateSchemeConfigResponse
     *
     * @param CreateSchemeConfigRequest $request
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemeConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appUrl) {
            @$query['AppUrl'] = $request->appUrl;
        }

        if (null !== $request->businessLicenseCert) {
            @$query['BusinessLicenseCert'] = $request->businessLicenseCert;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->extendMessage) {
            @$query['ExtendMessage'] = $request->extendMessage;
        }

        if (null !== $request->oldSmsSignName) {
            @$query['OldSmsSignName'] = $request->oldSmsSignName;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->organizationCodeCert) {
            @$query['OrganizationCodeCert'] = $request->organizationCodeCert;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->smsSignName) {
            @$query['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->smsSignRemark) {
            @$query['SmsSignRemark'] = $request->smsSignRemark;
        }

        if (null !== $request->smsSignSource) {
            @$query['SmsSignSource'] = $request->smsSignSource;
        }

        if (null !== $request->taxRegistrationCert) {
            @$query['TaxRegistrationCert'] = $request->taxRegistrationCert;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSignRequest
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsTemplateResponse
     *
     * @param CreateSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizUrl) {
            @$query['BizUrl'] = $request->bizUrl;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->smsTemplateContent) {
            @$query['SmsTemplateContent'] = $request->smsTemplateContent;
        }

        if (null !== $request->smsTemplateName) {
            @$query['SmsTemplateName'] = $request->smsTemplateName;
        }

        if (null !== $request->smsTemplateRule) {
            @$query['SmsTemplateRule'] = $request->smsTemplateRule;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsTemplate',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsTemplateRequest
     *
     * @returns CreateSmsTemplateResponse
     *
     * @param CreateSmsTemplateRequest $request
     *
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建短信认证用量统计记录导出任务
     *
     * @param request - CreateSmsVerifyStatisticRecordsExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsVerifyStatisticRecordsExportTaskResponse
     *
     * @param CreateSmsVerifyStatisticRecordsExportTaskRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return CreateSmsVerifyStatisticRecordsExportTaskResponse
     */
    public function createSmsVerifyStatisticRecordsExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromDate) {
            @$query['FromDate'] = $request->fromDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->toDate) {
            @$query['ToDate'] = $request->toDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsVerifyStatisticRecordsExportTask',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsVerifyStatisticRecordsExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短信认证用量统计记录导出任务
     *
     * @param request - CreateSmsVerifyStatisticRecordsExportTaskRequest
     *
     * @returns CreateSmsVerifyStatisticRecordsExportTaskResponse
     *
     * @param CreateSmsVerifyStatisticRecordsExportTaskRequest $request
     *
     * @return CreateSmsVerifyStatisticRecordsExportTaskResponse
     */
    public function createSmsVerifyStatisticRecordsExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsVerifyStatisticRecordsExportTaskWithOptions($request, $runtime);
    }

    /**
     * 创建认证方案.
     *
     * @param request - CreateVerifySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVerifySchemeResponse
     *
     * @param CreateVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifySchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->cmApiCode) {
            @$query['CmApiCode'] = $request->cmApiCode;
        }

        if (null !== $request->ctApiCode) {
            @$query['CtApiCode'] = $request->ctApiCode;
        }

        if (null !== $request->cuApiCode) {
            @$query['CuApiCode'] = $request->cuApiCode;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->hmAppIdentifier) {
            @$query['HmAppIdentifier'] = $request->hmAppIdentifier;
        }

        if (null !== $request->hmPackageName) {
            @$query['HmPackageName'] = $request->hmPackageName;
        }

        if (null !== $request->hmSignName) {
            @$query['HmSignName'] = $request->hmSignName;
        }

        if (null !== $request->ipWhiteList) {
            @$query['IpWhiteList'] = $request->ipWhiteList;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packName) {
            @$query['PackName'] = $request->packName;
        }

        if (null !== $request->packSign) {
            @$query['PackSign'] = $request->packSign;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->smsSignName) {
            @$query['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVerifyScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建认证方案.
     *
     * @param request - CreateVerifySchemeRequest
     *
     * @returns CreateVerifySchemeResponse
     *
     * @param CreateVerifySchemeRequest $request
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * 创建短信认证导出任务
     *
     * @param request - CreatetVerifySmsExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatetVerifySmsExportTaskResponse
     *
     * @param CreatetVerifySmsExportTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatetVerifySmsExportTaskResponse
     */
    public function createtVerifySmsExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeName) {
            @$query['SchemeName'] = $request->schemeName;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatetVerifySmsExportTask',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatetVerifySmsExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短信认证导出任务
     *
     * @param request - CreatetVerifySmsExportTaskRequest
     *
     * @returns CreatetVerifySmsExportTaskResponse
     *
     * @param CreatetVerifySmsExportTaskRequest $request
     *
     * @return CreatetVerifySmsExportTaskResponse
     */
    public function createtVerifySmsExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createtVerifySmsExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSceneResponse
     *
     * @param DeleteSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSceneResponse
     */
    public function deleteSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScene',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSceneRequest
     *
     * @returns DeleteSceneResponse
     *
     * @param DeleteSceneRequest $request
     *
     * @return DeleteSceneResponse
     */
    public function deleteScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSchemeResponse
     *
     * @param DeleteSchemeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSchemeResponse
     */
    public function deleteSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeId) {
            @$query['SchemeId'] = $request->schemeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSchemeRequest
     *
     * @returns DeleteSchemeResponse
     *
     * @param DeleteSchemeRequest $request
     *
     * @return DeleteSchemeResponse
     */
    public function deleteScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemeWithOptions($request, $runtime);
    }

    /**
     * @param request - GetDownLoadFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDownLoadFileUrlResponse
     *
     * @param GetDownLoadFileUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDownLoadFileUrlResponse
     */
    public function getDownLoadFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acctId) {
            @$query['AcctId'] = $request->acctId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDownLoadFileUrl',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDownLoadFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDownLoadFileUrlRequest
     *
     * @returns GetDownLoadFileUrlResponse
     *
     * @param GetDownLoadFileUrlRequest $request
     *
     * @return GetDownLoadFileUrlResponse
     */
    public function getDownLoadFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDownLoadFileUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnterpriseInfoResponse
     *
     * @param GetEnterpriseInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEnterpriseInfoResponse
     */
    public function getEnterpriseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnterpriseInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetEnterpriseInfoRequest
     *
     * @returns GetEnterpriseInfoResponse
     *
     * @param GetEnterpriseInfoRequest $request
     *
     * @return GetEnterpriseInfoResponse
     */
    public function getEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetOpenSubProductStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpenSubProductStatusResponse
     *
     * @param GetOpenSubProductStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOpenSubProductStatusResponse
     */
    public function getOpenSubProductStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOpenSubProductStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOpenSubProductStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetOpenSubProductStatusRequest
     *
     * @returns GetOpenSubProductStatusResponse
     *
     * @param GetOpenSubProductStatusRequest $request
     *
     * @return GetOpenSubProductStatusResponse
     */
    public function getOpenSubProductStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenSubProductStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetOssUploadForEnterpriseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssUploadForEnterpriseResponse
     *
     * @param GetOssUploadForEnterpriseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetOssUploadForEnterpriseResponse
     */
    public function getOssUploadForEnterpriseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssUploadForEnterprise',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssUploadForEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetOssUploadForEnterpriseRequest
     *
     * @returns GetOssUploadForEnterpriseResponse
     *
     * @param GetOssUploadForEnterpriseRequest $request
     *
     * @return GetOssUploadForEnterpriseResponse
     */
    public function getOssUploadForEnterprise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadForEnterpriseWithOptions($request, $runtime);
    }

    /**
     * @param request - GetOssUploadSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssUploadSignResponse
     *
     * @param GetOssUploadSignRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOssUploadSignResponse
     */
    public function getOssUploadSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssUploadSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssUploadSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetOssUploadSignRequest
     *
     * @returns GetOssUploadSignResponse
     *
     * @param GetOssUploadSignRequest $request
     *
     * @return GetOssUploadSignResponse
     */
    public function getOssUploadSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadSignWithOptions($request, $runtime);
    }

    /**
     * @param request - GetSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSchemeResponse
     *
     * @param GetSchemeRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSchemeResponse
     */
    public function getSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemeId) {
            @$query['SchemeId'] = $request->schemeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSchemeRequest
     *
     * @returns GetSchemeResponse
     *
     * @param GetSchemeRequest $request
     *
     * @return GetSchemeResponse
     */
    public function getScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchemeWithOptions($request, $runtime);
    }

    /**
     * @param request - GetSmsCodeLimitConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsCodeLimitConfigResponse
     *
     * @param GetSmsCodeLimitConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSmsCodeLimitConfigResponse
     */
    public function getSmsCodeLimitConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsCodeLimitConfig',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsCodeLimitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSmsCodeLimitConfigRequest
     *
     * @returns GetSmsCodeLimitConfigResponse
     *
     * @param GetSmsCodeLimitConfigRequest $request
     *
     * @return GetSmsCodeLimitConfigResponse
     */
    public function getSmsCodeLimitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsCodeLimitConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsSignResponse
     *
     * @param GetSmsSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSmsSignResponse
     */
    public function getSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->smsSignName) {
            @$query['SmsSignName'] = $request->smsSignName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSmsSignRequest
     *
     * @returns GetSmsSignResponse
     *
     * @param GetSmsSignRequest $request
     *
     * @return GetSmsSignResponse
     */
    public function getSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAuditPassEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuditPassEnterpriseInfoResponse
     *
     * @param ListAuditPassEnterpriseInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAuditPassEnterpriseInfoResponse
     */
    public function listAuditPassEnterpriseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuditPassEnterpriseInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuditPassEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAuditPassEnterpriseInfoRequest
     *
     * @returns ListAuditPassEnterpriseInfoResponse
     *
     * @param ListAuditPassEnterpriseInfoRequest $request
     *
     * @return ListAuditPassEnterpriseInfoResponse
     */
    public function listAuditPassEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuditPassEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - ListCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertificateResponse
     *
     * @param ListCertificateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCertificateResponse
     */
    public function listCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNo) {
            @$query['PhoneNo'] = $request->phoneNo;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCertificate',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCertificateRequest
     *
     * @returns ListCertificateResponse
     *
     * @param ListCertificateRequest $request
     *
     * @return ListCertificateResponse
     */
    public function listCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificateWithOptions($request, $runtime);
    }

    /**
     * @param request - ListEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseInfoResponse
     *
     * @param ListEnterpriseInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEnterpriseInfoResponse
     */
    public function listEnterpriseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListEnterpriseInfoRequest
     *
     * @returns ListEnterpriseInfoResponse
     *
     * @param ListEnterpriseInfoRequest $request
     *
     * @return ListEnterpriseInfoResponse
     */
    public function listEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - ListSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSchemeResponse
     *
     * @param ListSchemeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSchemeResponse
     */
    public function listSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheme',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListSchemeRequest
     *
     * @returns ListSchemeResponse
     *
     * @param ListSchemeRequest $request
     *
     * @return ListSchemeResponse
     */
    public function listScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemeWithOptions($request, $runtime);
    }

    /**
     * @param request - ListSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSmsSignResponse
     *
     * @param ListSmsSignRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSmsSignResponse
     */
    public function listSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->querySmsSign) {
            @$query['QuerySmsSign'] = $request->querySmsSign;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListSmsSignRequest
     *
     * @returns ListSmsSignResponse
     *
     * @param ListSmsSignRequest $request
     *
     * @return ListSmsSignResponse
     */
    public function listSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param request - ListSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSmsTemplateResponse
     *
     * @param ListSmsTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSmsTemplateResponse
     */
    public function listSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queryTemplate) {
            @$query['QueryTemplate'] = $request->queryTemplate;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSmsTemplate',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListSmsTemplateRequest
     *
     * @returns ListSmsTemplateResponse
     *
     * @param ListSmsTemplateRequest $request
     *
     * @return ListSmsTemplateResponse
     */
    public function listSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - OpenCommonProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenCommonProductResponse
     *
     * @param OpenCommonProductRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OpenCommonProductResponse
     */
    public function openCommonProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenCommonProduct',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenCommonProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpenCommonProductRequest
     *
     * @returns OpenCommonProductResponse
     *
     * @param OpenCommonProductRequest $request
     *
     * @return OpenCommonProductResponse
     */
    public function openCommonProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCommonProductWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCommonBillingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommonBillingResponse
     *
     * @param QueryCommonBillingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCommonBillingResponse
     */
    public function queryCommonBillingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->month) {
            @$query['Month'] = $request->month;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommonBilling',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommonBillingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCommonBillingRequest
     *
     * @returns QueryCommonBillingResponse
     *
     * @param QueryCommonBillingRequest $request
     *
     * @return QueryCommonBillingResponse
     */
    public function queryCommonBilling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommonBillingWithOptions($request, $runtime);
    }

    /**
     * 查询客户信息.
     *
     * @param request - QueryCommonCustInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommonCustInfoResponse
     *
     * @param QueryCommonCustInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCommonCustInfoResponse
     */
    public function queryCommonCustInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommonCustInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommonCustInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询客户信息.
     *
     * @param request - QueryCommonCustInfoRequest
     *
     * @returns QueryCommonCustInfoResponse
     *
     * @param QueryCommonCustInfoRequest $request
     *
     * @return QueryCommonCustInfoResponse
     */
    public function queryCommonCustInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommonCustInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCommonStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommonStatisticResponse
     *
     * @param QueryCommonStatisticRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCommonStatisticResponse
     */
    public function queryCommonStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommonStatistic',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommonStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCommonStatisticRequest
     *
     * @returns QueryCommonStatisticResponse
     *
     * @param QueryCommonStatisticRequest $request
     *
     * @return QueryCommonStatisticResponse
     */
    public function queryCommonStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommonStatisticWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCommonStatisticPreviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommonStatisticPreviewResponse
     *
     * @param QueryCommonStatisticPreviewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryCommonStatisticPreviewResponse
     */
    public function queryCommonStatisticPreviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommonStatisticPreview',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommonStatisticPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCommonStatisticPreviewRequest
     *
     * @returns QueryCommonStatisticPreviewResponse
     *
     * @param QueryCommonStatisticPreviewRequest $request
     *
     * @return QueryCommonStatisticPreviewResponse
     */
    public function queryCommonStatisticPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommonStatisticPreviewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDayuMigrateStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDayuMigrateStatusResponse
     *
     * @param QueryDayuMigrateStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDayuMigrateStatusResponse
     */
    public function queryDayuMigrateStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDayuMigrateStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDayuMigrateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDayuMigrateStatusRequest
     *
     * @returns QueryDayuMigrateStatusResponse
     *
     * @param QueryDayuMigrateStatusRequest $request
     *
     * @return QueryDayuMigrateStatusResponse
     */
    public function queryDayuMigrateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDayuMigrateStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDictDataItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDictDataItemResponse
     *
     * @param QueryDictDataItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDictDataItemResponse
     */
    public function queryDictDataItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classifyItemCode) {
            @$query['ClassifyItemCode'] = $request->classifyItemCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDictDataItem',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDictDataItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDictDataItemRequest
     *
     * @returns QueryDictDataItemResponse
     *
     * @param QueryDictDataItemRequest $request
     *
     * @return QueryDictDataItemResponse
     */
    public function queryDictDataItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDictDataItemWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryGateVerifyBillingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGateVerifyBillingResponse
     *
     * @param QueryGateVerifyBillingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryGateVerifyBillingResponse
     */
    public function queryGateVerifyBillingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->month) {
            @$query['Month'] = $request->month;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGateVerifyBilling',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGateVerifyBillingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryGateVerifyBillingRequest
     *
     * @returns QueryGateVerifyBillingResponse
     *
     * @param QueryGateVerifyBillingRequest $request
     *
     * @return QueryGateVerifyBillingResponse
     */
    public function queryGateVerifyBilling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyBillingWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryGateVerifyRecordListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGateVerifyRecordListResponse
     *
     * @param QueryGateVerifyRecordListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryGateVerifyRecordListResponse
     */
    public function queryGateVerifyRecordListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queryDate) {
            @$query['QueryDate'] = $request->queryDate;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGateVerifyRecordList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGateVerifyRecordListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryGateVerifyRecordListRequest
     *
     * @returns QueryGateVerifyRecordListResponse
     *
     * @param QueryGateVerifyRecordListRequest $request
     *
     * @return QueryGateVerifyRecordListResponse
     */
    public function queryGateVerifyRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyRecordListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryGateVerifyStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGateVerifyStatisticResponse
     *
     * @param QueryGateVerifyStatisticRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryGateVerifyStatisticResponse
     */
    public function queryGateVerifyStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationType) {
            @$query['AuthenticationType'] = $request->authenticationType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryGateVerifyStatistic',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGateVerifyStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryGateVerifyStatisticRequest
     *
     * @returns QueryGateVerifyStatisticResponse
     *
     * @param QueryGateVerifyStatisticRequest $request
     *
     * @return QueryGateVerifyStatisticResponse
     */
    public function queryGateVerifyStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyStatisticWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPnsConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPnsConfigResponse
     *
     * @param QueryPnsConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryPnsConfigResponse
     */
    public function queryPnsConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPnsConfig',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPnsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPnsConfigRequest
     *
     * @returns QueryPnsConfigResponse
     *
     * @param QueryPnsConfigRequest $request
     *
     * @return QueryPnsConfigResponse
     */
    public function queryPnsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPnsConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPnsPackageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPnsPackageDetailResponse
     *
     * @param QueryPnsPackageDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPnsPackageDetailResponse
     */
    public function queryPnsPackageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPnsPackageDetail',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPnsPackageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPnsPackageDetailRequest
     *
     * @returns QueryPnsPackageDetailResponse
     *
     * @param QueryPnsPackageDetailRequest $request
     *
     * @return QueryPnsPackageDetailResponse
     */
    public function queryPnsPackageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPnsPackageDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPnsPackageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPnsPackageListResponse
     *
     * @param QueryPnsPackageListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryPnsPackageListResponse
     */
    public function queryPnsPackageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPnsPackageList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPnsPackageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPnsPackageListRequest
     *
     * @returns QueryPnsPackageListResponse
     *
     * @param QueryPnsPackageListRequest $request
     *
     * @return QueryPnsPackageListResponse
     */
    public function queryPnsPackageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPnsPackageListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPnsPackageStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPnsPackageStatisticsResponse
     *
     * @param QueryPnsPackageStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPnsPackageStatisticsResponse
     */
    public function queryPnsPackageStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPnsPackageStatistics',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPnsPackageStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPnsPackageStatisticsRequest
     *
     * @returns QueryPnsPackageStatisticsResponse
     *
     * @param QueryPnsPackageStatisticsRequest $request
     *
     * @return QueryPnsPackageStatisticsResponse
     */
    public function queryPnsPackageStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPnsPackageStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySceneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySceneListResponse
     *
     * @param QuerySceneListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySceneListResponse
     */
    public function querySceneListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySceneList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySceneListRequest
     *
     * @returns QuerySceneListResponse
     *
     * @param QuerySceneListRequest $request
     *
     * @return QuerySceneListResponse
     */
    public function querySceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySceneListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySdkVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySdkVersionResponse
     *
     * @param QuerySdkVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySdkVersionResponse
     */
    public function querySdkVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->customerId) {
            @$query['customerId'] = $request->customerId;
        }

        if (null !== $request->prodCode) {
            @$query['prodCode'] = $request->prodCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySdkVersion',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySdkVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySdkVersionRequest
     *
     * @returns QuerySdkVersionResponse
     *
     * @param QuerySdkVersionRequest $request
     *
     * @return QuerySdkVersionResponse
     */
    public function querySdkVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySdkVersionWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTagStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagStatusResponse
     *
     * @param QueryTagStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTagStatusResponse
     */
    public function queryTagStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attrKey) {
            @$query['AttrKey'] = $request->attrKey;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTagStatusRequest
     *
     * @returns QueryTagStatusResponse
     *
     * @param QueryTagStatusRequest $request
     *
     * @return QueryTagStatusResponse
     */
    public function queryTagStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - RemoveGateVerifyExportLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveGateVerifyExportLogResponse
     *
     * @param RemoveGateVerifyExportLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveGateVerifyExportLogResponse
     */
    public function removeGateVerifyExportLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveGateVerifyExportLog',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveGateVerifyExportLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveGateVerifyExportLogRequest
     *
     * @returns RemoveGateVerifyExportLogResponse
     *
     * @param RemoveGateVerifyExportLogRequest $request
     *
     * @return RemoveGateVerifyExportLogResponse
     */
    public function removeGateVerifyExportLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGateVerifyExportLogWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitEnterpriseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitEnterpriseInfoResponse
     *
     * @param SubmitEnterpriseInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitEnterpriseInfoResponse
     */
    public function submitEnterpriseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessLicenseAddress) {
            @$query['BusinessLicenseAddress'] = $request->businessLicenseAddress;
        }

        if (null !== $request->businessLicensePicture) {
            @$query['BusinessLicensePicture'] = $request->businessLicensePicture;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->enterpriseName) {
            @$query['EnterpriseName'] = $request->enterpriseName;
        }

        if (null !== $request->legalPersonCertNumber) {
            @$query['LegalPersonCertNumber'] = $request->legalPersonCertNumber;
        }

        if (null !== $request->legalPersonCertPicture) {
            @$query['LegalPersonCertPicture'] = $request->legalPersonCertPicture;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->managerCertNumber) {
            @$query['ManagerCertNumber'] = $request->managerCertNumber;
        }

        if (null !== $request->managerCertPicture) {
            @$query['ManagerCertPicture'] = $request->managerCertPicture;
        }

        if (null !== $request->managerContactNumber) {
            @$query['ManagerContactNumber'] = $request->managerContactNumber;
        }

        if (null !== $request->managerName) {
            @$query['ManagerName'] = $request->managerName;
        }

        if (null !== $request->numberApplicationLetterPicture) {
            @$query['NumberApplicationLetterPicture'] = $request->numberApplicationLetterPicture;
        }

        if (null !== $request->organizationCode) {
            @$query['OrganizationCode'] = $request->organizationCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->undertakingPicture) {
            @$query['UndertakingPicture'] = $request->undertakingPicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitEnterpriseInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEnterpriseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitEnterpriseInfoRequest
     *
     * @returns SubmitEnterpriseInfoResponse
     *
     * @param SubmitEnterpriseInfoRequest $request
     *
     * @return SubmitEnterpriseInfoResponse
     */
    public function submitEnterpriseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEnterpriseInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateExportLogStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExportLogStateResponse
     *
     * @param UpdateExportLogStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateExportLogStateResponse
     */
    public function updateExportLogStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateExportLogState',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExportLogStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateExportLogStateRequest
     *
     * @returns UpdateExportLogStateResponse
     *
     * @param UpdateExportLogStateRequest $request
     *
     * @return UpdateExportLogStateResponse
     */
    public function updateExportLogState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExportLogStateWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateSmsCodeLimitConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSmsCodeLimitConfigResponse
     *
     * @param UpdateSmsCodeLimitConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSmsCodeLimitConfigResponse
     */
    public function updateSmsCodeLimitConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limitDay) {
            @$query['LimitDay'] = $request->limitDay;
        }

        if (null !== $request->limitHour) {
            @$query['LimitHour'] = $request->limitHour;
        }

        if (null !== $request->limitId) {
            @$query['LimitId'] = $request->limitId;
        }

        if (null !== $request->limitMinute) {
            @$query['LimitMinute'] = $request->limitMinute;
        }

        if (null !== $request->limitOther) {
            @$query['LimitOther'] = $request->limitOther;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSmsCodeLimitConfig',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSmsCodeLimitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSmsCodeLimitConfigRequest
     *
     * @returns UpdateSmsCodeLimitConfigResponse
     *
     * @param UpdateSmsCodeLimitConfigRequest $request
     *
     * @return UpdateSmsCodeLimitConfigResponse
     */
    public function updateSmsCodeLimitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsCodeLimitConfigWithOptions($request, $runtime);
    }
}
