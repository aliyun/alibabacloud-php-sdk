<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DeleteDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DeleteDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\RebootDesktopsResponse;
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
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDirectoriesResponse::fromMap($this->doRequest('DescribeDirectories', 'HTTPS', 'POST', '2020-10-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteDirectoriesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDirectoriesResponse::fromMap($this->doRequest('DeleteDirectories', 'HTTPS', 'POST', '2020-10-01', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDirectoriesRequest $request
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoriesWithOptions($request, $runtime);
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

        return DescribeDesktopsResponse::fromMap($this->doRequest('DescribeDesktops', 'HTTPS', 'POST', '2020-10-01', 'AK', null, Tea::merge($request), $runtime));
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

        return RebootDesktopsResponse::fromMap($this->doRequest('RebootDesktops', 'HTTPS', 'POST', '2020-10-01', 'AK', null, Tea::merge($request), $runtime));
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

        return GetConnectionTicketResponse::fromMap($this->doRequest('GetConnectionTicket', 'HTTPS', 'POST', '2020-10-01', 'AK', null, Tea::merge($request), $runtime));
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
