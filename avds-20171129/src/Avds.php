<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddAssetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddAssetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddAssetTagsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddAssetTagsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgDomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgDomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgHostsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgHostsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgSubdomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgSubdomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgWebPathsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\AddOrgWebPathsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsBagOrderRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsBagOrderResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsOrderRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsOrderResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsPublicOrderRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateAvdsPublicOrderResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateOrganizationRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateOrganizationResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateSessionRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\CreateSessionResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteAssetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteAssetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteOrganizationsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteOrganizationsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteOrgAttackSurfaceRecordsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteOrgAttackSurfaceRecordsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteSessionRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteSessionResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteUserAttackSurfaceRecordsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DeleteUserAttackSurfaceRecordsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAllVulnerabilitiesRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAllVulnerabilitiesResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAssetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAssetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAttackSurfacesFacetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAttackSurfacesFacetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeCrawlerRequestsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeCrawlerRequestsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDNSMapRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDNSMapResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDomainAttackSurfacesFacetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDomainAttackSurfacesFacetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeHostAttackSurfacesFacetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeHostAttackSurfacesFacetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeHostsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeHostsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeListSessionsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeListSessionsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeOrgAttackSurfaceDetailsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeOrgAttackSurfaceDetailsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeOrgInfoRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeOrgInfoResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribePortsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribePortsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeScanSessionsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeScanSessionsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSessionRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSessionResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSubdomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSubdomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeUserTagsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeUserTagsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeVulnerabilityRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeVulnerabilityResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebPathsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebPathsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebServersRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebServersResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebTechsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebTechsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\EditSessionRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\EditSessionResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\GenerateVulReportRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\GenerateVulReportResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgDNSMapRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgDNSMapResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgDomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgDomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgHostsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgHostsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgPortsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgPortsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgRiskyAssetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgRiskyAssetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgSubdomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgSubdomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgVulFacetsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgVulFacetsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgWebPathsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgWebPathsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgWebTechsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgWebTechsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapHistoriesRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapHistoriesResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserHostsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserHostsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserOrganizationsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserOrganizationsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserPortsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserPortsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserSubdomainsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserSubdomainsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserWebPathsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserWebPathsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserWebTechsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserWebTechsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\ModifyOrganizationRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\ModifyOrganizationResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\TagAssetsByRecordsRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\TagAssetsByRecordsResponse;
use AlibabaCloud\SDK\Avds\V20171129\Models\TagAssetsBySearchRequest;
use AlibabaCloud\SDK\Avds\V20171129\Models\TagAssetsBySearchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Avds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('avds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAssetsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddAssetsResponse
     */
    public function addAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAssetsResponse::fromMap($this->doRPCRequest('AddAssets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAssetsRequest $request
     *
     * @return AddAssetsResponse
     */
    public function addAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAssetsWithOptions($request, $runtime);
    }

    /**
     * @param AddAssetTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddAssetTagsResponse
     */
    public function addAssetTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAssetTagsResponse::fromMap($this->doRPCRequest('AddAssetTags', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAssetTagsRequest $request
     *
     * @return AddAssetTagsResponse
     */
    public function addAssetTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAssetTagsWithOptions($request, $runtime);
    }

    /**
     * @param AddOrgDomainsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddOrgDomainsResponse
     */
    public function addOrgDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddOrgDomainsResponse::fromMap($this->doRPCRequest('AddOrgDomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddOrgDomainsRequest $request
     *
     * @return AddOrgDomainsResponse
     */
    public function addOrgDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrgDomainsWithOptions($request, $runtime);
    }

    /**
     * @param AddOrgHostsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddOrgHostsResponse
     */
    public function addOrgHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddOrgHostsResponse::fromMap($this->doRPCRequest('AddOrgHosts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddOrgHostsRequest $request
     *
     * @return AddOrgHostsResponse
     */
    public function addOrgHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrgHostsWithOptions($request, $runtime);
    }

    /**
     * @param AddOrgSubdomainsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddOrgSubdomainsResponse
     */
    public function addOrgSubdomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddOrgSubdomainsResponse::fromMap($this->doRPCRequest('AddOrgSubdomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddOrgSubdomainsRequest $request
     *
     * @return AddOrgSubdomainsResponse
     */
    public function addOrgSubdomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrgSubdomainsWithOptions($request, $runtime);
    }

    /**
     * @param AddOrgWebPathsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddOrgWebPathsResponse
     */
    public function addOrgWebPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddOrgWebPathsResponse::fromMap($this->doRPCRequest('AddOrgWebPaths', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddOrgWebPathsRequest $request
     *
     * @return AddOrgWebPathsResponse
     */
    public function addOrgWebPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrgWebPathsWithOptions($request, $runtime);
    }

    /**
     * @param CreateAvdsBagOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAvdsBagOrderResponse
     */
    public function createAvdsBagOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAvdsBagOrderResponse::fromMap($this->doRPCRequest('CreateAvdsBagOrder', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAvdsBagOrderRequest $request
     *
     * @return CreateAvdsBagOrderResponse
     */
    public function createAvdsBagOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvdsBagOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateAvdsOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAvdsOrderResponse
     */
    public function createAvdsOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAvdsOrderResponse::fromMap($this->doRPCRequest('CreateAvdsOrder', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAvdsOrderRequest $request
     *
     * @return CreateAvdsOrderResponse
     */
    public function createAvdsOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvdsOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateAvdsPublicOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAvdsPublicOrderResponse
     */
    public function createAvdsPublicOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAvdsPublicOrderResponse::fromMap($this->doRPCRequest('CreateAvdsPublicOrder', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAvdsPublicOrderRequest $request
     *
     * @return CreateAvdsPublicOrderResponse
     */
    public function createAvdsPublicOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvdsPublicOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrganizationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOrganizationResponse
     */
    public function createOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrganizationResponse::fromMap($this->doRPCRequest('CreateOrganization', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOrganizationRequest $request
     *
     * @return CreateOrganizationResponse
     */
    public function createOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param CreateSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSessionResponse
     */
    public function createSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSessionResponse::fromMap($this->doRPCRequest('CreateSession', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSessionRequest $request
     *
     * @return CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSessionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAssetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAssetsResponse
     */
    public function deleteAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAssetsResponse::fromMap($this->doRPCRequest('DeleteAssets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAssetsRequest $request
     *
     * @return DeleteAssetsResponse
     */
    public function deleteAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAssetsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOrganizationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteOrganizationsResponse
     */
    public function deleteOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOrganizationsResponse::fromMap($this->doRPCRequest('DeleteOrganizations', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOrganizationsRequest $request
     *
     * @return DeleteOrganizationsResponse
     */
    public function deleteOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOrgAttackSurfaceRecordsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteOrgAttackSurfaceRecordsResponse
     */
    public function deleteOrgAttackSurfaceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOrgAttackSurfaceRecordsResponse::fromMap($this->doRPCRequest('DeleteOrgAttackSurfaceRecords', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOrgAttackSurfaceRecordsRequest $request
     *
     * @return DeleteOrgAttackSurfaceRecordsResponse
     */
    public function deleteOrgAttackSurfaceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrgAttackSurfaceRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSessionResponse
     */
    public function deleteSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSessionResponse::fromMap($this->doRPCRequest('DeleteSession', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSessionRequest $request
     *
     * @return DeleteSessionResponse
     */
    public function deleteSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSessionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserAttackSurfaceRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteUserAttackSurfaceRecordsResponse
     */
    public function deleteUserAttackSurfaceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserAttackSurfaceRecordsResponse::fromMap($this->doRPCRequest('DeleteUserAttackSurfaceRecords', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserAttackSurfaceRecordsRequest $request
     *
     * @return DeleteUserAttackSurfaceRecordsResponse
     */
    public function deleteUserAttackSurfaceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserAttackSurfaceRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllVulnerabilitiesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAllVulnerabilitiesResponse
     */
    public function describeAllVulnerabilitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllVulnerabilitiesResponse::fromMap($this->doRPCRequest('DescribeAllVulnerabilities', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllVulnerabilitiesRequest $request
     *
     * @return DescribeAllVulnerabilitiesResponse
     */
    public function describeAllVulnerabilities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllVulnerabilitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAssetsResponse
     */
    public function describeAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAssetsResponse::fromMap($this->doRPCRequest('DescribeAssets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAssetsRequest $request
     *
     * @return DescribeAssetsResponse
     */
    public function describeAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAttackSurfacesFacetsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAttackSurfacesFacetsResponse
     */
    public function describeAttackSurfacesFacetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAttackSurfacesFacetsResponse::fromMap($this->doRPCRequest('DescribeAttackSurfacesFacets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAttackSurfacesFacetsRequest $request
     *
     * @return DescribeAttackSurfacesFacetsResponse
     */
    public function describeAttackSurfacesFacets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackSurfacesFacetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrawlerRequestsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCrawlerRequestsResponse
     */
    public function describeCrawlerRequestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrawlerRequestsResponse::fromMap($this->doRPCRequest('DescribeCrawlerRequests', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCrawlerRequestsRequest $request
     *
     * @return DescribeCrawlerRequestsResponse
     */
    public function describeCrawlerRequests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrawlerRequestsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDNSMapRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDNSMapResponse
     */
    public function describeDNSMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDNSMapResponse::fromMap($this->doRPCRequest('DescribeDNSMap', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDNSMapRequest $request
     *
     * @return DescribeDNSMapResponse
     */
    public function describeDNSMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDNSMapWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAttackSurfacesFacetsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDomainAttackSurfacesFacetsResponse
     */
    public function describeDomainAttackSurfacesFacetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainAttackSurfacesFacetsResponse::fromMap($this->doRPCRequest('DescribeDomainAttackSurfacesFacets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainAttackSurfacesFacetsRequest $request
     *
     * @return DescribeDomainAttackSurfacesFacetsResponse
     */
    public function describeDomainAttackSurfacesFacets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackSurfacesFacetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainsResponse::fromMap($this->doRPCRequest('DescribeDomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostAttackSurfacesFacetsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeHostAttackSurfacesFacetsResponse
     */
    public function describeHostAttackSurfacesFacetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostAttackSurfacesFacetsResponse::fromMap($this->doRPCRequest('DescribeHostAttackSurfacesFacets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHostAttackSurfacesFacetsRequest $request
     *
     * @return DescribeHostAttackSurfacesFacetsResponse
     */
    public function describeHostAttackSurfacesFacets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostAttackSurfacesFacetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeHostsResponse
     */
    public function describeHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostsResponse::fromMap($this->doRPCRequest('DescribeHosts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHostsRequest $request
     *
     * @return DescribeHostsResponse
     */
    public function describeHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeListSessionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeListSessionsResponse
     */
    public function describeListSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeListSessionsResponse::fromMap($this->doRPCRequest('DescribeListSessions', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeListSessionsRequest $request
     *
     * @return DescribeListSessionsResponse
     */
    public function describeListSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListSessionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrgAttackSurfaceDetailsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeOrgAttackSurfaceDetailsResponse
     */
    public function describeOrgAttackSurfaceDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOrgAttackSurfaceDetailsResponse::fromMap($this->doRPCRequest('DescribeOrgAttackSurfaceDetails', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOrgAttackSurfaceDetailsRequest $request
     *
     * @return DescribeOrgAttackSurfaceDetailsResponse
     */
    public function describeOrgAttackSurfaceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgAttackSurfaceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrgInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeOrgInfoResponse
     */
    public function describeOrgInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOrgInfoResponse::fromMap($this->doRPCRequest('DescribeOrgInfo', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOrgInfoRequest $request
     *
     * @return DescribeOrgInfoResponse
     */
    public function describeOrgInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePortsResponse
     */
    public function describePortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortsResponse::fromMap($this->doRPCRequest('DescribePorts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortsRequest $request
     *
     * @return DescribePortsResponse
     */
    public function describePorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScanSessionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScanSessionsResponse
     */
    public function describeScanSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScanSessionsResponse::fromMap($this->doRPCRequest('DescribeScanSessions', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScanSessionsRequest $request
     *
     * @return DescribeScanSessionsResponse
     */
    public function describeScanSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScanSessionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSessionResponse
     */
    public function describeSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSessionResponse::fromMap($this->doRPCRequest('DescribeSession', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSessionRequest $request
     *
     * @return DescribeSessionResponse
     */
    public function describeSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSessionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubdomainsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSubdomainsResponse
     */
    public function describeSubdomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSubdomainsResponse::fromMap($this->doRPCRequest('DescribeSubdomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSubdomainsRequest $request
     *
     * @return DescribeSubdomainsResponse
     */
    public function describeSubdomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubdomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTaskBriefInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTaskBriefInfoResponse
     */
    public function describeTaskBriefInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTaskBriefInfoResponse::fromMap($this->doRPCRequest('DescribeTaskBriefInfo', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTaskBriefInfoRequest $request
     *
     * @return DescribeTaskBriefInfoResponse
     */
    public function describeTaskBriefInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskBriefInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserTagsResponse::fromMap($this->doRPCRequest('DescribeUserTags', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserTagsRequest $request
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulnerabilityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVulnerabilityResponse
     */
    public function describeVulnerabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVulnerabilityResponse::fromMap($this->doRPCRequest('DescribeVulnerability', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVulnerabilityRequest $request
     *
     * @return DescribeVulnerabilityResponse
     */
    public function describeVulnerability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulnerabilityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebPathsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWebPathsResponse
     */
    public function describeWebPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebPathsResponse::fromMap($this->doRPCRequest('DescribeWebPaths', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebPathsRequest $request
     *
     * @return DescribeWebPathsResponse
     */
    public function describeWebPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebServersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWebServersResponse
     */
    public function describeWebServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebServersResponse::fromMap($this->doRPCRequest('DescribeWebServers', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebServersRequest $request
     *
     * @return DescribeWebServersResponse
     */
    public function describeWebServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebServersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebTechsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWebTechsResponse
     */
    public function describeWebTechsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebTechsResponse::fromMap($this->doRPCRequest('DescribeWebTechs', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebTechsRequest $request
     *
     * @return DescribeWebTechsResponse
     */
    public function describeWebTechs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebTechsWithOptions($request, $runtime);
    }

    /**
     * @param EditSessionRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EditSessionResponse
     */
    public function editSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditSessionResponse::fromMap($this->doRPCRequest('EditSession', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditSessionRequest $request
     *
     * @return EditSessionResponse
     */
    public function editSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editSessionWithOptions($request, $runtime);
    }

    /**
     * @param GenerateVulReportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateVulReportResponse
     */
    public function generateVulReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateVulReportResponse::fromMap($this->doRPCRequest('GenerateVulReport', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateVulReportRequest $request
     *
     * @return GenerateVulReportResponse
     */
    public function generateVulReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVulReportWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgDNSMapRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListOrgDNSMapResponse
     */
    public function listOrgDNSMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgDNSMapResponse::fromMap($this->doRPCRequest('ListOrgDNSMap', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgDNSMapRequest $request
     *
     * @return ListOrgDNSMapResponse
     */
    public function listOrgDNSMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgDNSMapWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgDomainsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListOrgDomainsResponse
     */
    public function listOrgDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgDomainsResponse::fromMap($this->doRPCRequest('ListOrgDomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgDomainsRequest $request
     *
     * @return ListOrgDomainsResponse
     */
    public function listOrgDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgHostsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListOrgHostsResponse
     */
    public function listOrgHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgHostsResponse::fromMap($this->doRPCRequest('ListOrgHosts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgHostsRequest $request
     *
     * @return ListOrgHostsResponse
     */
    public function listOrgHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgHostsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgPortsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListOrgPortsResponse
     */
    public function listOrgPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgPortsResponse::fromMap($this->doRPCRequest('ListOrgPorts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgPortsRequest $request
     *
     * @return ListOrgPortsResponse
     */
    public function listOrgPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgPortsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgRiskyAssetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListOrgRiskyAssetsResponse
     */
    public function listOrgRiskyAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgRiskyAssetsResponse::fromMap($this->doRPCRequest('ListOrgRiskyAssets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgRiskyAssetsRequest $request
     *
     * @return ListOrgRiskyAssetsResponse
     */
    public function listOrgRiskyAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgRiskyAssetsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgSubdomainsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListOrgSubdomainsResponse
     */
    public function listOrgSubdomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgSubdomainsResponse::fromMap($this->doRPCRequest('ListOrgSubdomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgSubdomainsRequest $request
     *
     * @return ListOrgSubdomainsResponse
     */
    public function listOrgSubdomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgSubdomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgVulFacetsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListOrgVulFacetsResponse
     */
    public function listOrgVulFacetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgVulFacetsResponse::fromMap($this->doRPCRequest('ListOrgVulFacets', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgVulFacetsRequest $request
     *
     * @return ListOrgVulFacetsResponse
     */
    public function listOrgVulFacets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgVulFacetsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgWebPathsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListOrgWebPathsResponse
     */
    public function listOrgWebPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgWebPathsResponse::fromMap($this->doRPCRequest('ListOrgWebPaths', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgWebPathsRequest $request
     *
     * @return ListOrgWebPathsResponse
     */
    public function listOrgWebPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgWebPathsWithOptions($request, $runtime);
    }

    /**
     * @param ListOrgWebTechsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListOrgWebTechsResponse
     */
    public function listOrgWebTechsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrgWebTechsResponse::fromMap($this->doRPCRequest('ListOrgWebTechs', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrgWebTechsRequest $request
     *
     * @return ListOrgWebTechsResponse
     */
    public function listOrgWebTechs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrgWebTechsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserDNSMapRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserDNSMapResponse
     */
    public function listUserDNSMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserDNSMapResponse::fromMap($this->doRPCRequest('ListUserDNSMap', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserDNSMapRequest $request
     *
     * @return ListUserDNSMapResponse
     */
    public function listUserDNSMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDNSMapWithOptions($request, $runtime);
    }

    /**
     * @param ListUserDNSMapHistoriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserDNSMapHistoriesResponse
     */
    public function listUserDNSMapHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserDNSMapHistoriesResponse::fromMap($this->doRPCRequest('ListUserDNSMapHistories', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserDNSMapHistoriesRequest $request
     *
     * @return ListUserDNSMapHistoriesResponse
     */
    public function listUserDNSMapHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDNSMapHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserDomainsResponse
     */
    public function listUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserDomainsResponse::fromMap($this->doRPCRequest('ListUserDomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserDomainsRequest $request
     *
     * @return ListUserDomainsResponse
     */
    public function listUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserHostsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListUserHostsResponse
     */
    public function listUserHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserHostsResponse::fromMap($this->doRPCRequest('ListUserHosts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserHostsRequest $request
     *
     * @return ListUserHostsResponse
     */
    public function listUserHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserHostsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserOrganizationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserOrganizationsResponse
     */
    public function listUserOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserOrganizationsResponse::fromMap($this->doRPCRequest('ListUserOrganizations', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserOrganizationsRequest $request
     *
     * @return ListUserOrganizationsResponse
     */
    public function listUserOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserPortsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListUserPortsResponse
     */
    public function listUserPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserPortsResponse::fromMap($this->doRPCRequest('ListUserPorts', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserPortsRequest $request
     *
     * @return ListUserPortsResponse
     */
    public function listUserPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPortsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserSubdomainsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserSubdomainsResponse
     */
    public function listUserSubdomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserSubdomainsResponse::fromMap($this->doRPCRequest('ListUserSubdomains', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserSubdomainsRequest $request
     *
     * @return ListUserSubdomainsResponse
     */
    public function listUserSubdomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSubdomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserWebPathsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUserWebPathsResponse
     */
    public function listUserWebPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserWebPathsResponse::fromMap($this->doRPCRequest('ListUserWebPaths', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserWebPathsRequest $request
     *
     * @return ListUserWebPathsResponse
     */
    public function listUserWebPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserWebPathsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserWebTechsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUserWebTechsResponse
     */
    public function listUserWebTechsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserWebTechsResponse::fromMap($this->doRPCRequest('ListUserWebTechs', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserWebTechsRequest $request
     *
     * @return ListUserWebTechsResponse
     */
    public function listUserWebTechs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserWebTechsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOrganizationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyOrganizationResponse
     */
    public function modifyOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyOrganizationResponse::fromMap($this->doRPCRequest('ModifyOrganization', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyOrganizationRequest $request
     *
     * @return ModifyOrganizationResponse
     */
    public function modifyOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param TagAssetsByRecordsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TagAssetsByRecordsResponse
     */
    public function tagAssetsByRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagAssetsByRecordsResponse::fromMap($this->doRPCRequest('TagAssetsByRecords', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagAssetsByRecordsRequest $request
     *
     * @return TagAssetsByRecordsResponse
     */
    public function tagAssetsByRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagAssetsByRecordsWithOptions($request, $runtime);
    }

    /**
     * @param TagAssetsBySearchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TagAssetsBySearchResponse
     */
    public function tagAssetsBySearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagAssetsBySearchResponse::fromMap($this->doRPCRequest('TagAssetsBySearch', '2017-11-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagAssetsBySearchRequest $request
     *
     * @return TagAssetsBySearchResponse
     */
    public function tagAssetsBySearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagAssetsBySearchWithOptions($request, $runtime);
    }
}
