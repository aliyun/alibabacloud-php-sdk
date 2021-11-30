<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBasicEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ga extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ga', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddEntriesToAclRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclEntries']  = $request->aclEntries;
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddEntriesToAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddEntriesToAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddEntriesToAclRequest $request
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclIds']      = $request->aclIds;
        $query['AclType']     = $request->aclType;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AssociateAclsWithListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['Certificates']  = $request->certificates;
        $query['ClientToken']   = $request->clientToken;
        $query['ListenerId']    = $request->listenerId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AssociateAdditionalCertificatesWithListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param AttachDdosToAcceleratorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['DdosId']        = $request->ddosId;
        $query['DdosRegionId']  = $request->ddosRegionId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AttachDdosToAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachDdosToAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDdosToAcceleratorRequest $request
     *
     * @return AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDdosToAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param AttachLogStoreToEndpointGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AcceleratorId']    = $request->acceleratorId;
        $query['ClientToken']      = $request->clientToken;
        $query['EndpointGroupIds'] = $request->endpointGroupIds;
        $query['ListenerId']       = $request->listenerId;
        $query['RegionId']         = $request->regionId;
        $query['SlsLogStoreName']  = $request->slsLogStoreName;
        $query['SlsProjectName']   = $request->slsProjectName;
        $query['SlsRegionId']      = $request->slsRegionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AttachLogStoreToEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachLogStoreToEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachLogStoreToEndpointGroupRequest $request
     *
     * @return AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLogStoreToEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param BandwidthPackageAddAcceleratorRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AcceleratorId']      = $request->acceleratorId;
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BandwidthPackageAddAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BandwidthPackageAddAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BandwidthPackageAddAcceleratorRequest $request
     *
     * @return BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageAddAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param BandwidthPackageRemoveAcceleratorRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AcceleratorId']      = $request->acceleratorId;
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BandwidthPackageRemoveAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BandwidthPackageRemoveAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BandwidthPackageRemoveAcceleratorRequest $request
     *
     * @return BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param ConfigEndpointProbeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigEndpointProbeResponse
     */
    public function configEndpointProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['Enable']          = $request->enable;
        $query['Endpoint']        = $request->endpoint;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $query['EndpointType']    = $request->endpointType;
        $query['ProbePort']       = $request->probePort;
        $query['ProbeProtocol']   = $request->probeProtocol;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ConfigEndpointProbe',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfigEndpointProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigEndpointProbeRequest $request
     *
     * @return ConfigEndpointProbeResponse
     */
    public function configEndpointProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configEndpointProbeWithOptions($request, $runtime);
    }

    /**
     * @param CreateAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAcceleratorResponse
     */
    public function createAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AutoPay']           = $request->autoPay;
        $query['AutoRenew']         = $request->autoRenew;
        $query['AutoRenewDuration'] = $request->autoRenewDuration;
        $query['AutoUseCoupon']     = $request->autoUseCoupon;
        $query['ClientToken']       = $request->clientToken;
        $query['Duration']          = $request->duration;
        $query['Name']              = $request->name;
        $query['PricingCycle']      = $request->pricingCycle;
        $query['RegionId']          = $request->regionId;
        $query['Spec']              = $request->spec;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAcceleratorRequest $request
     *
     * @return CreateAcceleratorResponse
     */
    public function createAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AclEntries']       = $request->aclEntries;
        $query['AclName']          = $request->aclName;
        $query['AddressIPVersion'] = $request->addressIPVersion;
        $query['ClientToken']      = $request->clientToken;
        $query['DryRun']           = $request->dryRun;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAclRequest $request
     *
     * @return CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['AutoPay']                = $request->autoPay;
        $query['AutoUseCoupon']          = $request->autoUseCoupon;
        $query['Bandwidth']              = $request->bandwidth;
        $query['BandwidthType']          = $request->bandwidthType;
        $query['BillingType']            = $request->billingType;
        $query['CbnGeographicRegionIdA'] = $request->cbnGeographicRegionIdA;
        $query['CbnGeographicRegionIdB'] = $request->cbnGeographicRegionIdB;
        $query['ChargeType']             = $request->chargeType;
        $query['ClientToken']            = $request->clientToken;
        $query['Duration']               = $request->duration;
        $query['PricingCycle']           = $request->pricingCycle;
        $query['Ratio']                  = $request->ratio;
        $query['RegionId']               = $request->regionId;
        $query['Type']                   = $request->type;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateBasicAcceleratorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBasicAcceleratorResponse
     */
    public function createBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AutoPay']           = $request->autoPay;
        $query['AutoRenew']         = $request->autoRenew;
        $query['AutoRenewDuration'] = $request->autoRenewDuration;
        $query['AutoUseCoupon']     = $request->autoUseCoupon;
        $query['ClientToken']       = $request->clientToken;
        $query['Duration']          = $request->duration;
        $query['PricingCycle']      = $request->pricingCycle;
        $query['RegionId']          = $request->regionId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBasicAcceleratorRequest $request
     *
     * @return CreateBasicAcceleratorResponse
     */
    public function createBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param CreateBasicEndpointGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateBasicEndpointGroupResponse
     */
    public function createBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['AcceleratorId']       = $request->acceleratorId;
        $query['ClientToken']         = $request->clientToken;
        $query['Description']         = $request->description;
        $query['EndpointAddress']     = $request->endpointAddress;
        $query['EndpointGroupRegion'] = $request->endpointGroupRegion;
        $query['EndpointType']        = $request->endpointType;
        $query['Name']                = $request->name;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBasicEndpointGroupRequest $request
     *
     * @return CreateBasicEndpointGroupResponse
     */
    public function createBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateBasicIpSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBasicIpSetResponse
     */
    public function createBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AccelerateRegionId'] = $request->accelerateRegionId;
        $query['AcceleratorId']      = $request->acceleratorId;
        $query['ClientToken']        = $request->clientToken;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBasicIpSetRequest $request
     *
     * @return CreateBasicIpSetResponse
     */
    public function createBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateEndpointGroupResponse
     */
    public function createEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                               = [];
        $query['AcceleratorId']              = $request->acceleratorId;
        $query['ClientToken']                = $request->clientToken;
        $query['Description']                = $request->description;
        $query['EndpointConfigurations']     = $request->endpointConfigurations;
        $query['EndpointGroupRegion']        = $request->endpointGroupRegion;
        $query['EndpointGroupType']          = $request->endpointGroupType;
        $query['EndpointRequestProtocol']    = $request->endpointRequestProtocol;
        $query['HealthCheckEnabled']         = $request->healthCheckEnabled;
        $query['HealthCheckIntervalSeconds'] = $request->healthCheckIntervalSeconds;
        $query['HealthCheckPath']            = $request->healthCheckPath;
        $query['HealthCheckPort']            = $request->healthCheckPort;
        $query['HealthCheckProtocol']        = $request->healthCheckProtocol;
        $query['ListenerId']                 = $request->listenerId;
        $query['Name']                       = $request->name;
        $query['PortOverrides']              = $request->portOverrides;
        $query['RegionId']                   = $request->regionId;
        $query['ThresholdCount']             = $request->thresholdCount;
        $query['TrafficPercentage']          = $request->trafficPercentage;
        $req                                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEndpointGroupRequest $request
     *
     * @return CreateEndpointGroupResponse
     */
    public function createEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEndpointGroupsResponse
     */
    public function createEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['AcceleratorId']               = $request->acceleratorId;
        $query['ClientToken']                 = $request->clientToken;
        $query['DryRun']                      = $request->dryRun;
        $query['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        $query['ListenerId']                  = $request->listenerId;
        $query['RegionId']                    = $request->regionId;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEndpointGroupsRequest $request
     *
     * @return CreateEndpointGroupsResponse
     */
    public function createEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param CreateForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateForwardingRulesResponse
     */
    public function createForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AcceleratorId']   = $request->acceleratorId;
        $query['ClientToken']     = $request->clientToken;
        $query['ForwardingRules'] = $request->forwardingRules;
        $query['ListenerId']      = $request->listenerId;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateForwardingRulesRequest $request
     *
     * @return CreateForwardingRulesResponse
     */
    public function createForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIpSetsResponse
     */
    public function createIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AccelerateRegion'] = $request->accelerateRegion;
        $query['AcceleratorId']    = $request->acceleratorId;
        $query['ClientToken']      = $request->clientToken;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpSetsRequest $request
     *
     * @return CreateIpSetsResponse
     */
    public function createIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['AcceleratorId']       = $request->acceleratorId;
        $query['Certificates']        = $request->certificates;
        $query['ClientAffinity']      = $request->clientAffinity;
        $query['ClientToken']         = $request->clientToken;
        $query['Description']         = $request->description;
        $query['Name']                = $request->name;
        $query['PortRanges']          = $request->portRanges;
        $query['Protocol']            = $request->protocol;
        $query['ProxyProtocol']       = $request->proxyProtocol;
        $query['RegionId']            = $request->regionId;
        $query['SecurityPolicyId']    = $request->securityPolicyId;
        $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateListenerRequest $request
     *
     * @return CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpareIpsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSpareIpsResponse
     */
    public function createSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['RegionId']      = $request->regionId;
        $query['SpareIps']      = $request->spareIps;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSpareIpsRequest $request
     *
     * @return CreateSpareIpsResponse
     */
    public function createSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAcceleratorResponse
     */
    public function deleteAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAcceleratorRequest $request
     *
     * @return DeleteAcceleratorResponse
     */
    public function deleteAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAclRequest $request
     *
     * @return DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['ClientToken']        = $request->clientToken;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBasicAcceleratorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBasicAcceleratorResponse
     */
    public function deleteBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBasicAcceleratorRequest $request
     *
     * @return DeleteBasicAcceleratorResponse
     */
    public function deleteBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBasicEndpointGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteBasicEndpointGroupResponse
     */
    public function deleteBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBasicEndpointGroupRequest $request
     *
     * @return DeleteBasicEndpointGroupResponse
     */
    public function deleteBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBasicIpSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBasicIpSetResponse
     */
    public function deleteBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['IpSetId']     = $request->ipSetId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBasicIpSetRequest $request
     *
     * @return DeleteBasicIpSetResponse
     */
    public function deleteBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AcceleratorId']   = $request->acceleratorId;
        $query['ClientToken']     = $request->clientToken;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEndpointGroupRequest $request
     *
     * @return DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ClientToken']      = $request->clientToken;
        $query['DryRun']           = $request->dryRun;
        $query['EndpointGroupIds'] = $request->endpointGroupIds;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEndpointGroupsRequest $request
     *
     * @return DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteForwardingRulesResponse
     */
    public function deleteForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AcceleratorId']     = $request->acceleratorId;
        $query['ClientToken']       = $request->clientToken;
        $query['ForwardingRuleIds'] = $request->forwardingRuleIds;
        $query['ListenerId']        = $request->listenerId;
        $query['RegionId']          = $request->regionId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteForwardingRulesRequest $request
     *
     * @return DeleteForwardingRulesResponse
     */
    public function deleteForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpSetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIpSetResponse
     */
    public function deleteIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['IpSetId']       = $request->ipSetId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpSetRequest $request
     *
     * @return DeleteIpSetResponse
     */
    public function deleteIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIpSetsResponse
     */
    public function deleteIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['IpSetIds'] = $request->ipSetIds;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpSetsRequest $request
     *
     * @return DeleteIpSetsResponse
     */
    public function deleteIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['ListenerId']    = $request->listenerId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteListenerRequest $request
     *
     * @return DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpareIpsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSpareIpsResponse
     */
    public function deleteSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['RegionId']      = $request->regionId;
        $query['SpareIps']      = $request->spareIps;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSpareIpsRequest $request
     *
     * @return DeleteSpareIpsResponse
     */
    public function deleteSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAcceleratorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAcceleratorResponse
     */
    public function describeAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAcceleratorRequest $request
     *
     * @return DescribeAcceleratorResponse
     */
    public function describeAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAcceleratorAutoRenewAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAcceleratorAutoRenewAttributeResponse
     */
    public function describeAcceleratorAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAcceleratorAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAcceleratorAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAcceleratorAutoRenewAttributeRequest $request
     *
     * @return DescribeAcceleratorAutoRenewAttributeResponse
     */
    public function describeAcceleratorAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBandwidthPackageRequest $request
     *
     * @return DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEndpointGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEndpointGroupResponse
     */
    public function describeEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEndpointGroupRequest $request
     *
     * @return DescribeEndpointGroupResponse
     */
    public function describeEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeIpSetResponse
     */
    public function describeIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['IpSetId']  = $request->ipSetId;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpSetRequest $request
     *
     * @return DescribeIpSetResponse
     */
    public function describeIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpSetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeListenerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeListenerResponse
     */
    public function describeListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ListenerId'] = $request->listenerId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeListenerRequest $request
     *
     * @return DescribeListenerResponse
     */
    public function describeListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListenerWithOptions($request, $runtime);
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
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetachDdosFromAcceleratorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetachDdosFromAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetachDdosFromAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachDdosFromAcceleratorRequest $request
     *
     * @return DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDdosFromAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DetachLogStoreFromEndpointGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AcceleratorId']    = $request->acceleratorId;
        $query['ClientToken']      = $request->clientToken;
        $query['EndpointGroupIds'] = $request->endpointGroupIds;
        $query['ListenerId']       = $request->listenerId;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetachLogStoreFromEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetachLogStoreFromEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachLogStoreFromEndpointGroupRequest $request
     *
     * @return DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLogStoreFromEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclIds']      = $request->aclIds;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DissociateAclsFromListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['Domains']       = $request->domains;
        $query['ListenerId']    = $request->listenerId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DissociateAdditionalCertificatesFromListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param GetAclRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAclResponse
     */
    public function getAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AclId']    = $request->aclId;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAclRequest $request
     *
     * @return GetAclResponse
     */
    public function getAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAclWithOptions($request, $runtime);
    }

    /**
     * @param GetBasicAcceleratorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBasicAcceleratorResponse
     */
    public function getBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBasicAcceleratorRequest $request
     *
     * @return GetBasicAcceleratorResponse
     */
    public function getBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param GetBasicEndpointGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBasicEndpointGroupResponse
     */
    public function getBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBasicEndpointGroupRequest $request
     *
     * @return GetBasicEndpointGroupResponse
     */
    public function getBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetBasicIpSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBasicIpSetResponse
     */
    public function getBasicIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['IpSetId']     = $request->ipSetId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetBasicIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBasicIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBasicIpSetRequest $request
     *
     * @return GetBasicIpSetResponse
     */
    public function getBasicIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBasicIpSetWithOptions($request, $runtime);
    }

    /**
     * @param GetHealthStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetHealthStatusResponse
     */
    public function getHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['ListenerId']    = $request->listenerId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetHealthStatus',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHealthStatusRequest $request
     *
     * @return GetHealthStatusResponse
     */
    public function getHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSpareIpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSpareIpResponse
     */
    public function getSpareIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['RegionId']      = $request->regionId;
        $query['SpareIp']       = $request->spareIp;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSpareIp',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSpareIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSpareIpRequest $request
     *
     * @return GetSpareIpResponse
     */
    public function getSpareIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpareIpWithOptions($request, $runtime);
    }

    /**
     * @param ListAccelerateAreasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAccelerateAreasResponse
     */
    public function listAccelerateAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAccelerateAreas',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAccelerateAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccelerateAreasRequest $request
     *
     * @return ListAccelerateAreasResponse
     */
    public function listAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @param ListAcceleratorsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAcceleratorsResponse
     */
    public function listAcceleratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['RegionId']      = $request->regionId;
        $query['State']         = $request->state;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAccelerators',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAcceleratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAcceleratorsRequest $request
     *
     * @return ListAcceleratorsResponse
     */
    public function listAccelerators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcceleratorsWithOptions($request, $runtime);
    }

    /**
     * @param ListAclsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclIds']      = $request->aclIds;
        $query['AclName']     = $request->aclName;
        $query['ClientToken'] = $request->clientToken;
        $query['MaxResults']  = $request->maxResults;
        $query['NextToken']   = $request->nextToken;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAcls',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAclsRequest $request
     *
     * @return ListAclsResponse
     */
    public function listAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclsWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableAccelerateAreasRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableAccelerateAreas',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAvailableAccelerateAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAvailableAccelerateAreasRequest $request
     *
     * @return ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableBusiRegionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableBusiRegions',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAvailableBusiRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAvailableBusiRegionsRequest $request
     *
     * @return ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListBandwidthPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListBandwidthPackagesResponse
     */
    public function listBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['PageNumber']         = $request->pageNumber;
        $query['PageSize']           = $request->pageSize;
        $query['RegionId']           = $request->regionId;
        $query['State']              = $request->state;
        $query['Type']               = $request->type;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListBandwidthPackages',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBandwidthPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBandwidthPackagesRequest $request
     *
     * @return ListBandwidthPackagesResponse
     */
    public function listBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListBandwidthackagesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBandwidthackagesResponse
     */
    public function listBandwidthackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListBandwidthackages',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBandwidthackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBandwidthackagesRequest $request
     *
     * @return ListBandwidthackagesResponse
     */
    public function listBandwidthackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListBasicAcceleratorsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListBasicAcceleratorsResponse
     */
    public function listBasicAcceleratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['RegionId']      = $request->regionId;
        $query['State']         = $request->state;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListBasicAccelerators',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBasicAcceleratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBasicAcceleratorsRequest $request
     *
     * @return ListBasicAcceleratorsResponse
     */
    public function listBasicAccelerators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicAcceleratorsWithOptions($request, $runtime);
    }

    /**
     * @param ListBusiRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListBusiRegionsResponse
     */
    public function listBusiRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListBusiRegions',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBusiRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBusiRegionsRequest $request
     *
     * @return ListBusiRegionsResponse
     */
    public function listBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListEndpointGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEndpointGroupsResponse
     */
    public function listEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AcceleratorId']     = $request->acceleratorId;
        $query['AccessLogSwitch']   = $request->accessLogSwitch;
        $query['EndpointGroupId']   = $request->endpointGroupId;
        $query['EndpointGroupType'] = $request->endpointGroupType;
        $query['ListenerId']        = $request->listenerId;
        $query['PageNumber']        = $request->pageNumber;
        $query['PageSize']          = $request->pageSize;
        $query['RegionId']          = $request->regionId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEndpointGroupsRequest $request
     *
     * @return ListEndpointGroupsResponse
     */
    public function listEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListForwardingRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListForwardingRulesResponse
     */
    public function listForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AcceleratorId']    = $request->acceleratorId;
        $query['ClientToken']      = $request->clientToken;
        $query['ForwardingRuleId'] = $request->forwardingRuleId;
        $query['ListenerId']       = $request->listenerId;
        $query['MaxResults']       = $request->maxResults;
        $query['NextToken']        = $request->nextToken;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListForwardingRulesRequest $request
     *
     * @return ListForwardingRulesResponse
     */
    public function listForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListIpSetsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListIpSetsResponse
     */
    public function listIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIpSetsRequest $request
     *
     * @return ListIpSetsResponse
     */
    public function listIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ListenerId']    = $request->listenerId;
        $query['MaxResults']    = $request->maxResults;
        $query['NextToken']     = $request->nextToken;
        $query['RegionId']      = $request->regionId;
        $query['Role']          = $request->role;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListListenerCertificates',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListListenerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListListenerCertificatesRequest $request
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListListeners',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListListenersRequest $request
     *
     * @return ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @param ListSpareIpsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSpareIpsResponse
     */
    public function listSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListSpareIps',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSpareIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSpareIpsRequest $request
     *
     * @return ListSpareIpsResponse
     */
    public function listSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemSecurityPoliciesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListSystemSecurityPolicies',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemSecurityPoliciesRequest $request
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclEntries']  = $request->aclEntries;
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveEntriesFromAcl',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceBandwidthPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['BandwidthPackageId']       = $request->bandwidthPackageId;
        $query['RegionId']                 = $request->regionId;
        $query['TargetBandwidthPackageId'] = $request->targetBandwidthPackageId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReplaceBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplaceBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceBandwidthPackageRequest $request
     *
     * @return ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAcceleratorResponse
     */
    public function updateAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['AutoPay']       = $request->autoPay;
        $query['AutoUseCoupon'] = $request->autoUseCoupon;
        $query['ClientToken']   = $request->clientToken;
        $query['Description']   = $request->description;
        $query['Name']          = $request->name;
        $query['RegionId']      = $request->regionId;
        $query['Spec']          = $request->spec;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAcceleratorRequest $request
     *
     * @return UpdateAcceleratorResponse
     */
    public function updateAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAcceleratorAutoRenewAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateAcceleratorAutoRenewAttributeResponse
     */
    public function updateAcceleratorAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AcceleratorId']     = $request->acceleratorId;
        $query['AutoRenew']         = $request->autoRenew;
        $query['AutoRenewDuration'] = $request->autoRenewDuration;
        $query['ClientToken']       = $request->clientToken;
        $query['Name']              = $request->name;
        $query['RegionId']          = $request->regionId;
        $query['RenewalStatus']     = $request->renewalStatus;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorAutoRenewAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAcceleratorAutoRenewAttributeRequest $request
     *
     * @return UpdateAcceleratorAutoRenewAttributeResponse
     */
    public function updateAcceleratorAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAcceleratorConfirmRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcceleratorConfirm',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAcceleratorConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAcceleratorConfirmRequest $request
     *
     * @return UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorConfirmWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclId']       = $request->aclId;
        $query['AclName']     = $request->aclName;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAclAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAclAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAclAttributeRequest $request
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AutoPay']            = $request->autoPay;
        $query['AutoUseCoupon']      = $request->autoUseCoupon;
        $query['Bandwidth']          = $request->bandwidth;
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['BandwidthType']      = $request->bandwidthType;
        $query['Description']        = $request->description;
        $query['Name']               = $request->name;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateBandwidthPackage',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBandwidthPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBandwidthPackageRequest $request
     *
     * @return UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBasicAcceleratorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateBasicAcceleratorResponse
     */
    public function updateBasicAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AcceleratorId'] = $request->acceleratorId;
        $query['ClientToken']   = $request->clientToken;
        $query['Description']   = $request->description;
        $query['Name']          = $request->name;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateBasicAccelerator',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicAcceleratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBasicAcceleratorRequest $request
     *
     * @return UpdateBasicAcceleratorResponse
     */
    public function updateBasicAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBasicEndpointGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateBasicEndpointGroupResponse
     */
    public function updateBasicEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['Description']     = $request->description;
        $query['EndpointAddress'] = $request->endpointAddress;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $query['EndpointType']    = $request->endpointType;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateBasicEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBasicEndpointGroupRequest $request
     *
     * @return UpdateBasicEndpointGroupResponse
     */
    public function updateBasicEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBasicEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateEndpointGroupResponse
     */
    public function updateEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                               = [];
        $query['ClientToken']                = $request->clientToken;
        $query['Description']                = $request->description;
        $query['EndpointConfigurations']     = $request->endpointConfigurations;
        $query['EndpointGroupId']            = $request->endpointGroupId;
        $query['EndpointGroupRegion']        = $request->endpointGroupRegion;
        $query['EndpointRequestProtocol']    = $request->endpointRequestProtocol;
        $query['HealthCheckEnabled']         = $request->healthCheckEnabled;
        $query['HealthCheckIntervalSeconds'] = $request->healthCheckIntervalSeconds;
        $query['HealthCheckPath']            = $request->healthCheckPath;
        $query['HealthCheckPort']            = $request->healthCheckPort;
        $query['HealthCheckProtocol']        = $request->healthCheckProtocol;
        $query['Name']                       = $request->name;
        $query['PortOverrides']              = $request->portOverrides;
        $query['RegionId']                   = $request->regionId;
        $query['ThresholdCount']             = $request->thresholdCount;
        $query['TrafficPercentage']          = $request->trafficPercentage;
        $req                                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpointGroup',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupRequest $request
     *
     * @return UpdateEndpointGroupResponse
     */
    public function updateEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['Description']     = $request->description;
        $query['EndpointGroupId'] = $request->endpointGroupId;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpointGroupAttribute',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupAttributeRequest $request
     *
     * @return UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['ClientToken']                 = $request->clientToken;
        $query['DryRun']                      = $request->dryRun;
        $query['EndpointGroupConfigurations'] = $request->endpointGroupConfigurations;
        $query['ListenerId']                  = $request->listenerId;
        $query['RegionId']                    = $request->regionId;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpointGroups',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupsRequest $request
     *
     * @return UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateForwardingRulesResponse
     */
    public function updateForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AcceleratorId']   = $request->acceleratorId;
        $query['ClientToken']     = $request->clientToken;
        $query['ForwardingRules'] = $request->forwardingRules;
        $query['ListenerId']      = $request->listenerId;
        $query['RegionId']        = $request->regionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateForwardingRules',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateForwardingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateForwardingRulesRequest $request
     *
     * @return UpdateForwardingRulesResponse
     */
    public function updateForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpSetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIpSetResponse
     */
    public function updateIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Bandwidth']   = $request->bandwidth;
        $query['ClientToken'] = $request->clientToken;
        $query['IpSetId']     = $request->ipSetId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpSet',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIpSetRequest $request
     *
     * @return UpdateIpSetResponse
     */
    public function updateIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateIpSetsResponse
     */
    public function updateIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['IpSets']   = $request->ipSets;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpSets',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIpSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIpSetsRequest $request
     *
     * @return UpdateIpSetsResponse
     */
    public function updateIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateListenerResponse
     */
    public function updateListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['BackendPorts']        = $request->backendPorts;
        $query['Certificates']        = $request->certificates;
        $query['ClientAffinity']      = $request->clientAffinity;
        $query['ClientToken']         = $request->clientToken;
        $query['Description']         = $request->description;
        $query['ListenerId']          = $request->listenerId;
        $query['Name']                = $request->name;
        $query['PortRanges']          = $request->portRanges;
        $query['Protocol']            = $request->protocol;
        $query['ProxyProtocol']       = $request->proxyProtocol;
        $query['RegionId']            = $request->regionId;
        $query['SecurityPolicyId']    = $request->securityPolicyId;
        $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateListener',
            'version'     => '2019-11-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateListenerRequest $request
     *
     * @return UpdateListenerResponse
     */
    public function updateListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerWithOptions($request, $runtime);
    }
}
