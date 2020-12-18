<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DeleteResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DeleteResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ResourceSharing extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcesharing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceSharesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceSharesResponse
     */
    public function listResourceSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceSharesResponse::fromMap($this->doRequest('ListResourceShares', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourceSharesRequest $request
     *
     * @return ListResourceSharesResponse
     */
    public function listResourceShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceSharesWithOptions($request, $runtime);
    }

    /**
     * @param ListSharedResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSharedResourcesResponse
     */
    public function listSharedResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSharedResourcesResponse::fromMap($this->doRequest('ListSharedResources', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSharedResourcesRequest $request
     *
     * @return ListSharedResourcesResponse
     */
    public function listSharedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListSharedTargetsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSharedTargetsResponse
     */
    public function listSharedTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSharedTargetsResponse::fromMap($this->doRequest('ListSharedTargets', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSharedTargetsRequest $request
     *
     * @return ListSharedTargetsResponse
     */
    public function listSharedTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedTargetsWithOptions($request, $runtime);
    }

    /**
     * @param AssociateResourceShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateResourceShareResponse::fromMap($this->doRequest('AssociateResourceShare', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AssociateResourceShareRequest $request
     *
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateResourceShareResponse::fromMap($this->doRequest('UpdateResourceShare', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateResourceShareRequest $request
     *
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteResourceShareResponse::fromMap($this->doRequest('DeleteResourceShare', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteResourceShareRequest $request
     *
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateResourceShareRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisassociateResourceShareResponse::fromMap($this->doRequest('DisassociateResourceShare', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DisassociateResourceShareRequest $request
     *
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceShareAssociationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceShareAssociationsResponse::fromMap($this->doRequest('ListResourceShareAssociations', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourceShareAssociationsRequest $request
     *
     * @return ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceShareAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceShareResponse
     */
    public function createResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateResourceShareResponse::fromMap($this->doRequest('CreateResourceShare', 'HTTPS', 'POST', '2020-01-10', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateResourceShareRequest $request
     *
     * @return CreateResourceShareResponse
     */
    public function createResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceShareWithOptions($request, $runtime);
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
