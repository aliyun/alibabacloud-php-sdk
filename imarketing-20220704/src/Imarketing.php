<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imarketing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imarketing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDeviceRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extraMap)) {
            $request->extraMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extraMap, 'ExtraMap', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->deviceModelNumber)) {
            $body['DeviceModelNumber'] = $request->deviceModelNumber;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->district)) {
            $body['District'] = $request->district;
        }
        if (!Utils::isUnset($request->extraMapShrink)) {
            $body['ExtraMap'] = $request->extraMapShrink;
        }
        if (!Utils::isUnset($request->firstScene)) {
            $body['FirstScene'] = $request->firstScene;
        }
        if (!Utils::isUnset($request->floor)) {
            $body['Floor'] = $request->floor;
        }
        if (!Utils::isUnset($request->locationName)) {
            $body['LocationName'] = $request->locationName;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->outerCode)) {
            $body['OuterCode'] = $request->outerCode;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->secondScene)) {
            $body['SecondScene'] = $request->secondScene;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDevice',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetBrandPageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBrandPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBrandPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBrandPageRequest $request
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrandPageWithOptions($request, $runtime);
    }

    /**
     * @param GetMainPartPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMainPartPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainPartPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMainPartPageRequest $request
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainPartPageWithOptions($request, $runtime);
    }

    /**
     * @param GetUserFinishedAdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserFinishedAd',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserFinishedAdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserFinishedAdRequest $request
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserFinishedAdWithOptions($request, $runtime);
    }

    /**
     * @param ListAdvertisingRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertisingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAdvertisingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->device)) {
            $request->deviceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->device), 'Device', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvertising',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdvertisingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdvertisingRequest $request
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertising($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdvertisingWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2022-07-04',
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
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }
}
