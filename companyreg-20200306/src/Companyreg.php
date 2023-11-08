<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseIntentionForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseIntentionForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseUserIntentionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseUserIntentionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateBusinessOpportunityRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateBusinessOpportunityResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateProduceForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateProduceForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\DescribePartnerConfigRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\DescribePartnerConfigResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GenerateUploadFilePolicyRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GenerateUploadFilePolicyResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GetAlipayUrlRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GetAlipayUrlResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListIntentionNoteRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListIntentionNoteResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserDetailSolutionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserDetailSolutionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionNotesRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionNotesResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserProduceOperateLogsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserProduceOperateLogsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsShrinkRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\OperateProduceForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\OperateProduceForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureDataRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureDataResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureReadyFlagRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureReadyFlagResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryAvailableNumbersRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryAvailableNumbersResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryBagRemainingRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryBagRemainingResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCommodityConfigRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCommodityConfigResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryInstanceRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryInstanceResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerIntentionListRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerIntentionListResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerProduceListRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerProduceListResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryUserNeedAuthResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RecordPostBackRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RecordPostBackResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectUserSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectUserSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ReleaseProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ReleaseProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\StartBackToBackCallRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\StartBackToBackCallResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionNoteRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionNoteResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferIntentionOwnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferIntentionOwnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferProduceOwnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferProduceOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Companyreg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'companyreg.aliyuncs.com',
            'ap-northeast-2-pop'          => 'companyreg.aliyuncs.com',
            'ap-south-1'                  => 'companyreg.aliyuncs.com',
            'ap-southeast-1'              => 'companyreg.aliyuncs.com',
            'ap-southeast-2'              => 'companyreg.aliyuncs.com',
            'ap-southeast-3'              => 'companyreg.aliyuncs.com',
            'ap-southeast-5'              => 'companyreg.aliyuncs.com',
            'cn-beijing'                  => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-1'        => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'companyreg.aliyuncs.com',
            'cn-beijing-gov-1'            => 'companyreg.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'companyreg.aliyuncs.com',
            'cn-chengdu'                  => 'companyreg.aliyuncs.com',
            'cn-edge-1'                   => 'companyreg.aliyuncs.com',
            'cn-fujian'                   => 'companyreg.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'companyreg.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'companyreg.aliyuncs.com',
            'cn-hangzhou-finance'         => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'companyreg.aliyuncs.com',
            'cn-hongkong'                 => 'companyreg.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'companyreg.aliyuncs.com',
            'cn-huhehaote'                => 'companyreg.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'companyreg.aliyuncs.com',
            'cn-north-2-gov-1'            => 'companyreg.aliyuncs.com',
            'cn-qingdao'                  => 'companyreg.aliyuncs.com',
            'cn-qingdao-nebula'           => 'companyreg.aliyuncs.com',
            'cn-shanghai'                 => 'companyreg.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'companyreg.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'companyreg.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'companyreg.aliyuncs.com',
            'cn-shanghai-inner'           => 'companyreg.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-shenzhen'                 => 'companyreg.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'companyreg.aliyuncs.com',
            'cn-shenzhen-inner'           => 'companyreg.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'companyreg.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'companyreg.aliyuncs.com',
            'cn-wuhan'                    => 'companyreg.aliyuncs.com',
            'cn-wulanchabu'               => 'companyreg.aliyuncs.com',
            'cn-yushanfang'               => 'companyreg.aliyuncs.com',
            'cn-zhangbei'                 => 'companyreg.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou'              => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'companyreg.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'companyreg.aliyuncs.com',
            'eu-central-1'                => 'companyreg.aliyuncs.com',
            'eu-west-1'                   => 'companyreg.aliyuncs.com',
            'eu-west-1-oxs'               => 'companyreg.aliyuncs.com',
            'me-east-1'                   => 'companyreg.aliyuncs.com',
            'rus-west-1-pop'              => 'companyreg.aliyuncs.com',
            'us-east-1'                   => 'companyreg.aliyuncs.com',
            'us-west-1'                   => 'companyreg.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('companyreg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BindProduceAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindProduceAuthorizationResponse
     */
    public function bindProduceAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizedUserIds)) {
            $body['AuthorizedUserIds'] = $request->authorizedUserIds;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindProduceAuthorization',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindProduceAuthorizationRequest $request
     *
     * @return BindProduceAuthorizationResponse
     */
    public function bindProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param CloseIntentionForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CloseIntentionForPartnerResponse
     */
    public function closeIntentionForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseIntentionForPartner',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseIntentionForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseIntentionForPartnerRequest $request
     *
     * @return CloseIntentionForPartnerResponse
     */
    public function closeIntentionForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeIntentionForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param CloseUserIntentionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CloseUserIntentionResponse
     */
    public function closeUserIntentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseUserIntention',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseUserIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseUserIntentionRequest $request
     *
     * @return CloseUserIntentionResponse
     */
    public function closeUserIntention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeUserIntentionWithOptions($request, $runtime);
    }

    /**
     * @param CreateBusinessOpportunityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateBusinessOpportunityResponse
     */
    public function createBusinessOpportunityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->VCode)) {
            $query['VCode'] = $request->VCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBusinessOpportunity',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBusinessOpportunityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBusinessOpportunityRequest $request
     *
     * @return CreateBusinessOpportunityResponse
     */
    public function createBusinessOpportunity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBusinessOpportunityWithOptions($request, $runtime);
    }

    /**
     * @param CreateProduceForPartnerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateProduceForPartnerResponse
     */
    public function createProduceForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProduceForPartner',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProduceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProduceForPartnerRequest $request
     *
     * @return CreateProduceForPartnerResponse
     */
    public function createProduceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProduceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param DescribePartnerConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->partnerCode)) {
            $query['PartnerCode'] = $request->partnerCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePartnerConfig',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePartnerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePartnerConfigRequest $request
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePartnerConfigWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadFilePolicy',
            'version'     => '2020-03-06',
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
            'version'     => '2020-03-06',
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
     * @param ListIntentionNoteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListIntentionNoteResponse
     */
    public function listIntentionNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntentionNote',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntentionNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntentionNoteRequest $request
     *
     * @return ListIntentionNoteResponse
     */
    public function listIntentionNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentionNoteWithOptions($request, $runtime);
    }

    /**
     * @param ListProduceAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProduceAuthorizationResponse
     */
    public function listProduceAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProduceAuthorization',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProduceAuthorizationRequest $request
     *
     * @return ListProduceAuthorizationResponse
     */
    public function listProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param ListUserDetailSolutionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserDetailSolutionsResponse
     */
    public function listUserDetailSolutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDetailSolutions',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserDetailSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserDetailSolutionsRequest $request
     *
     * @return ListUserDetailSolutionsResponse
     */
    public function listUserDetailSolutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDetailSolutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserIntentionNotesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserIntentionNotesResponse
     */
    public function listUserIntentionNotesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserIntentionNotes',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserIntentionNotesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserIntentionNotesRequest $request
     *
     * @return ListUserIntentionNotesResponse
     */
    public function listUserIntentionNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserIntentionNotesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserIntentionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserIntentionsResponse
     */
    public function listUserIntentionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->bizTypes)) {
            $query['BizTypes'] = $request->bizTypes;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortFiled)) {
            $query['SortFiled'] = $request->sortFiled;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->withExtInfo)) {
            $query['WithExtInfo'] = $request->withExtInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserIntentions',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserIntentionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserIntentionsRequest $request
     *
     * @return ListUserIntentionsResponse
     */
    public function listUserIntentions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserIntentionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserProduceOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserProduceOperateLogs',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProduceOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserProduceOperateLogsRequest $request
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProduceOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserSolutionsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserSolutionsResponse
     */
    public function listUserSolutionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUserSolutionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->existStatus)) {
            $request->existStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->existStatus, 'ExistStatus', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->existStatusShrink)) {
            $query['ExistStatus'] = $request->existStatusShrink;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserSolutions',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserSolutionsRequest $request
     *
     * @return ListUserSolutionsResponse
     */
    public function listUserSolutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSolutionsWithOptions($request, $runtime);
    }

    /**
     * @param OperateProduceForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateProduceForPartner',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateProduceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateProduceForPartnerRequest $request
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateProduceForPartnerWithOptions($request, $runtime);
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
            'version'     => '2020-03-06',
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
            'version'     => '2020-03-06',
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
     * @param QueryAvailableNumbersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAvailableNumbersResponse
     */
    public function queryAvailableNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvailableNumbers',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAvailableNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAvailableNumbersRequest $request
     *
     * @return QueryAvailableNumbersResponse
     */
    public function queryAvailableNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableNumbersWithOptions($request, $runtime);
    }

    /**
     * @param QueryBagRemainingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBagRemainingResponse
     */
    public function queryBagRemainingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBagRemaining',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBagRemainingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBagRemainingRequest $request
     *
     * @return QueryBagRemainingResponse
     */
    public function queryBagRemaining($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBagRemainingWithOptions($request, $runtime);
    }

    /**
     * @param QueryCommodityConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCommodityConfigResponse
     */
    public function queryCommodityConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->queryModule)) {
            $query['QueryModule'] = $request->queryModule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCommodityConfig',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCommodityConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCommodityConfigRequest $request
     *
     * @return QueryCommodityConfigResponse
     */
    public function queryCommodityConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommodityConfigWithOptions($request, $runtime);
    }

    /**
     * @param QueryInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryInstanceResponse
     */
    public function queryInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstance',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInstanceRequest $request
     *
     * @return QueryInstanceResponse
     */
    public function queryInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryPartnerIntentionListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPartnerIntentionListResponse
     */
    public function queryPartnerIntentionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPartnerIntentionList',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPartnerIntentionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPartnerIntentionListRequest $request
     *
     * @return QueryPartnerIntentionListResponse
     */
    public function queryPartnerIntentionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPartnerIntentionListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPartnerProduceListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryPartnerProduceListResponse
     */
    public function queryPartnerProduceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPartnerProduceList',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPartnerProduceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPartnerProduceListRequest $request
     *
     * @return QueryPartnerProduceListResponse
     */
    public function queryPartnerProduceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPartnerProduceListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryUserNeedAuthResponse
     */
    public function queryUserNeedAuthWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryUserNeedAuth',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserNeedAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryUserNeedAuthResponse
     */
    public function queryUserNeedAuth()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserNeedAuthWithOptions($runtime);
    }

    /**
     * @param RecordPostBackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecordPostBackResponse
     */
    public function recordPostBackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['bizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->contactor)) {
            $query['contactor'] = $request->contactor;
        }
        if (!Utils::isUnset($request->content)) {
            $query['content'] = $request->content;
        }
        if (!Utils::isUnset($request->entityKey)) {
            $query['entityKey'] = $request->entityKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecordPostBack',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordPostBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordPostBackRequest $request
     *
     * @return RecordPostBackResponse
     */
    public function recordPostBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordPostBackWithOptions($request, $runtime);
    }

    /**
     * @param RejectSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RejectSolutionResponse
     */
    public function rejectSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->solutionBizId)) {
            $query['SolutionBizId'] = $request->solutionBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectSolution',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectSolutionRequest $request
     *
     * @return RejectSolutionResponse
     */
    public function rejectSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectSolutionWithOptions($request, $runtime);
    }

    /**
     * @param RejectUserSolutionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RejectUserSolutionResponse
     */
    public function rejectUserSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->solutionBizId)) {
            $query['SolutionBizId'] = $request->solutionBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectUserSolution',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectUserSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectUserSolutionRequest $request
     *
     * @return RejectUserSolutionResponse
     */
    public function rejectUserSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectUserSolutionWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseProduceAuthorizationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleaseProduceAuthorizationResponse
     */
    public function releaseProduceAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizedUserId)) {
            $body['AuthorizedUserId'] = $request->authorizedUserId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseProduceAuthorization',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseProduceAuthorizationRequest $request
     *
     * @return ReleaseProduceAuthorizationResponse
     */
    public function releaseProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param StartBackToBackCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartBackToBackCallResponse
     */
    public function startBackToBackCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->callCenterNumber)) {
            $query['CallCenterNumber'] = $request->callCenterNumber;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->mobileKey)) {
            $query['MobileKey'] = $request->mobileKey;
        }
        if (!Utils::isUnset($request->skillType)) {
            $query['SkillType'] = $request->skillType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartBackToBackCall',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartBackToBackCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartBackToBackCallRequest $request
     *
     * @return StartBackToBackCallResponse
     */
    public function startBackToBackCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBackToBackCallWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIntentionNoteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitIntentionNoteResponse
     */
    public function submitIntentionNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIntentionNote',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIntentionNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitIntentionNoteRequest $request
     *
     * @return SubmitIntentionNoteResponse
     */
    public function submitIntentionNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIntentionNoteWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSolutionResponse
     */
    public function submitSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->solution)) {
            $query['Solution'] = $request->solution;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSolution',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSolutionRequest $request
     *
     * @return SubmitSolutionResponse
     */
    public function submitSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSolutionWithOptions($request, $runtime);
    }

    /**
     * @param TransferIntentionOwnerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TransferIntentionOwnerResponse
     */
    public function transferIntentionOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferIntentionOwner',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferIntentionOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferIntentionOwnerRequest $request
     *
     * @return TransferIntentionOwnerResponse
     */
    public function transferIntentionOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferIntentionOwnerWithOptions($request, $runtime);
    }

    /**
     * @param TransferProduceOwnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TransferProduceOwnerResponse
     */
    public function transferProduceOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferProduceOwner',
            'version'     => '2020-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferProduceOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferProduceOwnerRequest $request
     *
     * @return TransferProduceOwnerResponse
     */
    public function transferProduceOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferProduceOwnerWithOptions($request, $runtime);
    }
}
