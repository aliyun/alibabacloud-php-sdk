<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddExtCodeSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddExtCodeSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddRcsSignMenuRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddRcsSignMenuResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ChangeSignatureQualificationRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ChangeSignatureQualificationResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CheckMobilesCardSupportRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CheckMobilesCardSupportResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ConversionDataIntlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ConversionDataIntlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSignOrderRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSignOrderResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSignOrderShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateRCSMobileCapableTaskRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateRCSMobileCapableTaskResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateRCSTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateRCSTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmartShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmartShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsAppIcpRecordRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsAppIcpRecordResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsAuthorizationLetterRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsAuthorizationLetterResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsAuthorizationLetterShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTrademarkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTrademarkResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteExtCodeSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteExtCodeSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsQualificationRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsQualificationResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsLinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsLinkResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForCardTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForUploadFileRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForUploadFileResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetQualificationOssInfoRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetQualificationOssInfoResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsOcrOssInfoRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsOcrOssInfoResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateListRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateListResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateListShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateReportRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateReportResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryDigitalSignByNameRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryDigitalSignByNameResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryExtCodeSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryExtCodeSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryPageSmartShortUrlLogRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryPageSmartShortUrlLogResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSMobileCapableRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSMobileCapableResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSMobileCapableTaskResultRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSMobileCapableTaskResultResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRcsSignMenuByVersionRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRcsSignMenuByVersionResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryRCSTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendStatisticsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendStatisticsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySingleSmsQualificationRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySingleSmsQualificationResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAppIcpRecordRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAppIcpRecordResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAppIcpRecordShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAuthorizationLetterRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAuthorizationLetterResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAuthorizationLetterShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsQualificationRecordRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsQualificationRecordResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTrademarkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTrademarkResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTrademarkShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\RequiredPhoneCodeRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\RequiredPhoneCodeResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchCardSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchCardSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendLogisticsSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendLogisticsSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendRCSReplyRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendRCSReplyResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendRCSRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendRCSResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SmsConversionIntlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SmsConversionIntlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SubmitSmsQualificationRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SubmitSmsQualificationResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SubmitSmsQualificationShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateExtCodeSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateExtCodeSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateRCSSignatureRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateRCSSignatureResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpgradeToRCSSignatureRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpgradeToRCSSignatureResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ValidPhoneCodeRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ValidPhoneCodeResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\VerifyLogisticsSmsMailNoRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\VerifyLogisticsSmsMailNoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-southeast-1' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'dysmsapi.ap-southeast-5.aliyuncs.com',
            'cn-beijing' => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong' => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
            'eu-central-1' => 'dysmsapi.eu-central-1.aliyuncs.com',
            'us-east-1' => 'dysmsapi.us-east-1.aliyuncs.com',
            'cn-zhangjiakou' => 'dysmsapi.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dysmsapi.aliyuncs.com',
            'cn-shenzhen' => 'dysmsapi.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dysmsapi.aliyuncs.com',
            'cn-qingdao' => 'dysmsapi.aliyuncs.com',
            'cn-north-2-gov-1' => 'dysmsapi.aliyuncs.com',
            'cn-huhehaote' => 'dysmsapi.aliyuncs.com',
            'cn-hangzhou-finance' => 'dysmsapi.aliyuncs.com',
            'cn-hangzhou' => 'dysmsapi.aliyuncs.com',
            'cn-chengdu' => 'dysmsapi.aliyuncs.com',
            'cn-beijing-finance-1' => 'dysmsapi.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dysmsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加验证码签名信息.
     *
     * @param request - AddExtCodeSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddExtCodeSignResponse
     *
     * @param AddExtCodeSignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddExtCodeSignResponse
     */
    public function addExtCodeSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extCode) {
            @$query['ExtCode'] = $request->extCode;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddExtCodeSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddExtCodeSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加验证码签名信息.
     *
     * @param request - AddExtCodeSignRequest
     *
     * @returns AddExtCodeSignResponse
     *
     * @param AddExtCodeSignRequest $request
     *
     * @return AddExtCodeSignResponse
     */
    public function addExtCodeSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExtCodeSignWithOptions($request, $runtime);
    }

    /**
     * 创建/编辑5G消息固定菜单.
     *
     * @param request - AddRcsSignMenuRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRcsSignMenuResponse
     *
     * @param AddRcsSignMenuRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddRcsSignMenuResponse
     */
    public function addRcsSignMenuWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->menuContent) {
            @$query['MenuContent'] = $request->menuContent;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRcsSignMenu',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRcsSignMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建/编辑5G消息固定菜单.
     *
     * @param request - AddRcsSignMenuRequest
     *
     * @returns AddRcsSignMenuResponse
     *
     * @param AddRcsSignMenuRequest $request
     *
     * @return AddRcsSignMenuResponse
     */
    public function addRcsSignMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRcsSignMenuWithOptions($request, $runtime);
    }

    /**
     * Creates a short URL.
     *
     * @remarks
     * >Notice:
     * Short Message Service does not currently support this API operation.
     * - You can create up to 3,000 short URLs per calendar day.
     * - After a short URL is generated, it must pass a security review, which typically takes 10 minutes to 2 hours. You cannot access the short URL until it passes this review.
     *
     * @param request - AddShortUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddShortUrlResponse
     *
     * @param AddShortUrlRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrlWithOptions($request, $runtime)
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

        $body = [];
        if (null !== $request->effectiveDays) {
            @$body['EffectiveDays'] = $request->effectiveDays;
        }

        if (null !== $request->shortUrlName) {
            @$body['ShortUrlName'] = $request->shortUrlName;
        }

        if (null !== $request->sourceUrl) {
            @$body['SourceUrl'] = $request->sourceUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddShortUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a short URL.
     *
     * @remarks
     * >Notice:
     * Short Message Service does not currently support this API operation.
     * - You can create up to 3,000 short URLs per calendar day.
     * - After a short URL is generated, it must pass a security review, which typically takes 10 minutes to 2 hours. You cannot access the short URL until it passes this review.
     *
     * @param request - AddShortUrlRequest
     *
     * @returns AddShortUrlResponse
     *
     * @param AddShortUrlRequest $request
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShortUrlWithOptions($request, $runtime);
    }

    /**
     * This API has been discontinued.
     *
     * @remarks
     * - In accordance with the regulations of the Ministry of Industry and Information Technology (MIIT) and the [relevant requirements](https://help.aliyun.com/document_detail/2806975.html) of carriers, Alibaba Cloud has made functional modifications to signature-related APIs. To improve the review efficiency and approval rate of your signatures, use the new API [CreateSmsSign - Apply for an SMS signature](https://help.aliyun.com/document_detail/2807427.html).
     * - An individual user can apply for one signature per natural day under the same Alibaba Cloud account. Enterprise users have no limit on the number of applications. For details about the differences in rights and interests between individual users and enterprise users, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * - The signature information applied for through the API is synchronized to the SMS console. For operations on signatures in the console, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     * - After you submit a signature application, you can call the [QuerySmsSign](https://help.aliyun.com/document_detail/419283.html) API to query the review status and details of the signature. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and use [SignSmsReport](https://help.aliyun.com/document_detail/120998.html) to obtain signature review status messages.
     * ### QPS limit
     * The single-user QPS limit for this API is 1 call per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Call this API at a reasonable rate.
     *
     * @param request - AddSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSmsSignResponse
     *
     * @param AddSmsSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        if (null !== $request->signType) {
            @$query['SignType'] = $request->signType;
        }

        $body = [];
        if (null !== $request->signFileList) {
            @$body['SignFileList'] = $request->signFileList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddSmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API has been discontinued.
     *
     * @remarks
     * - In accordance with the regulations of the Ministry of Industry and Information Technology (MIIT) and the [relevant requirements](https://help.aliyun.com/document_detail/2806975.html) of carriers, Alibaba Cloud has made functional modifications to signature-related APIs. To improve the review efficiency and approval rate of your signatures, use the new API [CreateSmsSign - Apply for an SMS signature](https://help.aliyun.com/document_detail/2807427.html).
     * - An individual user can apply for one signature per natural day under the same Alibaba Cloud account. Enterprise users have no limit on the number of applications. For details about the differences in rights and interests between individual users and enterprise users, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * - The signature information applied for through the API is synchronized to the SMS console. For operations on signatures in the console, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     * - After you submit a signature application, you can call the [QuerySmsSign](https://help.aliyun.com/document_detail/419283.html) API to query the review status and details of the signature. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and use [SignSmsReport](https://help.aliyun.com/document_detail/120998.html) to obtain signature review status messages.
     * ### QPS limit
     * The single-user QPS limit for this API is 1 call per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Call this API at a reasonable rate.
     *
     * @param request - AddSmsSignRequest
     *
     * @returns AddSmsSignResponse
     *
     * @param AddSmsSignRequest $request
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsSignWithOptions($request, $runtime);
    }

    /**
     * An SMS template is the detailed content received by the recipient, including variables and template content. You can apply for verification code, notification, or promotional SMS templates based on your business needs. SMS can only be sent after the template is approved.
     *
     * @remarks
     * - In accordance with the regulations of the Ministry of Industry and Information Technology and the [related requirements](https://help.aliyun.com/document_detail/2806975.html) of carriers, Alibaba Cloud has revamped the functionality of template-related APIs. To improve the review efficiency and approval rate of your templates, please use the new operation [CreateSmsTemplate - Apply for SMS template](https://help.aliyun.com/document_detail/2807431.html).
     * - You can submit a maximum of 100 SMS template applications per natural day via the API. It is recommended that each application be submitted at intervals of at least 30 seconds. There is no limit on the number of submissions when applying for SMS templates through the [console](https://dysms.console.aliyun.com/domestic/text/template).
     * - Template information applied for through the API is synchronized to the SMS service console. For related template operations in the console, see [SMS templates](https://help.aliyun.com/document_detail/108085.html).
     * - After submitting the template application, you can query the template review status and details through the [QuerySmsTemplate](https://help.aliyun.com/document_detail/419289.html) operation. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and obtain the template review status messages through [TemplateSmsReport](https://help.aliyun.com/document_detail/120999.html).
     * - Domestic SMS templates and international/Hong Kong, Macao, and Taiwan SMS templates are not interchangeable (cannot be mixed). Please apply for templates based on your business usage scenarios.
     * - Only enterprise-verified users can apply for promotional SMS and international/Hong Kong, Macao, and Taiwan messages. For details about the differences between individual and enterprise user privileges, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * The per-user QPS limit for this operation is 1,000 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the operation reasonably.
     *
     * @deprecated openAPI AddSmsTemplate is deprecated, please use Dysmsapi::2017-05-25::CreateSmsTemplate instead
     *
     * @param request - AddSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSmsTemplateResponse
     *
     * @param AddSmsTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * An SMS template is the detailed content received by the recipient, including variables and template content. You can apply for verification code, notification, or promotional SMS templates based on your business needs. SMS can only be sent after the template is approved.
     *
     * @remarks
     * - In accordance with the regulations of the Ministry of Industry and Information Technology and the [related requirements](https://help.aliyun.com/document_detail/2806975.html) of carriers, Alibaba Cloud has revamped the functionality of template-related APIs. To improve the review efficiency and approval rate of your templates, please use the new operation [CreateSmsTemplate - Apply for SMS template](https://help.aliyun.com/document_detail/2807431.html).
     * - You can submit a maximum of 100 SMS template applications per natural day via the API. It is recommended that each application be submitted at intervals of at least 30 seconds. There is no limit on the number of submissions when applying for SMS templates through the [console](https://dysms.console.aliyun.com/domestic/text/template).
     * - Template information applied for through the API is synchronized to the SMS service console. For related template operations in the console, see [SMS templates](https://help.aliyun.com/document_detail/108085.html).
     * - After submitting the template application, you can query the template review status and details through the [QuerySmsTemplate](https://help.aliyun.com/document_detail/419289.html) operation. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and obtain the template review status messages through [TemplateSmsReport](https://help.aliyun.com/document_detail/120999.html).
     * - Domestic SMS templates and international/Hong Kong, Macao, and Taiwan SMS templates are not interchangeable (cannot be mixed). Please apply for templates based on your business usage scenarios.
     * - Only enterprise-verified users can apply for promotional SMS and international/Hong Kong, Macao, and Taiwan messages. For details about the differences between individual and enterprise user privileges, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * The per-user QPS limit for this operation is 1,000 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the operation reasonably.
     *
     * @deprecated openAPI AddSmsTemplate is deprecated, please use Dysmsapi::2017-05-25::CreateSmsTemplate instead
     *
     * @param request - AddSmsTemplateRequest
     *
     * @returns AddSmsTemplateResponse
     *
     * @param AddSmsTemplateRequest $request
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates the qualification and authorization letter for a signature.
     *
     * @param request - ChangeSignatureQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeSignatureQualificationResponse
     *
     * @param ChangeSignatureQualificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ChangeSignatureQualificationResponse
     */
    public function changeSignatureQualificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationLetterId) {
            @$query['AuthorizationLetterId'] = $request->authorizationLetterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signatureName) {
            @$query['SignatureName'] = $request->signatureName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeSignatureQualification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeSignatureQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the qualification and authorization letter for a signature.
     *
     * @param request - ChangeSignatureQualificationRequest
     *
     * @returns ChangeSignatureQualificationResponse
     *
     * @param ChangeSignatureQualificationRequest $request
     *
     * @return ChangeSignatureQualificationResponse
     */
    public function changeSignatureQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeSignatureQualificationWithOptions($request, $runtime);
    }

    /**
     * Checks whether phone numbers support card SMS.
     *
     * @remarks
     * - Alibaba Cloud accounts that have not activated card SMS cannot call this API.
     * - Card SMS is currently in the internal invitation phase. Contact your Alibaba Cloud account manager to apply for activation or [contact Alibaba Cloud pre-sales](https://help.aliyun.com/document_detail/464625.html).
     * - We recommend that you use the new API [QueryMobilesCardSupport](~~QueryMobilesCardSupport~~) to query whether phone numbers support card SMS.
     * ### QPS limit
     * The per-user QPS limit for this API is 2,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls reasonably.
     *
     * @param request - CheckMobilesCardSupportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckMobilesCardSupportResponse
     *
     * @param CheckMobilesCardSupportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckMobilesCardSupportResponse
     */
    public function checkMobilesCardSupportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mobiles) {
            @$query['Mobiles'] = $request->mobiles;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckMobilesCardSupport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckMobilesCardSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether phone numbers support card SMS.
     *
     * @remarks
     * - Alibaba Cloud accounts that have not activated card SMS cannot call this API.
     * - Card SMS is currently in the internal invitation phase. Contact your Alibaba Cloud account manager to apply for activation or [contact Alibaba Cloud pre-sales](https://help.aliyun.com/document_detail/464625.html).
     * - We recommend that you use the new API [QueryMobilesCardSupport](~~QueryMobilesCardSupport~~) to query whether phone numbers support card SMS.
     * ### QPS limit
     * The per-user QPS limit for this API is 2,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Make calls reasonably.
     *
     * @param request - CheckMobilesCardSupportRequest
     *
     * @returns CheckMobilesCardSupportResponse
     *
     * @param CheckMobilesCardSupportRequest $request
     *
     * @return CheckMobilesCardSupportResponse
     */
    public function checkMobilesCardSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMobilesCardSupportWithOptions($request, $runtime);
    }

    /**
     * Reports SMS conversion rate statistics to the Alibaba Cloud SMS platform.
     *
     * @remarks
     * 指标说明：转化率=OTP 转化量/OTP 发送量。
     * - OTP发送量：验证码发送量。
     * - OTP转化量：验证码转换量。（用户成功获取验证码，并进行回传）
     * >转化率反馈功能会对业务系统有一定的侵入性，为了防止调用转化率 API 的抖动影响业务逻辑，请考虑：
     * >- 使用异步模式（例如：队列或事件驱动）调用 API。
     * >- 添加可降级的方案保护业务逻辑（例如：手动降级开工或者使用断路器自动降级）。
     *
     * @param request - ConversionDataIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConversionDataIntlResponse
     *
     * @param ConversionDataIntlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConversionDataIntlResponse
     */
    public function conversionDataIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversionRate) {
            @$query['ConversionRate'] = $request->conversionRate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reportTime) {
            @$query['ReportTime'] = $request->reportTime;
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
            'action' => 'ConversionDataIntl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConversionDataIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reports SMS conversion rate statistics to the Alibaba Cloud SMS platform.
     *
     * @remarks
     * 指标说明：转化率=OTP 转化量/OTP 发送量。
     * - OTP发送量：验证码发送量。
     * - OTP转化量：验证码转换量。（用户成功获取验证码，并进行回传）
     * >转化率反馈功能会对业务系统有一定的侵入性，为了防止调用转化率 API 的抖动影响业务逻辑，请考虑：
     * >- 使用异步模式（例如：队列或事件驱动）调用 API。
     * >- 添加可降级的方案保护业务逻辑（例如：手动降级开工或者使用断路器自动降级）。
     *
     * @param request - ConversionDataIntlRequest
     *
     * @returns ConversionDataIntlResponse
     *
     * @param ConversionDataIntlRequest $request
     *
     * @return ConversionDataIntlResponse
     */
    public function conversionDataIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->conversionDataIntlWithOptions($request, $runtime);
    }

    /**
     * Creates a card SMS template.
     *
     * @remarks
     * - The card SMS feature is currently available by invitation only. To enable this feature, contact your Alibaba Cloud business manager or our [pre-sales consultation](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213273d4Xe6UEu#section-81n-72q-ybm) team.
     * - This operation saves a card SMS template, submits it to mobile phone vendors for review, and returns a template code.
     * - If a card SMS template contains a type or event that a vendor does not support, the system does not submit the template to that vendor for review. For more information, see [Supported template types by vendor](https://help.aliyun.com/document_detail/434611.html).
     * - For more examples of card SMS templates, see [Card SMS template examples](https://help.aliyun.com/document_detail/435361.html).
     * ### QPS limit
     * The QPS limit for a single user is 300. API calls that exceed this limit are throttled, which may impact your business. Plan your calls accordingly.
     *
     * @param tmpReq - CreateCardSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCardSmsTemplateResponse
     *
     * @param CreateCardSmsTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCardSmsTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

        $query = [];
        if (null !== $request->factorys) {
            @$query['Factorys'] = $request->factorys;
        }

        if (null !== $request->memo) {
            @$query['Memo'] = $request->memo;
        }

        if (null !== $request->templateShrink) {
            @$query['Template'] = $request->templateShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCardSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a card SMS template.
     *
     * @remarks
     * - The card SMS feature is currently available by invitation only. To enable this feature, contact your Alibaba Cloud business manager or our [pre-sales consultation](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213273d4Xe6UEu#section-81n-72q-ybm) team.
     * - This operation saves a card SMS template, submits it to mobile phone vendors for review, and returns a template code.
     * - If a card SMS template contains a type or event that a vendor does not support, the system does not submit the template to that vendor for review. For more information, see [Supported template types by vendor](https://help.aliyun.com/document_detail/434611.html).
     * - For more examples of card SMS templates, see [Card SMS template examples](https://help.aliyun.com/document_detail/435361.html).
     * ### QPS limit
     * The QPS limit for a single user is 300. API calls that exceed this limit are throttled, which may impact your business. Plan your calls accordingly.
     *
     * @param request - CreateCardSmsTemplateRequest
     *
     * @returns CreateCardSmsTemplateResponse
     *
     * @param CreateCardSmsTemplateRequest $request
     *
     * @return CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates an order to add, update, or delete a digital message signature.
     *
     * @remarks
     * Creates, updates, or deletes a signature.
     *
     * @param tmpReq - CreateDigitalSignOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalSignOrderResponse
     *
     * @param CreateDigitalSignOrderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDigitalSignOrderResponse
     */
    public function createDigitalSignOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDigitalSignOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderContext) {
            $request->orderContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderContext, 'OrderContext', 'json');
        }

        $query = [];
        if (null !== $request->extendMessage) {
            @$query['ExtendMessage'] = $request->extendMessage;
        }

        if (null !== $request->orderContextShrink) {
            @$query['OrderContext'] = $request->orderContextShrink;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->qualificationVersion) {
            @$query['QualificationVersion'] = $request->qualificationVersion;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signId) {
            @$query['SignId'] = $request->signId;
        }

        if (null !== $request->signIndustry) {
            @$query['SignIndustry'] = $request->signIndustry;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        if (null !== $request->submitter) {
            @$query['Submitter'] = $request->submitter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalSignOrder',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDigitalSignOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an order to add, update, or delete a digital message signature.
     *
     * @remarks
     * Creates, updates, or deletes a signature.
     *
     * @param request - CreateDigitalSignOrderRequest
     *
     * @returns CreateDigitalSignOrderResponse
     *
     * @param CreateDigitalSignOrderRequest $request
     *
     * @return CreateDigitalSignOrderResponse
     */
    public function createDigitalSignOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDigitalSignOrderWithOptions($request, $runtime);
    }

    /**
     * Creates a digital SMS template.
     *
     * @remarks
     * Use this operation to create a reusable template for your digital SMS messages.
     *
     * @param request - CreateDigitalSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalSmsTemplateResponse
     *
     * @param CreateDigitalSmsTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDigitalSmsTemplateResponse
     */
    public function createDigitalSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateContents) {
            @$query['TemplateContents'] = $request->templateContents;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDigitalSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a digital SMS template.
     *
     * @remarks
     * Use this operation to create a reusable template for your digital SMS messages.
     *
     * @param request - CreateDigitalSmsTemplateRequest
     *
     * @returns CreateDigitalSmsTemplateResponse
     *
     * @param CreateDigitalSmsTemplateRequest $request
     *
     * @return CreateDigitalSmsTemplateResponse
     */
    public function createDigitalSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDigitalSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建终端5G适配情况查询任务
     *
     * @param request - CreateRCSMobileCapableTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRCSMobileCapableTaskResponse
     *
     * @param CreateRCSMobileCapableTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateRCSMobileCapableTaskResponse
     */
    public function createRCSMobileCapableTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->phoneNumbersFile) {
            @$query['PhoneNumbersFile'] = $request->phoneNumbersFile;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRCSMobileCapableTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRCSMobileCapableTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建终端5G适配情况查询任务
     *
     * @param request - CreateRCSMobileCapableTaskRequest
     *
     * @returns CreateRCSMobileCapableTaskResponse
     *
     * @param CreateRCSMobileCapableTaskRequest $request
     *
     * @return CreateRCSMobileCapableTaskResponse
     */
    public function createRCSMobileCapableTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRCSMobileCapableTaskWithOptions($request, $runtime);
    }

    /**
     * 创建5G消息模板
     *
     * @param request - CreateRCSTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRCSTemplateResponse
     *
     * @param CreateRCSTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRCSTemplateResponse
     */
    public function createRCSTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relatedSignNames) {
            @$query['RelatedSignNames'] = $request->relatedSignNames;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateFormat) {
            @$query['TemplateFormat'] = $request->templateFormat;
        }

        if (null !== $request->templateMenu) {
            @$query['TemplateMenu'] = $request->templateMenu;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateRule) {
            @$query['TemplateRule'] = $request->templateRule;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRCSTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRCSTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建5G消息模板
     *
     * @param request - CreateRCSTemplateRequest
     *
     * @returns CreateRCSTemplateResponse
     *
     * @param CreateRCSTemplateRequest $request
     *
     * @return CreateRCSTemplateResponse
     */
    public function createRCSTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRCSTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建短链.
     *
     * @param request - CreateSmartShortUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmartShortUrlResponse
     *
     * @param CreateSmartShortUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSmartShortUrlResponse
     */
    public function createSmartShortUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceUrl) {
            @$query['SourceUrl'] = $request->sourceUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmartShortUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmartShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短链.
     *
     * @param request - CreateSmartShortUrlRequest
     *
     * @returns CreateSmartShortUrlResponse
     *
     * @param CreateSmartShortUrlRequest $request
     *
     * @return CreateSmartShortUrlResponse
     */
    public function createSmartShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartShortUrlWithOptions($request, $runtime);
    }

    /**
     * The process for using a live app as a signature source has changed. If you use an app as the signature source, you must call this operation to create an ICP filing record for it.
     *
     * @remarks
     * >Notice: To use a **live app** as a signature source, you must now provide its ICP filing information. This requires you to upload a screenshot of the app\\"s ICP filing.
     *
     * @param request - CreateSmsAppIcpRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsAppIcpRecordResponse
     *
     * @param CreateSmsAppIcpRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSmsAppIcpRecordResponse
     */
    public function createSmsAppIcpRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appApprovalDate) {
            @$query['AppApprovalDate'] = $request->appApprovalDate;
        }

        if (null !== $request->appIcpLicenseNumber) {
            @$query['AppIcpLicenseNumber'] = $request->appIcpLicenseNumber;
        }

        if (null !== $request->appIcpRecordPic) {
            @$query['AppIcpRecordPic'] = $request->appIcpRecordPic;
        }

        if (null !== $request->appPrincipalUnitName) {
            @$query['AppPrincipalUnitName'] = $request->appPrincipalUnitName;
        }

        if (null !== $request->appRuntimePic) {
            @$query['AppRuntimePic'] = $request->appRuntimePic;
        }

        if (null !== $request->appServiceName) {
            @$query['AppServiceName'] = $request->appServiceName;
        }

        if (null !== $request->appStoreDownloadPic) {
            @$query['AppStoreDownloadPic'] = $request->appStoreDownloadPic;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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
            'action' => 'CreateSmsAppIcpRecord',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsAppIcpRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The process for using a live app as a signature source has changed. If you use an app as the signature source, you must call this operation to create an ICP filing record for it.
     *
     * @remarks
     * >Notice: To use a **live app** as a signature source, you must now provide its ICP filing information. This requires you to upload a screenshot of the app\\"s ICP filing.
     *
     * @param request - CreateSmsAppIcpRecordRequest
     *
     * @returns CreateSmsAppIcpRecordResponse
     *
     * @param CreateSmsAppIcpRecordRequest $request
     *
     * @return CreateSmsAppIcpRecordResponse
     */
    public function createSmsAppIcpRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsAppIcpRecordWithOptions($request, $runtime);
    }

    /**
     * If the qualification is intended for use by a third party or the requested signature involves third-party rights, you must obtain third-party authorization and create an authorization letter before submitting the application.
     *
     * @remarks
     * - Before use, please read the [Authorization Letter Specifications](https://help.aliyun.com/document_detail/56741.html). Download the [Authorization Letter Template](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20250414/bvpcmo/%E6%8E%88%E6%9D%83%E5%A7%94%E6%89%98%E4%B9%A6%E6%A8%A1%E7%89%88.doc), fill it out and stamp it according to the specifications, and then upload it.
     * - The authorization letter you create can be used when applying for SMS qualifications or SMS signatures. If your qualification or signature is intended for use by a third party, you must create and submit an authorization letter.
     * - After creating an authorization letter, you can call [QuerySmsAuthorizationLetter](~~QuerySmsAuthorizationLetter~~) to query the details of the created authorization letter. Authorization letter information created through the API is synchronized to the Short Message Service console.
     *
     * @param tmpReq - CreateSmsAuthorizationLetterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsAuthorizationLetterResponse
     *
     * @param CreateSmsAuthorizationLetterRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateSmsAuthorizationLetterResponse
     */
    public function createSmsAuthorizationLetterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSmsAuthorizationLetterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->signList) {
            $request->signListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->signList, 'SignList', 'json');
        }

        $query = [];
        if (null !== $request->authorization) {
            @$query['Authorization'] = $request->authorization;
        }

        if (null !== $request->authorizationLetterExpDate) {
            @$query['AuthorizationLetterExpDate'] = $request->authorizationLetterExpDate;
        }

        if (null !== $request->authorizationLetterName) {
            @$query['AuthorizationLetterName'] = $request->authorizationLetterName;
        }

        if (null !== $request->authorizationLetterPic) {
            @$query['AuthorizationLetterPic'] = $request->authorizationLetterPic;
        }

        if (null !== $request->organizationCode) {
            @$query['OrganizationCode'] = $request->organizationCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->proxyAuthorization) {
            @$query['ProxyAuthorization'] = $request->proxyAuthorization;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signListShrink) {
            @$query['SignList'] = $request->signListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsAuthorizationLetter',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsAuthorizationLetterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the qualification is intended for use by a third party or the requested signature involves third-party rights, you must obtain third-party authorization and create an authorization letter before submitting the application.
     *
     * @remarks
     * - Before use, please read the [Authorization Letter Specifications](https://help.aliyun.com/document_detail/56741.html). Download the [Authorization Letter Template](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20250414/bvpcmo/%E6%8E%88%E6%9D%83%E5%A7%94%E6%89%98%E4%B9%A6%E6%A8%A1%E7%89%88.doc), fill it out and stamp it according to the specifications, and then upload it.
     * - The authorization letter you create can be used when applying for SMS qualifications or SMS signatures. If your qualification or signature is intended for use by a third party, you must create and submit an authorization letter.
     * - After creating an authorization letter, you can call [QuerySmsAuthorizationLetter](~~QuerySmsAuthorizationLetter~~) to query the details of the created authorization letter. Authorization letter information created through the API is synchronized to the Short Message Service console.
     *
     * @param request - CreateSmsAuthorizationLetterRequest
     *
     * @returns CreateSmsAuthorizationLetterResponse
     *
     * @param CreateSmsAuthorizationLetterRequest $request
     *
     * @return CreateSmsAuthorizationLetterResponse
     */
    public function createSmsAuthorizationLetter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsAuthorizationLetterWithOptions($request, $runtime);
    }

    /**
     * An SMS signature identifies the sender of an SMS message. Before sending SMS messages, you must apply for a signature and a template. The system prepends the approved SMS signature to the message content and sends them together to the recipient.
     *
     * @remarks
     * - For details about the changes between the new and original operations, see [Announcement on updating signature and template operations for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - Users who verify your identity - Individual account can apply for one formal signature per calendar day per Alibaba Cloud account. Users who verify your identity - Enterprise account currently have no such limit. For details about the differences between individual and enterprise user privileges, see [Before you begin](https://help.aliyun.com/document_detail/55324.html).
     * - Read the [Signature specifications](https://help.aliyun.com/document_detail/108076.html) to learn about the SMS signature review standards.
     * - Signatures applied for through the API are synchronized to the Short Message Service console. For console-related operations, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     * - After you submit a signature application, you can call the [GetSmsSign](https://help.aliyun.com/document_detail/2807429.html) operation to query the signature review status and details. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and use [SignSmsReport](https://help.aliyun.com/document_detail/120998.html) to obtain the signature review status messages.
     *
     * @param tmpReq - CreateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSmsSignShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->appIcpRecordId) {
            @$query['AppIcpRecordId'] = $request->appIcpRecordId;
        }

        if (null !== $request->applySceneContent) {
            @$query['ApplySceneContent'] = $request->applySceneContent;
        }

        if (null !== $request->authorizationLetterId) {
            @$query['AuthorizationLetterId'] = $request->authorizationLetterId;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        if (null !== $request->signType) {
            @$query['SignType'] = $request->signType;
        }

        if (null !== $request->thirdParty) {
            @$query['ThirdParty'] = $request->thirdParty;
        }

        if (null !== $request->trademarkId) {
            @$query['TrademarkId'] = $request->trademarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSign',
            'version' => '2017-05-25',
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
     * An SMS signature identifies the sender of an SMS message. Before sending SMS messages, you must apply for a signature and a template. The system prepends the approved SMS signature to the message content and sends them together to the recipient.
     *
     * @remarks
     * - For details about the changes between the new and original operations, see [Announcement on updating signature and template operations for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - Users who verify your identity - Individual account can apply for one formal signature per calendar day per Alibaba Cloud account. Users who verify your identity - Enterprise account currently have no such limit. For details about the differences between individual and enterprise user privileges, see [Before you begin](https://help.aliyun.com/document_detail/55324.html).
     * - Read the [Signature specifications](https://help.aliyun.com/document_detail/108076.html) to learn about the SMS signature review standards.
     * - Signatures applied for through the API are synchronized to the Short Message Service console. For console-related operations, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     * - After you submit a signature application, you can call the [GetSmsSign](https://help.aliyun.com/document_detail/2807429.html) operation to query the signature review status and details. You can also [configure receipt messages](https://help.aliyun.com/document_detail/101508.html) and use [SignSmsReport](https://help.aliyun.com/document_detail/120998.html) to obtain the signature review status messages.
     *
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
     * A message template defines the content of an SMS message. This content includes the message text and any variables. You can create templates for various business needs, such as sending verification codes, notifications, or promotional messages. A template must be approved before you can use it to send messages.
     *
     * @remarks
     * - For details on the API changes for signatures and templates, see the [Announcement on Signature and Template API Updates for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - Wait at least 30 seconds between API calls when applying for a message template.
     * - Message templates you apply for via the API are synchronized to the Short Message Service console. For details on how to manage message templates in the console, see [Message templates](https://help.aliyun.com/document_detail/108085.html).
     * - After you submit a template for review, you can call the [GetSmsTemplate](https://help.aliyun.com/document_detail/2807433.html) API to query the template\\"s review status and details. You can also [configure status reports](https://help.aliyun.com/document_detail/101508.html) to receive the template\\"s review status through [TemplateSmsReport](https://help.aliyun.com/document_detail/120999.html).
     * - Message templates for Chinese mainland messages and international messages are not interchangeable. Apply for message templates based on your use case.
     * - Only enterprise-verified users can apply for message templates for promotional messages and international messages. For details on the permission differences between individual and enterprise users, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     *
     * @param tmpReq - CreateSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsTemplateResponse
     *
     * @param CreateSmsTemplateRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSmsTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->applySceneContent) {
            @$query['ApplySceneContent'] = $request->applySceneContent;
        }

        if (null !== $request->intlType) {
            @$query['IntlType'] = $request->intlType;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->relatedSignName) {
            @$query['RelatedSignName'] = $request->relatedSignName;
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

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateRule) {
            @$query['TemplateRule'] = $request->templateRule;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->trafficDriving) {
            @$query['TrafficDriving'] = $request->trafficDriving;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsTemplate',
            'version' => '2017-05-25',
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
     * A message template defines the content of an SMS message. This content includes the message text and any variables. You can create templates for various business needs, such as sending verification codes, notifications, or promotional messages. A template must be approved before you can use it to send messages.
     *
     * @remarks
     * - For details on the API changes for signatures and templates, see the [Announcement on Signature and Template API Updates for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - Wait at least 30 seconds between API calls when applying for a message template.
     * - Message templates you apply for via the API are synchronized to the Short Message Service console. For details on how to manage message templates in the console, see [Message templates](https://help.aliyun.com/document_detail/108085.html).
     * - After you submit a template for review, you can call the [GetSmsTemplate](https://help.aliyun.com/document_detail/2807433.html) API to query the template\\"s review status and details. You can also [configure status reports](https://help.aliyun.com/document_detail/101508.html) to receive the template\\"s review status through [TemplateSmsReport](https://help.aliyun.com/document_detail/120999.html).
     * - Message templates for Chinese mainland messages and international messages are not interchangeable. Apply for message templates based on your use case.
     * - Only enterprise-verified users can apply for message templates for promotional messages and international messages. For details on the permission differences between individual and enterprise users, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     *
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
     * Creates a trademark entity. This operation is used when you need to upload trademark information when the signature source is set to trademark.
     *
     * @remarks
     * The trademark must be searchable on the China Trademark Network of the Trademark Office of the China National Intellectual Property Administration, and the trademark owner must match the enterprise name.
     *
     * @param request - CreateSmsTrademarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsTrademarkResponse
     *
     * @param CreateSmsTrademarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSmsTrademarkResponse
     */
    public function createSmsTrademarkWithOptions($request, $runtime)
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

        if (null !== $request->trademarkApplicantName) {
            @$query['TrademarkApplicantName'] = $request->trademarkApplicantName;
        }

        if (null !== $request->trademarkEffExpDate) {
            @$query['TrademarkEffExpDate'] = $request->trademarkEffExpDate;
        }

        if (null !== $request->trademarkName) {
            @$query['TrademarkName'] = $request->trademarkName;
        }

        if (null !== $request->trademarkPic) {
            @$query['TrademarkPic'] = $request->trademarkPic;
        }

        if (null !== $request->trademarkRegistrationNumber) {
            @$query['TrademarkRegistrationNumber'] = $request->trademarkRegistrationNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsTrademark',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a trademark entity. This operation is used when you need to upload trademark information when the signature source is set to trademark.
     *
     * @remarks
     * The trademark must be searchable on the China Trademark Network of the Trademark Office of the China National Intellectual Property Administration, and the trademark owner must match the enterprise name.
     *
     * @param request - CreateSmsTrademarkRequest
     *
     * @returns CreateSmsTrademarkResponse
     *
     * @param CreateSmsTrademarkRequest $request
     *
     * @return CreateSmsTrademarkResponse
     */
    public function createSmsTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsTrademarkWithOptions($request, $runtime);
    }

    /**
     * 删除验证码签名.
     *
     * @param request - DeleteExtCodeSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExtCodeSignResponse
     *
     * @param DeleteExtCodeSignRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteExtCodeSignResponse
     */
    public function deleteExtCodeSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extCode) {
            @$query['ExtCode'] = $request->extCode;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExtCodeSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExtCodeSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除验证码签名.
     *
     * @param request - DeleteExtCodeSignRequest
     *
     * @returns DeleteExtCodeSignResponse
     *
     * @param DeleteExtCodeSignRequest $request
     *
     * @return DeleteExtCodeSignResponse
     */
    public function deleteExtCodeSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExtCodeSignWithOptions($request, $runtime);
    }

    /**
     * Deletes a short URL. After deletion, the short URL is no longer usable and cannot be resolved to the source URL.
     *
     * @remarks
     * >Notice:
     * Short Message Service does not currently support this API operation.
     * ### QPS limit
     * The QPS limit for a single user is 100. Calls that exceed this limit are subject to rate limiting, which may affect your business. To prevent disruptions, call this operation at a reasonable frequency.
     *
     * @param request - DeleteShortUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteShortUrlResponse
     *
     * @param DeleteShortUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrlWithOptions($request, $runtime)
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

        $body = [];
        if (null !== $request->sourceUrl) {
            @$body['SourceUrl'] = $request->sourceUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteShortUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a short URL. After deletion, the short URL is no longer usable and cannot be resolved to the source URL.
     *
     * @remarks
     * >Notice:
     * Short Message Service does not currently support this API operation.
     * ### QPS limit
     * The QPS limit for a single user is 100. Calls that exceed this limit are subject to rate limiting, which may affect your business. To prevent disruptions, call this operation at a reasonable frequency.
     *
     * @param request - DeleteShortUrlRequest
     *
     * @returns DeleteShortUrlResponse
     *
     * @param DeleteShortUrlRequest $request
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShortUrlWithOptions($request, $runtime);
    }

    /**
     * If you no longer use an SMS qualification or need to delete it for other reasons, call this API or delete the SMS qualification in the Short Message Service console.
     *
     * @remarks
     * >Warning: Once a qualification is deleted, it cannot be restored or selected when you apply for signatures later. Proceed with caution.
     * - Qualifications under review cannot be modified or deleted. You can withdraw the application in the Short Message Service [console](https://dysms.console.aliyun.com/domestic/text/qualification) before performing the operation.
     * - Approved qualifications that have been bound to signatures cannot be deleted.
     * - Rejected qualifications can be directly resubmitted for review after you [modify the qualification information](~~UpdateSmsQualification~~).
     *
     * @param request - DeleteSmsQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSmsQualificationResponse
     *
     * @param DeleteSmsQualificationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSmsQualificationResponse
     */
    public function deleteSmsQualificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationGroupId) {
            @$query['QualificationGroupId'] = $request->qualificationGroupId;
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
            'action' => 'DeleteSmsQualification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSmsQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you no longer use an SMS qualification or need to delete it for other reasons, call this API or delete the SMS qualification in the Short Message Service console.
     *
     * @remarks
     * >Warning: Once a qualification is deleted, it cannot be restored or selected when you apply for signatures later. Proceed with caution.
     * - Qualifications under review cannot be modified or deleted. You can withdraw the application in the Short Message Service [console](https://dysms.console.aliyun.com/domestic/text/qualification) before performing the operation.
     * - Approved qualifications that have been bound to signatures cannot be deleted.
     * - Rejected qualifications can be directly resubmitted for review after you [modify the qualification information](~~UpdateSmsQualification~~).
     *
     * @param request - DeleteSmsQualificationRequest
     *
     * @returns DeleteSmsQualificationResponse
     *
     * @param DeleteSmsQualificationRequest $request
     *
     * @return DeleteSmsQualificationResponse
     */
    public function deleteSmsQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsQualificationWithOptions($request, $runtime);
    }

    /**
     * If you no longer use an SMS signature and need to delete it, call this operation or delete the SMS signature in the SMS Service console.
     *
     * @remarks
     * - You can delete signatures that are in the Withdrawn, Failed, or Approved state. You cannot delete signatures that are in the Pending Approval state.
     * - Deleted SMS signatures cannot be recovered, and the signature can no longer be used to send SMS messages. Proceed with caution.
     * - Signature deletion operations performed via the API are synchronized to the SMS Service console. For information about how to manage templates in the console, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     *
     * @param request - DeleteSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSmsSignResponse
     *
     * @param DeleteSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSignWithOptions($request, $runtime)
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you no longer use an SMS signature and need to delete it, call this operation or delete the SMS signature in the SMS Service console.
     *
     * @remarks
     * - You can delete signatures that are in the Withdrawn, Failed, or Approved state. You cannot delete signatures that are in the Pending Approval state.
     * - Deleted SMS signatures cannot be recovered, and the signature can no longer be used to send SMS messages. Proceed with caution.
     * - Signature deletion operations performed via the API are synchronized to the SMS Service console. For information about how to manage templates in the console, see [SMS signatures](https://help.aliyun.com/document_detail/108073.html).
     *
     * @param request - DeleteSmsSignRequest
     *
     * @returns DeleteSmsSignResponse
     *
     * @param DeleteSmsSignRequest $request
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsSignWithOptions($request, $runtime);
    }

    /**
     * Deletes an SMS template that you no longer need.
     *
     * @remarks
     * - 支持删除已撤回、审核失败或审核通过的模板，审核中的短信模板不支持删除。
     * - 删除短信模板后不可恢复，且后续不可再使用该模板发送短信，请谨慎操作。
     * - 通过接口删除模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/document_detail/108085.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - DeleteSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSmsTemplateResponse
     *
     * @param DeleteSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplateWithOptions($request, $runtime)
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an SMS template that you no longer need.
     *
     * @remarks
     * - 支持删除已撤回、审核失败或审核通过的模板，审核中的短信模板不支持删除。
     * - 删除短信模板后不可恢复，且后续不可再使用该模板发送短信，请谨慎操作。
     * - 通过接口删除模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/document_detail/108085.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - DeleteSmsTemplateRequest
     *
     * @returns DeleteSmsTemplateResponse
     *
     * @param DeleteSmsTemplateRequest $request
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the card SMS sending records and sending status of a single phone number.
     *
     * @param request - GetCardSmsDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCardSmsDetailsResponse
     *
     * @param GetCardSmsDetailsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCardSmsDetailsResponse
     */
    public function getCardSmsDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizCardId) {
            @$query['BizCardId'] = $request->bizCardId;
        }

        if (null !== $request->bizDigitId) {
            @$query['BizDigitId'] = $request->bizDigitId;
        }

        if (null !== $request->bizSmsId) {
            @$query['BizSmsId'] = $request->bizSmsId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCardSmsDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCardSmsDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the card SMS sending records and sending status of a single phone number.
     *
     * @param request - GetCardSmsDetailsRequest
     *
     * @returns GetCardSmsDetailsResponse
     *
     * @param GetCardSmsDetailsRequest $request
     *
     * @return GetCardSmsDetailsResponse
     */
    public function getCardSmsDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardSmsDetailsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the short URL for a card message.
     *
     * @remarks
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213273d4Xe6UEu#section-81n-72q-ybm)。
     * ### QPS限制
     * - 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - GetCardSmsLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCardSmsLinkResponse
     *
     * @param GetCardSmsLinkRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCardSmsLinkResponse
     */
    public function getCardSmsLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardCodeType) {
            @$query['CardCodeType'] = $request->cardCodeType;
        }

        if (null !== $request->cardLinkType) {
            @$query['CardLinkType'] = $request->cardLinkType;
        }

        if (null !== $request->cardTemplateCode) {
            @$query['CardTemplateCode'] = $request->cardTemplateCode;
        }

        if (null !== $request->cardTemplateParamJson) {
            @$query['CardTemplateParamJson'] = $request->cardTemplateParamJson;
        }

        if (null !== $request->customShortCodeJson) {
            @$query['CustomShortCodeJson'] = $request->customShortCodeJson;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->phoneNumberJson) {
            @$query['PhoneNumberJson'] = $request->phoneNumberJson;
        }

        if (null !== $request->signNameJson) {
            @$query['SignNameJson'] = $request->signNameJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCardSmsLink',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCardSmsLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the short URL for a card message.
     *
     * @remarks
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213273d4Xe6UEu#section-81n-72q-ybm)。
     * ### QPS限制
     * - 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - GetCardSmsLinkRequest
     *
     * @returns GetCardSmsLinkResponse
     *
     * @param GetCardSmsLinkRequest $request
     *
     * @return GetCardSmsLinkResponse
     */
    public function getCardSmsLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardSmsLinkWithOptions($request, $runtime);
    }

    /**
     * Converts images and videos uploaded to OSS storage for card SMS into resource data for unified management, and returns a resource ID. You can manage the returned resource ID as needed.
     *
     * @remarks
     * ### QPS限制
     * 本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - GetMediaResourceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaResourceIdResponse
     *
     * @param GetMediaResourceIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMediaResourceIdResponse
     */
    public function getMediaResourceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extendInfo) {
            @$query['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->memo) {
            @$query['Memo'] = $request->memo;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaResourceId',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaResourceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts images and videos uploaded to OSS storage for card SMS into resource data for unified management, and returns a resource ID. You can manage the returned resource ID as needed.
     *
     * @remarks
     * ### QPS限制
     * 本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - GetMediaResourceIdRequest
     *
     * @returns GetMediaResourceIdResponse
     *
     * @param GetMediaResourceIdRequest $request
     *
     * @return GetMediaResourceIdResponse
     */
    public function getMediaResourceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaResourceIdWithOptions($request, $runtime);
    }

    /**
     * Retrieves the OSS resource configuration information for card messages. This information is used for subsequent OSS file upload operations.
     *
     * @remarks
     * - 您在调用卡片短信相关API接口前，首先需要开通卡片短信功能，目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html)。
     * - 卡片短信模板中使用的图片、视频等素材资源可上传到OSS文件系统保存。文件上传操作，请参见[OSS文件上传](https://help.aliyun.com/document_detail/437303.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSInfoForCardTemplateResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplateWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetOSSInfoForCardTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOSSInfoForCardTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS resource configuration information for card messages. This information is used for subsequent OSS file upload operations.
     *
     * @remarks
     * - 您在调用卡片短信相关API接口前，首先需要开通卡片短信功能，目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html)。
     * - 卡片短信模板中使用的图片、视频等素材资源可上传到OSS文件系统保存。文件上传操作，请参见[OSS文件上传](https://help.aliyun.com/document_detail/437303.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @returns GetOSSInfoForCardTemplateResponse
     *
     * @return GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSInfoForCardTemplateWithOptions($runtime);
    }

    /**
     * Obtains OSS resource configuration information, which will be used for subsequent OSS file upload operations.
     *
     * @remarks
     * - When you create a signature or template, you can upload materials such as login pages with links, backend page screenshots, software copyrights, and supplementary agreements. These materials help reviewers understand the details of your business. If you have multiple materials, you can combine them into one file. The supported formats are png, jpg, jpeg, doc, docx, and pdf.
     * - Additional materials required for creating a signature or template can be uploaded to the OSS file system for storage. For information about file upload operations, see [Upload files to OSS](https://help.aliyun.com/document_detail/2833114.html).
     *
     * @param request - GetOSSInfoForUploadFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSInfoForUploadFileResponse
     *
     * @param GetOSSInfoForUploadFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOSSInfoForUploadFileResponse
     */
    public function getOSSInfoForUploadFileWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOSSInfoForUploadFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOSSInfoForUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains OSS resource configuration information, which will be used for subsequent OSS file upload operations.
     *
     * @remarks
     * - When you create a signature or template, you can upload materials such as login pages with links, backend page screenshots, software copyrights, and supplementary agreements. These materials help reviewers understand the details of your business. If you have multiple materials, you can combine them into one file. The supported formats are png, jpg, jpeg, doc, docx, and pdf.
     * - Additional materials required for creating a signature or template can be uploaded to the OSS file system for storage. For information about file upload operations, see [Upload files to OSS](https://help.aliyun.com/document_detail/2833114.html).
     *
     * @param request - GetOSSInfoForUploadFileRequest
     *
     * @returns GetOSSInfoForUploadFileResponse
     *
     * @param GetOSSInfoForUploadFileRequest $request
     *
     * @return GetOSSInfoForUploadFileResponse
     */
    public function getOSSInfoForUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSInfoForUploadFileWithOptions($request, $runtime);
    }

    /**
     * Obtains the OSS resource configuration information for qualification materials. This configuration information will be used for subsequent uploads of qualification files such as authorization letters and enterprise certificates.
     *
     * @remarks
     * - When you apply for a qualification or signature, if the purpose is for other use or involves a third party, you must provide an [authorization letter](https://help.aliyun.com/document_detail/56741.html).
     * - After you use this API to obtain the OSS resource configuration information, upload the related qualification materials through OSS. For more information, see [Upload files through OSS](https://help.aliyun.com/document_detail/2833114.html).
     * - The names of files to be uploaded cannot contain Chinese characters or special symbols.
     *
     * @param request - GetQualificationOssInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualificationOssInfoResponse
     *
     * @param GetQualificationOssInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetQualificationOssInfoResponse
     */
    public function getQualificationOssInfoWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualificationOssInfo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualificationOssInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the OSS resource configuration information for qualification materials. This configuration information will be used for subsequent uploads of qualification files such as authorization letters and enterprise certificates.
     *
     * @remarks
     * - When you apply for a qualification or signature, if the purpose is for other use or involves a third party, you must provide an [authorization letter](https://help.aliyun.com/document_detail/56741.html).
     * - After you use this API to obtain the OSS resource configuration information, upload the related qualification materials through OSS. For more information, see [Upload files through OSS](https://help.aliyun.com/document_detail/2833114.html).
     * - The names of files to be uploaded cannot contain Chinese characters or special symbols.
     *
     * @param request - GetQualificationOssInfoRequest
     *
     * @returns GetQualificationOssInfoResponse
     *
     * @param GetQualificationOssInfoRequest $request
     *
     * @return GetQualificationOssInfoResponse
     */
    public function getQualificationOssInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualificationOssInfoWithOptions($request, $runtime);
    }

    /**
     * 查询5g短信详情.
     *
     * @param request - GetRCSSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRCSSignatureResponse
     *
     * @param GetRCSSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRCSSignatureResponse
     */
    public function getRCSSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRCSSignature',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRCSSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询5g短信详情.
     *
     * @param request - GetRCSSignatureRequest
     *
     * @returns GetRCSSignatureResponse
     *
     * @param GetRCSSignatureRequest $request
     *
     * @return GetRCSSignatureResponse
     */
    public function getRCSSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRCSSignatureWithOptions($request, $runtime);
    }

    /**
     * Retrieves the OSS information for OCR.
     *
     * @param request - GetSmsOcrOssInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsOcrOssInfoResponse
     *
     * @param GetSmsOcrOssInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSmsOcrOssInfoResponse
     */
    public function getSmsOcrOssInfoWithOptions($request, $runtime)
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsOcrOssInfo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsOcrOssInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS information for OCR.
     *
     * @param request - GetSmsOcrOssInfoRequest
     *
     * @returns GetSmsOcrOssInfoResponse
     *
     * @param GetSmsOcrOssInfoRequest $request
     *
     * @return GetSmsOcrOssInfoResponse
     */
    public function getSmsOcrOssInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsOcrOssInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the review details of a signature after you apply for it.
     *
     * @remarks
     * - 仅可查询**首次创建**的签名资料或者**最新审核通过**的资料。
     * - 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/document_detail/2806975.html)。
     * - 审核时间：一般情况下，签名提交后，阿里云预计在 2 个小时内审核完成（审核工作时间：周一至周日 9:00~21:00，法定节假日顺延）。
     * - 如果签名未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用[UpdateSmsSign](https://help.aliyun.com/document_detail/2807428.html)接口或在[签名管理](https://dysms.console.aliyun.com/domestic/text/sign)页面修改未审核通过的短信签名。
     * - [QuerySmsSignList](~~QuerySmsSignList~~)接口可以查询您账号下的所有签名，包括签名审核状态、签名类型、签名名称等。
     * - 本接口的单用户QPS限制为150次/秒。超过限制，API调用将会被限流，这可能会影响您的业务，请合理调用。
     *
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
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsSign',
            'version' => '2017-05-25',
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
     * Queries the review details of a signature after you apply for it.
     *
     * @remarks
     * - 仅可查询**首次创建**的签名资料或者**最新审核通过**的资料。
     * - 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/document_detail/2806975.html)。
     * - 审核时间：一般情况下，签名提交后，阿里云预计在 2 个小时内审核完成（审核工作时间：周一至周日 9:00~21:00，法定节假日顺延）。
     * - 如果签名未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用[UpdateSmsSign](https://help.aliyun.com/document_detail/2807428.html)接口或在[签名管理](https://dysms.console.aliyun.com/domestic/text/sign)页面修改未审核通过的短信签名。
     * - [QuerySmsSignList](~~QuerySmsSignList~~)接口可以查询您账号下的所有签名，包括签名审核状态、签名类型、签名名称等。
     * - 本接口的单用户QPS限制为150次/秒。超过限制，API调用将会被限流，这可能会影响您的业务，请合理调用。
     *
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
     * Queries the approval details of a template after you submit a template application. You can view the approval status of the template.
     *
     * @remarks
     * - 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/document_detail/2806975.html)。
     * - 审核时间：一般情况下，模板提交后，阿里云预计在2个小时内审核完成（审核工作时间：周一至周日9:00~21:00，法定节假日顺延）。
     * - 如果模板未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用[UpdateSmsTemplate](~~UpdateSmsTemplate~~)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。
     * - 当前接口是通过模板Code查询单个模板的审核详情。[QuerySmsTemplateList](https://help.aliyun.com/document_detail/419288.html)接口可以查询您当前账号下所有模板的模板详情。
     *
     * @param request - GetSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsTemplateResponse
     *
     * @param GetSmsTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSmsTemplateResponse
     */
    public function getSmsTemplateWithOptions($request, $runtime)
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the approval details of a template after you submit a template application. You can view the approval status of the template.
     *
     * @remarks
     * - 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/document_detail/2806975.html)。
     * - 审核时间：一般情况下，模板提交后，阿里云预计在2个小时内审核完成（审核工作时间：周一至周日9:00~21:00，法定节假日顺延）。
     * - 如果模板未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用[UpdateSmsTemplate](~~UpdateSmsTemplate~~)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。
     * - 当前接口是通过模板Code查询单个模板的审核详情。[QuerySmsTemplateList](https://help.aliyun.com/document_detail/419288.html)接口可以查询您当前账号下所有模板的模板详情。
     *
     * @param request - GetSmsTemplateRequest
     *
     * @returns GetSmsTemplateResponse
     *
     * @param GetSmsTemplateRequest $request
     *
     * @return GetSmsTemplateResponse
     */
    public function getSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * 查询模板列表详情（新接口）.
     *
     * @param tmpReq - GetSmsTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsTemplateListResponse
     *
     * @param GetSmsTemplateListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetSmsTemplateListResponse
     */
    public function getSmsTemplateListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSmsTemplateListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->usableStateList) {
            $request->usableStateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->usableStateList, 'UsableStateList', 'json');
        }

        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateTag) {
            @$query['TemplateTag'] = $request->templateTag;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->usableStateListShrink) {
            @$query['UsableStateList'] = $request->usableStateListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsTemplateList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模板列表详情（新接口）.
     *
     * @param request - GetSmsTemplateListRequest
     *
     * @returns GetSmsTemplateListResponse
     *
     * @param GetSmsTemplateListRequest $request
     *
     * @return GetSmsTemplateListResponse
     */
    public function getSmsTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsTemplateListWithOptions($request, $runtime);
    }

    /**
     * Tags are markers that you add to templates. Each tag consists of a key-value pair (Key-Value). You can query the template codes bound to a tag key-value pair, or query all tags bound to a specific template.
     *
     * @remarks
     * You can log on to the Short Message Service (SMS) console and go to the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page to filter SMS templates that are bound to tag key-value pairs, or click **Details** in the Actions column to view the tags that are bound to the current template.
     * ### QPS limit
     * The per-user QPS limit of this operation is 50 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Call this operation properly.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags are markers that you add to templates. Each tag consists of a key-value pair (Key-Value). You can query the template codes bound to a tag key-value pair, or query all tags bound to a specific template.
     *
     * @remarks
     * You can log on to the Short Message Service (SMS) console and go to the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page to filter SMS templates that are bound to tag key-value pairs, or click **Details** in the Actions column to view the tags that are bound to the current template.
     * ### QPS limit
     * The per-user QPS limit of this operation is 50 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Call this operation properly.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * This operation is discontinued.
     *
     * @remarks
     * - 根据工信部规定与运营商[相关要求](https://help.aliyun.com/document_detail/2806975.html)，阿里云进行了签名相关API的功能改造。为提升您签名的审核效率和审核通过率，请您使用新接口[UpdateSmsSign-修改短信签名](https://help.aliyun.com/document_detail/2807428.html)。
     * - 仅支持修改未通过审核的签名，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用此接口修改后自动提交审核，签名进入待审核状态。
     * - 通过接口修改签名的操作会在短信服务控制台同步，在控制台对签名的相关操作，请参见[短信签名](https://help.aliyun.com/document_detail/108073.html)。
     *
     * @param request - ModifySmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySmsSignResponse
     *
     * @param ModifySmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        if (null !== $request->signType) {
            @$query['SignType'] = $request->signType;
        }

        $body = [];
        if (null !== $request->signFileList) {
            @$body['SignFileList'] = $request->signFileList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is discontinued.
     *
     * @remarks
     * - 根据工信部规定与运营商[相关要求](https://help.aliyun.com/document_detail/2806975.html)，阿里云进行了签名相关API的功能改造。为提升您签名的审核效率和审核通过率，请您使用新接口[UpdateSmsSign-修改短信签名](https://help.aliyun.com/document_detail/2807428.html)。
     * - 仅支持修改未通过审核的签名，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用此接口修改后自动提交审核，签名进入待审核状态。
     * - 通过接口修改签名的操作会在短信服务控制台同步，在控制台对签名的相关操作，请参见[短信签名](https://help.aliyun.com/document_detail/108073.html)。
     *
     * @param request - ModifySmsSignRequest
     *
     * @returns ModifySmsSignResponse
     *
     * @param ModifySmsSignRequest $request
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsSignWithOptions($request, $runtime);
    }

    /**
     * This operation is discontinued.
     *
     * @remarks
     * - 根据工信部规定与运营商[相关要求](https://help.aliyun.com/document_detail/2806975.html)，阿里云进行了模板相关API的功能改造。为提升您模板的审核效率和审核通过率，请您使用新接口[UpdateSmsTemplate-修改短信模板](https://help.aliyun.com/document_detail/2807432.html)。
     * - 仅支持修改未通过审核的模板，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用此接口修改后重新提交审核。
     * - 通过接口修改模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/document_detail/108085.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @deprecated openAPI ModifySmsTemplate is deprecated, please use Dysmsapi::2017-05-25::UpdateSmsTemplate instead
     *
     * @param request - ModifySmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySmsTemplateResponse
     *
     * @param ModifySmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This operation is discontinued.
     *
     * @remarks
     * - 根据工信部规定与运营商[相关要求](https://help.aliyun.com/document_detail/2806975.html)，阿里云进行了模板相关API的功能改造。为提升您模板的审核效率和审核通过率，请您使用新接口[UpdateSmsTemplate-修改短信模板](https://help.aliyun.com/document_detail/2807432.html)。
     * - 仅支持修改未通过审核的模板，请参考[短信审核失败的处理建议](https://help.aliyun.com/document_detail/65990.html)，调用此接口修改后重新提交审核。
     * - 通过接口修改模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/document_detail/108085.html)。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @deprecated openAPI ModifySmsTemplate is deprecated, please use Dysmsapi::2017-05-25::UpdateSmsTemplate instead
     *
     * @param request - ModifySmsTemplateRequest
     *
     * @returns ModifySmsTemplateResponse
     *
     * @param ModifySmsTemplateRequest $request
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the review status of a card SMS template and returns information about the review by mobile phone vendors.
     *
     * @remarks
     * - Alibaba Cloud accounts that have not activated the card SMS service cannot call this API.
     * - The card SMS service is currently in the internal invitation phase. Contact your Alibaba Cloud business manager to apply for activation or [contact Alibaba Cloud pre-sales consultation](https://help.aliyun.com/document_detail/464625.html).
     * - You can also log on to the [Domestic Card SMS](https://dysms.console.aliyun.com/domestic/card) page in the console and query the review status of card SMS templates on the Template Management tab.
     * ### QPS limit
     * The per-user QPS limit for this operation is 300 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation responsibly.
     *
     * @param request - QueryCardSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsTemplateResponse
     *
     * @param QueryCardSmsTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the review status of a card SMS template and returns information about the review by mobile phone vendors.
     *
     * @remarks
     * - Alibaba Cloud accounts that have not activated the card SMS service cannot call this API.
     * - The card SMS service is currently in the internal invitation phase. Contact your Alibaba Cloud business manager to apply for activation or [contact Alibaba Cloud pre-sales consultation](https://help.aliyun.com/document_detail/464625.html).
     * - You can also log on to the [Domestic Card SMS](https://dysms.console.aliyun.com/domestic/card) page in the console and query the review status of card SMS templates on the Template Management tab.
     * ### QPS limit
     * The per-user QPS limit for this operation is 300 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation responsibly.
     *
     * @param request - QueryCardSmsTemplateRequest
     *
     * @returns QueryCardSmsTemplateResponse
     *
     * @param QueryCardSmsTemplateRequest $request
     *
     * @return QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the parsing data of a specified card SMS template. The parsing data includes the number of successful SMS parsing receipts, the number of message exposures, and the number of message clicks.
     *
     * @remarks
     * ### QPS limit
     * The QPS limit on this operation is 300 calls per second per user. If the number of calls per second exceeds the limit, throttling is triggered. This may affect your business. Call this operation at a reasonable pace.
     *
     * @param request - QueryCardSmsTemplateReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsTemplateReportResponse
     *
     * @param QueryCardSmsTemplateReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryCardSmsTemplateReportResponse
     */
    public function queryCardSmsTemplateReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->templateCodes) {
            @$query['TemplateCodes'] = $request->templateCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsTemplateReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsTemplateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parsing data of a specified card SMS template. The parsing data includes the number of successful SMS parsing receipts, the number of message exposures, and the number of message clicks.
     *
     * @remarks
     * ### QPS limit
     * The QPS limit on this operation is 300 calls per second per user. If the number of calls per second exceeds the limit, throttling is triggered. This may affect your business. Call this operation at a reasonable pace.
     *
     * @param request - QueryCardSmsTemplateReportRequest
     *
     * @returns QueryCardSmsTemplateReportResponse
     *
     * @param QueryCardSmsTemplateReportRequest $request
     *
     * @return QueryCardSmsTemplateReportResponse
     */
    public function queryCardSmsTemplateReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsTemplateReportWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a digital SMS signature by its name.
     *
     * @remarks
     * You can query only the digital SMS signatures that belong to your Alibaba Cloud account.
     *
     * @param request - QueryDigitalSignByNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalSignByNameResponse
     *
     * @param QueryDigitalSignByNameRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDigitalSignByNameResponse
     */
    public function queryDigitalSignByNameWithOptions($request, $runtime)
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalSignByName',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalSignByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a digital SMS signature by its name.
     *
     * @remarks
     * You can query only the digital SMS signatures that belong to your Alibaba Cloud account.
     *
     * @param request - QueryDigitalSignByNameRequest
     *
     * @returns QueryDigitalSignByNameResponse
     *
     * @param QueryDigitalSignByNameRequest $request
     *
     * @return QueryDigitalSignByNameResponse
     */
    public function queryDigitalSignByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalSignByNameWithOptions($request, $runtime);
    }

    /**
     * 查询验证码签名.
     *
     * @param request - QueryExtCodeSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExtCodeSignResponse
     *
     * @param QueryExtCodeSignRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryExtCodeSignResponse
     */
    public function queryExtCodeSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extCode) {
            @$query['ExtCode'] = $request->extCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryExtCodeSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExtCodeSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询验证码签名.
     *
     * @param request - QueryExtCodeSignRequest
     *
     * @returns QueryExtCodeSignResponse
     *
     * @param QueryExtCodeSignRequest $request
     *
     * @return QueryExtCodeSignResponse
     */
    public function queryExtCodeSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExtCodeSignWithOptions($request, $runtime);
    }

    /**
     * Queries whether a phone number supports card SMS messages.
     *
     * @remarks
     * - 未开通卡片短信业务的阿里云账号无法调用此API。
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或[联系阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html)。
     *
     * @param tmpReq - QueryMobilesCardSupportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMobilesCardSupportResponse
     *
     * @param QueryMobilesCardSupportRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMobilesCardSupportResponse
     */
    public function queryMobilesCardSupportWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMobilesCardSupportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->mobiles) {
            $request->mobilesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mobiles, 'Mobiles', 'json');
        }

        $query = [];
        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->mobilesShrink) {
            @$query['Mobiles'] = $request->mobilesShrink;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMobilesCardSupport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMobilesCardSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a phone number supports card SMS messages.
     *
     * @remarks
     * - 未开通卡片短信业务的阿里云账号无法调用此API。
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或[联系阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html)。
     *
     * @param request - QueryMobilesCardSupportRequest
     *
     * @returns QueryMobilesCardSupportResponse
     *
     * @param QueryMobilesCardSupportRequest $request
     *
     * @return QueryMobilesCardSupportResponse
     */
    public function queryMobilesCardSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMobilesCardSupportWithOptions($request, $runtime);
    }

    /**
     * 点击明细查询.
     *
     * @param request - QueryPageSmartShortUrlLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPageSmartShortUrlLogResponse
     *
     * @param QueryPageSmartShortUrlLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPageSmartShortUrlLogResponse
     */
    public function queryPageSmartShortUrlLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createDateEnd) {
            @$query['CreateDateEnd'] = $request->createDateEnd;
        }

        if (null !== $request->createDateStart) {
            @$query['CreateDateStart'] = $request->createDateStart;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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

        if (null !== $request->shortUrl) {
            @$query['ShortUrl'] = $request->shortUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPageSmartShortUrlLog',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPageSmartShortUrlLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 点击明细查询.
     *
     * @param request - QueryPageSmartShortUrlLogRequest
     *
     * @returns QueryPageSmartShortUrlLogResponse
     *
     * @param QueryPageSmartShortUrlLogRequest $request
     *
     * @return QueryPageSmartShortUrlLogResponse
     */
    public function queryPageSmartShortUrlLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPageSmartShortUrlLogWithOptions($request, $runtime);
    }

    /**
     * 批量查询终端5G适配情况.
     *
     * @param request - QueryRCSMobileCapableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRCSMobileCapableResponse
     *
     * @param QueryRCSMobileCapableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryRCSMobileCapableResponse
     */
    public function queryRCSMobileCapableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRCSMobileCapable',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRCSMobileCapableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询终端5G适配情况.
     *
     * @param request - QueryRCSMobileCapableRequest
     *
     * @returns QueryRCSMobileCapableResponse
     *
     * @param QueryRCSMobileCapableRequest $request
     *
     * @return QueryRCSMobileCapableResponse
     */
    public function queryRCSMobileCapable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRCSMobileCapableWithOptions($request, $runtime);
    }

    /**
     * 查询终端5G适配情况任务结果.
     *
     * @param request - QueryRCSMobileCapableTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRCSMobileCapableTaskResultResponse
     *
     * @param QueryRCSMobileCapableTaskResultRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryRCSMobileCapableTaskResultResponse
     */
    public function queryRCSMobileCapableTaskResultWithOptions($request, $runtime)
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
            'action' => 'QueryRCSMobileCapableTaskResult',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRCSMobileCapableTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询终端5G适配情况任务结果.
     *
     * @param request - QueryRCSMobileCapableTaskResultRequest
     *
     * @returns QueryRCSMobileCapableTaskResultResponse
     *
     * @param QueryRCSMobileCapableTaskResultRequest $request
     *
     * @return QueryRCSMobileCapableTaskResultResponse
     */
    public function queryRCSMobileCapableTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRCSMobileCapableTaskResultWithOptions($request, $runtime);
    }

    /**
     * 查询5G模板详情.
     *
     * @param request - QueryRCSTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRCSTemplateResponse
     *
     * @param QueryRCSTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRCSTemplateResponse
     */
    public function queryRCSTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRCSTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRCSTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询5G模板详情.
     *
     * @param request - QueryRCSTemplateRequest
     *
     * @returns QueryRCSTemplateResponse
     *
     * @param QueryRCSTemplateRequest $request
     *
     * @return QueryRCSTemplateResponse
     */
    public function queryRCSTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRCSTemplateWithOptions($request, $runtime);
    }

    /**
     * 指定版本查看5G消息固定菜单详情.
     *
     * @param request - QueryRcsSignMenuByVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRcsSignMenuByVersionResponse
     *
     * @param QueryRcsSignMenuByVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryRcsSignMenuByVersionResponse
     */
    public function queryRcsSignMenuByVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rcsMenuVersion) {
            @$query['RcsMenuVersion'] = $request->rcsMenuVersion;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRcsSignMenuByVersion',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRcsSignMenuByVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定版本查看5G消息固定菜单详情.
     *
     * @param request - QueryRcsSignMenuByVersionRequest
     *
     * @returns QueryRcsSignMenuByVersionResponse
     *
     * @param QueryRcsSignMenuByVersionRequest $request
     *
     * @return QueryRcsSignMenuByVersionResponse
     */
    public function queryRcsSignMenuByVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRcsSignMenuByVersionWithOptions($request, $runtime);
    }

    /**
     * Queries the delivery records and status of SMS messages sent to a single phone number.
     *
     * @remarks
     * - This operation queries the details of SMS messages sent to a specific phone number on a given date. You can also provide the `BizId` to query a specific delivery record.
     * - This operation queries delivery details for a single phone number at a time. To view delivery details in bulk, use the [QuerySendStatistics](https://help.aliyun.com/document_detail/419276.html) operation to query delivery statistics, or log in to the [Delivery Receipts](https://dysms.console.aliyun.com/record) page in the console.
     * ### QPS limit
     * The QPS limit for this operation is 5,000 requests per second per user. Calls that exceed this limit are throttled.
     *
     * @param request - QuerySendDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendDetailsResponse
     *
     * @param QuerySendDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the delivery records and status of SMS messages sent to a single phone number.
     *
     * @remarks
     * - This operation queries the details of SMS messages sent to a specific phone number on a given date. You can also provide the `BizId` to query a specific delivery record.
     * - This operation queries delivery details for a single phone number at a time. To view delivery details in bulk, use the [QuerySendStatistics](https://help.aliyun.com/document_detail/419276.html) operation to query delivery statistics, or log in to the [Delivery Receipts](https://dysms.console.aliyun.com/record) page in the console.
     * ### QPS limit
     * The QPS limit for this operation is 5,000 requests per second per user. Calls that exceed this limit are throttled.
     *
     * @param request - QuerySendDetailsRequest
     *
     * @returns QuerySendDetailsResponse
     *
     * @param QuerySendDetailsRequest $request
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries message delivery statistics, including send dates, the number of successfully sent messages, and the number of received delivery receipts.
     *
     * @remarks
     * - If you query data over a long time range, the results are paginated. You can specify the page size and page number to navigate through the Delivery Logs.
     * - You can also view delivery details by logging in to the [Short Message Service console](https://dysms.console.aliyun.com/dysms.htm#/overview) and navigating to the **Business Statistics** > **Delivery Logs** page.
     *
     * @param request - QuerySendStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendStatisticsResponse
     *
     * @param QuerySendStatisticsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySendStatisticsResponse
     */
    public function querySendStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->isGlobe) {
            @$query['IsGlobe'] = $request->isGlobe;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendStatistics',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries message delivery statistics, including send dates, the number of successfully sent messages, and the number of received delivery receipts.
     *
     * @remarks
     * - If you query data over a long time range, the results are paginated. You can specify the page size and page number to navigate through the Delivery Logs.
     * - You can also view delivery details by logging in to the [Short Message Service console](https://dysms.console.aliyun.com/dysms.htm#/overview) and navigating to the **Business Statistics** > **Delivery Logs** page.
     *
     * @param request - QuerySendStatisticsRequest
     *
     * @returns QuerySendStatisticsResponse
     *
     * @param QuerySendStatisticsRequest $request
     *
     * @return QuerySendStatisticsResponse
     */
    public function querySendStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendStatisticsWithOptions($request, $runtime);
    }

    /**
     * Checks the status and availability of a short link.
     *
     * @remarks
     * >Notice:
     * This API is not currently supported by Short Message Service.
     * ### QPS limit
     * The QPS limit for this API is 20 queries per second per user. API calls that exceed this limit are rate-limited, which can impact your business. Plan your calls accordingly.
     *
     * @param request - QueryShortUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryShortUrlResponse
     *
     * @param QueryShortUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrlWithOptions($request, $runtime)
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

        $body = [];
        if (null !== $request->shortUrl) {
            @$body['ShortUrl'] = $request->shortUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryShortUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the status and availability of a short link.
     *
     * @remarks
     * >Notice:
     * This API is not currently supported by Short Message Service.
     * ### QPS limit
     * The QPS limit for this API is 20 queries per second per user. API calls that exceed this limit are rate-limited, which can impact your business. Plan your calls accordingly.
     *
     * @param request - QueryShortUrlRequest
     *
     * @returns QueryShortUrlResponse
     *
     * @param QueryShortUrlRequest $request
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlWithOptions($request, $runtime);
    }

    /**
     * After you apply for SMS qualifications, you can call this operation to query the details of a single qualification.
     *
     * @remarks
     * - This API queries the details of a single qualification (enterprise information, legal representative information, and administrator information).
     * - To query all qualification information under your current account, or to query review details, call the [QuerySmsQualificationRecord](~~QuerySmsQualificationRecord~~) operation.
     * - Affected by the SMS signature real-name registration requirements, the volume of qualification review tickets is growing rapidly, and the review time may be extended. Please be patient. The review is expected to be completed within 2 business days (review hours: Monday to Sunday 9:00-21:00, postponed for legal holidays). In special cases, the review time may be extended. Please be patient.
     *
     * @param request - QuerySingleSmsQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySingleSmsQualificationResponse
     *
     * @param QuerySingleSmsQualificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QuerySingleSmsQualificationResponse
     */
    public function querySingleSmsQualificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationGroupId) {
            @$query['QualificationGroupId'] = $request->qualificationGroupId;
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
            'action' => 'QuerySingleSmsQualification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySingleSmsQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you apply for SMS qualifications, you can call this operation to query the details of a single qualification.
     *
     * @remarks
     * - This API queries the details of a single qualification (enterprise information, legal representative information, and administrator information).
     * - To query all qualification information under your current account, or to query review details, call the [QuerySmsQualificationRecord](~~QuerySmsQualificationRecord~~) operation.
     * - Affected by the SMS signature real-name registration requirements, the volume of qualification review tickets is growing rapidly, and the review time may be extended. Please be patient. The review is expected to be completed within 2 business days (review hours: Monday to Sunday 9:00-21:00, postponed for legal holidays). In special cases, the review time may be extended. Please be patient.
     *
     * @param request - QuerySingleSmsQualificationRequest
     *
     * @returns QuerySingleSmsQualificationResponse
     *
     * @param QuerySingleSmsQualificationRequest $request
     *
     * @return QuerySingleSmsQualificationResponse
     */
    public function querySingleSmsQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySingleSmsQualificationWithOptions($request, $runtime);
    }

    /**
     * Queries icp record details.
     *
     * @remarks
     * Pass a list of icp record IDs to retrieve their details.
     * For example, call the QuerySmsSignList or GetSmsSign API to obtain the required icp record IDs.
     *
     * @param tmpReq - QuerySmsAppIcpRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsAppIcpRecordResponse
     *
     * @param QuerySmsAppIcpRecordRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsAppIcpRecordResponse
     */
    public function querySmsAppIcpRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySmsAppIcpRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appIcpRecordIdList) {
            $request->appIcpRecordIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appIcpRecordIdList, 'AppIcpRecordIdList', 'json');
        }

        $query = [];
        if (null !== $request->appIcpRecordIdListShrink) {
            @$query['AppIcpRecordIdList'] = $request->appIcpRecordIdListShrink;
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
            'action' => 'QuerySmsAppIcpRecord',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsAppIcpRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries icp record details.
     *
     * @remarks
     * Pass a list of icp record IDs to retrieve their details.
     * For example, call the QuerySmsSignList or GetSmsSign API to obtain the required icp record IDs.
     *
     * @param request - QuerySmsAppIcpRecordRequest
     *
     * @returns QuerySmsAppIcpRecordResponse
     *
     * @param QuerySmsAppIcpRecordRequest $request
     *
     * @return QuerySmsAppIcpRecordResponse
     */
    public function querySmsAppIcpRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsAppIcpRecordWithOptions($request, $runtime);
    }

    /**
     * Queries created letters of authorization. You can view the review status and authorized signature scope of the letters.
     *
     * @remarks
     * - Supports full query or conditional query:
     *   - **Full query**: Queries the information of all letters of authorization under your current account. No parameters need to be passed. Full query is performed by default.
     *   - **Conditional query**: Supports queries by letter of authorization ID, signature name, and review status of the letter of authorization. Pass the parameters by which you want to filter.
     * - Review duration: Affected by the real-name registration requirements for SMS signatures, the volume of qualification review tickets is currently increasing rapidly, and the review duration may be extended. Please wait patiently. The review is expected to be completed within 2 working days. SMS signatures and templates are expected to be reviewed within 2 hours after submission. Reviews involving governments and enterprises are generally completed within 2 working days. If verification upgrades, a large number of review tasks, or non-working hours are encountered, the review duration may be extended. Please wait patiently. (Review working hours: Monday to Sunday, 9:00–21:00, postponed for statutory holidays.)
     *
     * @param tmpReq - QuerySmsAuthorizationLetterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsAuthorizationLetterResponse
     *
     * @param QuerySmsAuthorizationLetterRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return QuerySmsAuthorizationLetterResponse
     */
    public function querySmsAuthorizationLetterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySmsAuthorizationLetterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authorizationLetterIdList) {
            $request->authorizationLetterIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authorizationLetterIdList, 'AuthorizationLetterIdList', 'json');
        }

        $query = [];
        if (null !== $request->authorizationLetterIdListShrink) {
            @$query['AuthorizationLetterIdList'] = $request->authorizationLetterIdListShrink;
        }

        if (null !== $request->organizationCode) {
            @$query['OrganizationCode'] = $request->organizationCode;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsAuthorizationLetter',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsAuthorizationLetterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries created letters of authorization. You can view the review status and authorized signature scope of the letters.
     *
     * @remarks
     * - Supports full query or conditional query:
     *   - **Full query**: Queries the information of all letters of authorization under your current account. No parameters need to be passed. Full query is performed by default.
     *   - **Conditional query**: Supports queries by letter of authorization ID, signature name, and review status of the letter of authorization. Pass the parameters by which you want to filter.
     * - Review duration: Affected by the real-name registration requirements for SMS signatures, the volume of qualification review tickets is currently increasing rapidly, and the review duration may be extended. Please wait patiently. The review is expected to be completed within 2 working days. SMS signatures and templates are expected to be reviewed within 2 hours after submission. Reviews involving governments and enterprises are generally completed within 2 working days. If verification upgrades, a large number of review tasks, or non-working hours are encountered, the review duration may be extended. Please wait patiently. (Review working hours: Monday to Sunday, 9:00–21:00, postponed for statutory holidays.)
     *
     * @param request - QuerySmsAuthorizationLetterRequest
     *
     * @returns QuerySmsAuthorizationLetterResponse
     *
     * @param QuerySmsAuthorizationLetterRequest $request
     *
     * @return QuerySmsAuthorizationLetterResponse
     */
    public function querySmsAuthorizationLetter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsAuthorizationLetterWithOptions($request, $runtime);
    }

    /**
     * Queries a list of SMS qualifications and their review details after you submit qualification applications. This operation supports filtered query.
     *
     * @remarks
     * - 支持全量查询或条件查询：
     *   - **全量查询**：查询您当前帐户下所有短信资质，无需传参。默认全量查询。
     *   - **条件查询**：支持根据资质名称、企业名称、法人姓名、审核状态、审核工单ID、资质用途进行查询，传入您希望筛选的参数即可。
     * - 本接口用于查询资质及其审核信息，如果需要查询单个资质的具体信息（企业信息、法人信息、管理员信息），请调用[查询单个资质详情](~~QuerySingleSmsQualification~~)接口。
     * - 受短信签名实名制报备要求影响，当前资质审核工单量增长快速，审核时间可能会延长，请耐心等待，预计2个工作日内完成（审核工作时间：周一至周日 9:00~21:00，法定节假日顺延）。特殊情况可能延长审核时间，请耐心等待。
     * - 如果资质未通过审核，审核备注`AuditRemark`会返回审核失败的原因，请参考[审核失败的处理建议](~~2384377#a96cc318b94x1~~)，调用[修改短信资质](~~UpdateSmsQualification~~)接口或在控制台[资质管理](https://dysms.console.aliyun.com/domestic/text/qualification)页面修改资质信息后，重新发起审核。
     *
     * @param request - QuerySmsQualificationRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsQualificationRecordResponse
     *
     * @param QuerySmsQualificationRecordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QuerySmsQualificationRecordResponse
     */
    public function querySmsQualificationRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyName) {
            @$query['CompanyName'] = $request->companyName;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->qualificationGroupName) {
            @$query['QualificationGroupName'] = $request->qualificationGroupName;
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

        if (null !== $request->useBySelf) {
            @$query['UseBySelf'] = $request->useBySelf;
        }

        if (null !== $request->workOrderId) {
            @$query['WorkOrderId'] = $request->workOrderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsQualificationRecord',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsQualificationRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of SMS qualifications and their review details after you submit qualification applications. This operation supports filtered query.
     *
     * @remarks
     * - 支持全量查询或条件查询：
     *   - **全量查询**：查询您当前帐户下所有短信资质，无需传参。默认全量查询。
     *   - **条件查询**：支持根据资质名称、企业名称、法人姓名、审核状态、审核工单ID、资质用途进行查询，传入您希望筛选的参数即可。
     * - 本接口用于查询资质及其审核信息，如果需要查询单个资质的具体信息（企业信息、法人信息、管理员信息），请调用[查询单个资质详情](~~QuerySingleSmsQualification~~)接口。
     * - 受短信签名实名制报备要求影响，当前资质审核工单量增长快速，审核时间可能会延长，请耐心等待，预计2个工作日内完成（审核工作时间：周一至周日 9:00~21:00，法定节假日顺延）。特殊情况可能延长审核时间，请耐心等待。
     * - 如果资质未通过审核，审核备注`AuditRemark`会返回审核失败的原因，请参考[审核失败的处理建议](~~2384377#a96cc318b94x1~~)，调用[修改短信资质](~~UpdateSmsQualification~~)接口或在控制台[资质管理](https://dysms.console.aliyun.com/domestic/text/qualification)页面修改资质信息后，重新发起审核。
     *
     * @param request - QuerySmsQualificationRecordRequest
     *
     * @returns QuerySmsQualificationRecordResponse
     *
     * @param QuerySmsQualificationRecordRequest $request
     *
     * @return QuerySmsQualificationRecordResponse
     */
    public function querySmsQualificationRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsQualificationRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the review status of an SMS signature.
     *
     * @remarks
     * - To comply with regulations from the Ministry of Industry and Information Technology (MIIT) and [related requirements](https://help.aliyun.com/document_detail/2806975.html) from carriers, Alibaba Cloud has upgraded its SMS signature management APIs. We recommend using the new [GetSmsSign - Query Signature Details](https://help.aliyun.com/document_detail/2807429.html) API, which returns more detailed information about signatures than this API.
     * - We typically review signatures within two hours of submission. The review service is available from 9:00 to 21:00, Monday to Sunday. Reviews may be delayed during public holidays. We recommend submitting your application before 18:00 for a timely review.
     * - If a signature is rejected, the response includes the review reason. For troubleshooting information, see [Troubleshooting Signature Review Failures](https://help.aliyun.com/document_detail/65990.html). You can then call the [ModifySmsTemplate](https://help.aliyun.com/document_detail/419287.html) API or modify the SMS signature on the [Signature Management](https://dysms.console.aliyun.com/domestic/text) page.
     * - This API queries the review details for a single signature by name. To query all signatures in your account, call the [QuerySmsSignList](https://help.aliyun.com/document_detail/419288.html) API.
     *
     * @param request - QuerySmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignResponse
     *
     * @param QuerySmsSignRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSignWithOptions($request, $runtime)
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the review status of an SMS signature.
     *
     * @remarks
     * - To comply with regulations from the Ministry of Industry and Information Technology (MIIT) and [related requirements](https://help.aliyun.com/document_detail/2806975.html) from carriers, Alibaba Cloud has upgraded its SMS signature management APIs. We recommend using the new [GetSmsSign - Query Signature Details](https://help.aliyun.com/document_detail/2807429.html) API, which returns more detailed information about signatures than this API.
     * - We typically review signatures within two hours of submission. The review service is available from 9:00 to 21:00, Monday to Sunday. Reviews may be delayed during public holidays. We recommend submitting your application before 18:00 for a timely review.
     * - If a signature is rejected, the response includes the review reason. For troubleshooting information, see [Troubleshooting Signature Review Failures](https://help.aliyun.com/document_detail/65990.html). You can then call the [ModifySmsTemplate](https://help.aliyun.com/document_detail/419287.html) API or modify the SMS signature on the [Signature Management](https://dysms.console.aliyun.com/domestic/text) page.
     * - This API queries the review details for a single signature by name. To query all signatures in your account, call the [QuerySmsSignList](https://help.aliyun.com/document_detail/419288.html) API.
     *
     * @param request - QuerySmsSignRequest
     *
     * @returns QuerySmsSignResponse
     *
     * @param QuerySmsSignRequest $request
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query all signatures under your account, including signature audit status, signature type, and signature name.
     *
     * @remarks
     * This operation queries the signature information that was **first created** or the **most recently approved** signature details under your current account. If you need to query more information such as application scenario content or files uploaded during application, you can call the [GetSmsSign](~~GetSmsSign~~) operation to query the audit details of a single signature by signature name.
     *
     * @param request - QuerySmsSignListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignListResponse
     *
     * @param QuerySmsSignListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsSignListResponse
     */
    public function querySmsSignListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query all signatures under your account, including signature audit status, signature type, and signature name.
     *
     * @remarks
     * This operation queries the signature information that was **first created** or the **most recently approved** signature details under your current account. If you need to query more information such as application scenario content or files uploaded during application, you can call the [GetSmsSign](~~GetSmsSign~~) operation to query the audit details of a single signature by signature name.
     *
     * @param request - QuerySmsSignListRequest
     *
     * @returns QuerySmsSignListResponse
     *
     * @param QuerySmsSignListRequest $request
     *
     * @return QuerySmsSignListResponse
     */
    public function querySmsSignList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignListWithOptions($request, $runtime);
    }

    /**
     * This API has been deprecated.
     *
     * @remarks
     * - Alibaba Cloud has updated its template-related APIs to comply with regulatory and [carrier requirements](https://help.aliyun.com/document_detail/2806975.html). We recommend that you use the new [GetSmsTemplate - Query template review details](https://help.aliyun.com/document_detail/2807433.html) API. The new API returns more detailed template information in its response.
     * - Review timeline: After you submit a template, Alibaba Cloud typically completes the review within two hours. Review hours are 9:00 to 21:00 (UTC+8) from Monday to Sunday. Reviews are postponed during public holidays. We recommend that you submit your templates before 18:00 (UTC+8).
     * - If a template fails review, the response includes the reason for the rejection. For more information, see [Suggestions for handling a failed review](https://help.aliyun.com/document_detail/65990.html). You can then call the [ModifySmsTemplate](https://help.aliyun.com/document_detail/419287.html) API or modify the template on the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page.
     * - QuerySmsTemplate queries the review details of a single template by its template code. To query the details of all templates in your account, call the [QuerySmsTemplateList](https://help.aliyun.com/document_detail/419288.html) API.
     *
     * @deprecated openAPI QuerySmsTemplate is deprecated, please use Dysmsapi::2017-05-25::GetSmsTemplate instead
     *
     * @param request - QuerySmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateResponse
     *
     * @param QuerySmsTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplateWithOptions($request, $runtime)
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This API has been deprecated.
     *
     * @remarks
     * - Alibaba Cloud has updated its template-related APIs to comply with regulatory and [carrier requirements](https://help.aliyun.com/document_detail/2806975.html). We recommend that you use the new [GetSmsTemplate - Query template review details](https://help.aliyun.com/document_detail/2807433.html) API. The new API returns more detailed template information in its response.
     * - Review timeline: After you submit a template, Alibaba Cloud typically completes the review within two hours. Review hours are 9:00 to 21:00 (UTC+8) from Monday to Sunday. Reviews are postponed during public holidays. We recommend that you submit your templates before 18:00 (UTC+8).
     * - If a template fails review, the response includes the reason for the rejection. For more information, see [Suggestions for handling a failed review](https://help.aliyun.com/document_detail/65990.html). You can then call the [ModifySmsTemplate](https://help.aliyun.com/document_detail/419287.html) API or modify the template on the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page.
     * - QuerySmsTemplate queries the review details of a single template by its template code. To query the details of all templates in your account, call the [QuerySmsTemplateList](https://help.aliyun.com/document_detail/419288.html) API.
     *
     * @deprecated openAPI QuerySmsTemplate is deprecated, please use Dysmsapi::2017-05-25::GetSmsTemplate instead
     *
     * @param request - QuerySmsTemplateRequest
     *
     * @returns QuerySmsTemplateResponse
     *
     * @param QuerySmsTemplateRequest $request
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query all templates under your account. This way, you can view template details, including the template approval status, template type, and template content.
     *
     * @remarks
     * - This operation queries the template details of all templates under your current account. To query more details such as the template variable content and the file information uploaded during application, you can call the [GetSmsTemplate](~~GetSmsTemplate~~) operation to query the approval details of a single template by template code.
     * - You can also log on to the Short Message Service (SMS) console and view the template details of all templates under your current account on the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page.
     *
     * @param request - QuerySmsTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateListResponse
     *
     * @param QuerySmsTemplateListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsTemplateListResponse
     */
    public function querySmsTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query all templates under your account. This way, you can view template details, including the template approval status, template type, and template content.
     *
     * @remarks
     * - This operation queries the template details of all templates under your current account. To query more details such as the template variable content and the file information uploaded during application, you can call the [GetSmsTemplate](~~GetSmsTemplate~~) operation to query the approval details of a single template by template code.
     * - You can also log on to the Short Message Service (SMS) console and view the template details of all templates under your current account on the [Template Management](https://dysms.console.aliyun.com/domestic/text/template) page.
     *
     * @param request - QuerySmsTemplateListRequest
     *
     * @returns QuerySmsTemplateListResponse
     *
     * @param QuerySmsTemplateListRequest $request
     *
     * @return QuerySmsTemplateListResponse
     */
    public function querySmsTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of one or more trademarks.
     *
     * @remarks
     * This operation retrieves the details of trademarks by using a list of trademark IDs.
     * For example, you can obtain trademark IDs by calling signature query operations such as `QuerySmsSignList` or `GetSmsSign`. You can then use this operation to retrieve the details of each trademark.
     *
     * @param tmpReq - QuerySmsTrademarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTrademarkResponse
     *
     * @param QuerySmsTrademarkRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySmsTrademarkResponse
     */
    public function querySmsTrademarkWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySmsTrademarkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->trademarkIdList) {
            $request->trademarkIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trademarkIdList, 'TrademarkIdList', 'json');
        }

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

        if (null !== $request->trademarkIdListShrink) {
            @$query['TrademarkIdList'] = $request->trademarkIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTrademark',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more trademarks.
     *
     * @remarks
     * This operation retrieves the details of trademarks by using a list of trademark IDs.
     * For example, you can obtain trademark IDs by calling signature query operations such as `QuerySmsSignList` or `GetSmsSign`. You can then use this operation to retrieve the details of each trademark.
     *
     * @param request - QuerySmsTrademarkRequest
     *
     * @returns QuerySmsTrademarkResponse
     *
     * @param QuerySmsTrademarkRequest $request
     *
     * @return QuerySmsTrademarkResponse
     */
    public function querySmsTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTrademarkWithOptions($request, $runtime);
    }

    /**
     * When applying for SMS qualification, the administrator\\"s phone number must be verified. Use this operation to obtain an SMS verification code.
     *
     * @remarks
     * - After you receive the phone verification code, pass it to the `CertifyCode` parameter of the [SubmitSmsQualification](~~SubmitSmsQualification~~) or [UpdateSmsQualification](~~UpdateSmsQualification~~) operation.
     * - You can call the [ValidPhoneCode](~~ValidPhoneCode~~) operation to verify whether the SMS verification code is correct.
     * - This operation is subject to [throttling](~~44335#section-0wh-xn6-0t7~~). Do not call it too frequently. For the same phone number, a maximum of 1 message per minute, 5 messages per hour, and 10 messages per day are supported.
     *
     * @param request - RequiredPhoneCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequiredPhoneCodeResponse
     *
     * @param RequiredPhoneCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RequiredPhoneCodeResponse
     */
    public function requiredPhoneCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RequiredPhoneCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequiredPhoneCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When applying for SMS qualification, the administrator\\"s phone number must be verified. Use this operation to obtain an SMS verification code.
     *
     * @remarks
     * - After you receive the phone verification code, pass it to the `CertifyCode` parameter of the [SubmitSmsQualification](~~SubmitSmsQualification~~) or [UpdateSmsQualification](~~UpdateSmsQualification~~) operation.
     * - You can call the [ValidPhoneCode](~~ValidPhoneCode~~) operation to verify whether the SMS verification code is correct.
     * - This operation is subject to [throttling](~~44335#section-0wh-xn6-0t7~~). Do not call it too frequently. For the same phone number, a maximum of 1 message per minute, 5 messages per hour, and 10 messages per day are supported.
     *
     * @param request - RequiredPhoneCodeRequest
     *
     * @returns RequiredPhoneCodeResponse
     *
     * @param RequiredPhoneCodeRequest $request
     *
     * @return RequiredPhoneCodeResponse
     */
    public function requiredPhoneCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requiredPhoneCodeWithOptions($request, $runtime);
    }

    /**
     * Sends card SMS messages in batches.
     *
     * @remarks
     * - Sending card SMS messages is a billable operation. You are not charged if a card SMS message fails to be sent or rendered. For more information, see [Multimedia SMS pricing](https://help.aliyun.com/document_detail/437951.html).
     * - The card SMS feature is currently in the internal invitation phase. Contact your Alibaba Cloud business manager to apply for activation, or contact [Alibaba Cloud pre-sales consulting](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213219fcSn2Ykj#section-81n-72q-ybm).
     * - We recommend that you set the timeout period for card SMS messages to a value greater than or equal to 3 seconds. If a timeout failure occurs, we recommend that you check the delivery status before deciding whether to retry. We also recommend that you do not enable SDK retry logic when calling this operation; otherwise, multiple sending attempts may occur. For more information about timeout and retry settings, see [Timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [Retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - Domestic SMS, international SMS, and multimedia SMS do not currently support idempotency. Implement idempotency control to prevent duplicate operations caused by multiple retries.
     * - Before you send a card SMS message, you must add and obtain approval for a card SMS template. When this operation is called to send an SMS message, the system checks whether the phone number supports card SMS messages. If the phone number does not support card SMS messages, you can configure whether to accept fallback to digital SMS or text SMS in the operation to improve the delivery rate.
     * - When you send card SMS messages in batches, each phone number can use a different signature and a different fallback. In a single request, you can send card SMS messages to a maximum of 100 phone numbers.
     * ### QPS limit
     * The QPS limit per user for this operation is 1,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation in a reasonable manner.
     *
     * @param request - SendBatchCardSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendBatchCardSmsResponse
     *
     * @param SendBatchCardSmsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendBatchCardSmsResponse
     */
    public function sendBatchCardSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardTemplateCode) {
            @$query['CardTemplateCode'] = $request->cardTemplateCode;
        }

        if (null !== $request->cardTemplateParamJson) {
            @$query['CardTemplateParamJson'] = $request->cardTemplateParamJson;
        }

        if (null !== $request->digitalTemplateCode) {
            @$query['DigitalTemplateCode'] = $request->digitalTemplateCode;
        }

        if (null !== $request->digitalTemplateParamJson) {
            @$query['DigitalTemplateParamJson'] = $request->digitalTemplateParamJson;
        }

        if (null !== $request->fallbackType) {
            @$query['FallbackType'] = $request->fallbackType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->phoneNumberJson) {
            @$query['PhoneNumberJson'] = $request->phoneNumberJson;
        }

        if (null !== $request->signNameJson) {
            @$query['SignNameJson'] = $request->signNameJson;
        }

        if (null !== $request->smsTemplateCode) {
            @$query['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->smsTemplateParamJson) {
            @$query['SmsTemplateParamJson'] = $request->smsTemplateParamJson;
        }

        if (null !== $request->smsUpExtendCodeJson) {
            @$query['SmsUpExtendCodeJson'] = $request->smsUpExtendCodeJson;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParamJson) {
            @$query['TemplateParamJson'] = $request->templateParamJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendBatchCardSms',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendBatchCardSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends card SMS messages in batches.
     *
     * @remarks
     * - Sending card SMS messages is a billable operation. You are not charged if a card SMS message fails to be sent or rendered. For more information, see [Multimedia SMS pricing](https://help.aliyun.com/document_detail/437951.html).
     * - The card SMS feature is currently in the internal invitation phase. Contact your Alibaba Cloud business manager to apply for activation, or contact [Alibaba Cloud pre-sales consulting](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213219fcSn2Ykj#section-81n-72q-ybm).
     * - We recommend that you set the timeout period for card SMS messages to a value greater than or equal to 3 seconds. If a timeout failure occurs, we recommend that you check the delivery status before deciding whether to retry. We also recommend that you do not enable SDK retry logic when calling this operation; otherwise, multiple sending attempts may occur. For more information about timeout and retry settings, see [Timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [Retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - Domestic SMS, international SMS, and multimedia SMS do not currently support idempotency. Implement idempotency control to prevent duplicate operations caused by multiple retries.
     * - Before you send a card SMS message, you must add and obtain approval for a card SMS template. When this operation is called to send an SMS message, the system checks whether the phone number supports card SMS messages. If the phone number does not support card SMS messages, you can configure whether to accept fallback to digital SMS or text SMS in the operation to improve the delivery rate.
     * - When you send card SMS messages in batches, each phone number can use a different signature and a different fallback. In a single request, you can send card SMS messages to a maximum of 100 phone numbers.
     * ### QPS limit
     * The QPS limit per user for this operation is 1,000 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation in a reasonable manner.
     *
     * @param request - SendBatchCardSmsRequest
     *
     * @returns SendBatchCardSmsResponse
     *
     * @param SendBatchCardSmsRequest $request
     *
     * @return SendBatchCardSmsResponse
     */
    public function sendBatchCardSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchCardSmsWithOptions($request, $runtime);
    }

    /**
     * This operation sends messages to different phone numbers using a single template, with different signatures and template variables for each recipient.
     *
     * @remarks
     * ### Basic information
     * - You can send messages to a maximum of 100 phone numbers in a single call.
     * - The global [endpoint](https://help.aliyun.com/document_detail/419270.html) is `dysmsapi.aliyuncs.com`. For a list of region-specific endpoints, see [Endpoints](https://help.aliyun.com/document_detail/419270.html).
     * ### API calls
     * - We recommend calling this operation using an SDK. For more information, see [Make your first API call](https://help.aliyun.com/document_detail/2841024.html).
     * - To send messages from the console, see [Send group messages](https://help.aliyun.com/document_detail/108266.html).
     * - To build your own API requests, see [V3 request body and signature mechanism](https://help.aliyun.com/document_detail/2593177.html).
     * ### Usage notes
     * - For domestic SMS, we recommend setting the timeout period to 1 second or longer. If a timeout occurs, check the delivery receipt status before you retry the request. For more information about timeout and retry settings, see [timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - This operation does not support idempotence for domestic SMS, international SMS, or Multimedia Messaging Service (MMS) messages. You must implement your own idempotence controls to prevent duplicate operations caused by multiple retries.
     * - This is a billable operation. For domestic SMS, you are charged based on the delivery receipt status from the carrier. You are not charged for messages that are successfully submitted but fail carrier delivery. For more information, see [Billing overview](https://help.aliyun.com/document_detail/44340.html).
     *   >Warning:
     *   Batch message delivery may be delayed due to system capacity limits. For time-sensitive messages, such as verification codes or alert notifications, use the SendSms operation to send messages individually.
     *
     * ### QPS limit
     * The Queries Per Second (QPS) limit for a single user is 5,000. Calls that exceed this limit are throttled. Plan your usage accordingly.
     *
     * @param request - SendBatchSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendBatchSmsResponse
     *
     * @param SendBatchSmsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $body = [];
        if (null !== $request->phoneNumberJson) {
            @$body['PhoneNumberJson'] = $request->phoneNumberJson;
        }

        if (null !== $request->signNameJson) {
            @$body['SignNameJson'] = $request->signNameJson;
        }

        if (null !== $request->smsUpExtendCodeJson) {
            @$body['SmsUpExtendCodeJson'] = $request->smsUpExtendCodeJson;
        }

        if (null !== $request->templateParamJson) {
            @$body['TemplateParamJson'] = $request->templateParamJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendBatchSms',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendBatchSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation sends messages to different phone numbers using a single template, with different signatures and template variables for each recipient.
     *
     * @remarks
     * ### Basic information
     * - You can send messages to a maximum of 100 phone numbers in a single call.
     * - The global [endpoint](https://help.aliyun.com/document_detail/419270.html) is `dysmsapi.aliyuncs.com`. For a list of region-specific endpoints, see [Endpoints](https://help.aliyun.com/document_detail/419270.html).
     * ### API calls
     * - We recommend calling this operation using an SDK. For more information, see [Make your first API call](https://help.aliyun.com/document_detail/2841024.html).
     * - To send messages from the console, see [Send group messages](https://help.aliyun.com/document_detail/108266.html).
     * - To build your own API requests, see [V3 request body and signature mechanism](https://help.aliyun.com/document_detail/2593177.html).
     * ### Usage notes
     * - For domestic SMS, we recommend setting the timeout period to 1 second or longer. If a timeout occurs, check the delivery receipt status before you retry the request. For more information about timeout and retry settings, see [timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - This operation does not support idempotence for domestic SMS, international SMS, or Multimedia Messaging Service (MMS) messages. You must implement your own idempotence controls to prevent duplicate operations caused by multiple retries.
     * - This is a billable operation. For domestic SMS, you are charged based on the delivery receipt status from the carrier. You are not charged for messages that are successfully submitted but fail carrier delivery. For more information, see [Billing overview](https://help.aliyun.com/document_detail/44340.html).
     *   >Warning:
     *   Batch message delivery may be delayed due to system capacity limits. For time-sensitive messages, such as verification codes or alert notifications, use the SendSms operation to send messages individually.
     *
     * ### QPS limit
     * The Queries Per Second (QPS) limit for a single user is 5,000. Calls that exceed this limit are throttled. Plan your usage accordingly.
     *
     * @param request - SendBatchSmsRequest
     *
     * @returns SendBatchSmsResponse
     *
     * @param SendBatchSmsRequest $request
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchSmsWithOptions($request, $runtime);
    }

    /**
     * Sends a card message.
     *
     * @remarks
     * - 发送卡片短信为计费接口，卡片短信发送失败或渲染失败时不计费，详情请参见[多媒体短信定价](https://help.aliyun.com/document_detail/437951.html)。
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213219fcSn2Ykj#section-81n-72q-ybm)。
     * - 卡片短信超时时间建议设置为≥3S；发生超时失败的情况时，建议查看回执状态后再判断是否重试。同时建议您在调用此接口时，不要开启SDK重试逻辑，否则可能会造成多次发送的情况。超时和重试的相关设置，请参见[超时机制](https://help.aliyun.com/document_detail/262079.html)、[重试机制](https://help.aliyun.com/document_detail/262080.html)。
     * - 国内短信、国际短信及多媒体短信目前均不支持幂等的能力，请您做好幂等控制，防止因多次重试而导致的重复操作问题。
     * - 发送卡片短信前需添加卡片短信模板且模板审核通过。本接口在发送短信时，会校验号码是否支持卡片短信。如果该手机号不支持发送卡片短信，可在接口中设置是否接受数字短信和文本短信的回落，提升发送的触达率。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - SendCardSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendCardSmsResponse
     *
     * @param SendCardSmsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendCardSmsResponse
     */
    public function sendCardSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardObjects) {
            @$query['CardObjects'] = $request->cardObjects;
        }

        if (null !== $request->cardTemplateCode) {
            @$query['CardTemplateCode'] = $request->cardTemplateCode;
        }

        if (null !== $request->digitalTemplateCode) {
            @$query['DigitalTemplateCode'] = $request->digitalTemplateCode;
        }

        if (null !== $request->digitalTemplateParam) {
            @$query['DigitalTemplateParam'] = $request->digitalTemplateParam;
        }

        if (null !== $request->fallbackType) {
            @$query['FallbackType'] = $request->fallbackType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsTemplateCode) {
            @$query['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->smsTemplateParam) {
            @$query['SmsTemplateParam'] = $request->smsTemplateParam;
        }

        if (null !== $request->smsUpExtendCode) {
            @$query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendCardSms',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendCardSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a card message.
     *
     * @remarks
     * - 发送卡片短信为计费接口，卡片短信发送失败或渲染失败时不计费，详情请参见[多媒体短信定价](https://help.aliyun.com/document_detail/437951.html)。
     * - 目前卡片短信在内部邀约阶段，请联系您的阿里云商务经理申请开通或联系[阿里云售前咨询](https://help.aliyun.com/document_detail/464625.html?spm=a2c4g.11186623.0.0.213219fcSn2Ykj#section-81n-72q-ybm)。
     * - 卡片短信超时时间建议设置为≥3S；发生超时失败的情况时，建议查看回执状态后再判断是否重试。同时建议您在调用此接口时，不要开启SDK重试逻辑，否则可能会造成多次发送的情况。超时和重试的相关设置，请参见[超时机制](https://help.aliyun.com/document_detail/262079.html)、[重试机制](https://help.aliyun.com/document_detail/262080.html)。
     * - 国内短信、国际短信及多媒体短信目前均不支持幂等的能力，请您做好幂等控制，防止因多次重试而导致的重复操作问题。
     * - 发送卡片短信前需添加卡片短信模板且模板审核通过。本接口在发送短信时，会校验号码是否支持卡片短信。如果该手机号不支持发送卡片短信，可在接口中设置是否接受数字短信和文本短信的回落，提升发送的触达率。
     * ### QPS限制
     * 本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。
     *
     * @param request - SendCardSmsRequest
     *
     * @returns SendCardSmsResponse
     *
     * @param SendCardSmsRequest $request
     *
     * @return SendCardSmsResponse
     */
    public function sendCardSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCardSmsWithOptions($request, $runtime);
    }

    /**
     * 发送物流短信
     *
     * @param request - SendLogisticsSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendLogisticsSmsResponse
     *
     * @param SendLogisticsSmsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendLogisticsSmsResponse
     */
    public function sendLogisticsSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expressCompanyCode) {
            @$query['ExpressCompanyCode'] = $request->expressCompanyCode;
        }

        if (null !== $request->mailNo) {
            @$query['MailNo'] = $request->mailNo;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->platformCompanyCode) {
            @$query['PlatformCompanyCode'] = $request->platformCompanyCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendLogisticsSms',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendLogisticsSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送物流短信
     *
     * @param request - SendLogisticsSmsRequest
     *
     * @returns SendLogisticsSmsResponse
     *
     * @param SendLogisticsSmsRequest $request
     *
     * @return SendLogisticsSmsResponse
     */
    public function sendLogisticsSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLogisticsSmsWithOptions($request, $runtime);
    }

    /**
     * 5G消息首次下行.
     *
     * @param request - SendRCSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendRCSResponse
     *
     * @param SendRCSRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendRCSResponse
     */
    public function sendRCSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendRCS',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendRCSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 5G消息首次下行.
     *
     * @param request - SendRCSRequest
     *
     * @returns SendRCSResponse
     *
     * @param SendRCSRequest $request
     *
     * @return SendRCSResponse
     */
    public function sendRCS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRCSWithOptions($request, $runtime);
    }

    /**
     * 5G消息交互下行.
     *
     * @param request - SendRCSReplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendRCSReplyResponse
     *
     * @param SendRCSReplyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendRCSReplyResponse
     */
    public function sendRCSReplyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inReplyToRcsID) {
            @$query['InReplyToRcsID'] = $request->inReplyToRcsID;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendRCSReply',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendRCSReplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 5G消息交互下行.
     *
     * @param request - SendRCSReplyRequest
     *
     * @returns SendRCSReplyResponse
     *
     * @param SendRCSReplyRequest $request
     *
     * @return SendRCSReplyResponse
     */
    public function sendRCSReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRCSReplyWithOptions($request, $runtime);
    }

    /**
     * Sends an SMS message to one or more specified mobile numbers.
     *
     * @remarks
     * Use this API to send an SMS message to a single mobile number. This API also supports sending messages with the same signature and template variables to multiple mobile numbers, up to 1,000 per request. Note that bulk sending may experience some latency. If you need to send messages with different signatures or template variables to multiple recipients, use the [SendBatchSms](https://help.aliyun.com/document_detail/419274.html) API, which supports up to 100 mobile numbers per request.
     * ### Usage notes
     * - For SMS messages sent to the Chinese mainland, we recommend setting the timeout period to 1 second or longer. If a timeout occurs, check the delivery receipt status before retrying the request. For more information about timeout and retry settings, see [Timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [Retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - This API does not support idempotence for domestic, international, or multimedia SMS messages. You must implement your own idempotence controls to prevent sending duplicate messages during retries.
     * - This is a billable API. For messages sent to the Chinese mainland, billing is based on the delivery receipt status from the carrier. You are not charged if the API call is successful but the carrier fails to deliver the message. For more information, see [Billing](https://help.aliyun.com/document_detail/44340.html).
     * ### QPS limit
     * This API has a queries per second (QPS) limit of 5,000 for each user. The system throttles calls that exceed this limit. To avoid throttling, use this API within the specified limit.
     *
     * @param request - SendSmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSmsResponse
     *
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsUpExtendCode) {
            @$query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendSms',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends an SMS message to one or more specified mobile numbers.
     *
     * @remarks
     * Use this API to send an SMS message to a single mobile number. This API also supports sending messages with the same signature and template variables to multiple mobile numbers, up to 1,000 per request. Note that bulk sending may experience some latency. If you need to send messages with different signatures or template variables to multiple recipients, use the [SendBatchSms](https://help.aliyun.com/document_detail/419274.html) API, which supports up to 100 mobile numbers per request.
     * ### Usage notes
     * - For SMS messages sent to the Chinese mainland, we recommend setting the timeout period to 1 second or longer. If a timeout occurs, check the delivery receipt status before retrying the request. For more information about timeout and retry settings, see [Timeout mechanism](https://help.aliyun.com/document_detail/262079.html) and [Retry mechanism](https://help.aliyun.com/document_detail/262080.html).
     * - This API does not support idempotence for domestic, international, or multimedia SMS messages. You must implement your own idempotence controls to prevent sending duplicate messages during retries.
     * - This is a billable API. For messages sent to the Chinese mainland, billing is based on the delivery receipt status from the carrier. You are not charged if the API call is successful but the carrier fails to deliver the message. For more information, see [Billing](https://help.aliyun.com/document_detail/44340.html).
     * ### QPS limit
     * This API has a queries per second (QPS) limit of 5,000 for each user. The system throttles calls that exceed this limit. To avoid throttling, use this API within the specified limit.
     *
     * @param request - SendSmsRequest
     *
     * @returns SendSmsResponse
     *
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * Feeds back the SMS delivery status corresponding to each message ID (MessageId) to the Alibaba Cloud International SMS platform.
     *
     * @remarks
     * Metric definitions:
     * - OTP send volume: the number of verification codes sent.
     * - OTP conversion volume: the number of verification codes converted (the number of times a user successfully obtained a verification code and reported it back).
     * Conversion rate = OTP conversion volume / OTP send volume.
     * > The conversion rate feedback feature has a certain level of intrusiveness on the business system. To prevent jitter in conversion rate API calls from affecting business logic, please consider the following:  - Call the API in asynchronous mode (for example, using a queue or event-driven approach).  - Add a degradable solution to protect business logic (for example, manual degradation, or automatic degradation using a circuit breaker).
     *
     * @param request - SmsConversionIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmsConversionIntlResponse
     *
     * @param SmsConversionIntlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SmsConversionIntlResponse
     */
    public function smsConversionIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversionTime) {
            @$query['ConversionTime'] = $request->conversionTime;
        }

        if (null !== $request->delivered) {
            @$query['Delivered'] = $request->delivered;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
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
            'action' => 'SmsConversionIntl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmsConversionIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Feeds back the SMS delivery status corresponding to each message ID (MessageId) to the Alibaba Cloud International SMS platform.
     *
     * @remarks
     * Metric definitions:
     * - OTP send volume: the number of verification codes sent.
     * - OTP conversion volume: the number of verification codes converted (the number of times a user successfully obtained a verification code and reported it back).
     * Conversion rate = OTP conversion volume / OTP send volume.
     * > The conversion rate feedback feature has a certain level of intrusiveness on the business system. To prevent jitter in conversion rate API calls from affecting business logic, please consider the following:  - Call the API in asynchronous mode (for example, using a queue or event-driven approach).  - Add a degradable solution to protect business logic (for example, manual degradation, or automatic degradation using a circuit breaker).
     *
     * @param request - SmsConversionIntlRequest
     *
     * @returns SmsConversionIntlResponse
     *
     * @param SmsConversionIntlRequest $request
     *
     * @return SmsConversionIntlResponse
     */
    public function smsConversionIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsConversionIntlWithOptions($request, $runtime);
    }

    /**
     * Submits an SMS qualification application. As required by the Ministry of Industry and Information Technology (MIIT) and carriers for real-name SMS sending, domestic SMS services require qualification credential information of the signature owner. Apply for an SMS qualification first, and then apply for signatures and templates.
     *
     * @remarks
     * - Before submitting an application, read [Qualification material description](https://help.aliyun.com/document_detail/2384377.html) and prepare the required qualification materials.
     * - Currently, only users who have completed **verify your identity - Enterprise account** can use the API to apply for SMS qualifications. If your Alibaba Cloud account has completed verify your identity - Individual account, apply for qualifications through the Short Message Service [console](https://dysms.console.aliyun.com/domestic/text/qualification/add), or [upgrade to verify your identity - Enterprise account](https://help.aliyun.com/document_detail/37178.html). [View my account verification type](https://myaccount.console.aliyun.com/cert-info)
     * - Batch qualification applications are not supported. Wait at least 5 seconds between applications.
     *
     * @param tmpReq - SubmitSmsQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSmsQualificationResponse
     *
     * @param SubmitSmsQualificationRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSmsQualificationResponse
     */
    public function submitSmsQualificationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSmsQualificationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->businessLicensePics) {
            $request->businessLicensePicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->businessLicensePics, 'BusinessLicensePics', 'json');
        }

        if (null !== $tmpReq->otherFiles) {
            $request->otherFilesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->otherFiles, 'OtherFiles', 'json');
        }

        $query = [];
        if (null !== $request->adminIDCardExpDate) {
            @$query['AdminIDCardExpDate'] = $request->adminIDCardExpDate;
        }

        if (null !== $request->adminIDCardFrontFace) {
            @$query['AdminIDCardFrontFace'] = $request->adminIDCardFrontFace;
        }

        if (null !== $request->adminIDCardNo) {
            @$query['AdminIDCardNo'] = $request->adminIDCardNo;
        }

        if (null !== $request->adminIDCardPic) {
            @$query['AdminIDCardPic'] = $request->adminIDCardPic;
        }

        if (null !== $request->adminIDCardType) {
            @$query['AdminIDCardType'] = $request->adminIDCardType;
        }

        if (null !== $request->adminName) {
            @$query['AdminName'] = $request->adminName;
        }

        if (null !== $request->adminPhoneNo) {
            @$query['AdminPhoneNo'] = $request->adminPhoneNo;
        }

        if (null !== $request->businessLicensePicsShrink) {
            @$query['BusinessLicensePics'] = $request->businessLicensePicsShrink;
        }

        if (null !== $request->bussinessLicenseExpDate) {
            @$query['BussinessLicenseExpDate'] = $request->bussinessLicenseExpDate;
        }

        if (null !== $request->certifyCode) {
            @$query['CertifyCode'] = $request->certifyCode;
        }

        if (null !== $request->companyName) {
            @$query['CompanyName'] = $request->companyName;
        }

        if (null !== $request->companyType) {
            @$query['CompanyType'] = $request->companyType;
        }

        if (null !== $request->legalPersonIDCardNo) {
            @$query['LegalPersonIDCardNo'] = $request->legalPersonIDCardNo;
        }

        if (null !== $request->legalPersonIDCardType) {
            @$query['LegalPersonIDCardType'] = $request->legalPersonIDCardType;
        }

        if (null !== $request->legalPersonIdCardBackSide) {
            @$query['LegalPersonIdCardBackSide'] = $request->legalPersonIdCardBackSide;
        }

        if (null !== $request->legalPersonIdCardEffTime) {
            @$query['LegalPersonIdCardEffTime'] = $request->legalPersonIdCardEffTime;
        }

        if (null !== $request->legalPersonIdCardFrontSide) {
            @$query['LegalPersonIdCardFrontSide'] = $request->legalPersonIdCardFrontSide;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->organizationCode) {
            @$query['OrganizationCode'] = $request->organizationCode;
        }

        if (null !== $request->otherFilesShrink) {
            @$query['OtherFiles'] = $request->otherFilesShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationName) {
            @$query['QualificationName'] = $request->qualificationName;
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

        if (null !== $request->useBySelf) {
            @$query['UseBySelf'] = $request->useBySelf;
        }

        if (null !== $request->whetherShare) {
            @$query['WhetherShare'] = $request->whetherShare;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSmsQualification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSmsQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an SMS qualification application. As required by the Ministry of Industry and Information Technology (MIIT) and carriers for real-name SMS sending, domestic SMS services require qualification credential information of the signature owner. Apply for an SMS qualification first, and then apply for signatures and templates.
     *
     * @remarks
     * - Before submitting an application, read [Qualification material description](https://help.aliyun.com/document_detail/2384377.html) and prepare the required qualification materials.
     * - Currently, only users who have completed **verify your identity - Enterprise account** can use the API to apply for SMS qualifications. If your Alibaba Cloud account has completed verify your identity - Individual account, apply for qualifications through the Short Message Service [console](https://dysms.console.aliyun.com/domestic/text/qualification/add), or [upgrade to verify your identity - Enterprise account](https://help.aliyun.com/document_detail/37178.html). [View my account verification type](https://myaccount.console.aliyun.com/cert-info)
     * - Batch qualification applications are not supported. Wait at least 5 seconds between applications.
     *
     * @param request - SubmitSmsQualificationRequest
     *
     * @returns SubmitSmsQualificationResponse
     *
     * @param SubmitSmsQualificationRequest $request
     *
     * @return SubmitSmsQualificationResponse
     */
    public function submitSmsQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmsQualificationWithOptions($request, $runtime);
    }

    /**
     * Tags can mark resources, allowing enterprises or individuals to classify templates of the same type for easier search and resource aggregation. Call this operation to bind tags to SMS templates.
     *
     * @remarks
     * - Each template can be bound to up to 20 tags.
     * - The tag key (Key) must be unique within the same template. If a template has two tags with the same Key but different Values, the new value overwrites the old value.
     * - This feature is only available for domestic text messages of Short Message Service on the China site.
     * ### QPS limit
     * The per-user QPS limit of this operation is 50 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags can mark resources, allowing enterprises or individuals to classify templates of the same type for easier search and resource aggregation. Call this operation to bind tags to SMS templates.
     *
     * @remarks
     * - Each template can be bound to up to 20 tags.
     * - The tag key (Key) must be unique within the same template. If a template has two tags with the same Key but different Values, the new value overwrites the old value.
     * - This feature is only available for domestic text messages of Short Message Service on the China site.
     * ### QPS limit
     * The per-user QPS limit of this operation is 50 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Tags can mark resources, allowing enterprises or individuals to categorize templates of the same type for easier search and resource aggregation. If a template is no longer applicable to its currently bound tags, you can unbind the tags from the template. You can delete a single tag or delete tags in batches.
     *
     * @remarks
     * ### QPS limit
     * The QPS limit per user for this operation is 50 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the operation reasonably.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags can mark resources, allowing enterprises or individuals to categorize templates of the same type for easier search and resource aggregation. If a template is no longer applicable to its currently bound tags, you can unbind the tags from the template. You can delete a single tag or delete tags in batches.
     *
     * @remarks
     * ### QPS limit
     * The QPS limit per user for this operation is 50 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the operation reasonably.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * 修改验证码签名.
     *
     * @param request - UpdateExtCodeSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExtCodeSignResponse
     *
     * @param UpdateExtCodeSignRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateExtCodeSignResponse
     */
    public function updateExtCodeSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->existExtCode) {
            @$query['ExistExtCode'] = $request->existExtCode;
        }

        if (null !== $request->newExtCode) {
            @$query['NewExtCode'] = $request->newExtCode;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateExtCodeSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExtCodeSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改验证码签名.
     *
     * @param request - UpdateExtCodeSignRequest
     *
     * @returns UpdateExtCodeSignResponse
     *
     * @param UpdateExtCodeSignRequest $request
     *
     * @return UpdateExtCodeSignResponse
     */
    public function updateExtCodeSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExtCodeSignWithOptions($request, $runtime);
    }

    /**
     * 编辑5g签名.
     *
     * @param request - UpdateRCSSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRCSSignatureResponse
     *
     * @param UpdateRCSSignatureRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRCSSignatureResponse
     */
    public function updateRCSSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backgroundImage) {
            @$query['BackgroundImage'] = $request->backgroundImage;
        }

        if (null !== $request->bubbleColor) {
            @$query['BubbleColor'] = $request->bubbleColor;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->latitude) {
            @$query['Latitude'] = $request->latitude;
        }

        if (null !== $request->logo) {
            @$query['Logo'] = $request->logo;
        }

        if (null !== $request->longitude) {
            @$query['Longitude'] = $request->longitude;
        }

        if (null !== $request->officeAddress) {
            @$query['OfficeAddress'] = $request->officeAddress;
        }

        if (null !== $request->serviceEmail) {
            @$query['ServiceEmail'] = $request->serviceEmail;
        }

        if (null !== $request->servicePhone) {
            @$query['ServicePhone'] = $request->servicePhone;
        }

        if (null !== $request->serviceTerms) {
            @$query['ServiceTerms'] = $request->serviceTerms;
        }

        if (null !== $request->serviceWebsite) {
            @$query['ServiceWebsite'] = $request->serviceWebsite;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRCSSignature',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRCSSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑5g签名.
     *
     * @param request - UpdateRCSSignatureRequest
     *
     * @returns UpdateRCSSignatureResponse
     *
     * @param UpdateRCSSignatureRequest $request
     *
     * @return UpdateRCSSignatureResponse
     */
    public function updateRCSSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRCSSignatureWithOptions($request, $runtime);
    }

    /**
     * If you need to update SMS qualification information, you can submit a modification request through this API. After submission, it will re-enter the review process.
     *
     * @remarks
     * - Qualifications under review do not support modification. Please wait for the review process to finish, or [withdraw the application](https://dysms.console.aliyun.com/domestic/text/qualification) in the SMS Service console before making modifications.
     * - The modified SMS qualification **must be re-reviewed** (including qualifications that have already passed review). Please upload materials that meet the specifications according to the [Qualification Material Description](https://help.aliyun.com/document_detail/2384377.html).
     * - **Modification is not supported** for the qualification name, application purpose, or unified social credit code.
     * - Batch modification of SMS qualifications is not supported. It is recommended to leave at least 5 seconds between modifications.
     *
     * @param tmpReq - UpdateSmsQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSmsQualificationResponse
     *
     * @param UpdateSmsQualificationRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSmsQualificationResponse
     */
    public function updateSmsQualificationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSmsQualificationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->businessLicensePics) {
            $request->businessLicensePicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->businessLicensePics, 'BusinessLicensePics', 'json');
        }

        if (null !== $tmpReq->otherFiles) {
            $request->otherFilesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->otherFiles, 'OtherFiles', 'json');
        }

        $query = [];
        if (null !== $request->adminIDCardExpDate) {
            @$query['AdminIDCardExpDate'] = $request->adminIDCardExpDate;
        }

        if (null !== $request->adminIDCardFrontFace) {
            @$query['AdminIDCardFrontFace'] = $request->adminIDCardFrontFace;
        }

        if (null !== $request->adminIDCardNo) {
            @$query['AdminIDCardNo'] = $request->adminIDCardNo;
        }

        if (null !== $request->adminIDCardPic) {
            @$query['AdminIDCardPic'] = $request->adminIDCardPic;
        }

        if (null !== $request->adminIDCardType) {
            @$query['AdminIDCardType'] = $request->adminIDCardType;
        }

        if (null !== $request->adminName) {
            @$query['AdminName'] = $request->adminName;
        }

        if (null !== $request->adminPhoneNo) {
            @$query['AdminPhoneNo'] = $request->adminPhoneNo;
        }

        if (null !== $request->businessLicensePicsShrink) {
            @$query['BusinessLicensePics'] = $request->businessLicensePicsShrink;
        }

        if (null !== $request->bussinessLicenseExpDate) {
            @$query['BussinessLicenseExpDate'] = $request->bussinessLicenseExpDate;
        }

        if (null !== $request->certifyCode) {
            @$query['CertifyCode'] = $request->certifyCode;
        }

        if (null !== $request->companyName) {
            @$query['CompanyName'] = $request->companyName;
        }

        if (null !== $request->legalPersonIDCardNo) {
            @$query['LegalPersonIDCardNo'] = $request->legalPersonIDCardNo;
        }

        if (null !== $request->legalPersonIDCardType) {
            @$query['LegalPersonIDCardType'] = $request->legalPersonIDCardType;
        }

        if (null !== $request->legalPersonIdCardBackSide) {
            @$query['LegalPersonIdCardBackSide'] = $request->legalPersonIdCardBackSide;
        }

        if (null !== $request->legalPersonIdCardEffTime) {
            @$query['LegalPersonIdCardEffTime'] = $request->legalPersonIdCardEffTime;
        }

        if (null !== $request->legalPersonIdCardFrontSide) {
            @$query['LegalPersonIdCardFrontSide'] = $request->legalPersonIdCardFrontSide;
        }

        if (null !== $request->legalPersonName) {
            @$query['LegalPersonName'] = $request->legalPersonName;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->otherFilesShrink) {
            @$query['OtherFiles'] = $request->otherFilesShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationGroupId) {
            @$query['QualificationGroupId'] = $request->qualificationGroupId;
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
            'action' => 'UpdateSmsQualification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSmsQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you need to update SMS qualification information, you can submit a modification request through this API. After submission, it will re-enter the review process.
     *
     * @remarks
     * - Qualifications under review do not support modification. Please wait for the review process to finish, or [withdraw the application](https://dysms.console.aliyun.com/domestic/text/qualification) in the SMS Service console before making modifications.
     * - The modified SMS qualification **must be re-reviewed** (including qualifications that have already passed review). Please upload materials that meet the specifications according to the [Qualification Material Description](https://help.aliyun.com/document_detail/2384377.html).
     * - **Modification is not supported** for the qualification name, application purpose, or unified social credit code.
     * - Batch modification of SMS qualifications is not supported. It is recommended to leave at least 5 seconds between modifications.
     *
     * @param request - UpdateSmsQualificationRequest
     *
     * @returns UpdateSmsQualificationResponse
     *
     * @param UpdateSmsQualificationRequest $request
     *
     * @return UpdateSmsQualificationResponse
     */
    public function updateSmsQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsQualificationWithOptions($request, $runtime);
    }

    /**
     * You can modify rejected or approved signatures. A modified signature is automatically submitted for review, and its status changes to pending review.
     *
     * @remarks
     * - For details about the updates to the signature and template APIs, see [Announcement on Updating Signature & Template APIs for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - You can modify signatures that are either **rejected** or **approved**. For guidance on handling review failures, see [Handling signature review failures](https://help.aliyun.com/document_detail/65990.html). Call this API to modify and resubmit the signature for review.
     * - You cannot use this API to edit the name of a **rejected** signature. To edit the name, go to the [Short Message Service console](https://dysms.console.aliyun.com/domestic/text/sign).
     * - Signatures you request using this API are synchronized with the Short Message Service console. For information on managing signatures in the console, see [Signatures](https://help.aliyun.com/document_detail/108073.html).
     *
     * @param tmpReq - UpdateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSmsSignResponse
     *
     * @param UpdateSmsSignRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSmsSignResponse
     */
    public function updateSmsSignWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSmsSignShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->appIcpRecordId) {
            @$query['AppIcpRecordId'] = $request->appIcpRecordId;
        }

        if (null !== $request->applySceneContent) {
            @$query['ApplySceneContent'] = $request->applySceneContent;
        }

        if (null !== $request->authorizationLetterId) {
            @$query['AuthorizationLetterId'] = $request->authorizationLetterId;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
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

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        if (null !== $request->signType) {
            @$query['SignType'] = $request->signType;
        }

        if (null !== $request->thirdParty) {
            @$query['ThirdParty'] = $request->thirdParty;
        }

        if (null !== $request->trademarkId) {
            @$query['TrademarkId'] = $request->trademarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can modify rejected or approved signatures. A modified signature is automatically submitted for review, and its status changes to pending review.
     *
     * @remarks
     * - For details about the updates to the signature and template APIs, see [Announcement on Updating Signature & Template APIs for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - You can modify signatures that are either **rejected** or **approved**. For guidance on handling review failures, see [Handling signature review failures](https://help.aliyun.com/document_detail/65990.html). Call this API to modify and resubmit the signature for review.
     * - You cannot use this API to edit the name of a **rejected** signature. To edit the name, go to the [Short Message Service console](https://dysms.console.aliyun.com/domestic/text/sign).
     * - Signatures you request using this API are synchronized with the Short Message Service console. For information on managing signatures in the console, see [Signatures](https://help.aliyun.com/document_detail/108073.html).
     *
     * @param request - UpdateSmsSignRequest
     *
     * @returns UpdateSmsSignResponse
     *
     * @param UpdateSmsSignRequest $request
     *
     * @return UpdateSmsSignResponse
     */
    public function updateSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsSignWithOptions($request, $runtime);
    }

    /**
     * This API modifies a template that failed review and automatically resubmits it.
     *
     * @remarks
     * - For details about the changes to the signature and template APIs, see [Announcement on Updating Signature & Template APIs for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - You can only modify templates that have failed review. For troubleshooting, see [Suggestions for handling failed SMS template reviews](https://help.aliyun.com/document_detail/65990.html). After modifying a template with this API, you must resubmit it for review.
     * - Template changes made using this API are synchronized with the Short Message Service console. To learn more about managing templates in the console, see [SMS templates](https://help.aliyun.com/document_detail/108085.html).
     * ### QPS limit
     * The QPS limit for this API is 1,000 queries per second per user. If you exceed this limit, your API calls will be throttled. This can affect your business, so please use the API responsibly.
     *
     * @param tmpReq - UpdateSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSmsTemplateResponse
     *
     * @param UpdateSmsTemplateRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSmsTemplateResponse
     */
    public function updateSmsTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSmsTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->applySceneContent) {
            @$query['ApplySceneContent'] = $request->applySceneContent;
        }

        if (null !== $request->intlType) {
            @$query['IntlType'] = $request->intlType;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->relatedSignName) {
            @$query['RelatedSignName'] = $request->relatedSignName;
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

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateRule) {
            @$query['TemplateRule'] = $request->templateRule;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->trafficDriving) {
            @$query['TrafficDriving'] = $request->trafficDriving;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSmsTemplate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API modifies a template that failed review and automatically resubmits it.
     *
     * @remarks
     * - For details about the changes to the signature and template APIs, see [Announcement on Updating Signature & Template APIs for Short Message Service](https://help.aliyun.com/document_detail/2806975.html).
     * - You can only modify templates that have failed review. For troubleshooting, see [Suggestions for handling failed SMS template reviews](https://help.aliyun.com/document_detail/65990.html). After modifying a template with this API, you must resubmit it for review.
     * - Template changes made using this API are synchronized with the Short Message Service console. To learn more about managing templates in the console, see [SMS templates](https://help.aliyun.com/document_detail/108085.html).
     * ### QPS limit
     * The QPS limit for this API is 1,000 queries per second per user. If you exceed this limit, your API calls will be throttled. This can affect your business, so please use the API responsibly.
     *
     * @param request - UpdateSmsTemplateRequest
     *
     * @returns UpdateSmsTemplateResponse
     *
     * @param UpdateSmsTemplateRequest $request
     *
     * @return UpdateSmsTemplateResponse
     */
    public function updateSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * 升级文本短信为5g签名.
     *
     * @param request - UpgradeToRCSSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeToRCSSignatureResponse
     *
     * @param UpgradeToRCSSignatureRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpgradeToRCSSignatureResponse
     */
    public function upgradeToRCSSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backgroundImage) {
            @$query['BackgroundImage'] = $request->backgroundImage;
        }

        if (null !== $request->bubbleColor) {
            @$query['BubbleColor'] = $request->bubbleColor;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->latitude) {
            @$query['Latitude'] = $request->latitude;
        }

        if (null !== $request->logo) {
            @$query['Logo'] = $request->logo;
        }

        if (null !== $request->longitude) {
            @$query['Longitude'] = $request->longitude;
        }

        if (null !== $request->officeAddress) {
            @$query['OfficeAddress'] = $request->officeAddress;
        }

        if (null !== $request->serviceEmail) {
            @$query['ServiceEmail'] = $request->serviceEmail;
        }

        if (null !== $request->servicePhone) {
            @$query['ServicePhone'] = $request->servicePhone;
        }

        if (null !== $request->serviceTerms) {
            @$query['ServiceTerms'] = $request->serviceTerms;
        }

        if (null !== $request->serviceWebsite) {
            @$query['ServiceWebsite'] = $request->serviceWebsite;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeToRCSSignature',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeToRCSSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 升级文本短信为5g签名.
     *
     * @param request - UpgradeToRCSSignatureRequest
     *
     * @returns UpgradeToRCSSignatureResponse
     *
     * @param UpgradeToRCSSignatureRequest $request
     *
     * @return UpgradeToRCSSignatureResponse
     */
    public function upgradeToRCSSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeToRCSSignatureWithOptions($request, $runtime);
    }

    /**
     * When applying for SMS qualification, the administrator\\"s phone number must be verified. This operation verifies the phone number and the received verification code.
     *
     * @remarks
     * - Call the [RequiredPhoneCode](~~RequiredPhoneCode~~) operation first. Alibaba Cloud sends an SMS verification code to the phone number that you provided.
     * - This operation does not affect the SMS qualification application process and is used only to verify the SMS verification code. When you submit the actual application, pass the verification code into the `CertifyCode` parameter of the [SubmitSmsQualification](~~SubmitSmsQualification~~) operation.
     *
     * @param request - ValidPhoneCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidPhoneCodeResponse
     *
     * @param ValidPhoneCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ValidPhoneCodeResponse
     */
    public function validPhoneCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyCode) {
            @$query['CertifyCode'] = $request->certifyCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidPhoneCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidPhoneCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When applying for SMS qualification, the administrator\\"s phone number must be verified. This operation verifies the phone number and the received verification code.
     *
     * @remarks
     * - Call the [RequiredPhoneCode](~~RequiredPhoneCode~~) operation first. Alibaba Cloud sends an SMS verification code to the phone number that you provided.
     * - This operation does not affect the SMS qualification application process and is used only to verify the SMS verification code. When you submit the actual application, pass the verification code into the `CertifyCode` parameter of the [SubmitSmsQualification](~~SubmitSmsQualification~~) operation.
     *
     * @param request - ValidPhoneCodeRequest
     *
     * @returns ValidPhoneCodeResponse
     *
     * @param ValidPhoneCodeRequest $request
     *
     * @return ValidPhoneCodeResponse
     */
    public function validPhoneCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validPhoneCodeWithOptions($request, $runtime);
    }

    /**
     * 物流短信运单号校验.
     *
     * @param request - VerifyLogisticsSmsMailNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyLogisticsSmsMailNoResponse
     *
     * @param VerifyLogisticsSmsMailNoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return VerifyLogisticsSmsMailNoResponse
     */
    public function verifyLogisticsSmsMailNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expressCompanyCode) {
            @$query['ExpressCompanyCode'] = $request->expressCompanyCode;
        }

        if (null !== $request->mailNo) {
            @$query['MailNo'] = $request->mailNo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->platformCompanyCode) {
            @$query['PlatformCompanyCode'] = $request->platformCompanyCode;
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
            'action' => 'VerifyLogisticsSmsMailNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyLogisticsSmsMailNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 物流短信运单号校验.
     *
     * @param request - VerifyLogisticsSmsMailNoRequest
     *
     * @returns VerifyLogisticsSmsMailNoResponse
     *
     * @param VerifyLogisticsSmsMailNoRequest $request
     *
     * @return VerifyLogisticsSmsMailNoResponse
     */
    public function verifyLogisticsSmsMailNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyLogisticsSmsMailNoWithOptions($request, $runtime);
    }
}
