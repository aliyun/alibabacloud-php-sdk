<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Face\V20181203\Models\AddFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\AddFaceResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\DetectFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\DetectFaceResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\GetFaceAttributeRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\GetFaceAttributeResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\ListFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\ListFaceResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\ListGroupResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\RecognizeFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\RecognizeFaceResponse;
use AlibabaCloud\SDK\Face\V20181203\Models\VerifyFaceRequest;
use AlibabaCloud\SDK\Face\V20181203\Models\VerifyFaceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Face extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('face', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddFaceRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceResponse::fromMap($this->doRPCRequest('AddFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceRequest $request
     *
     * @return AddFaceResponse
     */
    public function addFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFaceResponse
     */
    public function deleteFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceResponse::fromMap($this->doRPCRequest('DeleteFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceRequest $request
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectFaceResponse::fromMap($this->doRPCRequest('DetectFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectFaceRequest $request
     *
     * @return DetectFaceResponse
     */
    public function detectFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceWithOptions($request, $runtime);
    }

    /**
     * @param GetFaceAttributeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFaceAttributeResponse
     */
    public function getFaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFaceAttributeResponse::fromMap($this->doRPCRequest('GetFaceAttribute', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFaceAttributeRequest $request
     *
     * @return GetFaceAttributeResponse
     */
    public function getFaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListFaceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFaceResponse
     */
    public function listFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFaceResponse::fromMap($this->doRPCRequest('ListFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFaceRequest $request
     *
     * @return ListFaceResponse
     */
    public function listFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListGroupResponse
     */
    public function listGroupWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListGroupResponse::fromMap($this->doRPCRequest('ListGroup', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListGroupResponse
     */
    public function listGroup()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupWithOptions($runtime);
    }

    /**
     * @param RecognizeFaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeFaceResponse::fromMap($this->doRPCRequest('RecognizeFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeFaceRequest $request
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFaceWithOptions($request, $runtime);
    }

    /**
     * @param VerifyFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifyFaceResponse
     */
    public function verifyFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyFaceResponse::fromMap($this->doRPCRequest('VerifyFace', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyFaceRequest $request
     *
     * @return VerifyFaceResponse
     */
    public function verifyFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyFaceWithOptions($request, $runtime);
    }
}
