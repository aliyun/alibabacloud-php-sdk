<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberDetectRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberDetectResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PvrCallbackFCUResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dytnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dytnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeEmptyNumberDetectRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEmptyNumberDetectResponse
     */
    public function describeEmptyNumberDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
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
            'action'      => 'DescribeEmptyNumberDetect',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEmptyNumberDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEmptyNumberDetectRequest $request
     *
     * @return DescribeEmptyNumberDetectResponse
     */
    public function describeEmptyNumberDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmptyNumberDetectWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberAnalysisRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->numberType)) {
            $query['NumberType'] = $request->numberType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rate)) {
            $query['Rate'] = $request->rate;
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
            'action'      => 'DescribePhoneNumberAnalysis',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberAnalysisRequest $request
     *
     * @return DescribePhoneNumberAnalysisResponse
     */
    public function describePhoneNumberAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberAttribute',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberAttributeRequest $request
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberOnlineTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->inputNumber)) {
            $query['InputNumber'] = $request->inputNumber;
        }
        if (!Utils::isUnset($request->mask)) {
            $query['Mask'] = $request->mask;
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
            'action'      => 'DescribePhoneNumberOnlineTime',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberOnlineTimeRequest $request
     *
     * @return DescribePhoneNumberOnlineTimeResponse
     */
    public function describePhoneNumberOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberResaleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePhoneNumberResaleResponse
     */
    public function describePhoneNumberResaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->since)) {
            $query['Since'] = $request->since;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberResale',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberResaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberResaleRequest $request
     *
     * @return DescribePhoneNumberResaleResponse
     */
    public function describePhoneNumberResale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberResaleWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePhoneNumberStatusResponse
     */
    public function describePhoneNumberStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneNumberStatus',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneNumberStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberStatusRequest $request
     *
     * @return DescribePhoneNumberStatusResponse
     */
    public function describePhoneNumberStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return PvrCallbackFCUResponse
     */
    public function pvrCallbackFCUWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'PvrCallbackFCU',
            'version'     => '2020-02-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return PvrCallbackFCUResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return PvrCallbackFCUResponse
     */
    public function pvrCallbackFCU()
    {
        $runtime = new RuntimeOptions([]);

        return $this->pvrCallbackFCUWithOptions($runtime);
    }
}
