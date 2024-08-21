<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Hsm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hsm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 配置集群子网
     *  *
     * @param ConfigClusterSubnetRequest $tmpReq  ConfigClusterSubnetRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigClusterSubnetResponse ConfigClusterSubnetResponse
     */
    public function configClusterSubnetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConfigClusterSubnetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigClusterSubnet',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigClusterSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置集群子网
     *  *
     * @param ConfigClusterSubnetRequest $request ConfigClusterSubnetRequest
     *
     * @return ConfigClusterSubnetResponse ConfigClusterSubnetResponse
     */
    public function configClusterSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterSubnetWithOptions($request, $runtime);
    }
}
