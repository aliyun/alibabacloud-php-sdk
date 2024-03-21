<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Trademark\V20190902\Models\BindApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\BindApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckAuthorizationLetterRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckAuthorizationLetterResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckBizAvailableRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckBizAvailableResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateApplicantRiskRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateApplicantRiskResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateClassificationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateClassificationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateTrademarkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateTrademarkResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckMaterialValidityRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckMaterialValidityResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckTrademarkNameRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckTrademarkNameResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CloseTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CloseTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CombineAuthorizationLetterRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CombineAuthorizationLetterResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ComplementTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ComplementTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ConfirmExpertSolutionRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ConfirmExpertSolutionResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateCommodityOrderRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateCommodityOrderResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateCommodityOrderShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\CreateTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DeleteSearchConditionRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DeleteSearchConditionResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeAdminTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeAdminTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeQualificationStatusRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeQualificationStatusResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeSupplementRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeSupplementResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GenerateUploadFilePolicyRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GenerateUploadFilePolicyResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetAlipayUrlRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetAlipayUrlResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetOrderConfirmUrlRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetOrderConfirmUrlResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetStsByTaobaoUidRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\GetStsByTaobaoUidResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationLogsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationLogsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListApplicantsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListApplicantsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationConditionsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationConditionsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkSearchForInnerRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkSearchForInnerResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\PutMeasureDataRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\PutMeasureDataResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\PutMeasureReadyFlagRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\PutMeasureReadyFlagResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryAliyunUidRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryAliyunUidResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryRemainResourcesRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryRemainResourcesResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RefuseSupplementRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RefuseSupplementResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RejectExpertSolutionRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RejectExpertSolutionResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RemoveApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\RemoveApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SaveSearchConditionRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SaveSearchConditionResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SaveTemporaryApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SaveTemporaryApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityListRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityListResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityListShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SendMessageToUserRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SendMessageToUserResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SendMessageToUserShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SubmitSupplementRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SubmitSupplementResponse;
use AlibabaCloud\SDK\Trademark\V20190902\Models\SubmitSupplementShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\UpdateApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20190902\Models\UpdateApplicantResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Trademark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('trademark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BindApplicantRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindApplicantResponse
     */
    public function bindApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindApplicantRequest $request
     *
     * @return BindApplicantResponse
     */
    public function bindApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindApplicantWithOptions($request, $runtime);
    }

    /**
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * @param CheckAuthorizationLetterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckAuthorizationLetterResponse
     */
    public function checkAuthorizationLetterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->color)) {
            $query['Color'] = $request->color;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAuthorizationLetter',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAuthorizationLetterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAuthorizationLetterRequest $request
     *
     * @return CheckAuthorizationLetterResponse
     */
    public function checkAuthorizationLetter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAuthorizationLetterWithOptions($request, $runtime);
    }

    /**
     * @param CheckBizAvailableRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckBizAvailableResponse
     */
    public function checkBizAvailableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckBizAvailable',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckBizAvailableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckBizAvailableRequest $request
     *
     * @return CheckBizAvailableResponse
     */
    public function checkBizAvailable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBizAvailableWithOptions($request, $runtime);
    }

    /**
     * @param CheckDuplicateApplicantRiskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckDuplicateApplicantRiskResponse
     */
    public function checkDuplicateApplicantRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->eventSceneType)) {
            $query['EventSceneType'] = $request->eventSceneType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDuplicateApplicantRisk',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDuplicateApplicantRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDuplicateApplicantRiskRequest $request
     *
     * @return CheckDuplicateApplicantRiskResponse
     */
    public function checkDuplicateApplicantRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDuplicateApplicantRiskWithOptions($request, $runtime);
    }

    /**
     * @param CheckDuplicateClassificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckDuplicateClassificationResponse
     */
    public function checkDuplicateClassificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->eventSceneType)) {
            $query['EventSceneType'] = $request->eventSceneType;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDuplicateClassification',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDuplicateClassificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDuplicateClassificationRequest $request
     *
     * @return CheckDuplicateClassificationResponse
     */
    public function checkDuplicateClassification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDuplicateClassificationWithOptions($request, $runtime);
    }

    /**
     * @param CheckDuplicateTrademarkRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckDuplicateTrademarkResponse
     */
    public function checkDuplicateTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->eventSceneType)) {
            $query['EventSceneType'] = $request->eventSceneType;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDuplicateTrademark',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDuplicateTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDuplicateTrademarkRequest $request
     *
     * @return CheckDuplicateTrademarkResponse
     */
    public function checkDuplicateTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDuplicateTrademarkWithOptions($request, $runtime);
    }

    /**
     * @param CheckMaterialValidityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckMaterialValidityResponse
     */
    public function checkMaterialValidityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessLicenseOssKey)) {
            $query['BusinessLicenseOssKey'] = $request->businessLicenseOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->materialRegion)) {
            $query['MaterialRegion'] = $request->materialRegion;
        }
        if (!Utils::isUnset($request->materialType)) {
            $query['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMaterialValidity',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMaterialValidityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckMaterialValidityRequest $request
     *
     * @return CheckMaterialValidityResponse
     */
    public function checkMaterialValidity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMaterialValidityWithOptions($request, $runtime);
    }

    /**
     * @param CheckTrademarkNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckTrademarkNameResponse
     */
    public function checkTrademarkNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventSceneType)) {
            $query['EventSceneType'] = $request->eventSceneType;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckTrademarkName',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckTrademarkNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckTrademarkNameRequest $request
     *
     * @return CheckTrademarkNameResponse
     */
    public function checkTrademarkName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTrademarkNameWithOptions($request, $runtime);
    }

    /**
     * @param CloseTrademarkApplicationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloseTrademarkApplicationResponse
     */
    public function closeTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseTrademarkApplicationRequest $request
     *
     * @return CloseTrademarkApplicationResponse
     */
    public function closeTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CombineAuthorizationLetterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CombineAuthorizationLetterResponse
     */
    public function combineAuthorizationLetterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactPhone)) {
            $query['ContactPhone'] = $request->contactPhone;
        }
        if (!Utils::isUnset($request->contactPostcode)) {
            $query['ContactPostcode'] = $request->contactPostcode;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->nationality)) {
            $query['Nationality'] = $request->nationality;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->tmProduceType)) {
            $query['TmProduceType'] = $request->tmProduceType;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CombineAuthorizationLetter',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CombineAuthorizationLetterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CombineAuthorizationLetterRequest $request
     *
     * @return CombineAuthorizationLetterResponse
     */
    public function combineAuthorizationLetter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->combineAuthorizationLetterWithOptions($request, $runtime);
    }

    /**
     * @param ComplementTrademarkApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ComplementTrademarkApplicationResponse
     */
    public function complementTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementId)) {
            $query['AgreementId'] = $request->agreementId;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->isBlackIcon)) {
            $query['IsBlackIcon'] = $request->isBlackIcon;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->orderData)) {
            $query['OrderData'] = $request->orderData;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->trademarkComment)) {
            $query['TrademarkComment'] = $request->trademarkComment;
        }
        if (!Utils::isUnset($request->trademarkIconOssKey)) {
            $query['TrademarkIconOssKey'] = $request->trademarkIconOssKey;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->trademarkNameType)) {
            $query['TrademarkNameType'] = $request->trademarkNameType;
        }
        if (!Utils::isUnset($request->trademarkType)) {
            $query['TrademarkType'] = $request->trademarkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ComplementTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ComplementTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ComplementTrademarkApplicationRequest $request
     *
     * @return ComplementTrademarkApplicationResponse
     */
    public function complementTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->complementTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmExpertSolutionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfirmExpertSolutionResponse
     */
    public function confirmExpertSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmExpertSolution',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmExpertSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmExpertSolutionRequest $request
     *
     * @return ConfirmExpertSolutionResponse
     */
    public function confirmExpertSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmExpertSolutionWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateApplicantResponse
     */
    public function createApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->applicantRegion)) {
            $query['ApplicantRegion'] = $request->applicantRegion;
        }
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicantRequest $request
     *
     * @return CreateApplicantResponse
     */
    public function createApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicantWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommodityOrderRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCommodityOrderResponse
     */
    public function createCommodityOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCommodityOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->components)) {
            $request->componentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }
        if (!Utils::isUnset($tmpReq->orderParams)) {
            $request->orderParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderParams, 'OrderParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $query['Components'] = $request->componentsShrink;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderParamsShrink)) {
            $query['OrderParams'] = $request->orderParamsShrink;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->specCode)) {
            $query['SpecCode'] = $request->specCode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommodityOrder',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommodityOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommodityOrderRequest $request
     *
     * @return CreateCommodityOrderResponse
     */
    public function createCommodityOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommodityOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementId)) {
            $query['AgreementId'] = $request->agreementId;
        }
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->blackAndWhiteIcon)) {
            $query['BlackAndWhiteIcon'] = $request->blackAndWhiteIcon;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->classifications)) {
            $query['Classifications'] = $request->classifications;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->legalNoticeKey)) {
            $query['LegalNoticeKey'] = $request->legalNoticeKey;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->paymentCallback)) {
            $query['PaymentCallback'] = $request->paymentCallback;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->trademarkComment)) {
            $query['TrademarkComment'] = $request->trademarkComment;
        }
        if (!Utils::isUnset($request->trademarkIcon)) {
            $query['TrademarkIcon'] = $request->trademarkIcon;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->trademarkNameType)) {
            $query['TrademarkNameType'] = $request->trademarkNameType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrademarkApplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateTrademarkApplicationResponse
     */
    public function createTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementId)) {
            $query['AgreementId'] = $request->agreementId;
        }
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->blackAndWhiteIcon)) {
            $query['BlackAndWhiteIcon'] = $request->blackAndWhiteIcon;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->classifications)) {
            $query['Classifications'] = $request->classifications;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->legalNoticeKey)) {
            $query['LegalNoticeKey'] = $request->legalNoticeKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->trademarkComment)) {
            $query['TrademarkComment'] = $request->trademarkComment;
        }
        if (!Utils::isUnset($request->trademarkIcon)) {
            $query['TrademarkIcon'] = $request->trademarkIcon;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->trademarkNameType)) {
            $query['TrademarkNameType'] = $request->trademarkNameType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrademarkApplicationRequest $request
     *
     * @return CreateTrademarkApplicationResponse
     */
    public function createTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSearchConditionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSearchConditionResponse
     */
    public function deleteSearchConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conditionId)) {
            $query['ConditionId'] = $request->conditionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->umid)) {
            $query['Umid'] = $request->umid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSearchCondition',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSearchConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSearchConditionRequest $request
     *
     * @return DeleteSearchConditionResponse
     */
    public function deleteSearchCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSearchConditionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAdminTrademarkApplicationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeAdminTrademarkApplicationResponse
     */
    public function describeAdminTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdminTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdminTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAdminTrademarkApplicationRequest $request
     *
     * @return DescribeAdminTrademarkApplicationResponse
     */
    public function describeAdminTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdminTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApplicantRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApplicantResponse
     */
    public function describeApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicantRequest $request
     *
     * @return DescribeApplicantResponse
     */
    public function describeApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicantWithOptions($request, $runtime);
    }

    /**
     * @param DescribePartnerTrademarkApplicationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribePartnerTrademarkApplicationResponse
     */
    public function describePartnerTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePartnerTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePartnerTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePartnerTrademarkApplicationRequest $request
     *
     * @return DescribePartnerTrademarkApplicationResponse
     */
    public function describePartnerTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePartnerTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQualificationStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeQualificationStatusResponse
     */
    public function describeQualificationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tbUid)) {
            $query['TbUid'] = $request->tbUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQualificationStatus',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQualificationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQualificationStatusRequest $request
     *
     * @return DescribeQualificationStatusResponse
     */
    public function describeQualificationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualificationStatusWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param DescribeSupplementRequest $request DescribeSupplementRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupplementResponse DescribeSupplementResponse
     */
    public function describeSupplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->supplementId)) {
            $query['SupplementId'] = $request->supplementId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupplement',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param DescribeSupplementRequest $request DescribeSupplementRequest
     *
     * @return DescribeSupplementResponse DescribeSupplementResponse
     */
    public function describeSupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupplementWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrademarkApplicationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeTrademarkApplicationResponse
     */
    public function describeTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrademarkApplication',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrademarkApplicationRequest $request
     *
     * @return DescribeTrademarkApplicationResponse
     */
    public function describeTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrademarkDetailForInnerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeTrademarkDetailForInnerResponse
     */
    public function describeTrademarkDetailForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->umid)) {
            $query['Umid'] = $request->umid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrademarkDetailForInner',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrademarkDetailForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrademarkDetailForInnerRequest $request
     *
     * @return DescribeTrademarkDetailForInnerResponse
     */
    public function describeTrademarkDetailForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrademarkDetailForInnerWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadFilePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadFilePolicy',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadFilePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateUploadFilePolicyRequest $request
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadFilePolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetAlipayUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlipayUrl',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlipayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlipayUrlRequest $request
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlipayUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderConfirmUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOrderConfirmUrlResponse
     */
    public function getOrderConfirmUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->outTraceCode)) {
            $query['OutTraceCode'] = $request->outTraceCode;
        }
        if (!Utils::isUnset($request->outTraceType)) {
            $query['OutTraceType'] = $request->outTraceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderConfirmUrl',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderConfirmUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderConfirmUrlRequest $request
     *
     * @return GetOrderConfirmUrlResponse
     */
    public function getOrderConfirmUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderConfirmUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetStsByTaobaoUidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetStsByTaobaoUidResponse
     */
    public function getStsByTaobaoUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        if (!Utils::isUnset($request->tbUid)) {
            $query['TbUid'] = $request->tbUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStsByTaobaoUid',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStsByTaobaoUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStsByTaobaoUidRequest $request
     *
     * @return GetStsByTaobaoUidResponse
     */
    public function getStsByTaobaoUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStsByTaobaoUidWithOptions($request, $runtime);
    }

    /**
     * @param ListAdminTrademarkApplicationLogsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListAdminTrademarkApplicationLogsResponse
     */
    public function listAdminTrademarkApplicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdminTrademarkApplicationLogs',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdminTrademarkApplicationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdminTrademarkApplicationLogsRequest $request
     *
     * @return ListAdminTrademarkApplicationLogsResponse
     */
    public function listAdminTrademarkApplicationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdminTrademarkApplicationLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListAdminTrademarkApplicationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAdminTrademarkApplicationsResponse
     */
    public function listAdminTrademarkApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->applicationStatus)) {
            $query['ApplicationStatus'] = $request->applicationStatus;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->supplementStatus)) {
            $query['SupplementStatus'] = $request->supplementStatus;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->trademarkNumber)) {
            $query['TrademarkNumber'] = $request->trademarkNumber;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdminTrademarkApplications',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdminTrademarkApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdminTrademarkApplicationsRequest $request
     *
     * @return ListAdminTrademarkApplicationsResponse
     */
    public function listAdminTrademarkApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdminTrademarkApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param ListApplicantsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListApplicantsResponse
     */
    public function listApplicantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->applicantRegion)) {
            $query['ApplicantRegion'] = $request->applicantRegion;
        }
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->applicantVersion)) {
            $query['ApplicantVersion'] = $request->applicantVersion;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->systemVersion)) {
            $query['SystemVersion'] = $request->systemVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicants',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplicantsRequest $request
     *
     * @return ListApplicantsResponse
     */
    public function listApplicants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicantsWithOptions($request, $runtime);
    }

    /**
     * @param ListAreasRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAreasResponse
     */
    public function listAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->parentCode)) {
            $query['ParentCode'] = $request->parentCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAreas',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAreasRequest $request
     *
     * @return ListAreasResponse
     */
    public function listAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAreasWithOptions($request, $runtime);
    }

    /**
     * @param ListClassificationConditionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListClassificationConditionsResponse
     */
    public function listClassificationConditionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClassificationConditions',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClassificationConditionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClassificationConditionsRequest $request
     *
     * @return ListClassificationConditionsResponse
     */
    public function listClassificationConditions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassificationConditionsWithOptions($request, $runtime);
    }

    /**
     * @param ListClassificationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListClassificationsResponse
     */
    public function listClassificationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentCode)) {
            $query['ParentCode'] = $request->parentCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClassifications',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClassificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClassificationsRequest $request
     *
     * @return ListClassificationsResponse
     */
    public function listClassifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassificationsWithOptions($request, $runtime);
    }

    /**
     * @param ListTrademarkApplicationLogsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListTrademarkApplicationLogsResponse
     */
    public function listTrademarkApplicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrademarkApplicationLogs',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrademarkApplicationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrademarkApplicationLogsRequest $request
     *
     * @return ListTrademarkApplicationLogsResponse
     */
    public function listTrademarkApplicationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrademarkApplicationLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListTrademarkApplicationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListTrademarkApplicationsResponse
     */
    public function listTrademarkApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->applicationStatus)) {
            $query['ApplicationStatus'] = $request->applicationStatus;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->createTimeLeft)) {
            $query['CreateTimeLeft'] = $request->createTimeLeft;
        }
        if (!Utils::isUnset($request->createTimeRight)) {
            $query['CreateTimeRight'] = $request->createTimeRight;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->queryVoucherOrderDoneFlag)) {
            $query['QueryVoucherOrderDoneFlag'] = $request->queryVoucherOrderDoneFlag;
        }
        if (!Utils::isUnset($request->queryVoucherOrderFlag)) {
            $query['QueryVoucherOrderFlag'] = $request->queryVoucherOrderFlag;
        }
        if (!Utils::isUnset($request->sortFiled)) {
            $query['SortFiled'] = $request->sortFiled;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->supplementStatus)) {
            $query['SupplementStatus'] = $request->supplementStatus;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->trademarkNumber)) {
            $query['TrademarkNumber'] = $request->trademarkNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrademarkApplications',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrademarkApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrademarkApplicationsRequest $request
     *
     * @return ListTrademarkApplicationsResponse
     */
    public function listTrademarkApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrademarkApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param ListTrademarkSearchForInnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListTrademarkSearchForInnerResponse
     */
    public function listTrademarkSearchForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyBeginTime)) {
            $query['ApplyBeginTime'] = $request->applyBeginTime;
        }
        if (!Utils::isUnset($request->applyEndTime)) {
            $query['ApplyEndTime'] = $request->applyEndTime;
        }
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->ifPrecision)) {
            $query['IfPrecision'] = $request->ifPrecision;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->searchPreference)) {
            $query['SearchPreference'] = $request->searchPreference;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->umid)) {
            $query['Umid'] = $request->umid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrademarkSearchForInner',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrademarkSearchForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrademarkSearchForInnerRequest $request
     *
     * @return ListTrademarkSearchForInnerResponse
     */
    public function listTrademarkSearchForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrademarkSearchForInnerWithOptions($request, $runtime);
    }

    /**
     * @param PutMeasureDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->dataType)) {
            $body['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutMeasureData',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMeasureDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutMeasureDataRequest $request
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureDataWithOptions($request, $runtime);
    }

    /**
     * @param PutMeasureReadyFlagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutMeasureReadyFlagResponse
     */
    public function putMeasureReadyFlagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->readyFlag)) {
            $query['ReadyFlag'] = $request->readyFlag;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutMeasureReadyFlag',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMeasureReadyFlagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutMeasureReadyFlagRequest $request
     *
     * @return PutMeasureReadyFlagResponse
     */
    public function putMeasureReadyFlag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureReadyFlagWithOptions($request, $runtime);
    }

    /**
     * @param QueryActivityItemsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryActivityItemsResponse
     */
    public function queryActivityItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->extendInfo)) {
            $query['ExtendInfo'] = $request->extendInfo;
        }
        if (!Utils::isUnset($request->floorIndex)) {
            $query['FloorIndex'] = $request->floorIndex;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['Mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->refresh)) {
            $query['Refresh'] = $request->refresh;
        }
        if (!Utils::isUnset($request->umId)) {
            $query['UmId'] = $request->umId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryActivityItems',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryActivityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryActivityItemsRequest $request
     *
     * @return QueryActivityItemsResponse
     */
    public function queryActivityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryActivityItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAliyunUidRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAliyunUidResponse
     */
    public function queryAliyunUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tbUid)) {
            $query['TbUid'] = $request->tbUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAliyunUid',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAliyunUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAliyunUidRequest $request
     *
     * @return QueryAliyunUidResponse
     */
    public function queryAliyunUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAliyunUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryDetailItemRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDetailItemResponse
     */
    public function queryDetailItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detailConvertType)) {
            $query['DetailConvertType'] = $request->detailConvertType;
        }
        if (!Utils::isUnset($request->detailId)) {
            $query['DetailId'] = $request->detailId;
        }
        if (!Utils::isUnset($request->detailType)) {
            $query['DetailType'] = $request->detailType;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['Mock'] = $request->mock;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDetailItem',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDetailItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDetailItemRequest $request
     *
     * @return QueryDetailItemResponse
     */
    public function queryDetailItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDetailItemWithOptions($request, $runtime);
    }

    /**
     * @param QueryRemainResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRemainResourcesResponse
     */
    public function queryRemainResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRemainResources',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRemainResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRemainResourcesRequest $request
     *
     * @return QueryRemainResourcesResponse
     */
    public function queryRemainResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRemainResourcesWithOptions($request, $runtime);
    }

    /**
     * @param RefuseSupplementRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RefuseSupplementResponse
     */
    public function refuseSupplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->supplementId)) {
            $query['SupplementId'] = $request->supplementId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefuseSupplement',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefuseSupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefuseSupplementRequest $request
     *
     * @return RefuseSupplementResponse
     */
    public function refuseSupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseSupplementWithOptions($request, $runtime);
    }

    /**
     * @param RejectExpertSolutionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RejectExpertSolutionResponse
     */
    public function rejectExpertSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectExpertSolution',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectExpertSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectExpertSolutionRequest $request
     *
     * @return RejectExpertSolutionResponse
     */
    public function rejectExpertSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectExpertSolutionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveApplicantResponse
     */
    public function removeApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveApplicantRequest $request
     *
     * @return RemoveApplicantResponse
     */
    public function removeApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicantWithOptions($request, $runtime);
    }

    /**
     * @param SaveSearchConditionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SaveSearchConditionResponse
     */
    public function saveSearchConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conditionContent)) {
            $body['ConditionContent'] = $request->conditionContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $body['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->umid)) {
            $body['Umid'] = $request->umid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveSearchCondition',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSearchConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveSearchConditionRequest $request
     *
     * @return SaveSearchConditionResponse
     */
    public function saveSearchCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSearchConditionWithOptions($request, $runtime);
    }

    /**
     * @param SaveTemporaryApplicantRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveTemporaryApplicantResponse
     */
    public function saveTemporaryApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->completeApplicant)) {
            $query['CompleteApplicant'] = $request->completeApplicant;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipCode)) {
            $query['ContactZipCode'] = $request->contactZipCode;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->town)) {
            $query['Town'] = $request->town;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTemporaryApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTemporaryApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTemporaryApplicantRequest $request
     *
     * @return SaveTemporaryApplicantResponse
     */
    public function saveTemporaryApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTemporaryApplicantWithOptions($request, $runtime);
    }

    /**
     * @param SearchItemsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchItemsResponse
     */
    public function searchItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->excludedTags)) {
            $query['ExcludedTags'] = $request->excludedTags;
        }
        if (!Utils::isUnset($request->excludedUids)) {
            $query['ExcludedUids'] = $request->excludedUids;
        }
        if (!Utils::isUnset($request->feedsType)) {
            $query['FeedsType'] = $request->feedsType;
        }
        if (!Utils::isUnset($request->intCls)) {
            $query['IntCls'] = $request->intCls;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['Mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->priceLeft)) {
            $query['PriceLeft'] = $request->priceLeft;
        }
        if (!Utils::isUnset($request->priceRight)) {
            $query['PriceRight'] = $request->priceRight;
        }
        if (!Utils::isUnset($request->products)) {
            $query['Products'] = $request->products;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->trademarkNameLength)) {
            $query['TrademarkNameLength'] = $request->trademarkNameLength;
        }
        if (!Utils::isUnset($request->trademarkNameType)) {
            $query['TrademarkNameType'] = $request->trademarkNameType;
        }
        if (!Utils::isUnset($request->umId)) {
            $query['UmId'] = $request->umId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchItems',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchItemsRequest $request
     *
     * @return SearchItemsResponse
     */
    public function searchItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchItemsWithOptions($request, $runtime);
    }

    /**
     * @param SearchSimilarityRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SearchSimilarityResponse
     */
    public function searchSimilarityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchSimilarityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->classifications)) {
            $request->classificationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->classifications, 'Classifications', 'json');
        }
        if (!Utils::isUnset($tmpReq->similarGroups)) {
            $request->similarGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->similarGroups, 'SimilarGroups', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->classificationsShrink)) {
            $query['Classifications'] = $request->classificationsShrink;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nameUriList)) {
            $query['NameUriList'] = $request->nameUriList;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->showDetail)) {
            $query['ShowDetail'] = $request->showDetail;
        }
        if (!Utils::isUnset($request->similarGroupsShrink)) {
            $query['SimilarGroups'] = $request->similarGroupsShrink;
        }
        if (!Utils::isUnset($request->sorter)) {
            $query['Sorter'] = $request->sorter;
        }
        if (!Utils::isUnset($request->umid)) {
            $query['Umid'] = $request->umid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchSimilarity',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchSimilarityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchSimilarityRequest $request
     *
     * @return SearchSimilarityResponse
     */
    public function searchSimilarity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchSimilarityWithOptions($request, $runtime);
    }

    /**
     * @param SearchSimilarityListRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SearchSimilarityListResponse
     */
    public function searchSimilarityListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchSimilarityListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->classifications)) {
            $request->classificationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->classifications, 'Classifications', 'json');
        }
        if (!Utils::isUnset($tmpReq->similarGroups)) {
            $request->similarGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->similarGroups, 'SimilarGroups', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->classificationsShrink)) {
            $query['Classifications'] = $request->classificationsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->similarGroupsShrink)) {
            $query['SimilarGroups'] = $request->similarGroupsShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->successSearchType)) {
            $query['SuccessSearchType'] = $request->successSearchType;
        }
        if (!Utils::isUnset($request->umid)) {
            $query['Umid'] = $request->umid;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchSimilarityList',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchSimilarityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchSimilarityListRequest $request
     *
     * @return SearchSimilarityListResponse
     */
    public function searchSimilarityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchSimilarityListWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageToUserRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SendMessageToUserResponse
     */
    public function sendMessageToUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendMessageToUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateData)) {
            $request->templateDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateData, 'TemplateData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->receiverNickName)) {
            $query['ReceiverNickName'] = $request->receiverNickName;
        }
        if (!Utils::isUnset($request->senderNickName)) {
            $query['SenderNickName'] = $request->senderNickName;
        }
        if (!Utils::isUnset($request->templateDataShrink)) {
            $query['TemplateData'] = $request->templateDataShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessageToUser',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageToUserRequest $request
     *
     * @return SendMessageToUserResponse
     */
    public function sendMessageToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageToUserWithOptions($request, $runtime);
    }

    /**
     * ***
     *   *
     * @param SubmitSupplementRequest $tmpReq  SubmitSupplementRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSupplementResponse SubmitSupplementResponse
     */
    public function submitSupplementWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSupplementShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userFiles)) {
            $request->userFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userFiles, 'UserFiles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->supplementId)) {
            $query['SupplementId'] = $request->supplementId;
        }
        if (!Utils::isUnset($request->userFilesShrink)) {
            $query['UserFiles'] = $request->userFilesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSupplement',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ***
     *   *
     * @param SubmitSupplementRequest $request SubmitSupplementRequest
     *
     * @return SubmitSupplementResponse SubmitSupplementResponse
     */
    public function submitSupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSupplementWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateApplicantResponse
     */
    public function updateApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->applicantName)) {
            $query['ApplicantName'] = $request->applicantName;
        }
        if (!Utils::isUnset($request->authorizationOssKey)) {
            $query['AuthorizationOssKey'] = $request->authorizationOssKey;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicant',
            'version'     => '2019-09-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicantRequest $request
     *
     * @return UpdateApplicantResponse
     */
    public function updateApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicantWithOptions($request, $runtime);
    }
}
