<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapiintl\V20170725;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\CheckVerificationRequest;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\CheckVerificationResponse;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\SearchVerificationRequest;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\SearchVerificationResponse;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\StartVerificationRequest;
use AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models\StartVerificationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dypnsapiintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dypnsapi-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckVerificationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckVerificationResponse
     */
    public function checkVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
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
        if (!Utils::isUnset($request->serviceSid)) {
            $query['ServiceSid'] = $request->serviceSid;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->verificationId)) {
            $query['VerificationId'] = $request->verificationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckVerification',
            'version'     => '2017-07-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckVerificationRequest $request
     *
     * @return CheckVerificationResponse
     */
    public function checkVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVerificationWithOptions($request, $runtime);
    }

    /**
     * @param SearchVerificationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchVerificationResponse
     */
    public function searchVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendDate)) {
            $query['SendDate'] = $request->sendDate;
        }
        if (!Utils::isUnset($request->serviceSid)) {
            $query['ServiceSid'] = $request->serviceSid;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->verificationId)) {
            $query['VerificationId'] = $request->verificationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchVerification',
            'version'     => '2017-07-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchVerificationRequest $request
     *
     * @return SearchVerificationResponse
     */
    public function searchVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchVerificationWithOptions($request, $runtime);
    }

    /**
     * @param StartVerificationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartVerificationResponse
     */
    public function startVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
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
        if (!Utils::isUnset($request->serviceSid)) {
            $query['ServiceSid'] = $request->serviceSid;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartVerification',
            'version'     => '2017-07-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartVerificationRequest $request
     *
     * @return StartVerificationResponse
     */
    public function startVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startVerificationWithOptions($request, $runtime);
    }
}
