<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Green\V20170823\Models\AuditItemSubmitRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\AuditItemSubmitResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreatCustomOcrTemplateRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreatCustomOcrTemplateResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateAuditCallbackRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateAuditCallbackResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateBizTypeRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateBizTypeResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateCdiBagRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateCdiBagResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateCdiBaseBagRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateCdiBaseBagResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateImageLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateImageLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateKeywordRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateKeywordResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateWebsiteIndexPageBaselineRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateWebsiteIndexPageBaselineResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateWebSiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\CreateWebSiteInstanceResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteBizTypeRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteBizTypeResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteCustomOcrTemplateRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteCustomOcrTemplateResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteImageFromLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteImageFromLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteImageLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteImageLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteKeywordRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteKeywordResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteNotificationContactsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DeleteNotificationContactsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAppInfoRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAppInfoResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditCallbackListResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditCallbackResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentItemRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentItemResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditRangeResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypesRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypesResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCloudMonitorServicesRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCloudMonitorServicesResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageFromLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageFromLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageUploadInfoRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageUploadInfoResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeNotificationSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeNotificationSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiRcpStatsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiRcpStatsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiUsageRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiUsageResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssCallbackSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementOverviewRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementOverviewResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementStatsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementStatsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssStockStatusRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssStockStatusResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeSdkUrlRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeSdkUrlResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUpdatePackageResultRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUpdatePackageResultResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUploadInfoRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUploadInfoResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUsageBillRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUsageBillResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserBizTypesRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserBizTypesResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserStatusRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserStatusResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteIndexPageBaselineRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteIndexPageBaselineResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceIdRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceIdResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceKeyUrlRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceKeyUrlResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultDetailRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultDetailResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteStatRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteStatResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteVerifyInfoRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteVerifyInfoResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportKeywordsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportKeywordsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportOpenApiRcpStatsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportOpenApiRcpStatsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportOssResultRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\ExportOssResultResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\GetAuditItemDetailRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\GetAuditItemDetailResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\GetAuditItemListRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\GetAuditItemListResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\GetAuditUserConfResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\ImportKeywordsRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\ImportKeywordsResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkAuditContentItemRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkAuditContentItemResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkAuditContentRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkAuditContentResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkOssResultRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkOssResultResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkWebsiteScanResultRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\MarkWebsiteScanResultResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundCdiBagRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundCdiBagResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundCdiBaseBagRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundCdiBaseBagResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundWebSiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\RefundWebSiteInstanceResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\RenewWebSiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\RenewWebSiteInstanceResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\SendVerifyCodeToEmailRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\SendVerifyCodeToEmailResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\SendVerifyCodeToPhoneRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\SendVerifyCodeToPhoneResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\SendWebsiteFeedbackRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\SendWebsiteFeedbackResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAppPackageRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAppPackageResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditCallbackRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditCallbackResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditRangeRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditRangeResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateAuditSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeImageLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeImageLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeTextLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateBizTypeTextLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateCustomOcrTemplateRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateCustomOcrTemplateResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateNotificationSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateNotificationSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssCallbackSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssCallbackSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssIncrementCheckSettingRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssIncrementCheckSettingResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssStockStatusRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateOssStockStatusResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceKeyUrlRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceKeyUrlResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceStatusRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpdateWebsiteInstanceStatusResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UpgradeCdiBaseBagRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UpgradeCdiBaseBagResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\UploadImageToLibRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\UploadImageToLibResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyCustomOcrTemplateRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyCustomOcrTemplateResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyEmailRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyEmailResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyPhoneRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyPhoneResponse;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyWebsiteInstanceRequest;
use AlibabaCloud\SDK\Green\V20170823\Models\VerifyWebsiteInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Green extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'green.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'green.aliyuncs.com',
            'cn-hongkong'           => 'green.aliyuncs.com',
            'cn-huhehaote'          => 'green.aliyuncs.com',
            'cn-qingdao'            => 'green.aliyuncs.com',
            'cn-zhangjiakou'        => 'green.aliyuncs.com',
            'eu-central-1'          => 'green.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'green.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'green.aliyuncs.com',
            'cn-shanghai-finance-1' => 'green.aliyuncs.com',
            'cn-north-2-gov-1'      => 'green.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('green', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AuditItemSubmitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AuditItemSubmitResponse
     */
    public function auditItemSubmitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuditItemSubmit',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuditItemSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuditItemSubmitRequest $request
     *
     * @return AuditItemSubmitResponse
     */
    public function auditItemSubmit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->auditItemSubmitWithOptions($request, $runtime);
    }

    /**
     * @param CreatCustomOcrTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatCustomOcrTemplateResponse
     */
    public function creatCustomOcrTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imgUrl)) {
            $query['ImgUrl'] = $request->imgUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recognizeArea)) {
            $query['RecognizeArea'] = $request->recognizeArea;
        }
        if (!Utils::isUnset($request->referArea)) {
            $query['ReferArea'] = $request->referArea;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatCustomOcrTemplate',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatCustomOcrTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatCustomOcrTemplateRequest $request
     *
     * @return CreatCustomOcrTemplateResponse
     */
    public function creatCustomOcrTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->creatCustomOcrTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuditCallbackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAuditCallbackResponse
     */
    public function createAuditCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callbackSuggestions)) {
            $query['CallbackSuggestions'] = $request->callbackSuggestions;
        }
        if (!Utils::isUnset($request->callbackTypes)) {
            $query['CallbackTypes'] = $request->callbackTypes;
        }
        if (!Utils::isUnset($request->cryptType)) {
            $query['CryptType'] = $request->cryptType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuditCallback',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuditCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuditCallbackRequest $request
     *
     * @return CreateAuditCallbackResponse
     */
    public function createAuditCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditCallbackWithOptions($request, $runtime);
    }

    /**
     * @param CreateBizTypeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBizTypeResponse
     */
    public function createBizTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeImport)) {
            $query['BizTypeImport'] = $request->bizTypeImport;
        }
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->citeTemplate)) {
            $query['CiteTemplate'] = $request->citeTemplate;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->industryInfo)) {
            $query['IndustryInfo'] = $request->industryInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBizType',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBizTypeRequest $request
     *
     * @return CreateBizTypeResponse
     */
    public function createBizType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBizTypeWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdiBagRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateCdiBagResponse
     */
    public function createCdiBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->flowOutSpec)) {
            $query['FlowOutSpec'] = $request->flowOutSpec;
        }
        if (!Utils::isUnset($request->orderNum)) {
            $query['OrderNum'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCdiBag',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdiBagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdiBagRequest $request
     *
     * @return CreateCdiBagResponse
     */
    public function createCdiBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdiBagWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdiBaseBagRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCdiBaseBagResponse
     */
    public function createCdiBaseBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->flowOutSpec)) {
            $query['FlowOutSpec'] = $request->flowOutSpec;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCdiBaseBag',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdiBaseBagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdiBaseBagRequest $request
     *
     * @return CreateCdiBaseBagResponse
     */
    public function createCdiBaseBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdiBaseBagWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateImageLibResponse
     */
    public function createImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->serviceModule)) {
            $query['ServiceModule'] = $request->serviceModule;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageLibRequest $request
     *
     * @return CreateImageLibResponse
     */
    public function createImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageLibWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeywordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeywordResponse
     */
    public function createKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keywordLibId)) {
            $query['KeywordLibId'] = $request->keywordLibId;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeyword',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateKeywordRequest $request
     *
     * @return CreateKeywordResponse
     */
    public function createKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeywordWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeywordLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateKeywordLibResponse
     */
    public function createKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->libType)) {
            $query['LibType'] = $request->libType;
        }
        if (!Utils::isUnset($request->matchMode)) {
            $query['MatchMode'] = $request->matchMode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceModule)) {
            $query['ServiceModule'] = $request->serviceModule;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeywordLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateKeywordLibRequest $request
     *
     * @return CreateKeywordLibResponse
     */
    public function createKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebSiteInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateWebSiteInstanceResponse
     */
    public function createWebSiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->orderNum)) {
            $query['OrderNum'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWebSiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebSiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWebSiteInstanceRequest $request
     *
     * @return CreateWebSiteInstanceResponse
     */
    public function createWebSiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebSiteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebsiteIndexPageBaselineRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateWebsiteIndexPageBaselineResponse
     */
    public function createWebsiteIndexPageBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWebsiteIndexPageBaseline',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebsiteIndexPageBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWebsiteIndexPageBaselineRequest $request
     *
     * @return CreateWebsiteIndexPageBaselineResponse
     */
    public function createWebsiteIndexPageBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebsiteIndexPageBaselineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBizTypeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBizTypeResponse
     */
    public function deleteBizTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBizType',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBizTypeRequest $request
     *
     * @return DeleteBizTypeResponse
     */
    public function deleteBizType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBizTypeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomOcrTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCustomOcrTemplateResponse
     */
    public function deleteCustomOcrTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomOcrTemplate',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomOcrTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomOcrTemplateRequest $request
     *
     * @return DeleteCustomOcrTemplateResponse
     */
    public function deleteCustomOcrTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomOcrTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageFromLibRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteImageFromLibResponse
     */
    public function deleteImageFromLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImageFromLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteImageFromLibRequest $request
     *
     * @return DeleteImageFromLibResponse
     */
    public function deleteImageFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageFromLibWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteImageLibResponse
     */
    public function deleteImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImageLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteImageLibRequest $request
     *
     * @return DeleteImageLibResponse
     */
    public function deleteImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageLibWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeywordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteKeywordResponse
     */
    public function deleteKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->keywordLibId)) {
            $query['KeywordLibId'] = $request->keywordLibId;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyword',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteKeywordRequest $request
     *
     * @return DeleteKeywordResponse
     */
    public function deleteKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeywordLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteKeywordLibResponse
     */
    public function deleteKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeywordLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteKeywordLibRequest $request
     *
     * @return DeleteKeywordLibResponse
     */
    public function deleteKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNotificationContactsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteNotificationContactsResponse
     */
    public function deleteNotificationContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactTypes)) {
            $query['ContactTypes'] = $request->contactTypes;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNotificationContacts',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNotificationContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNotificationContactsRequest $request
     *
     * @return DeleteNotificationContactsResponse
     */
    public function deleteNotificationContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNotificationContactsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppInfo',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppInfoRequest $request
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAuditCallbackResponse
     */
    public function describeAuditCallbackWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAuditCallback',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAuditCallbackResponse
     */
    public function describeAuditCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditCallbackWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAuditCallbackListResponse
     */
    public function describeAuditCallbackListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAuditCallbackList',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditCallbackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAuditCallbackListResponse
     */
    public function describeAuditCallbackList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditCallbackListWithOptions($runtime);
    }

    /**
     * @param DescribeAuditContentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditContentResponse
     */
    public function describeAuditContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditResult)) {
            $query['AuditResult'] = $request->auditResult;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keywordId)) {
            $query['KeywordId'] = $request->keywordId;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->libType)) {
            $query['LibType'] = $request->libType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditContent',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAuditContentRequest $request
     *
     * @return DescribeAuditContentResponse
     */
    public function describeAuditContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditContentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditContentItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAuditContentItemResponse
     */
    public function describeAuditContentItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditContentItem',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditContentItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAuditContentItemRequest $request
     *
     * @return DescribeAuditContentItemResponse
     */
    public function describeAuditContentItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditContentItemWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAuditRangeResponse
     */
    public function describeAuditRangeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAuditRange',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAuditRangeResponse
     */
    public function describeAuditRange()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditRangeWithOptions($runtime);
    }

    /**
     * @param DescribeAuditSettingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditSettingResponse
     */
    public function describeAuditSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAuditSettingRequest $request
     *
     * @return DescribeAuditSettingResponse
     */
    public function describeAuditSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizTypeImageLibRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBizTypeImageLibResponse
     */
    public function describeBizTypeImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBizTypeImageLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBizTypeImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBizTypeImageLibRequest $request
     *
     * @return DescribeBizTypeImageLibResponse
     */
    public function describeBizTypeImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizTypeImageLibWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizTypeSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBizTypeSettingResponse
     */
    public function describeBizTypeSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBizTypeSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBizTypeSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBizTypeSettingRequest $request
     *
     * @return DescribeBizTypeSettingResponse
     */
    public function describeBizTypeSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizTypeSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizTypeTextLibRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBizTypeTextLibResponse
     */
    public function describeBizTypeTextLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBizTypeTextLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBizTypeTextLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBizTypeTextLibRequest $request
     *
     * @return DescribeBizTypeTextLibResponse
     */
    public function describeBizTypeTextLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizTypeTextLibWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBizTypesResponse
     */
    public function describeBizTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->importFlag)) {
            $query['ImportFlag'] = $request->importFlag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBizTypes',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBizTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBizTypesRequest $request
     *
     * @return DescribeBizTypesResponse
     */
    public function describeBizTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudMonitorServicesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudMonitorServicesResponse
     */
    public function describeCloudMonitorServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudMonitorServices',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudMonitorServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudMonitorServicesRequest $request
     *
     * @return DescribeCloudMonitorServicesResponse
     */
    public function describeCloudMonitorServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudMonitorServicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomOcrTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCustomOcrTemplateResponse
     */
    public function describeCustomOcrTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomOcrTemplate',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomOcrTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomOcrTemplateRequest $request
     *
     * @return DescribeCustomOcrTemplateResponse
     */
    public function describeCustomOcrTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomOcrTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageFromLibRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeImageFromLibResponse
     */
    public function describeImageFromLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->imageLibId)) {
            $query['ImageLibId'] = $request->imageLibId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageFromLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageFromLibRequest $request
     *
     * @return DescribeImageFromLibResponse
     */
    public function describeImageFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageFromLibWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeImageLibResponse
     */
    public function describeImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceModule)) {
            $query['ServiceModule'] = $request->serviceModule;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageLibRequest $request
     *
     * @return DescribeImageLibResponse
     */
    public function describeImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageLibWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageUploadInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImageUploadInfoResponse
     */
    public function describeImageUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageUploadInfo',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageUploadInfoRequest $request
     *
     * @return DescribeImageUploadInfoResponse
     */
    public function describeImageUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeywordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKeywordResponse
     */
    public function describeKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->keywordLibId)) {
            $query['KeywordLibId'] = $request->keywordLibId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKeyword',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKeywordRequest $request
     *
     * @return DescribeKeywordResponse
     */
    public function describeKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeywordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeywordLibRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeKeywordLibResponse
     */
    public function describeKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->serviceModule)) {
            $query['ServiceModule'] = $request->serviceModule;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKeywordLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKeywordLibRequest $request
     *
     * @return DescribeKeywordLibResponse
     */
    public function describeKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNotificationSettingRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeNotificationSettingResponse
     */
    public function describeNotificationSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNotificationSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNotificationSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNotificationSettingRequest $request
     *
     * @return DescribeNotificationSettingResponse
     */
    public function describeNotificationSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotificationSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpenApiRcpStatsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeOpenApiRcpStatsResponse
     */
    public function describeOpenApiRcpStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOpenApiRcpStats',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOpenApiRcpStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOpenApiRcpStatsRequest $request
     *
     * @return DescribeOpenApiRcpStatsResponse
     */
    public function describeOpenApiRcpStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiRcpStatsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpenApiUsageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeOpenApiUsageResponse
     */
    public function describeOpenApiUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOpenApiUsage',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOpenApiUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOpenApiUsageRequest $request
     *
     * @return DescribeOpenApiUsageResponse
     */
    public function describeOpenApiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiUsageWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeOssCallbackSettingResponse
     */
    public function describeOssCallbackSettingWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeOssCallbackSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssCallbackSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeOssCallbackSettingResponse
     */
    public function describeOssCallbackSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssCallbackSettingWithOptions($runtime);
    }

    /**
     * @param DescribeOssIncrementCheckSettingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeOssIncrementCheckSettingResponse
     */
    public function describeOssIncrementCheckSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssIncrementCheckSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssIncrementCheckSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssIncrementCheckSettingRequest $request
     *
     * @return DescribeOssIncrementCheckSettingResponse
     */
    public function describeOssIncrementCheckSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssIncrementCheckSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssIncrementOverviewRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeOssIncrementOverviewResponse
     */
    public function describeOssIncrementOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssIncrementOverview',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssIncrementOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssIncrementOverviewRequest $request
     *
     * @return DescribeOssIncrementOverviewResponse
     */
    public function describeOssIncrementOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssIncrementOverviewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssIncrementStatsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOssIncrementStatsResponse
     */
    public function describeOssIncrementStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssIncrementStats',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssIncrementStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssIncrementStatsRequest $request
     *
     * @return DescribeOssIncrementStatsResponse
     */
    public function describeOssIncrementStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssIncrementStatsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssResultItemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOssResultItemsResponse
     */
    public function describeOssResultItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maxScore)) {
            $query['MaxScore'] = $request->maxScore;
        }
        if (!Utils::isUnset($request->minScore)) {
            $query['MinScore'] = $request->minScore;
        }
        if (!Utils::isUnset($request->object)) {
            $query['Object'] = $request->object;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->stock)) {
            $query['Stock'] = $request->stock;
        }
        if (!Utils::isUnset($request->stockTaskId)) {
            $query['StockTaskId'] = $request->stockTaskId;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssResultItems',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssResultItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssResultItemsRequest $request
     *
     * @return DescribeOssResultItemsResponse
     */
    public function describeOssResultItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssResultItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssStockStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOssStockStatusResponse
     */
    public function describeOssStockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->stockTaskId)) {
            $query['StockTaskId'] = $request->stockTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssStockStatus',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssStockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssStockStatusRequest $request
     *
     * @return DescribeOssStockStatusResponse
     */
    public function describeOssStockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssStockStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSdkUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->debug)) {
            $query['Debug'] = $request->debug;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSdkUrl',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSdkUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSdkUrlRequest $request
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSdkUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpdatePackageResult',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpdatePackageResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdatePackageResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUploadInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUploadInfo',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUploadInfoRequest $request
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsageBillRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUsageBillResponse
     */
    public function describeUsageBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->day)) {
            $query['Day'] = $request->day;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsageBill',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsageBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsageBillRequest $request
     *
     * @return DescribeUsageBillResponse
     */
    public function describeUsageBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageBillWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserBizTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserBizTypesResponse
     */
    public function describeUserBizTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customized)) {
            $query['Customized'] = $request->customized;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBizTypes',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBizTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserBizTypesRequest $request
     *
     * @return DescribeUserBizTypesResponse
     */
    public function describeUserBizTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBizTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserStatus',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserStatusRequest $request
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeViewContentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeViewContentResponse
     */
    public function describeViewContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditResult)) {
            $query['AuditResult'] = $request->auditResult;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->keywordId)) {
            $query['KeywordId'] = $request->keywordId;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->libType)) {
            $query['LibType'] = $request->libType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeViewContent',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeViewContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeViewContentRequest $request
     *
     * @return DescribeViewContentResponse
     */
    public function describeViewContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeViewContentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteIndexPageBaselineRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeWebsiteIndexPageBaselineResponse
     */
    public function describeWebsiteIndexPageBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteIndexPageBaseline',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteIndexPageBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteIndexPageBaselineRequest $request
     *
     * @return DescribeWebsiteIndexPageBaselineResponse
     */
    public function describeWebsiteIndexPageBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteIndexPageBaselineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebsiteInstanceResponse
     */
    public function describeWebsiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteInstanceRequest $request
     *
     * @return DescribeWebsiteInstanceResponse
     */
    public function describeWebsiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteInstanceIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWebsiteInstanceIdResponse
     */
    public function describeWebsiteInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteInstanceId',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteInstanceIdRequest $request
     *
     * @return DescribeWebsiteInstanceIdResponse
     */
    public function describeWebsiteInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteInstanceKeyUrlRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeWebsiteInstanceKeyUrlResponse
     */
    public function describeWebsiteInstanceKeyUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteInstanceKeyUrl',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteInstanceKeyUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteInstanceKeyUrlRequest $request
     *
     * @return DescribeWebsiteInstanceKeyUrlResponse
     */
    public function describeWebsiteInstanceKeyUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteInstanceKeyUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteScanResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWebsiteScanResultResponse
     */
    public function describeWebsiteScanResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->handleStatus)) {
            $query['HandleStatus'] = $request->handleStatus;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->siteUrl)) {
            $query['SiteUrl'] = $request->siteUrl;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->subServiceModule)) {
            $query['SubServiceModule'] = $request->subServiceModule;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteScanResult',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteScanResultRequest $request
     *
     * @return DescribeWebsiteScanResultResponse
     */
    public function describeWebsiteScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteScanResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteScanResultDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeWebsiteScanResultDetailResponse
     */
    public function describeWebsiteScanResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteScanResultDetail',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteScanResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteScanResultDetailRequest $request
     *
     * @return DescribeWebsiteScanResultDetailResponse
     */
    public function describeWebsiteScanResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteScanResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteStatRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeWebsiteStatResponse
     */
    public function describeWebsiteStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteStat',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteStatRequest $request
     *
     * @return DescribeWebsiteStatResponse
     */
    public function describeWebsiteStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteStatWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebsiteVerifyInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWebsiteVerifyInfoResponse
     */
    public function describeWebsiteVerifyInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebsiteVerifyInfo',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebsiteVerifyInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebsiteVerifyInfoRequest $request
     *
     * @return DescribeWebsiteVerifyInfoResponse
     */
    public function describeWebsiteVerifyInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebsiteVerifyInfoWithOptions($request, $runtime);
    }

    /**
     * @param ExportKeywordsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExportKeywordsResponse
     */
    public function exportKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keywordLibId)) {
            $query['KeywordLibId'] = $request->keywordLibId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportKeywords',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportKeywordsRequest $request
     *
     * @return ExportKeywordsResponse
     */
    public function exportKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportKeywordsWithOptions($request, $runtime);
    }

    /**
     * @param ExportOpenApiRcpStatsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportOpenApiRcpStatsResponse
     */
    public function exportOpenApiRcpStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportOpenApiRcpStats',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportOpenApiRcpStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportOpenApiRcpStatsRequest $request
     *
     * @return ExportOpenApiRcpStatsResponse
     */
    public function exportOpenApiRcpStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOpenApiRcpStatsWithOptions($request, $runtime);
    }

    /**
     * @param ExportOssResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExportOssResultResponse
     */
    public function exportOssResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maxScore)) {
            $query['MaxScore'] = $request->maxScore;
        }
        if (!Utils::isUnset($request->minScore)) {
            $query['MinScore'] = $request->minScore;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->stock)) {
            $query['Stock'] = $request->stock;
        }
        if (!Utils::isUnset($request->stockTaskId)) {
            $query['StockTaskId'] = $request->stockTaskId;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportOssResult',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportOssResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportOssResultRequest $request
     *
     * @return ExportOssResultResponse
     */
    public function exportOssResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOssResultWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditItemDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAuditItemDetailResponse
     */
    public function getAuditItemDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuditItemDetail',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuditItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuditItemDetailRequest $request
     *
     * @return GetAuditItemDetailResponse
     */
    public function getAuditItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditItemDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditItemListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAuditItemListResponse
     */
    public function getAuditItemListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuditItemList',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuditItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuditItemListRequest $request
     *
     * @return GetAuditItemListResponse
     */
    public function getAuditItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditItemListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAuditUserConfResponse
     */
    public function getAuditUserConfWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAuditUserConf',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuditUserConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAuditUserConfResponse
     */
    public function getAuditUserConf()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditUserConfWithOptions($runtime);
    }

    /**
     * @param ImportKeywordsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportKeywordsResponse
     */
    public function importKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keywordLibId)) {
            $query['KeywordLibId'] = $request->keywordLibId;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $query['KeywordsObject'] = $request->keywordsObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportKeywords',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportKeywordsRequest $request
     *
     * @return ImportKeywordsResponse
     */
    public function importKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeywordsWithOptions($request, $runtime);
    }

    /**
     * @param MarkAuditContentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return MarkAuditContentResponse
     */
    public function markAuditContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditIllegalReasons)) {
            $query['AuditIllegalReasons'] = $request->auditIllegalReasons;
        }
        if (!Utils::isUnset($request->auditResult)) {
            $query['AuditResult'] = $request->auditResult;
        }
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MarkAuditContent',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MarkAuditContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MarkAuditContentRequest $request
     *
     * @return MarkAuditContentResponse
     */
    public function markAuditContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->markAuditContentWithOptions($request, $runtime);
    }

    /**
     * @param MarkAuditContentItemRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MarkAuditContentItemResponse
     */
    public function markAuditContentItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditIllegalReasons)) {
            $query['AuditIllegalReasons'] = $request->auditIllegalReasons;
        }
        if (!Utils::isUnset($request->auditResult)) {
            $query['AuditResult'] = $request->auditResult;
        }
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MarkAuditContentItem',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MarkAuditContentItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MarkAuditContentItemRequest $request
     *
     * @return MarkAuditContentItemResponse
     */
    public function markAuditContentItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->markAuditContentItemWithOptions($request, $runtime);
    }

    /**
     * @param MarkOssResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return MarkOssResultResponse
     */
    public function markOssResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->stock)) {
            $query['Stock'] = $request->stock;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MarkOssResult',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MarkOssResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MarkOssResultRequest $request
     *
     * @return MarkOssResultResponse
     */
    public function markOssResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->markOssResultWithOptions($request, $runtime);
    }

    /**
     * @param MarkWebsiteScanResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MarkWebsiteScanResultResponse
     */
    public function markWebsiteScanResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MarkWebsiteScanResult',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MarkWebsiteScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MarkWebsiteScanResultRequest $request
     *
     * @return MarkWebsiteScanResultResponse
     */
    public function markWebsiteScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->markWebsiteScanResultWithOptions($request, $runtime);
    }

    /**
     * @param RefundCdiBagRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RefundCdiBagResponse
     */
    public function refundCdiBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundCdiBag',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundCdiBagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundCdiBagRequest $request
     *
     * @return RefundCdiBagResponse
     */
    public function refundCdiBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundCdiBagWithOptions($request, $runtime);
    }

    /**
     * @param RefundCdiBaseBagRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RefundCdiBaseBagResponse
     */
    public function refundCdiBaseBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundCdiBaseBag',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundCdiBaseBagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundCdiBaseBagRequest $request
     *
     * @return RefundCdiBaseBagResponse
     */
    public function refundCdiBaseBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundCdiBaseBagWithOptions($request, $runtime);
    }

    /**
     * @param RefundWebSiteInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RefundWebSiteInstanceResponse
     */
    public function refundWebSiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundWebSiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundWebSiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundWebSiteInstanceRequest $request
     *
     * @return RefundWebSiteInstanceResponse
     */
    public function refundWebSiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundWebSiteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RenewWebSiteInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewWebSiteInstanceResponse
     */
    public function renewWebSiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderNum)) {
            $query['OrderNum'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewWebSiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewWebSiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewWebSiteInstanceRequest $request
     *
     * @return RenewWebSiteInstanceResponse
     */
    public function renewWebSiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewWebSiteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SendVerifyCodeToEmailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SendVerifyCodeToEmailResponse
     */
    public function sendVerifyCodeToEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerifyCodeToEmail',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerifyCodeToEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendVerifyCodeToEmailRequest $request
     *
     * @return SendVerifyCodeToEmailResponse
     */
    public function sendVerifyCodeToEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerifyCodeToEmailWithOptions($request, $runtime);
    }

    /**
     * @param SendVerifyCodeToPhoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SendVerifyCodeToPhoneResponse
     */
    public function sendVerifyCodeToPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerifyCodeToPhone',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerifyCodeToPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendVerifyCodeToPhoneRequest $request
     *
     * @return SendVerifyCodeToPhoneResponse
     */
    public function sendVerifyCodeToPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerifyCodeToPhoneWithOptions($request, $runtime);
    }

    /**
     * @param SendWebsiteFeedbackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SendWebsiteFeedbackResponse
     */
    public function sendWebsiteFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->urls)) {
            $query['Urls'] = $request->urls;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendWebsiteFeedback',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendWebsiteFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendWebsiteFeedbackRequest $request
     *
     * @return SendWebsiteFeedbackResponse
     */
    public function sendWebsiteFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendWebsiteFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppPackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->debug)) {
            $query['Debug'] = $request->debug;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->packageUrl)) {
            $query['PackageUrl'] = $request->packageUrl;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppPackage',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppPackageRequest $request
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuditCallbackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAuditCallbackResponse
     */
    public function updateAuditCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->cryptType)) {
            $query['CryptType'] = $request->cryptType;
        }
        if (!Utils::isUnset($request->seed)) {
            $query['Seed'] = $request->seed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuditCallback',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuditCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuditCallbackRequest $request
     *
     * @return UpdateAuditCallbackResponse
     */
    public function updateAuditCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuditCallbackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuditRangeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAuditRangeResponse
     */
    public function updateAuditRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditRange)) {
            $query['AuditRange'] = $request->auditRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuditRange',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuditRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuditRangeRequest $request
     *
     * @return UpdateAuditRangeResponse
     */
    public function updateAuditRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuditRangeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuditSettingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAuditSettingResponse
     */
    public function updateAuditSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditRange)) {
            $query['AuditRange'] = $request->auditRange;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->seed)) {
            $query['Seed'] = $request->seed;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuditSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuditSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuditSettingRequest $request
     *
     * @return UpdateAuditSettingResponse
     */
    public function updateAuditSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuditSettingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBizTypeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateBizTypeResponse
     */
    public function updateBizTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBizType',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBizTypeRequest $request
     *
     * @return UpdateBizTypeResponse
     */
    public function updateBizType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBizTypeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBizTypeImageLibRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateBizTypeImageLibResponse
     */
    public function updateBizTypeImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->black)) {
            $query['Black'] = $request->black;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->review)) {
            $query['Review'] = $request->review;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->white)) {
            $query['White'] = $request->white;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBizTypeImageLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBizTypeImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBizTypeImageLibRequest $request
     *
     * @return UpdateBizTypeImageLibResponse
     */
    public function updateBizTypeImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBizTypeImageLibWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBizTypeSettingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBizTypeSettingResponse
     */
    public function updateBizTypeSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ad)) {
            $query['Ad'] = $request->ad;
        }
        if (!Utils::isUnset($request->antispam)) {
            $query['Antispam'] = $request->antispam;
        }
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->live)) {
            $query['Live'] = $request->live;
        }
        if (!Utils::isUnset($request->porn)) {
            $query['Porn'] = $request->porn;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->terrorism)) {
            $query['Terrorism'] = $request->terrorism;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBizTypeSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBizTypeSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBizTypeSettingRequest $request
     *
     * @return UpdateBizTypeSettingResponse
     */
    public function updateBizTypeSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBizTypeSettingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBizTypeTextLibRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBizTypeTextLibResponse
     */
    public function updateBizTypeTextLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypeName)) {
            $query['BizTypeName'] = $request->bizTypeName;
        }
        if (!Utils::isUnset($request->black)) {
            $query['Black'] = $request->black;
        }
        if (!Utils::isUnset($request->ignore)) {
            $query['Ignore'] = $request->ignore;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->review)) {
            $query['Review'] = $request->review;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->white)) {
            $query['White'] = $request->white;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBizTypeTextLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBizTypeTextLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBizTypeTextLibRequest $request
     *
     * @return UpdateBizTypeTextLibResponse
     */
    public function updateBizTypeTextLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBizTypeTextLibWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomOcrTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCustomOcrTemplateResponse
     */
    public function updateCustomOcrTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recognizeArea)) {
            $query['RecognizeArea'] = $request->recognizeArea;
        }
        if (!Utils::isUnset($request->referArea)) {
            $query['ReferArea'] = $request->referArea;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomOcrTemplate',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomOcrTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCustomOcrTemplateRequest $request
     *
     * @return UpdateCustomOcrTemplateResponse
     */
    public function updateCustomOcrTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomOcrTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateKeywordLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateKeywordLibResponse
     */
    public function updateKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->matchMode)) {
            $query['MatchMode'] = $request->matchMode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateKeywordLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateKeywordLibRequest $request
     *
     * @return UpdateKeywordLibResponse
     */
    public function updateKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNotificationSettingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateNotificationSettingResponse
     */
    public function updateNotificationSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->realtimeMessageList)) {
            $query['RealtimeMessageList'] = $request->realtimeMessageList;
        }
        if (!Utils::isUnset($request->reminderModeList)) {
            $query['ReminderModeList'] = $request->reminderModeList;
        }
        if (!Utils::isUnset($request->scheduleMessageTime)) {
            $query['ScheduleMessageTime'] = $request->scheduleMessageTime;
        }
        if (!Utils::isUnset($request->scheduleMessageTimeZone)) {
            $query['ScheduleMessageTimeZone'] = $request->scheduleMessageTimeZone;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNotificationSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNotificationSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNotificationSettingRequest $request
     *
     * @return UpdateNotificationSettingResponse
     */
    public function updateNotificationSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNotificationSettingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOssCallbackSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateOssCallbackSettingResponse
     */
    public function updateOssCallbackSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditCallback)) {
            $query['AuditCallback'] = $request->auditCallback;
        }
        if (!Utils::isUnset($request->callbackSeed)) {
            $query['CallbackSeed'] = $request->callbackSeed;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->scanCallback)) {
            $query['ScanCallback'] = $request->scanCallback;
        }
        if (!Utils::isUnset($request->scanCallbackSuggestions)) {
            $query['ScanCallbackSuggestions'] = $request->scanCallbackSuggestions;
        }
        if (!Utils::isUnset($request->serviceModules)) {
            $query['ServiceModules'] = $request->serviceModules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssCallbackSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOssCallbackSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOssCallbackSettingRequest $request
     *
     * @return UpdateOssCallbackSettingResponse
     */
    public function updateOssCallbackSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCallbackSettingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOssIncrementCheckSettingRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateOssIncrementCheckSettingResponse
     */
    public function updateOssIncrementCheckSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioAntispamFreezeConfig)) {
            $query['AudioAntispamFreezeConfig'] = $request->audioAntispamFreezeConfig;
        }
        if (!Utils::isUnset($request->audioAutoFreezeOpened)) {
            $query['AudioAutoFreezeOpened'] = $request->audioAutoFreezeOpened;
        }
        if (!Utils::isUnset($request->audioMaxSize)) {
            $query['AudioMaxSize'] = $request->audioMaxSize;
        }
        if (!Utils::isUnset($request->audioScanLimit)) {
            $query['AudioScanLimit'] = $request->audioScanLimit;
        }
        if (!Utils::isUnset($request->audioSceneList)) {
            $query['AudioSceneList'] = $request->audioSceneList;
        }
        if (!Utils::isUnset($request->autoFreezeType)) {
            $query['AutoFreezeType'] = $request->autoFreezeType;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->bucketConfigList)) {
            $query['BucketConfigList'] = $request->bucketConfigList;
        }
        if (!Utils::isUnset($request->callbackId)) {
            $query['CallbackId'] = $request->callbackId;
        }
        if (!Utils::isUnset($request->imageAdFreezeConfig)) {
            $query['ImageAdFreezeConfig'] = $request->imageAdFreezeConfig;
        }
        if (!Utils::isUnset($request->imageAutoFreeze)) {
            $query['ImageAutoFreeze'] = $request->imageAutoFreeze;
        }
        if (!Utils::isUnset($request->imageAutoFreezeOpened)) {
            $query['ImageAutoFreezeOpened'] = $request->imageAutoFreezeOpened;
        }
        if (!Utils::isUnset($request->imageLiveFreezeConfig)) {
            $query['ImageLiveFreezeConfig'] = $request->imageLiveFreezeConfig;
        }
        if (!Utils::isUnset($request->imagePornFreezeConfig)) {
            $query['ImagePornFreezeConfig'] = $request->imagePornFreezeConfig;
        }
        if (!Utils::isUnset($request->imageScanLimit)) {
            $query['ImageScanLimit'] = $request->imageScanLimit;
        }
        if (!Utils::isUnset($request->imageSceneList)) {
            $query['ImageSceneList'] = $request->imageSceneList;
        }
        if (!Utils::isUnset($request->imageTerrorismFreezeConfig)) {
            $query['ImageTerrorismFreezeConfig'] = $request->imageTerrorismFreezeConfig;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->scanImageNoFileType)) {
            $query['ScanImageNoFileType'] = $request->scanImageNoFileType;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->videoAdFreezeConfig)) {
            $query['VideoAdFreezeConfig'] = $request->videoAdFreezeConfig;
        }
        if (!Utils::isUnset($request->videoAutoFreezeOpened)) {
            $query['VideoAutoFreezeOpened'] = $request->videoAutoFreezeOpened;
        }
        if (!Utils::isUnset($request->videoAutoFreezeSceneList)) {
            $query['VideoAutoFreezeSceneList'] = $request->videoAutoFreezeSceneList;
        }
        if (!Utils::isUnset($request->videoFrameInterval)) {
            $query['VideoFrameInterval'] = $request->videoFrameInterval;
        }
        if (!Utils::isUnset($request->videoLiveFreezeConfig)) {
            $query['VideoLiveFreezeConfig'] = $request->videoLiveFreezeConfig;
        }
        if (!Utils::isUnset($request->videoMaxFrames)) {
            $query['VideoMaxFrames'] = $request->videoMaxFrames;
        }
        if (!Utils::isUnset($request->videoMaxSize)) {
            $query['VideoMaxSize'] = $request->videoMaxSize;
        }
        if (!Utils::isUnset($request->videoPornFreezeConfig)) {
            $query['VideoPornFreezeConfig'] = $request->videoPornFreezeConfig;
        }
        if (!Utils::isUnset($request->videoScanLimit)) {
            $query['VideoScanLimit'] = $request->videoScanLimit;
        }
        if (!Utils::isUnset($request->videoSceneList)) {
            $query['VideoSceneList'] = $request->videoSceneList;
        }
        if (!Utils::isUnset($request->videoTerrorismFreezeConfig)) {
            $query['VideoTerrorismFreezeConfig'] = $request->videoTerrorismFreezeConfig;
        }
        if (!Utils::isUnset($request->videoVoiceAntispamFreezeConfig)) {
            $query['VideoVoiceAntispamFreezeConfig'] = $request->videoVoiceAntispamFreezeConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssIncrementCheckSetting',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOssIncrementCheckSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOssIncrementCheckSettingRequest $request
     *
     * @return UpdateOssIncrementCheckSettingResponse
     */
    public function updateOssIncrementCheckSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssIncrementCheckSettingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOssStockStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateOssStockStatusResponse
     */
    public function updateOssStockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioAutoFreezeSceneList)) {
            $query['AudioAutoFreezeSceneList'] = $request->audioAutoFreezeSceneList;
        }
        if (!Utils::isUnset($request->audioMaxSize)) {
            $query['AudioMaxSize'] = $request->audioMaxSize;
        }
        if (!Utils::isUnset($request->autoFreezeType)) {
            $query['AutoFreezeType'] = $request->autoFreezeType;
        }
        if (!Utils::isUnset($request->bucketConfigList)) {
            $query['BucketConfigList'] = $request->bucketConfigList;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->imageAutoFreeze)) {
            $query['ImageAutoFreeze'] = $request->imageAutoFreeze;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $query['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->sceneList)) {
            $query['SceneList'] = $request->sceneList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->videoAutoFreezeSceneList)) {
            $query['VideoAutoFreezeSceneList'] = $request->videoAutoFreezeSceneList;
        }
        if (!Utils::isUnset($request->videoFrameInterval)) {
            $query['VideoFrameInterval'] = $request->videoFrameInterval;
        }
        if (!Utils::isUnset($request->videoMaxFrames)) {
            $query['VideoMaxFrames'] = $request->videoMaxFrames;
        }
        if (!Utils::isUnset($request->videoMaxSize)) {
            $query['VideoMaxSize'] = $request->videoMaxSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssStockStatus',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOssStockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOssStockStatusRequest $request
     *
     * @return UpdateOssStockStatusResponse
     */
    public function updateOssStockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssStockStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebsiteInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateWebsiteInstanceResponse
     */
    public function updateWebsiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->indexPage)) {
            $query['IndexPage'] = $request->indexPage;
        }
        if (!Utils::isUnset($request->indexPageScanInterval)) {
            $query['IndexPageScanInterval'] = $request->indexPageScanInterval;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->siteProtocol)) {
            $query['SiteProtocol'] = $request->siteProtocol;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->websiteScanInterval)) {
            $query['WebsiteScanInterval'] = $request->websiteScanInterval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebsiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebsiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebsiteInstanceRequest $request
     *
     * @return UpdateWebsiteInstanceResponse
     */
    public function updateWebsiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebsiteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebsiteInstanceKeyUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateWebsiteInstanceKeyUrlResponse
     */
    public function updateWebsiteInstanceKeyUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->urls)) {
            $query['Urls'] = $request->urls;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebsiteInstanceKeyUrl',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebsiteInstanceKeyUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebsiteInstanceKeyUrlRequest $request
     *
     * @return UpdateWebsiteInstanceKeyUrlResponse
     */
    public function updateWebsiteInstanceKeyUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebsiteInstanceKeyUrlWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebsiteInstanceStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateWebsiteInstanceStatusResponse
     */
    public function updateWebsiteInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebsiteInstanceStatus',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebsiteInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebsiteInstanceStatusRequest $request
     *
     * @return UpdateWebsiteInstanceStatusResponse
     */
    public function updateWebsiteInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebsiteInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeCdiBaseBagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeCdiBaseBagResponse
     */
    public function upgradeCdiBaseBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->flowOutSpec)) {
            $query['FlowOutSpec'] = $request->flowOutSpec;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCdiBaseBag',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeCdiBaseBagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeCdiBaseBagRequest $request
     *
     * @return UpgradeCdiBaseBagResponse
     */
    public function upgradeCdiBaseBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeCdiBaseBagWithOptions($request, $runtime);
    }

    /**
     * @param UploadImageToLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadImageToLibResponse
     */
    public function uploadImageToLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageLibId)) {
            $query['ImageLibId'] = $request->imageLibId;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->urls)) {
            $query['Urls'] = $request->urls;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadImageToLib',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadImageToLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadImageToLibRequest $request
     *
     * @return UploadImageToLibResponse
     */
    public function uploadImageToLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadImageToLibWithOptions($request, $runtime);
    }

    /**
     * @param VerifyCustomOcrTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return VerifyCustomOcrTemplateResponse
     */
    public function verifyCustomOcrTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->testImgUrl)) {
            $query['TestImgUrl'] = $request->testImgUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCustomOcrTemplate',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCustomOcrTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyCustomOcrTemplateRequest $request
     *
     * @return VerifyCustomOcrTemplateResponse
     */
    public function verifyCustomOcrTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCustomOcrTemplateWithOptions($request, $runtime);
    }

    /**
     * @param VerifyEmailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return VerifyEmailResponse
     */
    public function verifyEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyEmail',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyEmailRequest $request
     *
     * @return VerifyEmailResponse
     */
    public function verifyEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyEmailWithOptions($request, $runtime);
    }

    /**
     * @param VerifyPhoneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return VerifyPhoneResponse
     */
    public function verifyPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyPhone',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyPhoneRequest $request
     *
     * @return VerifyPhoneResponse
     */
    public function verifyPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPhoneWithOptions($request, $runtime);
    }

    /**
     * @param VerifyWebsiteInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyWebsiteInstanceResponse
     */
    public function verifyWebsiteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->verifyMethod)) {
            $query['VerifyMethod'] = $request->verifyMethod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyWebsiteInstance',
            'version'     => '2017-08-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyWebsiteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyWebsiteInstanceRequest $request
     *
     * @return VerifyWebsiteInstanceResponse
     */
    public function verifyWebsiteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWebsiteInstanceWithOptions($request, $runtime);
    }
}
