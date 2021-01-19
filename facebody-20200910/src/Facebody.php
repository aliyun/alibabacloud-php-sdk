<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Facebody\V20200910\Models\DetectIPCPedestrianOptimizedRequest;
use AlibabaCloud\SDK\Facebody\V20200910\Models\DetectIPCPedestrianOptimizedResponse;
use AlibabaCloud\SDK\Facebody\V20200910\Models\ExecuteServerSideVerificationRequest;
use AlibabaCloud\SDK\Facebody\V20200910\Models\ExecuteServerSideVerificationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Facebody extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('facebody', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 行人检测快速版.
     *
     * @param DetectIPCPedestrianOptimizedRequest $request
     *
     * @return DetectIPCPedestrianOptimizedResponse
     */
    public function detectIPCPedestrianOptimized($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detectIPCPedestrianOptimizedWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DetectIPCPedestrianOptimizedRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectIPCPedestrianOptimizedResponse
     */
    public function detectIPCPedestrianOptimizedWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageData)) {
            @$body['imageData'] = $request->imageData;
        }
        if (!Utils::isUnset($request->width)) {
            @$body['width'] = $request->width;
        }
        if (!Utils::isUnset($request->height)) {
            @$body['height'] = $request->height;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DetectIPCPedestrianOptimizedResponse::fromMap($this->doROARequestWithForm('DetectIPCPedestrianOptimized', '2020-09-10', 'HTTPS', 'POST', 'AK', '/viapi/k8s/facebody/detect-ipc-pedestrian-optimized', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteServerSideVerificationRequest $request
     *
     * @return ExecuteServerSideVerificationResponse
     */
    public function executeServerSideVerification($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeServerSideVerificationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExecuteServerSideVerificationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ExecuteServerSideVerificationResponse
     */
    public function executeServerSideVerificationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certificateName)) {
            @$body['certificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->certificateNumber)) {
            @$body['certificateNumber'] = $request->certificateNumber;
        }
        if (!Utils::isUnset($request->facialPictureData)) {
            @$body['facialPictureData'] = $request->facialPictureData;
        }
        if (!Utils::isUnset($request->facialPictureUrl)) {
            @$body['facialPictureUrl'] = $request->facialPictureUrl;
        }
        if (!Utils::isUnset($request->sceneType)) {
            @$body['sceneType'] = $request->sceneType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ExecuteServerSideVerificationResponse::fromMap($this->doROARequestWithForm('ExecuteServerSideVerification', '2020-09-10', 'HTTPS', 'POST', 'AK', '/viapi/thirdparty/realperson/execServerSideVerification', 'json', $req, $runtime));
    }
}
