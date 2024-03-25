<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SignalCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SignalCallResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dyvmsapiintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyvmsapi-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BackendCallGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BackendCallGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->calledNumber)) {
            $request->calledNumberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->calledNumberShrink)) {
            $query['CalledNumber'] = $request->calledNumberShrink;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->timingStart)) {
            $query['TimingStart'] = $request->timingStart;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BackendCallGroup',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BackendCallGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BackendCallGroupRequest $request
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallGroupWithOptions($request, $runtime);
    }

    /**
     * @param BackendCallSignalRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BackendCallSignal',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BackendCallSignalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BackendCallSignalRequest $request
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallSignalWithOptions($request, $runtime);
    }

    /**
     * @param GroupCallRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return GroupCallResponse
     */
    public function groupCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GroupCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->calledNumber)) {
            $request->calledNumberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->calledNumberShrink)) {
            $query['CalledNumber'] = $request->calledNumberShrink;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureNonce)) {
            $query['SignatureNonce'] = $request->signatureNonce;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['Timestamp'] = $request->timestamp;
        }
        if (!Utils::isUnset($request->timingStart)) {
            $query['TimingStart'] = $request->timingStart;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GroupCall',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GroupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GroupCallRequest $request
     *
     * @return GroupCallResponse
     */
    public function groupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->groupCallWithOptions($request, $runtime);
    }

    /**
     * @param SignalCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SignalCallResponse
     */
    public function signalCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureNonce)) {
            $query['SignatureNonce'] = $request->signatureNonce;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['Timestamp'] = $request->timestamp;
        }
        if (!Utils::isUnset($request->timingStart)) {
            $query['TimingStart'] = $request->timingStart;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SignalCall',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignalCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SignalCallRequest $request
     *
     * @return SignalCallResponse
     */
    public function signalCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalCallWithOptions($request, $runtime);
    }
}
