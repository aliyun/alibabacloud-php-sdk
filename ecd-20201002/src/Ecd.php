<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RefreshLoginTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RefreshLoginTokenResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ecd extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param RefreshLoginTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RefreshLoginTokenResponse::fromMap($this->doRequest('RefreshLoginToken', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RefreshLoginTokenRequest $request
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDirectoriesResponse::fromMap($this->doRequest('DescribeDirectories', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopsResponse::fromMap($this->doRequest('DescribeDesktops', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopsRequest $request
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RebootDesktopsResponse::fromMap($this->doRequest('RebootDesktops', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RebootDesktopsRequest $request
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetConnectionTicketResponse::fromMap($this->doRequest('GetConnectionTicket', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginTokenRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetLoginTokenResponse::fromMap($this->doRequest('GetLoginToken', 'HTTPS', 'POST', '2020-10-02', 'Anonymous', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
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
}
