<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20160316;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Sas\V20160316\Models\GetEventsCountRequest;
use AlibabaCloud\SDK\Sas\V20160316\Models\GetEventsCountResponse;
use AlibabaCloud\SDK\Sas\V20160316\Models\IsSasServiceOpeningRequest;
use AlibabaCloud\SDK\Sas\V20160316\Models\IsSasServiceOpeningResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Sas extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-hangzhou'         => 'tds.aliyuncs.com',
            'ap-southeast-3'      => 'tds.ap-southeast-3.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'tds.cn-shanghai-et2-b01.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param IsSasServiceOpeningRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return IsSasServiceOpeningResponse
     */
    public function isSasServiceOpeningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return IsSasServiceOpeningResponse::fromMap($this->doRequest('IsSasServiceOpening', 'HTTPS', 'POST', '2016-03-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param IsSasServiceOpeningRequest $request
     *
     * @return IsSasServiceOpeningResponse
     */
    public function isSasServiceOpening($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isSasServiceOpeningWithOptions($request, $runtime);
    }

    /**
     * @param GetEventsCountRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEventsCountResponse
     */
    public function getEventsCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEventsCountResponse::fromMap($this->doRequest('GetEventsCount', 'HTTPS', 'POST', '2016-03-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetEventsCountRequest $request
     *
     * @return GetEventsCountResponse
     */
    public function getEventsCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventsCountWithOptions($request, $runtime);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
