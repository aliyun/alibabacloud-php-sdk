<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CheckMobilesCardSupportRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CheckMobilesCardSupportResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ConversionDataIntlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ConversionDataIntlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmartShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmartShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsSignShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsLinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsLinkResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForCardTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForUploadFileRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForUploadFileResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignResponse;
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
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryPageSmartShortUrlLogRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryPageSmartShortUrlLogResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendStatisticsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendStatisticsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchCardSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchCardSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SmsConversionIntlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SmsConversionIntlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsSignShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsTemplateShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'dysmsapi.ap-southeast-5.aliyuncs.com',
            'cn-beijing'     => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong'    => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
            'eu-central-1'   => 'dysmsapi.eu-central-1.aliyuncs.com',
            'us-east-1'      => 'dysmsapi.us-east-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Creates a short URL.
     *  *
     * @description *   Before you call this operation, you must register the primary domain name of the source URL in the Short Message Service (SMS) console. After the domain name is registered, you can call this operation to create a short URL. For more information, see [Domain name registration](https://help.aliyun.com/document_detail/302325.html#title-mau-zdh-hd0).
     * *   You can create up to 3,000 short URLs within a natural day.
     * *   After a short URL is generated, a security review is required. Generally, the review takes 10 minutes to 2 hours to complete. Before the security review is passed, the short URL cannot be directly accessed.
     *  *
     * @param AddShortUrlRequest $request AddShortUrlRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddShortUrlResponse AddShortUrlResponse
     */
    public function addShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->effectiveDays)) {
            $body['EffectiveDays'] = $request->effectiveDays;
        }
        if (!Utils::isUnset($request->shortUrlName)) {
            $body['ShortUrlName'] = $request->shortUrlName;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $body['SourceUrl'] = $request->sourceUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a short URL.
     *  *
     * @description *   Before you call this operation, you must register the primary domain name of the source URL in the Short Message Service (SMS) console. After the domain name is registered, you can call this operation to create a short URL. For more information, see [Domain name registration](https://help.aliyun.com/document_detail/302325.html#title-mau-zdh-hd0).
     * *   You can create up to 3,000 short URLs within a natural day.
     * *   After a short URL is generated, a security review is required. Generally, the review takes 10 minutes to 2 hours to complete. Before the security review is passed, the short URL cannot be directly accessed.
     *  *
     * @param AddShortUrlRequest $request AddShortUrlRequest
     *
     * @return AddShortUrlResponse AddShortUrlResponse
     */
    public function addShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShortUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a signature.
     *  *
     * @description You can call the AddSmsSign operation or use the [Short Message Service (SMS) console](https://dysms.console.aliyun.com/dysms.htm#/overview) to create an SMS signature. The signature must comply with the [SMS signature specifications](https://help.aliyun.com/document_detail/108076.html). You can call the QuerySmsSign operation or use the SMS console to query the review status of the signature.
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limit
     * You can call this operation only once per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * >
     * *   You cannot cancel the review of a signature.
     * *   Individual users can create only one verification code signature, and can create only one general-purpose signature within a natural day. If you need to apply for multiple signatures, we recommend that you upgrade your account to an enterprise user.
     * *   If you need to use the same signature for messages sent to recipients both in and outside the Chinese mainland, the signature must be a general-purpose signature.
     * *   If you apply for a signature or message template, you must specify the signature scenario or template type. You must also provide the information of your services, such as a website URL, a domain name with an ICP filing, an application download URL, or the name of your WeChat official account or mini program. For sign-in scenarios, you must also provide an account and password for tests. A detailed description can improve the review efficiency of signatures and templates.
     * *   An SMS signature must undergo a thorough review process before it can be approved for use.
     *  *
     * @param AddSmsSignRequest $request AddSmsSignRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSmsSignResponse AddSmsSignResponse
     */
    public function addSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signSource)) {
            $query['SignSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->signType)) {
            $query['SignType'] = $request->signType;
        }
        $body = [];
        if (!Utils::isUnset($request->signFileList)) {
            $body['SignFileList'] = $request->signFileList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a signature.
     *  *
     * @description You can call the AddSmsSign operation or use the [Short Message Service (SMS) console](https://dysms.console.aliyun.com/dysms.htm#/overview) to create an SMS signature. The signature must comply with the [SMS signature specifications](https://help.aliyun.com/document_detail/108076.html). You can call the QuerySmsSign operation or use the SMS console to query the review status of the signature.
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limit
     * You can call this operation only once per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * >
     * *   You cannot cancel the review of a signature.
     * *   Individual users can create only one verification code signature, and can create only one general-purpose signature within a natural day. If you need to apply for multiple signatures, we recommend that you upgrade your account to an enterprise user.
     * *   If you need to use the same signature for messages sent to recipients both in and outside the Chinese mainland, the signature must be a general-purpose signature.
     * *   If you apply for a signature or message template, you must specify the signature scenario or template type. You must also provide the information of your services, such as a website URL, a domain name with an ICP filing, an application download URL, or the name of your WeChat official account or mini program. For sign-in scenarios, you must also provide an account and password for tests. A detailed description can improve the review efficiency of signatures and templates.
     * *   An SMS signature must undergo a thorough review process before it can be approved for use.
     *  *
     * @param AddSmsSignRequest $request AddSmsSignRequest
     *
     * @return AddSmsSignResponse AddSmsSignResponse
     */
    public function addSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a message template.
     *  *
     * @description You can call the operation or use the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview) to apply for a message template. The template must comply with the [message template specifications](https://help.aliyun.com/document_detail/108253.html). You can call the [QuerySmsTemplate](https://help.aliyun.com/document_detail/419289.html) operation or use the Alibaba Cloud SMS console to check whether the message template is approved.
     * >
     * *   Message templates pending approval can be withdrawn. You can withdraw a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   Message templates that have been approved can be deleted, and cannot be modified. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   If you call the AddSmsTemplate operation, you can apply for a maximum of 100 message templates in a calendar day. After you apply for a message template, we recommend that you wait for at least 30 seconds before you apply for another one. If you use the Alibaba Cloud SMS console, you can apply for an unlimited number of message templates.
     * *   Messages sent to the Chinese mainland and messages sent to countries or regions outside the Chinese mainland use separate message templates. Create message templates based on your needs.
     * *   If you apply for a signature or message template, you must specify the signature scenario or template type. You must also provide the information of your services, such as a website URL, a domain name with an ICP filing, an application download URL, or the name of your WeChat official account or mini program. For sign-in scenarios, you must also provide an account and password for tests. A detailed description can improve the review efficiency of signatures and templates.
     * *   A signature must undergo a thorough review process before it can be approved for use. For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddSmsTemplateRequest $request AddSmsTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSmsTemplateResponse AddSmsTemplateResponse
     */
    public function addSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a message template.
     *  *
     * @description You can call the operation or use the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview) to apply for a message template. The template must comply with the [message template specifications](https://help.aliyun.com/document_detail/108253.html). You can call the [QuerySmsTemplate](https://help.aliyun.com/document_detail/419289.html) operation or use the Alibaba Cloud SMS console to check whether the message template is approved.
     * >
     * *   Message templates pending approval can be withdrawn. You can withdraw a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   Message templates that have been approved can be deleted, and cannot be modified. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   If you call the AddSmsTemplate operation, you can apply for a maximum of 100 message templates in a calendar day. After you apply for a message template, we recommend that you wait for at least 30 seconds before you apply for another one. If you use the Alibaba Cloud SMS console, you can apply for an unlimited number of message templates.
     * *   Messages sent to the Chinese mainland and messages sent to countries or regions outside the Chinese mainland use separate message templates. Create message templates based on your needs.
     * *   If you apply for a signature or message template, you must specify the signature scenario or template type. You must also provide the information of your services, such as a website URL, a domain name with an ICP filing, an application download URL, or the name of your WeChat official account or mini program. For sign-in scenarios, you must also provide an account and password for tests. A detailed description can improve the review efficiency of signatures and templates.
     * *   A signature must undergo a thorough review process before it can be approved for use. For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddSmsTemplateRequest $request AddSmsTemplateRequest
     *
     * @return AddSmsTemplateResponse AddSmsTemplateResponse
     */
    public function addSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a mobile phone number can receive card messages.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 2,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CheckMobilesCardSupportRequest $request CheckMobilesCardSupportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckMobilesCardSupportResponse CheckMobilesCardSupportResponse
     */
    public function checkMobilesCardSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mobiles)) {
            $query['Mobiles'] = $request->mobiles;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMobilesCardSupport',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMobilesCardSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether a mobile phone number can receive card messages.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 2,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CheckMobilesCardSupportRequest $request CheckMobilesCardSupportRequest
     *
     * @return CheckMobilesCardSupportResponse CheckMobilesCardSupportResponse
     */
    public function checkMobilesCardSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMobilesCardSupportWithOptions($request, $runtime);
    }

    /**
     * @summary Sends conversion rate information to Alibaba Cloud SMS.
     *  *
     * @param ConversionDataIntlRequest $request ConversionDataIntlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConversionDataIntlResponse ConversionDataIntlResponse
     */
    public function conversionDataIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversionRate)) {
            $query['ConversionRate'] = $request->conversionRate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->reportTime)) {
            $query['ReportTime'] = $request->reportTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConversionDataIntl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConversionDataIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends conversion rate information to Alibaba Cloud SMS.
     *  *
     * @param ConversionDataIntlRequest $request ConversionDataIntlRequest
     *
     * @return ConversionDataIntlResponse ConversionDataIntlResponse
     */
    public function conversionDataIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->conversionDataIntlWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a card message template.
     *  *
     * @description *   The CreateCardSmsTemplate operation saves the card message template information, submits it to the mobile phone manufacturer for approval, and returns the message template ID.
     * *   If the type of the message template is not supported or events that are not supported by the mobile phone manufacturer are specified, the template is not submitted. For more information, see [Supported message templates](https://help.aliyun.com/document_detail/434611.html).
     * *   For information about sample card message templates, see [Sample card message templates](https://help.aliyun.com/document_detail/435361.html).
     * ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateCardSmsTemplateRequest $tmpReq  CreateCardSmsTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCardSmsTemplateResponse CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCardSmsTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->template)) {
            $request->templateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->factorys)) {
            $query['Factorys'] = $request->factorys;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->templateShrink)) {
            $query['Template'] = $request->templateShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCardSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a card message template.
     *  *
     * @description *   The CreateCardSmsTemplate operation saves the card message template information, submits it to the mobile phone manufacturer for approval, and returns the message template ID.
     * *   If the type of the message template is not supported or events that are not supported by the mobile phone manufacturer are specified, the template is not submitted. For more information, see [Supported message templates](https://help.aliyun.com/document_detail/434611.html).
     * *   For information about sample card message templates, see [Sample card message templates](https://help.aliyun.com/document_detail/435361.html).
     * ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateCardSmsTemplateRequest $request CreateCardSmsTemplateRequest
     *
     * @return CreateCardSmsTemplateResponse CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建短链
     *  *
     * @param CreateSmartShortUrlRequest $request CreateSmartShortUrlRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSmartShortUrlResponse CreateSmartShortUrlResponse
     */
    public function createSmartShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $query['SourceUrl'] = $request->sourceUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSmartShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSmartShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建短链
     *  *
     * @param CreateSmartShortUrlRequest $request CreateSmartShortUrlRequest
     *
     * @return CreateSmartShortUrlResponse CreateSmartShortUrlResponse
     */
    public function createSmartShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartShortUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 创建短信签名
     *  *
     * @param CreateSmsSignRequest $tmpReq  CreateSmsSignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSmsSignResponse CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSmsSignShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moreData)) {
            $request->moreDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applySceneContent)) {
            $query['ApplySceneContent'] = $request->applySceneContent;
        }
        if (!Utils::isUnset($request->moreDataShrink)) {
            $query['MoreData'] = $request->moreDataShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signSource)) {
            $query['SignSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->signType)) {
            $query['SignType'] = $request->signType;
        }
        if (!Utils::isUnset($request->thirdParty)) {
            $query['ThirdParty'] = $request->thirdParty;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建短信签名
     *  *
     * @param CreateSmsSignRequest $request CreateSmsSignRequest
     *
     * @return CreateSmsSignResponse CreateSmsSignResponse
     */
    public function createSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary 创建短信模板
     *  *
     * @param CreateSmsTemplateRequest $tmpReq  CreateSmsTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSmsTemplateResponse CreateSmsTemplateResponse
     */
    public function createSmsTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSmsTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moreData)) {
            $request->moreDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applySceneContent)) {
            $query['ApplySceneContent'] = $request->applySceneContent;
        }
        if (!Utils::isUnset($request->intlType)) {
            $query['IntlType'] = $request->intlType;
        }
        if (!Utils::isUnset($request->moreDataShrink)) {
            $query['MoreData'] = $request->moreDataShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->relatedSignName)) {
            $query['RelatedSignName'] = $request->relatedSignName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateRule)) {
            $query['TemplateRule'] = $request->templateRule;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建短信模板
     *  *
     * @param CreateSmsTemplateRequest $request CreateSmsTemplateRequest
     *
     * @return CreateSmsTemplateResponse CreateSmsTemplateResponse
     */
    public function createSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a short URL. After you delete a short URL, it cannot be changed to its original state.
     *  *
     * @description ### QPS limits
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteShortUrlRequest $request DeleteShortUrlRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteShortUrlResponse DeleteShortUrlResponse
     */
    public function deleteShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->sourceUrl)) {
            $body['SourceUrl'] = $request->sourceUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a short URL. After you delete a short URL, it cannot be changed to its original state.
     *  *
     * @description ### QPS limits
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteShortUrlRequest $request DeleteShortUrlRequest
     *
     * @return DeleteShortUrlResponse DeleteShortUrlResponse
     */
    public function deleteShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShortUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a signature.
     *  *
     * @description *   You cannot delete a signature that has not been approved.
     * *   After you delete a signature, you cannot recover it. Proceed with caution.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSmsSignRequest $request DeleteSmsSignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSmsSignResponse DeleteSmsSignResponse
     */
    public function deleteSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a signature.
     *  *
     * @description *   You cannot delete a signature that has not been approved.
     * *   After you delete a signature, you cannot recover it. Proceed with caution.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSmsSignRequest $request DeleteSmsSignRequest
     *
     * @return DeleteSmsSignResponse DeleteSmsSignResponse
     */
    public function deleteSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a message template.
     *  *
     * @description *   Message templates pending approval can be withdrawn. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   Message templates that have been approved can be deleted, and cannot be modified. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   You cannot recover deleted message templates. Proceed with caution.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSmsTemplateRequest $request DeleteSmsTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSmsTemplateResponse DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a message template.
     *  *
     * @description *   Message templates pending approval can be withdrawn. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   Message templates that have been approved can be deleted, and cannot be modified. You can delete a message template pending approval on the Message Templates tab in the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview).
     * *   You cannot recover deleted message templates. Proceed with caution.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSmsTemplateRequest $request DeleteSmsTemplateRequest
     *
     * @return DeleteSmsTemplateResponse DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the short URLs of a card messages template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetCardSmsLinkRequest $request GetCardSmsLinkRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCardSmsLinkResponse GetCardSmsLinkResponse
     */
    public function getCardSmsLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cardCodeType)) {
            $query['CardCodeType'] = $request->cardCodeType;
        }
        if (!Utils::isUnset($request->cardLinkType)) {
            $query['CardLinkType'] = $request->cardLinkType;
        }
        if (!Utils::isUnset($request->cardTemplateCode)) {
            $query['CardTemplateCode'] = $request->cardTemplateCode;
        }
        if (!Utils::isUnset($request->cardTemplateParamJson)) {
            $query['CardTemplateParamJson'] = $request->cardTemplateParamJson;
        }
        if (!Utils::isUnset($request->customShortCodeJson)) {
            $query['CustomShortCodeJson'] = $request->customShortCodeJson;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->phoneNumberJson)) {
            $query['PhoneNumberJson'] = $request->phoneNumberJson;
        }
        if (!Utils::isUnset($request->signNameJson)) {
            $query['SignNameJson'] = $request->signNameJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardSmsLink',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardSmsLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the short URLs of a card messages template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetCardSmsLinkRequest $request GetCardSmsLinkRequest
     *
     * @return GetCardSmsLinkResponse GetCardSmsLinkResponse
     */
    public function getCardSmsLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardSmsLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Converts a resource uploaded to the specified Object Storage Service (OSS) bucket for unified management. Then, a resource ID is returned. You can manage the resource based on the ID.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetMediaResourceIdRequest $request GetMediaResourceIdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaResourceIdResponse GetMediaResourceIdResponse
     */
    public function getMediaResourceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extendInfo)) {
            $query['ExtendInfo'] = $request->extendInfo;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $query['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaResourceId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaResourceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Converts a resource uploaded to the specified Object Storage Service (OSS) bucket for unified management. Then, a resource ID is returned. You can manage the resource based on the ID.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetMediaResourceIdRequest $request GetMediaResourceIdRequest
     *
     * @return GetMediaResourceIdResponse GetMediaResourceIdResponse
     */
    public function getMediaResourceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaResourceIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the OSS configuration information about card messages.
     *  *
     * @description Resources such as images and videos used for card message templates can be uploaded to Object Storage Service (OSS) buckets for storage. For more information, see [Upload files to OSS](https://help.aliyun.com/document_detail/437303.html).
     * ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOSSInfoForCardTemplateResponse GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetOSSInfoForCardTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOSSInfoForCardTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the OSS configuration information about card messages.
     *  *
     * @description Resources such as images and videos used for card message templates can be uploaded to Object Storage Service (OSS) buckets for storage. For more information, see [Upload files to OSS](https://help.aliyun.com/document_detail/437303.html).
     * ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @return GetOSSInfoForCardTemplateResponse GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSInfoForCardTemplateWithOptions($runtime);
    }

    /**
     * @summary 短信上传文件，获取授权信息
     *  *
     * @param GetOSSInfoForUploadFileRequest $request GetOSSInfoForUploadFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOSSInfoForUploadFileResponse GetOSSInfoForUploadFileResponse
     */
    public function getOSSInfoForUploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOSSInfoForUploadFile',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOSSInfoForUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 短信上传文件，获取授权信息
     *  *
     * @param GetOSSInfoForUploadFileRequest $request GetOSSInfoForUploadFileRequest
     *
     * @return GetOSSInfoForUploadFileResponse GetOSSInfoForUploadFileResponse
     */
    public function getOSSInfoForUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSInfoForUploadFileWithOptions($request, $runtime);
    }

    /**
     * @summary 查询短信签名详情
     *  *
     * @param GetSmsSignRequest $request GetSmsSignRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmsSignResponse GetSmsSignResponse
     */
    public function getSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询短信签名详情
     *  *
     * @param GetSmsSignRequest $request GetSmsSignRequest
     *
     * @return GetSmsSignResponse GetSmsSignResponse
     */
    public function getSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary 查询文本短信模板详情
     *  *
     * @param GetSmsTemplateRequest $request GetSmsTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmsTemplateResponse GetSmsTemplateResponse
     */
    public function getSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文本短信模板详情
     *  *
     * @param GetSmsTemplateRequest $request GetSmsTemplateRequest
     *
     * @return GetSmsTemplateResponse GetSmsTemplateResponse
     */
    public function getSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags of a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags of a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a rejected signature and submit it for approval. Signatures that are pending approval or have been approved cannot be modified.
     *  *
     * @description You can call the operation or use the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview) to modify an existing signature and submit the signature for approval. The signature must comply with the [signature specifications](https://help.aliyun.com/document_detail/108076.html).
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * >
     * *   Signatures pending approval cannot be modified.
     * *   You cannot modify a signature after it is approved. If you no longer need the signature, you can delete it.
     * *   If you are an individual user, you cannot apply for a new signature on the same day that your signature is rejected or deleted. We recommend that you modify the rejected signature and submit it again.
     *  *
     * @param ModifySmsSignRequest $request ModifySmsSignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySmsSignResponse ModifySmsSignResponse
     */
    public function modifySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signSource)) {
            $query['SignSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->signType)) {
            $query['SignType'] = $request->signType;
        }
        $body = [];
        if (!Utils::isUnset($request->signFileList)) {
            $body['SignFileList'] = $request->signFileList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a rejected signature and submit it for approval. Signatures that are pending approval or have been approved cannot be modified.
     *  *
     * @description You can call the operation or use the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm#/overview) to modify an existing signature and submit the signature for approval. The signature must comply with the [signature specifications](https://help.aliyun.com/document_detail/108076.html).
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * >
     * *   Signatures pending approval cannot be modified.
     * *   You cannot modify a signature after it is approved. If you no longer need the signature, you can delete it.
     * *   If you are an individual user, you cannot apply for a new signature on the same day that your signature is rejected or deleted. We recommend that you modify the rejected signature and submit it again.
     *  *
     * @param ModifySmsSignRequest $request ModifySmsSignRequest
     *
     * @return ModifySmsSignResponse ModifySmsSignResponse
     */
    public function modifySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information of an unapproved message template and submits it for review again.
     *  *
     * @description After you apply for a message template, if the template fails to pass the review, you can call this operation to modify the template and submit the template again. You can call this operation to modify only a template for a specific message type.
     * The template content must comply with the [SMS template specifications](https://help.aliyun.com/document_detail/108253.html).
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifySmsTemplateRequest $request ModifySmsTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySmsTemplateResponse ModifySmsTemplateResponse
     */
    public function modifySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information of an unapproved message template and submits it for review again.
     *  *
     * @description After you apply for a message template, if the template fails to pass the review, you can call this operation to modify the template and submit the template again. You can call this operation to modify only a template for a specific message type.
     * The template content must comply with the [SMS template specifications](https://help.aliyun.com/document_detail/108253.html).
     * For more information, see [Usage notes](https://help.aliyun.com/document_detail/55324.html).
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifySmsTemplateRequest $request ModifySmsTemplateRequest
     *
     * @return ModifySmsTemplateResponse ModifySmsTemplateResponse
     */
    public function modifySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the review status of a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryCardSmsTemplateRequest $request QueryCardSmsTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCardSmsTemplateResponse QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCardSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the review status of a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryCardSmsTemplateRequest $request QueryCardSmsTemplateRequest
     *
     * @return QueryCardSmsTemplateResponse QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sent card messages.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryCardSmsTemplateReportRequest $request QueryCardSmsTemplateReportRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCardSmsTemplateReportResponse QueryCardSmsTemplateReportResponse
     */
    public function queryCardSmsTemplateReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->templateCodes)) {
            $query['TemplateCodes'] = $request->templateCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCardSmsTemplateReport',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCardSmsTemplateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries sent card messages.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 300 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryCardSmsTemplateReportRequest $request QueryCardSmsTemplateReportRequest
     *
     * @return QueryCardSmsTemplateReportResponse QueryCardSmsTemplateReportResponse
     */
    public function queryCardSmsTemplateReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsTemplateReportWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a mobile phone number can receive card messages.
     *  *
     * @param QueryMobilesCardSupportRequest $tmpReq  QueryMobilesCardSupportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMobilesCardSupportResponse QueryMobilesCardSupportResponse
     */
    public function queryMobilesCardSupportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMobilesCardSupportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mobiles)) {
            $request->mobilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mobiles, 'Mobiles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->mobilesShrink)) {
            $query['Mobiles'] = $request->mobilesShrink;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMobilesCardSupport',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMobilesCardSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether a mobile phone number can receive card messages.
     *  *
     * @param QueryMobilesCardSupportRequest $request QueryMobilesCardSupportRequest
     *
     * @return QueryMobilesCardSupportResponse QueryMobilesCardSupportResponse
     */
    public function queryMobilesCardSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMobilesCardSupportWithOptions($request, $runtime);
    }

    /**
     * @summary 点击明细查询
     *  *
     * @param QueryPageSmartShortUrlLogRequest $request QueryPageSmartShortUrlLogRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPageSmartShortUrlLogResponse QueryPageSmartShortUrlLogResponse
     */
    public function queryPageSmartShortUrlLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createDateEnd)) {
            $query['CreateDateEnd'] = $request->createDateEnd;
        }
        if (!Utils::isUnset($request->createDateStart)) {
            $query['CreateDateStart'] = $request->createDateStart;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->shortUrl)) {
            $query['ShortUrl'] = $request->shortUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPageSmartShortUrlLog',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPageSmartShortUrlLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 点击明细查询
     *  *
     * @param QueryPageSmartShortUrlLogRequest $request QueryPageSmartShortUrlLogRequest
     *
     * @return QueryPageSmartShortUrlLogResponse QueryPageSmartShortUrlLogResponse
     */
    public function queryPageSmartShortUrlLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPageSmartShortUrlLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a message.
     *  *
     * @param QuerySendDetailsRequest $request QuerySendDetailsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySendDetailsResponse QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendDate)) {
            $query['SendDate'] = $request->sendDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySendDetails',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySendDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a message.
     *  *
     * @param QuerySendDetailsRequest $request QuerySendDetailsRequest
     *
     * @return QuerySendDetailsResponse QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries message delivery details.
     *  *
     * @description You can call the operation to query message delivery details, including the number of delivered messages, the number of messages with delivery receipts, and the time that a message is sent. If a large number of messages are sent on the specified date, you can specify the number of items displayed on each page and the number of pages to view the details by page.
     * ### QPS limits
     * You can call this operation up to 20 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySendStatisticsRequest $request QuerySendStatisticsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySendStatisticsResponse QuerySendStatisticsResponse
     */
    public function querySendStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->isGlobe)) {
            $query['IsGlobe'] = $request->isGlobe;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySendStatistics',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySendStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries message delivery details.
     *  *
     * @description You can call the operation to query message delivery details, including the number of delivered messages, the number of messages with delivery receipts, and the time that a message is sent. If a large number of messages are sent on the specified date, you can specify the number of items displayed on each page and the number of pages to view the details by page.
     * ### QPS limits
     * You can call this operation up to 20 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySendStatisticsRequest $request QuerySendStatisticsRequest
     *
     * @return QuerySendStatisticsResponse QuerySendStatisticsResponse
     */
    public function querySendStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a short URL.
     *  *
     * @description ### QPS limits
     * You can call this operation up to 20 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryShortUrlRequest $request QueryShortUrlRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryShortUrlResponse QueryShortUrlResponse
     */
    public function queryShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->shortUrl)) {
            $body['ShortUrl'] = $request->shortUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a short URL.
     *  *
     * @description ### QPS limits
     * You can call this operation up to 20 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryShortUrlRequest $request QueryShortUrlRequest
     *
     * @return QueryShortUrlResponse QueryShortUrlResponse
     */
    public function queryShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a signature.
     *  *
     * @description After you apply for an SMS signature, you can query its status by using the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm) or calling the operation. If the signature is rejected, you can modify the signature based on the reason why it is rejected.
     * ### QPS limits
     * You can call this API operation up to 500 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsSignRequest $request QuerySmsSignRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsSignResponse QuerySmsSignResponse
     */
    public function querySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a signature.
     *  *
     * @description After you apply for an SMS signature, you can query its status by using the [Alibaba Cloud SMS console](https://dysms.console.aliyun.com/dysms.htm) or calling the operation. If the signature is rejected, you can modify the signature based on the reason why it is rejected.
     * ### QPS limits
     * You can call this API operation up to 500 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsSignRequest $request QuerySmsSignRequest
     *
     * @return QuerySmsSignResponse QuerySmsSignResponse
     */
    public function querySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary Queries message signatures by page.
     *  *
     * @description You can call this operation to query the details of message signatures, including the name, creation time, and approval status of each signature. If a message template is rejected, the reason is returned. Modify the message signature based on the reason.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsSignListRequest $request QuerySmsSignListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsSignListResponse QuerySmsSignListResponse
     */
    public function querySmsSignListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsSignList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsSignListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries message signatures by page.
     *  *
     * @description You can call this operation to query the details of message signatures, including the name, creation time, and approval status of each signature. If a message template is rejected, the reason is returned. Modify the message signature based on the reason.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsSignListRequest $request QuerySmsSignListRequest
     *
     * @return QuerySmsSignListResponse QuerySmsSignListResponse
     */
    public function querySmsSignList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the approval status of a message template.
     *  *
     * @description After you create a message template, you can call this operation to query the approval status of the template. If a message template is rejected, the reason is returned. Modify the message template based on the reason.
     * ### QPS limit
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsTemplateRequest $request QuerySmsTemplateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsTemplateResponse QuerySmsTemplateResponse
     */
    public function querySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the approval status of a message template.
     *  *
     * @description After you create a message template, you can call this operation to query the approval status of the template. If a message template is rejected, the reason is returned. Modify the message template based on the reason.
     * ### QPS limit
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsTemplateRequest $request QuerySmsTemplateRequest
     *
     * @return QuerySmsTemplateResponse QuerySmsTemplateResponse
     */
    public function querySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries message templates.
     *  *
     * @description You can call this operation to query the details of message templates, including the name, creation time, and approval status of each template. If a message template is rejected, the reason is returned. Modify the message template based on the reason.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsTemplateListRequest $request QuerySmsTemplateListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmsTemplateListResponse QuerySmsTemplateListResponse
     */
    public function querySmsTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsTemplateList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmsTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries message templates.
     *  *
     * @description You can call this operation to query the details of message templates, including the name, creation time, and approval status of each template. If a message template is rejected, the reason is returned. Modify the message template based on the reason.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySmsTemplateListRequest $request QuerySmsTemplateListRequest
     *
     * @return QuerySmsTemplateListResponse QuerySmsTemplateListResponse
     */
    public function querySmsTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateListWithOptions($request, $runtime);
    }

    /**
     * @summary Sends multiple card messages at a time.
     *  *
     * @description You can call the operation to send multiple card messages to a maximum of mobile phone numbers at a time. Different signatures and rollback settings can be specified for the mobile phone numbers.
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendBatchCardSmsRequest $request SendBatchCardSmsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SendBatchCardSmsResponse SendBatchCardSmsResponse
     */
    public function sendBatchCardSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cardTemplateCode)) {
            $query['CardTemplateCode'] = $request->cardTemplateCode;
        }
        if (!Utils::isUnset($request->cardTemplateParamJson)) {
            $query['CardTemplateParamJson'] = $request->cardTemplateParamJson;
        }
        if (!Utils::isUnset($request->digitalTemplateCode)) {
            $query['DigitalTemplateCode'] = $request->digitalTemplateCode;
        }
        if (!Utils::isUnset($request->digitalTemplateParamJson)) {
            $query['DigitalTemplateParamJson'] = $request->digitalTemplateParamJson;
        }
        if (!Utils::isUnset($request->fallbackType)) {
            $query['FallbackType'] = $request->fallbackType;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->phoneNumberJson)) {
            $query['PhoneNumberJson'] = $request->phoneNumberJson;
        }
        if (!Utils::isUnset($request->signNameJson)) {
            $query['SignNameJson'] = $request->signNameJson;
        }
        if (!Utils::isUnset($request->smsTemplateCode)) {
            $query['SmsTemplateCode'] = $request->smsTemplateCode;
        }
        if (!Utils::isUnset($request->smsTemplateParamJson)) {
            $query['SmsTemplateParamJson'] = $request->smsTemplateParamJson;
        }
        if (!Utils::isUnset($request->smsUpExtendCodeJson)) {
            $query['SmsUpExtendCodeJson'] = $request->smsUpExtendCodeJson;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParamJson)) {
            $query['TemplateParamJson'] = $request->templateParamJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendBatchCardSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendBatchCardSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends multiple card messages at a time.
     *  *
     * @description You can call the operation to send multiple card messages to a maximum of mobile phone numbers at a time. Different signatures and rollback settings can be specified for the mobile phone numbers.
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendBatchCardSmsRequest $request SendBatchCardSmsRequest
     *
     * @return SendBatchCardSmsResponse SendBatchCardSmsResponse
     */
    public function sendBatchCardSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchCardSmsWithOptions($request, $runtime);
    }

    /**
     * @summary Uses a single message template and multiple signatures to send messages to multiple recipients.
     *  *
     * @description You can call the operation to send messages to a maximum of 100 recipients at a time.
     *  *
     * @param SendBatchSmsRequest $request SendBatchSmsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SendBatchSmsResponse SendBatchSmsResponse
     */
    public function sendBatchSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        $body = [];
        if (!Utils::isUnset($request->phoneNumberJson)) {
            $body['PhoneNumberJson'] = $request->phoneNumberJson;
        }
        if (!Utils::isUnset($request->signNameJson)) {
            $body['SignNameJson'] = $request->signNameJson;
        }
        if (!Utils::isUnset($request->smsUpExtendCodeJson)) {
            $body['SmsUpExtendCodeJson'] = $request->smsUpExtendCodeJson;
        }
        if (!Utils::isUnset($request->templateParamJson)) {
            $body['TemplateParamJson'] = $request->templateParamJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendBatchSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendBatchSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uses a single message template and multiple signatures to send messages to multiple recipients.
     *  *
     * @description You can call the operation to send messages to a maximum of 100 recipients at a time.
     *  *
     * @param SendBatchSmsRequest $request SendBatchSmsRequest
     *
     * @return SendBatchSmsResponse SendBatchSmsResponse
     */
    public function sendBatchSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchSmsWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a card message.
     *  *
     * @description *   Make sure that the message template that you want to use has been approved. If the mobile phone number of a recipient does not support card messages, the SendCardSms operation allows the rollback feature to ensure successful delivery.
     * *   When you call the SendCardSms operation to send card messages, the operation checks whether the mobile phone numbers of the recipients support card messages. If the mobile phone numbers do not support card messages, you can specify whether to enable rollback. Otherwise, the card message cannot be delivered.
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendCardSmsRequest $request SendCardSmsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SendCardSmsResponse SendCardSmsResponse
     */
    public function sendCardSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cardObjects)) {
            $query['CardObjects'] = $request->cardObjects;
        }
        if (!Utils::isUnset($request->cardTemplateCode)) {
            $query['CardTemplateCode'] = $request->cardTemplateCode;
        }
        if (!Utils::isUnset($request->digitalTemplateCode)) {
            $query['DigitalTemplateCode'] = $request->digitalTemplateCode;
        }
        if (!Utils::isUnset($request->digitalTemplateParam)) {
            $query['DigitalTemplateParam'] = $request->digitalTemplateParam;
        }
        if (!Utils::isUnset($request->fallbackType)) {
            $query['FallbackType'] = $request->fallbackType;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->smsTemplateCode)) {
            $query['SmsTemplateCode'] = $request->smsTemplateCode;
        }
        if (!Utils::isUnset($request->smsTemplateParam)) {
            $query['SmsTemplateParam'] = $request->smsTemplateParam;
        }
        if (!Utils::isUnset($request->smsUpExtendCode)) {
            $query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParam)) {
            $query['TemplateParam'] = $request->templateParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendCardSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCardSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends a card message.
     *  *
     * @description *   Make sure that the message template that you want to use has been approved. If the mobile phone number of a recipient does not support card messages, the SendCardSms operation allows the rollback feature to ensure successful delivery.
     * *   When you call the SendCardSms operation to send card messages, the operation checks whether the mobile phone numbers of the recipients support card messages. If the mobile phone numbers do not support card messages, you can specify whether to enable rollback. Otherwise, the card message cannot be delivered.
     * ### QPS limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendCardSmsRequest $request SendCardSmsRequest
     *
     * @return SendCardSmsResponse SendCardSmsResponse
     */
    public function sendCardSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCardSmsWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a message. Before you call this operation, submit a message signature and message template, and make sure that the signature and template are approved.
     *  *
     * @description *   This operation is mainly used to send a single message. In special scenarios, you can send multiple messages with the same content to a maximum of 1,000 mobile numbers. Note that group sending may be delayed.
     * *   To send messages with different signatures and template content to multiple mobile numbers in a single request, call the [SendBatchSms](https://help.aliyun.com/document_detail/102364.html) operation.
     * *   You are charged for using Alibaba Cloud Short Message Service (SMS) based on the amount of messages sent. For more information, see [Pricing](https://www.aliyun.com/price/product#/sms/detail).
     * *   If your verification code signature and general-purpose signature have the same name, the system uses the general-purpose signature to send messages by default.
     *  *
     * @param SendSmsRequest $request SendSmsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SendSmsResponse SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->smsUpExtendCode)) {
            $query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParam)) {
            $query['TemplateParam'] = $request->templateParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends a message. Before you call this operation, submit a message signature and message template, and make sure that the signature and template are approved.
     *  *
     * @description *   This operation is mainly used to send a single message. In special scenarios, you can send multiple messages with the same content to a maximum of 1,000 mobile numbers. Note that group sending may be delayed.
     * *   To send messages with different signatures and template content to multiple mobile numbers in a single request, call the [SendBatchSms](https://help.aliyun.com/document_detail/102364.html) operation.
     * *   You are charged for using Alibaba Cloud Short Message Service (SMS) based on the amount of messages sent. For more information, see [Pricing](https://www.aliyun.com/price/product#/sms/detail).
     * *   If your verification code signature and general-purpose signature have the same name, the system uses the general-purpose signature to send messages by default.
     *  *
     * @param SendSmsRequest $request SendSmsRequest
     *
     * @return SendSmsResponse SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * @summary Reports the status of an OTP message to Alibaba Cloud SMS.
     *  *
     * @description Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations: 1. Call the SmsConversion operation in an asynchronous manner by configuring queues or events. 2. Manually degrade your services or use a circuit breaker to automatically degrade services.
     *  *
     * @param SmsConversionIntlRequest $request SmsConversionIntlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SmsConversionIntlResponse SmsConversionIntlResponse
     */
    public function smsConversionIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversionTime)) {
            $query['ConversionTime'] = $request->conversionTime;
        }
        if (!Utils::isUnset($request->delivered)) {
            $query['Delivered'] = $request->delivered;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmsConversionIntl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmsConversionIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reports the status of an OTP message to Alibaba Cloud SMS.
     *  *
     * @description Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations: 1. Call the SmsConversion operation in an asynchronous manner by configuring queues or events. 2. Manually degrade your services or use a circuit breaker to automatically degrade services.
     *  *
     * @param SmsConversionIntlRequest $request SmsConversionIntlRequest
     *
     * @return SmsConversionIntlResponse SmsConversionIntlResponse
     */
    public function smsConversionIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsConversionIntlWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches tags to a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches tags to a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改文本短信签名
     *  *
     * @param UpdateSmsSignRequest $tmpReq  UpdateSmsSignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSmsSignResponse UpdateSmsSignResponse
     */
    public function updateSmsSignWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSmsSignShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moreData)) {
            $request->moreDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applySceneContent)) {
            $query['ApplySceneContent'] = $request->applySceneContent;
        }
        if (!Utils::isUnset($request->moreDataShrink)) {
            $query['MoreData'] = $request->moreDataShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signSource)) {
            $query['SignSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->signType)) {
            $query['SignType'] = $request->signType;
        }
        if (!Utils::isUnset($request->thirdParty)) {
            $query['ThirdParty'] = $request->thirdParty;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改文本短信签名
     *  *
     * @param UpdateSmsSignRequest $request UpdateSmsSignRequest
     *
     * @return UpdateSmsSignResponse UpdateSmsSignResponse
     */
    public function updateSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsSignWithOptions($request, $runtime);
    }

    /**
     * @summary 修改文本短信模板
     *  *
     * @param UpdateSmsTemplateRequest $tmpReq  UpdateSmsTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSmsTemplateResponse UpdateSmsTemplateResponse
     */
    public function updateSmsTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSmsTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moreData)) {
            $request->moreDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applySceneContent)) {
            $query['ApplySceneContent'] = $request->applySceneContent;
        }
        if (!Utils::isUnset($request->intlType)) {
            $query['IntlType'] = $request->intlType;
        }
        if (!Utils::isUnset($request->moreDataShrink)) {
            $query['MoreData'] = $request->moreDataShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->relatedSignName)) {
            $query['RelatedSignName'] = $request->relatedSignName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateRule)) {
            $query['TemplateRule'] = $request->templateRule;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改文本短信模板
     *  *
     * @param UpdateSmsTemplateRequest $request UpdateSmsTemplateRequest
     *
     * @return UpdateSmsTemplateResponse UpdateSmsTemplateResponse
     */
    public function updateSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsTemplateWithOptions($request, $runtime);
    }
}
