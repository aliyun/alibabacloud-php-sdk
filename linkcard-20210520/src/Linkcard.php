<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddCardToDirectionalGroupRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddCardToDirectionalGroupResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddCardToDirectionalGroupShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalAddressRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalAddressResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalGroupRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\AddDirectionalGroupResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\BatchAddDirectionalAddressRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\BatchAddDirectionalAddressResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\DeleteDirectionalAddressRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\DeleteDirectionalAddressResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\DeleteDirectionalGroupRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\DeleteDirectionalGroupResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ForceActivationRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ForceActivationResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardLatestFlowRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardLatestFlowResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardStatusStatisticsResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetOperateResultRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetOperateResultResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetRealNameStatusRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetRealNameStatusResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetRealNameStatusShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetSimCardStateDistributionRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetSimCardStateDistributionResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalAddressRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalAddressResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RenewRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RenewResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\SetCardStopRuleRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\SetCardStopRuleResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\UpdateAutoRechargeSwitchRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\UpdateAutoRechargeSwitchResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\VerifyIotCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\VerifyIotCardResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Linkcard extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkcard', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCardToDirectionalGroupRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return AddCardToDirectionalGroupResponse
     */
    public function addCardToDirectionalGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddCardToDirectionalGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->iccidList)) {
            $request->iccidListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iccidList, 'IccidList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addType)) {
            $query['AddType'] = $request->addType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iccidListShrink)) {
            $query['IccidList'] = $request->iccidListShrink;
        }
        if (!Utils::isUnset($request->msgNotify)) {
            $query['MsgNotify'] = $request->msgNotify;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        $body = [];
        if (!Utils::isUnset($request->apiProduct)) {
            $body['ApiProduct'] = $request->apiProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCardToDirectionalGroup',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCardToDirectionalGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCardToDirectionalGroupRequest $request
     *
     * @return AddCardToDirectionalGroupResponse
     */
    public function addCardToDirectionalGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCardToDirectionalGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddDirectionalAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddDirectionalAddressResponse
     */
    public function addDirectionalAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->msgNotify)) {
            $query['MsgNotify'] = $request->msgNotify;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDirectionalAddress',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDirectionalAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDirectionalAddressRequest $request
     *
     * @return AddDirectionalAddressResponse
     */
    public function addDirectionalAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDirectionalAddressWithOptions($request, $runtime);
    }

    /**
     * @param AddDirectionalCardRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AddDirectionalCardResponse
     */
    public function addDirectionalCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddDirectionalCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderList)) {
            $request->orderListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderList, 'OrderList', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagList)) {
            $request->tagListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagList, 'TagList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fileUri)) {
            $query['FileUri'] = $request->fileUri;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->orderListShrink)) {
            $query['OrderList'] = $request->orderListShrink;
        }
        if (!Utils::isUnset($request->tagListShrink)) {
            $query['TagList'] = $request->tagListShrink;
        }
        if (!Utils::isUnset($request->uploadMethod)) {
            $query['UploadMethod'] = $request->uploadMethod;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDirectionalCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDirectionalCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDirectionalCardRequest $request
     *
     * @return AddDirectionalCardResponse
     */
    public function addDirectionalCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDirectionalCardWithOptions($request, $runtime);
    }

    /**
     * @param AddDirectionalGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddDirectionalGroupResponse
     */
    public function addDirectionalGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDirectionalGroup',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDirectionalGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDirectionalGroupRequest $request
     *
     * @return AddDirectionalGroupResponse
     */
    public function addDirectionalGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDirectionalGroupWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddDirectionalAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchAddDirectionalAddressResponse
     */
    public function batchAddDirectionalAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->listAddress)) {
            $query['ListAddress'] = $request->listAddress;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddDirectionalAddress',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddDirectionalAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddDirectionalAddressRequest $request
     *
     * @return BatchAddDirectionalAddressResponse
     */
    public function batchAddDirectionalAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddDirectionalAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectionalAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDirectionalAddressResponse
     */
    public function deleteDirectionalAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->msgNotify)) {
            $query['MsgNotify'] = $request->msgNotify;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectionalAddress',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectionalAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDirectionalAddressRequest $request
     *
     * @return DeleteDirectionalAddressResponse
     */
    public function deleteDirectionalAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectionalAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectionalGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDirectionalGroupResponse
     */
    public function deleteDirectionalGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectionalGroup',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectionalGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDirectionalGroupRequest $request
     *
     * @return DeleteDirectionalGroupResponse
     */
    public function deleteDirectionalGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectionalGroupWithOptions($request, $runtime);
    }

    /**
     * @param ForceActivationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ForceActivationResponse
     */
    public function forceActivationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dateType)) {
            $query['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForceActivation',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForceActivationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForceActivationRequest $request
     *
     * @return ForceActivationResponse
     */
    public function forceActivation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forceActivationWithOptions($request, $runtime);
    }

    /**
     * @param GetCardDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCardDetailResponse
     */
    public function getCardDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destroyCard)) {
            $query['DestroyCard'] = $request->destroyCard;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->showPsim)) {
            $query['ShowPsim'] = $request->showPsim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardDetail',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardDetailRequest $request
     *
     * @return GetCardDetailResponse
     */
    public function getCardDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetCardFlowInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCardFlowInfoResponse
     */
    public function getCardFlowInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dateList)) {
            $query['DateList'] = $request->dateList;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardFlowInfo',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardFlowInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardFlowInfoRequest $request
     *
     * @return GetCardFlowInfoResponse
     */
    public function getCardFlowInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardFlowInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetCardLatestFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCardLatestFlowResponse
     */
    public function getCardLatestFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardLatestFlow',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardLatestFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardLatestFlowRequest $request
     *
     * @return GetCardLatestFlowResponse
     */
    public function getCardLatestFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardLatestFlowWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetCardStatusStatisticsResponse
     */
    public function getCardStatusStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCardStatusStatistics',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardStatusStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetCardStatusStatisticsResponse
     */
    public function getCardStatusStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardStatusStatisticsWithOptions($runtime);
    }

    /**
     * @param GetCredentialPoolStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCredentialPoolStatisticsResponse
     */
    public function getCredentialPoolStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialNO)) {
            $query['CredentialNO'] = $request->credentialNO;
        }
        if (!Utils::isUnset($request->date)) {
            $query['Date'] = $request->date;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCredentialPoolStatistics',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCredentialPoolStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCredentialPoolStatisticsRequest $request
     *
     * @return GetCredentialPoolStatisticsResponse
     */
    public function getCredentialPoolStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialPoolStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetOperateResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOperateResultResponse
     */
    public function getOperateResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProduct)) {
            $query['ApiProduct'] = $request->apiProduct;
        }
        if (!Utils::isUnset($request->resId)) {
            $query['ResId'] = $request->resId;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOperateResult',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOperateResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOperateResultRequest $request
     *
     * @return GetOperateResultResponse
     */
    public function getOperateResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperateResultWithOptions($request, $runtime);
    }

    /**
     * @param GetRealNameStatusRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetRealNameStatusResponse
     */
    public function getRealNameStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRealNameStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listMsisdns)) {
            $request->listMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listMsisdns, 'ListMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->listMsisdnsShrink)) {
            $query['ListMsisdns'] = $request->listMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealNameStatus',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealNameStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealNameStatusRequest $request
     *
     * @return GetRealNameStatusResponse
     */
    public function getRealNameStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealNameStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSimCardStateDistributionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSimCardStateDistributionResponse
     */
    public function getSimCardStateDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialNO)) {
            $query['CredentialNO'] = $request->credentialNO;
        }
        if (!Utils::isUnset($request->date)) {
            $query['Date'] = $request->date;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSimCardStateDistribution',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSimCardStateDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSimCardStateDistributionRequest $request
     *
     * @return GetSimCardStateDistributionResponse
     */
    public function getSimCardStateDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSimCardStateDistributionWithOptions($request, $runtime);
    }

    /**
     * @param ListCardInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCardInfoResponse
     */
    public function listCardInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeTimeEnd)) {
            $query['ActiveTimeEnd'] = $request->activeTimeEnd;
        }
        if (!Utils::isUnset($request->activeTimeStart)) {
            $query['ActiveTimeStart'] = $request->activeTimeStart;
        }
        if (!Utils::isUnset($request->aliFee)) {
            $query['AliFee'] = $request->aliFee;
        }
        if (!Utils::isUnset($request->aliyunOrderId)) {
            $query['AliyunOrderId'] = $request->aliyunOrderId;
        }
        if (!Utils::isUnset($request->apnName)) {
            $query['ApnName'] = $request->apnName;
        }
        if (!Utils::isUnset($request->certifyType)) {
            $query['CertifyType'] = $request->certifyType;
        }
        if (!Utils::isUnset($request->credentialNo)) {
            $query['CredentialNo'] = $request->credentialNo;
        }
        if (!Utils::isUnset($request->dataLevel)) {
            $query['DataLevel'] = $request->dataLevel;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->directionalGroupId)) {
            $query['DirectionalGroupId'] = $request->directionalGroupId;
        }
        if (!Utils::isUnset($request->expireTimeEnd)) {
            $query['ExpireTimeEnd'] = $request->expireTimeEnd;
        }
        if (!Utils::isUnset($request->expireTimeStart)) {
            $query['ExpireTimeStart'] = $request->expireTimeStart;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->imsi)) {
            $query['Imsi'] = $request->imsi;
        }
        if (!Utils::isUnset($request->isAutoRecharge)) {
            $query['IsAutoRecharge'] = $request->isAutoRecharge;
        }
        if (!Utils::isUnset($request->maxFlow)) {
            $query['MaxFlow'] = $request->maxFlow;
        }
        if (!Utils::isUnset($request->maxRestFlowPercentage)) {
            $query['MaxRestFlowPercentage'] = $request->maxRestFlowPercentage;
        }
        if (!Utils::isUnset($request->minFlow)) {
            $query['MinFlow'] = $request->minFlow;
        }
        if (!Utils::isUnset($request->msisdn)) {
            $query['Msisdn'] = $request->msisdn;
        }
        if (!Utils::isUnset($request->notifyId)) {
            $query['NotifyId'] = $request->notifyId;
        }
        if (!Utils::isUnset($request->osStatus)) {
            $query['OsStatus'] = $request->osStatus;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->poolId)) {
            $query['PoolId'] = $request->poolId;
        }
        if (!Utils::isUnset($request->simType)) {
            $query['SimType'] = $request->simType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCardInfo',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCardInfoRequest $request
     *
     * @return ListCardInfoResponse
     */
    public function listCardInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListDirectionalAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDirectionalAddressResponse
     */
    public function listDirectionalAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDirectionalAddress',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectionalAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDirectionalAddressRequest $request
     *
     * @return ListDirectionalAddressResponse
     */
    public function listDirectionalAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectionalAddressWithOptions($request, $runtime);
    }

    /**
     * @param ListDirectionalDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDirectionalDetailResponse
     */
    public function listDirectionalDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDirectionalDetail',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectionalDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDirectionalDetailRequest $request
     *
     * @return ListDirectionalDetailResponse
     */
    public function listDirectionalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectionalDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListOrderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListOrderResponse
     */
    public function listOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->orderStatus)) {
            $query['OrderStatus'] = $request->orderStatus;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrder',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOrderRequest $request
     *
     * @return ListOrderResponse
     */
    public function listOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderWithOptions($request, $runtime);
    }

    /**
     * @param RebindResumeSingleCardRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RebindResumeSingleCardResponse
     */
    public function rebindResumeSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RebindResumeSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebindResumeSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebindResumeSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebindResumeSingleCardRequest $request
     *
     * @return RebindResumeSingleCardResponse
     */
    public function rebindResumeSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebindResumeSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param RenewRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return RenewResponse
     */
    public function renewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buyNum)) {
            $query['BuyNum'] = $request->buyNum;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->offerCode)) {
            $query['OfferCode'] = $request->offerCode;
        }
        if (!Utils::isUnset($request->rechargeType)) {
            $query['RechargeType'] = $request->rechargeType;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        $body = [];
        if (!Utils::isUnset($request->apiProduct)) {
            $body['ApiProduct'] = $request->apiProduct;
        }
        if (!Utils::isUnset($request->apiRevision)) {
            $body['ApiRevision'] = $request->apiRevision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Renew',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewRequest $request
     *
     * @return RenewResponse
     */
    public function renew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewWithOptions($request, $runtime);
    }

    /**
     * @param ResumeSingleCardRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeSingleCardResponse
     */
    public function resumeSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResumeSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeSingleCardRequest $request
     *
     * @return ResumeSingleCardResponse
     */
    public function resumeSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param SetCardStopRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetCardStopRuleResponse
     */
    public function setCardStopRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRestore)) {
            $query['AutoRestore'] = $request->autoRestore;
        }
        if (!Utils::isUnset($request->flowLimit)) {
            $query['FlowLimit'] = $request->flowLimit;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCardStopRule',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCardStopRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCardStopRuleRequest $request
     *
     * @return SetCardStopRuleResponse
     */
    public function setCardStopRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCardStopRuleWithOptions($request, $runtime);
    }

    /**
     * @param StopSingleCardRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StopSingleCardResponse
     */
    public function stopSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopSingleCardRequest $request
     *
     * @return StopSingleCardResponse
     */
    public function stopSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAutoRechargeSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAutoRechargeSwitchResponse
     */
    public function updateAutoRechargeSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->open)) {
            $query['Open'] = $request->open;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoRechargeSwitch',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoRechargeSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAutoRechargeSwitchRequest $request
     *
     * @return UpdateAutoRechargeSwitchResponse
     */
    public function updateAutoRechargeSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoRechargeSwitchWithOptions($request, $runtime);
    }

    /**
     * @param VerifyIotCardRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifyIotCardResponse
     */
    public function verifyIotCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyIotCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyIotCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyIotCardRequest $request
     *
     * @return VerifyIotCardResponse
     */
    public function verifyIotCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyIotCardWithOptions($request, $runtime);
    }
}
