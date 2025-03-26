<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssignLeniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssignLeniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssignPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssignPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssociateVpdCidrBlockRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AssociateVpdCidrBlockResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AttachElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\AttachElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErAttachmentRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErAttachmentResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErRouteMapRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErRouteMapResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRouteEntryRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRouteEntryResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErAttachmentRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErAttachmentResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErRouteMapRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteErRouteMapResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVccGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVccGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVccRouteEntryRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVccRouteEntryResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DescribeSlrRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DescribeSlrResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DetachElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DetachElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetDestinationCidrBlockRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetDestinationCidrBlockResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErAttachmentRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErAttachmentResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRouteEntryRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRouteEntryResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRouteMapRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRouteMapResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetLeniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetLeniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetLniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetLniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNodeInfoForPodRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNodeInfoForPodResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccRouteEntryRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccRouteEntryResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdGrantRuleRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdGrantRuleResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdRouteEntryRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdRouteEntryResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\InitializeVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\InitializeVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListElasticNetworkInterfacesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListElasticNetworkInterfacesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErAttachmentsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErAttachmentsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErRouteEntriesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErRouteEntriesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErRouteMapsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErRouteMapsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListLeniPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListLeniPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListLniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListLniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNodeInfosForPodRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNodeInfosForPodResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccFlowInfosRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccFlowInfosResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccGrantRulesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccGrantRulesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccRouteEntriesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccRouteEntriesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdGrantRulesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdGrantRulesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdRouteEntriesRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdRouteEntriesResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\QueryInstanceNcdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\QueryInstanceNcdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\RefundVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\RefundVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\RetryVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\RetryVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnassignLeniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnassignLeniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnAssignPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnAssignPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnAssociateVpdCidrBlockRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UnAssociateVpdCidrBlockResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateElasticNetworkInterfaceRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateElasticNetworkInterfaceResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErAttachmentRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErAttachmentResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErRouteMapRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateErRouteMapResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateLeniPrivateIpAddressRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateLeniPrivateIpAddressResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVpdResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eflo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eflo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Apply for a secondary private IP address for the current Lingjun Elastic Network Interface. You can automatically assign a secondary private IP address.
     *
     * @remarks
     * Apply for a secondary private IP address for the specified Lingjun Elastic Network Interface.
     * *   If the PrivateIp field is empty, a secondary private IP address is automatically assigned and the unique identifier of the IP address is returned.
     * *   You can use the GetLeniPrivateIpAddress or ListLeniPrivateIpAddresses interface to check whether the secondary private IP address is assigned.
     *
     * @param request - AssignLeniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignLeniPrivateIpAddressResponse
     *
     * @param AssignLeniPrivateIpAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AssignLeniPrivateIpAddressResponse
     */
    public function assignLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->privateIpAddress) {
            @$body['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignLeniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssignLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssignLeniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Apply for a secondary private IP address for the current Lingjun Elastic Network Interface. You can automatically assign a secondary private IP address.
     *
     * @remarks
     * Apply for a secondary private IP address for the specified Lingjun Elastic Network Interface.
     * *   If the PrivateIp field is empty, a secondary private IP address is automatically assigned and the unique identifier of the IP address is returned.
     * *   You can use the GetLeniPrivateIpAddress or ListLeniPrivateIpAddresses interface to check whether the secondary private IP address is assigned.
     *
     * @param request - AssignLeniPrivateIpAddressRequest
     *
     * @returns AssignLeniPrivateIpAddressResponse
     *
     * @param AssignLeniPrivateIpAddressRequest $request
     *
     * @return AssignLeniPrivateIpAddressResponse
     */
    public function assignLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Applies for a private secondary IP address for the current LNI. You can also call this operation to assign a secondary MAC address to the current LNI.
     *
     * @remarks
     * >  Apply for secondary private IP addresses
     * *   By default, each network interface controller can apply for three secondary private IP addresses. If the quota is exceeded, contact the administrator.
     * *   The secondary private IP address is allocated from the Lingjun subnet to which the current network interface controller belongs. The first address and the last two addresses belong to reserved addresses and do not participate in the allocation.
     *
     * @param request - AssignPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignPrivateIpAddressResponse
     *
     * @param AssignPrivateIpAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssignPrivateIpAddressResponse
     */
    public function assignPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assignMac) {
            @$body['AssignMac'] = $request->assignMac;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->privateIpAddress) {
            @$body['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->skipConfig) {
            @$body['SkipConfig'] = $request->skipConfig;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssignPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssignPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies for a private secondary IP address for the current LNI. You can also call this operation to assign a secondary MAC address to the current LNI.
     *
     * @remarks
     * >  Apply for secondary private IP addresses
     * *   By default, each network interface controller can apply for three secondary private IP addresses. If the quota is exceeded, contact the administrator.
     * *   The secondary private IP address is allocated from the Lingjun subnet to which the current network interface controller belongs. The first address and the last two addresses belong to reserved addresses and do not participate in the allocation.
     *
     * @param request - AssignPrivateIpAddressRequest
     *
     * @returns AssignPrivateIpAddressResponse
     *
     * @param AssignPrivateIpAddressRequest $request
     *
     * @return AssignPrivateIpAddressResponse
     */
    public function assignPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * When the VPD primary network segment address is not enough to allocate, you can choose to create an additional network segment as the additional network segment of the VPD primary network segment.
     *
     * @remarks
     * >  **Add a CIDR block**
     * *   The CIDR block cannot start with 0. The subnet mask must be 8 to 28 bits in length.
     * *   The secondary IPv4 CIDR block must not overlap with the primary IPv4 CIDR block of the Lingjun CIDR block and the added secondary IPv4 CIDR block.
     * *   You cannot use 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 as the CIDR block of Lingjun. Example: In the Lingjun CIDR block whose primary IPv4 CIDR block is 192.168.0.0/16, you cannot add the following CIDR blocks as additional IPv4 CIDR blocks. The CIDR block that is in the same range as 192.168.0.0/16. A CIDR block that is larger than 192.168.0.0/16. Example: 192.168.0.0/8. A CIDR block that is smaller than 192.168.0.0/16. Example: 192.168.0.0/24.
     * *   By default, each tenant can create three additional CIDR blocks in each region.
     *
     * @param request - AssociateVpdCidrBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateVpdCidrBlockResponse
     *
     * @param AssociateVpdCidrBlockRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateVpdCidrBlockResponse
     */
    public function associateVpdCidrBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->secondaryCidrBlock) {
            @$body['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateVpdCidrBlock',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssociateVpdCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssociateVpdCidrBlockResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When the VPD primary network segment address is not enough to allocate, you can choose to create an additional network segment as the additional network segment of the VPD primary network segment.
     *
     * @remarks
     * >  **Add a CIDR block**
     * *   The CIDR block cannot start with 0. The subnet mask must be 8 to 28 bits in length.
     * *   The secondary IPv4 CIDR block must not overlap with the primary IPv4 CIDR block of the Lingjun CIDR block and the added secondary IPv4 CIDR block.
     * *   You cannot use 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 as the CIDR block of Lingjun. Example: In the Lingjun CIDR block whose primary IPv4 CIDR block is 192.168.0.0/16, you cannot add the following CIDR blocks as additional IPv4 CIDR blocks. The CIDR block that is in the same range as 192.168.0.0/16. A CIDR block that is larger than 192.168.0.0/16. Example: 192.168.0.0/8. A CIDR block that is smaller than 192.168.0.0/16. Example: 192.168.0.0/24.
     * *   By default, each tenant can create three additional CIDR blocks in each region.
     *
     * @param request - AssociateVpdCidrBlockRequest
     *
     * @returns AssociateVpdCidrBlockResponse
     *
     * @param AssociateVpdCidrBlockRequest $request
     *
     * @return AssociateVpdCidrBlockResponse
     */
    public function associateVpdCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVpdCidrBlockWithOptions($request, $runtime);
    }

    /**
     * Lingjun ENI is bound to NC.
     *
     * @remarks
     * This interface is an asynchronous interface. You need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the available state.
     *
     * @param request - AttachElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachElasticNetworkInterfaceResponse
     *
     * @param AttachElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachElasticNetworkInterfaceResponse
     */
    public function attachElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lingjun ENI is bound to NC.
     *
     * @remarks
     * This interface is an asynchronous interface. You need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the available state.
     *
     * @param request - AttachElasticNetworkInterfaceRequest
     *
     * @returns AttachElasticNetworkInterfaceResponse
     *
     * @param AttachElasticNetworkInterfaceRequest $request
     *
     * @return AttachElasticNetworkInterfaceResponse
     */
    public function attachElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Creates an LENI.
     *
     * @param request - CreateElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateElasticNetworkInterfaceResponse
     *
     * @param CreateElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateElasticNetworkInterfaceResponse
     */
    public function createElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableJumboFrame) {
            @$body['EnableJumboFrame'] = $request->enableJumboFrame;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$body['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an LENI.
     *
     * @param request - CreateElasticNetworkInterfaceRequest
     *
     * @returns CreateElasticNetworkInterfaceResponse
     *
     * @param CreateElasticNetworkInterfaceRequest $request
     *
     * @return CreateElasticNetworkInterfaceResponse
     */
    public function createElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Create a Lingjun HUB.
     *
     * @remarks
     * When you call this operation to create a Lingjun HUB, note that:
     * *   Make sure that you have sufficient Lingjun HUB quota.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the ID of a Lingjun HUB. At this time, the Lingjun HUB instance may not be created yet, and the system background creation task is still in progress. You can call the ListErs or GetEr operation to query the status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Executing, it indicates that it is being created.
     *     *   If the status of the Lingjun HUB is Available, the creation is successful.
     *
     * @param request - CreateErRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateErResponse
     *
     * @param CreateErRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CreateErResponse
     */
    public function createErWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->erName) {
            @$body['ErName'] = $request->erName;
        }

        if (null !== $request->masterZoneId) {
            @$body['MasterZoneId'] = $request->masterZoneId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEr',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateErResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateErResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a Lingjun HUB.
     *
     * @remarks
     * When you call this operation to create a Lingjun HUB, note that:
     * *   Make sure that you have sufficient Lingjun HUB quota.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the ID of a Lingjun HUB. At this time, the Lingjun HUB instance may not be created yet, and the system background creation task is still in progress. You can call the ListErs or GetEr operation to query the status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Executing, it indicates that it is being created.
     *     *   If the status of the Lingjun HUB is Available, the creation is successful.
     *
     * @param request - CreateErRequest
     *
     * @returns CreateErResponse
     *
     * @param CreateErRequest $request
     *
     * @return CreateErResponse
     */
    public function createEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErWithOptions($request, $runtime);
    }

    /**
     * Create a network instance connection.
     *
     * @remarks
     * When you call this operation to create a network instance connection, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have sufficient quota for network instance connections.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the network instance connection. In this case, the network instance connection may not be created yet, and the system is still creating the network instance in the background. You can query the connection status of a network instance by ListErAttachments or GetErAttachment:
     *     *   If the connection status of the network instance is Executing, the network instance is being created.
     *     *   If the connection status of the network instance is Available, the network instance is created.
     *
     * @param request - CreateErAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateErAttachmentResponse
     *
     * @param CreateErAttachmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateErAttachmentResponse
     */
    public function createErAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoReceiveAllRoute) {
            @$body['AutoReceiveAllRoute'] = $request->autoReceiveAllRoute;
        }

        if (null !== $request->erAttachmentName) {
            @$body['ErAttachmentName'] = $request->erAttachmentName;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceTenantId) {
            @$body['ResourceTenantId'] = $request->resourceTenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateErAttachment',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateErAttachmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a network instance connection.
     *
     * @remarks
     * When you call this operation to create a network instance connection, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have sufficient quota for network instance connections.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the network instance connection. In this case, the network instance connection may not be created yet, and the system is still creating the network instance in the background. You can query the connection status of a network instance by ListErAttachments or GetErAttachment:
     *     *   If the connection status of the network instance is Executing, the network instance is being created.
     *     *   If the connection status of the network instance is Available, the network instance is created.
     *
     * @param request - CreateErAttachmentRequest
     *
     * @returns CreateErAttachmentResponse
     *
     * @param CreateErAttachmentRequest $request
     *
     * @return CreateErAttachmentResponse
     */
    public function createErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErAttachmentWithOptions($request, $runtime);
    }

    /**
     * Users can use this API to create routing policy by specifying the network instance connection under Lingjun HUB.
     *
     * @remarks
     * When you call this operation to create a routing policy, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have created a network instance connection.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the routing policy. In this case, the routing policy instance may not be created yet, and the system background creation task is still in progress. You can use ListErRouteMaps or GetErRouteMap to query the status of a routing policy.
     *     *   If the status of the routing policy is Execute, the system is creating the instance.
     *     *   If the status of the routing policy is Available, the creation is successful.
     *
     * @param request - CreateErRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateErRouteMapResponse
     *
     * @param CreateErRouteMapRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateErRouteMapResponse
     */
    public function createErRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->receptionInstanceId) {
            @$body['ReceptionInstanceId'] = $request->receptionInstanceId;
        }

        if (null !== $request->receptionInstanceOwner) {
            @$body['ReceptionInstanceOwner'] = $request->receptionInstanceOwner;
        }

        if (null !== $request->receptionInstanceType) {
            @$body['ReceptionInstanceType'] = $request->receptionInstanceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->routeMapAction) {
            @$body['RouteMapAction'] = $request->routeMapAction;
        }

        if (null !== $request->routeMapNum) {
            @$body['RouteMapNum'] = $request->routeMapNum;
        }

        if (null !== $request->transmissionInstanceId) {
            @$body['TransmissionInstanceId'] = $request->transmissionInstanceId;
        }

        if (null !== $request->transmissionInstanceOwner) {
            @$body['TransmissionInstanceOwner'] = $request->transmissionInstanceOwner;
        }

        if (null !== $request->transmissionInstanceType) {
            @$body['TransmissionInstanceType'] = $request->transmissionInstanceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateErRouteMap',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateErRouteMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Users can use this API to create routing policy by specifying the network instance connection under Lingjun HUB.
     *
     * @remarks
     * When you call this operation to create a routing policy, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have created a network instance connection.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the routing policy. In this case, the routing policy instance may not be created yet, and the system background creation task is still in progress. You can use ListErRouteMaps or GetErRouteMap to query the status of a routing policy.
     *     *   If the status of the routing policy is Execute, the system is creating the instance.
     *     *   If the status of the routing policy is Available, the creation is successful.
     *
     * @param request - CreateErRouteMapRequest
     *
     * @returns CreateErRouteMapResponse
     *
     * @param CreateErRouteMapRequest $request
     *
     * @return CreateErRouteMapResponse
     */
    public function createErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErRouteMapWithOptions($request, $runtime);
    }

    /**
     * Users can use this API to create a Lingjun subnet under the Lingjun network segment.
     *
     * @remarks
     * When you call this operation to create a Lingjun subnet, note that:
     * *   You have created a Lingjun CIDR block.
     * *   Only one network segment can be specified for a Lingjun subnet.
     * *   The network segment cannot be modified after the Lingjun subnet is created.
     * *   Make sure that you have sufficient Lingjun subnet quota.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun subnet. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListSubnets or GetSubnet operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun subnet is Executed, it indicates that it is being created.
     *     *   If the status of the Lingjun subnet is Available, the creation is successful.
     *
     * @param request - CreateSubnetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubnetResponse
     *
     * @param CreateSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSubnetResponse
     */
    public function createSubnetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cidr) {
            @$body['Cidr'] = $request->cidr;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetName) {
            @$body['SubnetName'] = $request->subnetName;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSubnet',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSubnetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Users can use this API to create a Lingjun subnet under the Lingjun network segment.
     *
     * @remarks
     * When you call this operation to create a Lingjun subnet, note that:
     * *   You have created a Lingjun CIDR block.
     * *   Only one network segment can be specified for a Lingjun subnet.
     * *   The network segment cannot be modified after the Lingjun subnet is created.
     * *   Make sure that you have sufficient Lingjun subnet quota.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun subnet. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListSubnets or GetSubnet operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun subnet is Executed, it indicates that it is being created.
     *     *   If the status of the Lingjun subnet is Available, the creation is successful.
     *
     * @param request - CreateSubnetRequest
     *
     * @returns CreateSubnetResponse
     *
     * @param CreateSubnetRequest $request
     *
     * @return CreateSubnetResponse
     */
    public function createSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubnetWithOptions($request, $runtime);
    }

    /**
     * You can create a Lingjun connection to connect Lingjun network environment and Alibaba Cloud network environment.
     *
     * @remarks
     * When you call this operation to create a Lingjun connection, note that:
     * *   When you specify the vccId parameter, the system will configure the purchased Lingjun connection for you. When the default vccId parameter is set, the system will automatically place an order and configure the Lingjun connection for you.
     * *   Make sure that you have called the InitializeVcc operation to grant permissions.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the Lingjun connection ID, but the Lingjun connection instance may not be created yet, and the system background creation task is still in progress. You can call the ListVccs or GetVcc operation to query the status of the Lingjun connection.
     *     *   If the status of the Lingjun connection is Executed, the Lingjun connection is being created.
     *     *   If the status of the Lingjun connection is Available, the Lingjun connection is created.
     *
     * @param request - CreateVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVccResponse
     *
     * @param CreateVccRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVccResponse
     */
    public function createVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessCouldService) {
            @$body['AccessCouldService'] = $request->accessCouldService;
        }

        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bgpAsn) {
            @$body['BgpAsn'] = $request->bgpAsn;
        }

        if (null !== $request->bgpCidr) {
            @$body['BgpCidr'] = $request->bgpCidr;
        }

        if (null !== $request->cenId) {
            @$body['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$body['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->connectionType) {
            @$body['ConnectionType'] = $request->connectionType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vccName) {
            @$body['VccName'] = $request->vccName;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can create a Lingjun connection to connect Lingjun network environment and Alibaba Cloud network environment.
     *
     * @remarks
     * When you call this operation to create a Lingjun connection, note that:
     * *   When you specify the vccId parameter, the system will configure the purchased Lingjun connection for you. When the default vccId parameter is set, the system will automatically place an order and configure the Lingjun connection for you.
     * *   Make sure that you have called the InitializeVcc operation to grant permissions.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the Lingjun connection ID, but the Lingjun connection instance may not be created yet, and the system background creation task is still in progress. You can call the ListVccs or GetVcc operation to query the status of the Lingjun connection.
     *     *   If the status of the Lingjun connection is Executed, the Lingjun connection is being created.
     *     *   If the status of the Lingjun connection is Available, the Lingjun connection is created.
     *
     * @param request - CreateVccRequest
     *
     * @returns CreateVccResponse
     *
     * @param CreateVccRequest $request
     *
     * @return CreateVccResponse
     */
    public function createVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccWithOptions($request, $runtime);
    }

    /**
     * Users can use this API to connect Lingjun instance to the Lingjun HUB instance of the target account. After authorization, the target account can be associated with your Lingjun connection by using the authorized Lingjun HUB instance.
     *
     * @remarks
     * When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *
     * @param request - CreateVccGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVccGrantRuleResponse
     *
     * @param CreateVccGrantRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVccGrantRuleResponse
     */
    public function createVccGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVccGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVccGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Users can use this API to connect Lingjun instance to the Lingjun HUB instance of the target account. After authorization, the target account can be associated with your Lingjun connection by using the authorized Lingjun HUB instance.
     *
     * @remarks
     * When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *
     * @param request - CreateVccGrantRuleRequest
     *
     * @returns CreateVccGrantRuleResponse
     *
     * @param CreateVccGrantRuleRequest $request
     *
     * @return CreateVccGrantRuleResponse
     */
    public function createVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Create a Lingjun connection route entry.
     *
     * @remarks
     * When you call this operation to create a VBR route entry, take note of the following items:
     * *   After you call this operation, static route entries and BGP network announcements are created on the VBR to which the Lingjun connection belongs.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entry may not be created yet, and the system still creates the static route entry in the background. You can query the status of VBR static route entries by ListVccRouteEntries or GetVccRouteEntry:
     *     *   If the VBR static route entry is in the Executing state, it indicates that it is being created.
     *     *   If the status of the VBR static route entry is Available, the VBR is created.
     *
     * @param request - CreateVccRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVccRouteEntryResponse
     *
     * @param CreateVccRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVccRouteEntryResponse
     */
    public function createVccRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVccRouteEntry',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVccRouteEntryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a Lingjun connection route entry.
     *
     * @remarks
     * When you call this operation to create a VBR route entry, take note of the following items:
     * *   After you call this operation, static route entries and BGP network announcements are created on the VBR to which the Lingjun connection belongs.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entry may not be created yet, and the system still creates the static route entry in the background. You can query the status of VBR static route entries by ListVccRouteEntries or GetVccRouteEntry:
     *     *   If the VBR static route entry is in the Executing state, it indicates that it is being created.
     *     *   If the status of the VBR static route entry is Available, the VBR is created.
     *
     * @param request - CreateVccRouteEntryRequest
     *
     * @returns CreateVccRouteEntryResponse
     *
     * @param CreateVccRouteEntryRequest $request
     *
     * @return CreateVccRouteEntryResponse
     */
    public function createVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Create a private Lingjun CIDR block. This CIDR block has an independent network environment.
     *
     * @remarks
     * When you call this operation to create a CIDR block for Lingjun, take note of the following:
     * *   A Lingjun network segment can specify an additional network segment in addition to a main network segment.
     * *   After the Lingjun network segment is created, the network segment cannot be modified.
     * *   Make sure that you have a sufficient quota of Lingjun CIDR blocks.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun network segment. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListVpds or GetVpd operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun CIDR block is Executed, the CIDR block is being created.
     *     *   If the status of the Lingjun CIDR block is Available, the creation is successful.
     *
     * @param request - CreateVpdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpdResponse
     *
     * @param CreateVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVpdResponse
     */
    public function createVpdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cidr) {
            @$body['Cidr'] = $request->cidr;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subnets) {
            @$body['Subnets'] = $request->subnets;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vpdName) {
            @$body['VpdName'] = $request->vpdName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVpd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVpdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a private Lingjun CIDR block. This CIDR block has an independent network environment.
     *
     * @remarks
     * When you call this operation to create a CIDR block for Lingjun, take note of the following:
     * *   A Lingjun network segment can specify an additional network segment in addition to a main network segment.
     * *   After the Lingjun network segment is created, the network segment cannot be modified.
     * *   Make sure that you have a sufficient quota of Lingjun CIDR blocks.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun network segment. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListVpds or GetVpd operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun CIDR block is Executed, the CIDR block is being created.
     *     *   If the status of the Lingjun CIDR block is Available, the creation is successful.
     *
     * @param request - CreateVpdRequest
     *
     * @returns CreateVpdResponse
     *
     * @param CreateVpdRequest $request
     *
     * @return CreateVpdResponse
     */
    public function createVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpdWithOptions($request, $runtime);
    }

    /**
     * Users can use this API to authorize Lingjun HUB instances of the target account. After authorization, the target account can be associated with your Lingjun CIDR block by using the authorized Lingjun HUB instance.
     *
     * @remarks
     * When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *
     * @param request - CreateVpdGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpdGrantRuleResponse
     *
     * @param CreateVpdGrantRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVpdGrantRuleResponse
     */
    public function createVpdGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVpdGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVpdGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Users can use this API to authorize Lingjun HUB instances of the target account. After authorization, the target account can be associated with your Lingjun CIDR block by using the authorized Lingjun HUB instance.
     *
     * @remarks
     * When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *
     * @param request - CreateVpdGrantRuleRequest
     *
     * @returns CreateVpdGrantRuleResponse
     *
     * @param CreateVpdGrantRuleRequest $request
     *
     * @return CreateVpdGrantRuleResponse
     */
    public function createVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Delete Lingjun Elastic Network Interface. After deletion, all relevant data will be lost and cannot be recovered. Please operate with caution.
     *
     * @param request - DeleteElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteElasticNetworkInterfaceResponse
     *
     * @param DeleteElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteElasticNetworkInterfaceResponse
     */
    public function deleteElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete Lingjun Elastic Network Interface. After deletion, all relevant data will be lost and cannot be recovered. Please operate with caution.
     *
     * @param request - DeleteElasticNetworkInterfaceRequest
     *
     * @returns DeleteElasticNetworkInterfaceResponse
     *
     * @param DeleteElasticNetworkInterfaceRequest $request
     *
     * @return DeleteElasticNetworkInterfaceResponse
     */
    public function deleteElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * After you delete a Lingjun HUB instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete the Lingjun HUB, note that:
     * *   Before you delete the instance, make sure that no network instance is connected to the Lingjun HUB instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun HUB instance may not be deleted, and the system background deletion task is still in progress. You can call the ListErs or GetEr operation to query the deletion status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Deleting, the Lingjun HUB instance is being deleted.
     *     *   If no Lingjun HUB instance is recorded, the Lingjun HUB instance has been deleted.
     *
     * @param request - DeleteErRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteErResponse
     *
     * @param DeleteErRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteErResponse
     */
    public function deleteErWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEr',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteErResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteErResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * After you delete a Lingjun HUB instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete the Lingjun HUB, note that:
     * *   Before you delete the instance, make sure that no network instance is connected to the Lingjun HUB instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun HUB instance may not be deleted, and the system background deletion task is still in progress. You can call the ListErs or GetEr operation to query the deletion status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Deleting, the Lingjun HUB instance is being deleted.
     *     *   If no Lingjun HUB instance is recorded, the Lingjun HUB instance has been deleted.
     *
     * @param request - DeleteErRequest
     *
     * @returns DeleteErResponse
     *
     * @param DeleteErRequest $request
     *
     * @return DeleteErResponse
     */
    public function deleteEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErWithOptions($request, $runtime);
    }

    /**
     * If you delete a network instance that is connected to an instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a network instance connection, take note of the following:
     * *   Before you delete the instance, make sure that no routing policy exists under the network instance connection instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the network instance that is connected to the instance may not be deleted. The system still deletes the instance in the background. You can call the ListErAttachments or GetErAttachment to query the deletion status of network instance connections:
     *     *   If the status of the network instance connection is Deleting, the network instance connection is being deleted.
     *     *   If there is no connection record for the network instance, the connection to the network instance has been deleted.
     *
     * @param request - DeleteErAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteErAttachmentResponse
     *
     * @param DeleteErAttachmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteErAttachmentResponse
     */
    public function deleteErAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erAttachmentId) {
            @$body['ErAttachmentId'] = $request->erAttachmentId;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteErAttachment',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteErAttachmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you delete a network instance that is connected to an instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a network instance connection, take note of the following:
     * *   Before you delete the instance, make sure that no routing policy exists under the network instance connection instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the network instance that is connected to the instance may not be deleted. The system still deletes the instance in the background. You can call the ListErAttachments or GetErAttachment to query the deletion status of network instance connections:
     *     *   If the status of the network instance connection is Deleting, the network instance connection is being deleted.
     *     *   If there is no connection record for the network instance, the connection to the network instance has been deleted.
     *
     * @param request - DeleteErAttachmentRequest
     *
     * @returns DeleteErAttachmentResponse
     *
     * @param DeleteErAttachmentRequest $request
     *
     * @return DeleteErAttachmentResponse
     */
    public function deleteErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErAttachmentWithOptions($request, $runtime);
    }

    /**
     * If you delete a routing policy instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a routing policy, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the routing policy instance may not be deleted yet, and the system background deletion task is still in progress. You can call the ListErRouteMaps or GetErRouteMap operation to query the deletion status of a routing policy.
     *     *   If the routing policy is in the Deleting state, the routing policy instance is being deleted.
     *     *   If no routing policy instance is recorded, the routing policy instance has been deleted.
     *
     * @param request - DeleteErRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteErRouteMapResponse
     *
     * @param DeleteErRouteMapRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteErRouteMapResponse
     */
    public function deleteErRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erRouteMapIds) {
            @$body['ErRouteMapIds'] = $request->erRouteMapIds;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteErRouteMap',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteErRouteMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you delete a routing policy instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a routing policy, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the routing policy instance may not be deleted yet, and the system background deletion task is still in progress. You can call the ListErRouteMaps or GetErRouteMap operation to query the deletion status of a routing policy.
     *     *   If the routing policy is in the Deleting state, the routing policy instance is being deleted.
     *     *   If no routing policy instance is recorded, the routing policy instance has been deleted.
     *
     * @param request - DeleteErRouteMapRequest
     *
     * @returns DeleteErRouteMapResponse
     *
     * @param DeleteErRouteMapRequest $request
     *
     * @return DeleteErRouteMapResponse
     */
    public function deleteErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErRouteMapWithOptions($request, $runtime);
    }

    /**
     * If you delete a Lingjun subnet instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a Lingjun subnet, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun subnet instance may not be deleted, and the system background deletion task is still in progress. You can call the ListSubnets or GetSubnet operation to query the deletion status of the subnet.
     *     *   If the status of the Lingjun subnet is Deleting, the Lingjun subnet instance is being deleted.
     *     *   If there is no record of the Lingjun subnet instance, the Lingjun subnet instance has been deleted.
     *
     * @param request - DeleteSubnetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSubnetResponse
     *
     * @param DeleteSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSubnetResponse
     */
    public function deleteSubnetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSubnet',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSubnetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you delete a Lingjun subnet instance, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a Lingjun subnet, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun subnet instance may not be deleted, and the system background deletion task is still in progress. You can call the ListSubnets or GetSubnet operation to query the deletion status of the subnet.
     *     *   If the status of the Lingjun subnet is Deleting, the Lingjun subnet instance is being deleted.
     *     *   If there is no record of the Lingjun subnet instance, the Lingjun subnet instance has been deleted.
     *
     * @param request - DeleteSubnetRequest
     *
     * @returns DeleteSubnetResponse
     *
     * @param DeleteSubnetRequest $request
     *
     * @return DeleteSubnetResponse
     */
    public function deleteSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubnetWithOptions($request, $runtime);
    }

    /**
     * If you delete a Lingjun HUB cross-account authorization that is connected to Lingjun, the related data is lost and cannot be recovered.
     *
     * @param request - DeleteVccGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVccGrantRuleResponse
     *
     * @param DeleteVccGrantRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVccGrantRuleResponse
     */
    public function deleteVccGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVccGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVccGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you delete a Lingjun HUB cross-account authorization that is connected to Lingjun, the related data is lost and cannot be recovered.
     *
     * @param request - DeleteVccGrantRuleRequest
     *
     * @returns DeleteVccGrantRuleResponse
     *
     * @param DeleteVccGrantRuleRequest $request
     *
     * @return DeleteVccGrantRuleResponse
     */
    public function deleteVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Delete a Lingjun connection route entry.
     *
     * @remarks
     * When you call this operation to delete a VBR static route entry, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entries may not be deleted. The system still deletes the VBR static route entries in the background. You can call the ListVccRouteEntries or GetVccRouteEntry to query the deletion status of VBR static route entries:
     *     *   If the VBR static route entry is in the Deleting state, the VBR static route entry is being deleted.
     *     *   If no VBR static route entry instance is recorded, the VBR static route entry instance has been deleted.
     *
     * @param request - DeleteVccRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVccRouteEntryResponse
     *
     * @param DeleteVccRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVccRouteEntryResponse
     */
    public function deleteVccRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vccRouteEntryId) {
            @$body['VccRouteEntryId'] = $request->vccRouteEntryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVccRouteEntry',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVccRouteEntryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete a Lingjun connection route entry.
     *
     * @remarks
     * When you call this operation to delete a VBR static route entry, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entries may not be deleted. The system still deletes the VBR static route entries in the background. You can call the ListVccRouteEntries or GetVccRouteEntry to query the deletion status of VBR static route entries:
     *     *   If the VBR static route entry is in the Deleting state, the VBR static route entry is being deleted.
     *     *   If no VBR static route entry instance is recorded, the VBR static route entry instance has been deleted.
     *
     * @param request - DeleteVccRouteEntryRequest
     *
     * @returns DeleteVccRouteEntryResponse
     *
     * @param DeleteVccRouteEntryRequest $request
     *
     * @return DeleteVccRouteEntryResponse
     */
    public function deleteVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * After you delete a Lingjun CIDR block, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a Lingjun CIDR block, take note of the following items:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   Before deleting, make sure that all Lingjun subnet instances under the Lingjun CIDR block have been deleted.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun network segment instance may not be deleted, and the system background deletion task is still in progress. You can call the ListVpds or GetVpd operation to query the deletion status of the CIDR block.
     *     *   If the status of the Lingjun CIDR block is Deleting, the Lingjun CIDR block is being deleted.
     *     *   If there is no record of the Lingjun CIDR block instance, the Lingjun CIDR block instance has been deleted.
     *
     * @param request - DeleteVpdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpdResponse
     *
     * @param DeleteVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteVpdResponse
     */
    public function deleteVpdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVpd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVpdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVpdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * After you delete a Lingjun CIDR block, the related data is lost and cannot be recovered.
     *
     * @remarks
     * When you call this operation to delete a Lingjun CIDR block, take note of the following items:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   Before deleting, make sure that all Lingjun subnet instances under the Lingjun CIDR block have been deleted.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun network segment instance may not be deleted, and the system background deletion task is still in progress. You can call the ListVpds or GetVpd operation to query the deletion status of the CIDR block.
     *     *   If the status of the Lingjun CIDR block is Deleting, the Lingjun CIDR block is being deleted.
     *     *   If there is no record of the Lingjun CIDR block instance, the Lingjun CIDR block instance has been deleted.
     *
     * @param request - DeleteVpdRequest
     *
     * @returns DeleteVpdResponse
     *
     * @param DeleteVpdRequest $request
     *
     * @return DeleteVpdResponse
     */
    public function deleteVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpdWithOptions($request, $runtime);
    }

    /**
     * Delete the Lingjun HUB cross-account authorization for a Lingjun CIDR block. After the deletion, the related data is lost and cannot be recovered.
     *
     * @param request - DeleteVpdGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpdGrantRuleResponse
     *
     * @param DeleteVpdGrantRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVpdGrantRuleResponse
     */
    public function deleteVpdGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVpdGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVpdGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete the Lingjun HUB cross-account authorization for a Lingjun CIDR block. After the deletion, the related data is lost and cannot be recovered.
     *
     * @param request - DeleteVpdGrantRuleRequest
     *
     * @returns DeleteVpdGrantRuleResponse
     *
     * @param DeleteVpdGrantRuleRequest $request
     *
     * @return DeleteVpdGrantRuleResponse
     */
    public function deleteVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Query whether the user has the SLR role-AliyunServiceRoleForEfloVcc required for Lingjun connection.
     *
     * @remarks
     * You can call this operation to query whether a user account has a **AliyunServiceRoleForEfloVcc** role.
     * >  If you do not have a **AliyunServiceRoleForEfloVcc** role, you need to use the initializeVcc interface to complete authorization, otherwise users will not be able to use Lingjun to connect to the product.
     *
     * @param request - DescribeSlrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlrResponse
     *
     * @param DescribeSlrRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeSlrResponse
     */
    public function describeSlrWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlr',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlrResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlrResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query whether the user has the SLR role-AliyunServiceRoleForEfloVcc required for Lingjun connection.
     *
     * @remarks
     * You can call this operation to query whether a user account has a **AliyunServiceRoleForEfloVcc** role.
     * >  If you do not have a **AliyunServiceRoleForEfloVcc** role, you need to use the initializeVcc interface to complete authorization, otherwise users will not be able to use Lingjun to connect to the product.
     *
     * @param request - DescribeSlrRequest
     *
     * @returns DescribeSlrResponse
     *
     * @param DescribeSlrRequest $request
     *
     * @return DescribeSlrResponse
     */
    public function describeSlr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlrWithOptions($request, $runtime);
    }

    /**
     * Unbind Lingjun ENI from NC.
     *
     * @remarks
     * This interface is an asynchronous interface, and you need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the unbound state.
     *
     * @param request - DetachElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachElasticNetworkInterfaceResponse
     *
     * @param DetachElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DetachElasticNetworkInterfaceResponse
     */
    public function detachElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unbind Lingjun ENI from NC.
     *
     * @remarks
     * This interface is an asynchronous interface, and you need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the unbound state.
     *
     * @param request - DetachElasticNetworkInterfaceRequest
     *
     * @returns DetachElasticNetworkInterfaceResponse
     *
     * @param DetachElasticNetworkInterfaceRequest $request
     *
     * @return DetachElasticNetworkInterfaceResponse
     */
    public function detachElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Users can use this API to query the destination CIDR block of the source policy instance when creating a routing strategy.
     *
     * @param request - GetDestinationCidrBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDestinationCidrBlockResponse
     *
     * @param GetDestinationCidrBlockRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDestinationCidrBlockResponse
     */
    public function getDestinationCidrBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDestinationCidrBlock',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDestinationCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDestinationCidrBlockResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Users can use this API to query the destination CIDR block of the source policy instance when creating a routing strategy.
     *
     * @param request - GetDestinationCidrBlockRequest
     *
     * @returns GetDestinationCidrBlockResponse
     *
     * @param GetDestinationCidrBlockRequest $request
     *
     * @return GetDestinationCidrBlockResponse
     */
    public function getDestinationCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDestinationCidrBlockWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an LENI.
     *
     * @param request - GetElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetElasticNetworkInterfaceResponse
     *
     * @param GetElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetElasticNetworkInterfaceResponse
     */
    public function getElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an LENI.
     *
     * @param request - GetElasticNetworkInterfaceRequest
     *
     * @returns GetElasticNetworkInterfaceResponse
     *
     * @param GetElasticNetworkInterfaceRequest $request
     *
     * @return GetElasticNetworkInterfaceResponse
     */
    public function getElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Queries the Lingjun HUB.
     *
     * @param request - GetErRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErResponse
     *
     * @param GetErRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return GetErResponse
     */
    public function getErWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEr',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Lingjun HUB.
     *
     * @param request - GetErRequest
     *
     * @returns GetErResponse
     *
     * @param GetErRequest $request
     *
     * @return GetErResponse
     */
    public function getEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErWithOptions($request, $runtime);
    }

    /**
     * Queries network instance connections.
     *
     * @param request - GetErAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErAttachmentResponse
     *
     * @param GetErAttachmentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetErAttachmentResponse
     */
    public function getErAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erAttachmentId) {
            @$body['ErAttachmentId'] = $request->erAttachmentId;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetErAttachment',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErAttachmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries network instance connections.
     *
     * @param request - GetErAttachmentRequest
     *
     * @returns GetErAttachmentResponse
     *
     * @param GetErAttachmentRequest $request
     *
     * @return GetErAttachmentResponse
     */
    public function getErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErAttachmentWithOptions($request, $runtime);
    }

    /**
     * Queries the details of Lingjun HUB route entries.
     *
     * @param request - GetErRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErRouteEntryResponse
     *
     * @param GetErRouteEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetErRouteEntryResponse
     */
    public function getErRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erRouteEntryId) {
            @$body['ErRouteEntryId'] = $request->erRouteEntryId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetErRouteEntry',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErRouteEntryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of Lingjun HUB route entries.
     *
     * @param request - GetErRouteEntryRequest
     *
     * @returns GetErRouteEntryResponse
     *
     * @param GetErRouteEntryRequest $request
     *
     * @return GetErRouteEntryResponse
     */
    public function getErRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErRouteEntryWithOptions($request, $runtime);
    }

    /**
     * query lingjun hub routing policy details.
     *
     * @param request - GetErRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErRouteMapResponse
     *
     * @param GetErRouteMapRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetErRouteMapResponse
     */
    public function getErRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erRouteMapId) {
            @$body['ErRouteMapId'] = $request->erRouteMapId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetErRouteMap',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErRouteMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * query lingjun hub routing policy details.
     *
     * @param request - GetErRouteMapRequest
     *
     * @returns GetErRouteMapResponse
     *
     * @param GetErRouteMapRequest $request
     *
     * @return GetErRouteMapResponse
     */
    public function getErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErRouteMapWithOptions($request, $runtime);
    }

    /**
     * Query the physical topology information of Lingjun network interface controller and Lingjun nodes under VPD.
     *
     * @param request - GetFabricTopologyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFabricTopologyResponse
     *
     * @param GetFabricTopologyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFabricTopologyResponse
     */
    public function getFabricTopologyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->lniIds) {
            @$body['LniIds'] = $request->lniIds;
        }

        if (null !== $request->nodeIds) {
            @$body['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFabricTopology',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFabricTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFabricTopologyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query the physical topology information of Lingjun network interface controller and Lingjun nodes under VPD.
     *
     * @param request - GetFabricTopologyRequest
     *
     * @returns GetFabricTopologyResponse
     *
     * @param GetFabricTopologyRequest $request
     *
     * @return GetFabricTopologyResponse
     */
    public function getFabricTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFabricTopologyWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of the secondary private IP address of a specified Lingjun Elastic Network Interface.
     *
     * @param request - GetLeniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLeniPrivateIpAddressResponse
     *
     * @param GetLeniPrivateIpAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLeniPrivateIpAddressResponse
     */
    public function getLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLeniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLeniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the details of the secondary private IP address of a specified Lingjun Elastic Network Interface.
     *
     * @param request - GetLeniPrivateIpAddressRequest
     *
     * @returns GetLeniPrivateIpAddressResponse
     *
     * @param GetLeniPrivateIpAddressRequest $request
     *
     * @return GetLeniPrivateIpAddressResponse
     */
    public function getLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Obtains the details about the secondary private IP address.
     *
     * @param request - GetLniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLniPrivateIpAddressResponse
     *
     * @param GetLniPrivateIpAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLniPrivateIpAddressResponse
     */
    public function getLniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the details about the secondary private IP address.
     *
     * @param request - GetLniPrivateIpAddressRequest
     *
     * @returns GetLniPrivateIpAddressResponse
     *
     * @param GetLniPrivateIpAddressRequest $request
     *
     * @return GetLniPrivateIpAddressResponse
     */
    public function getLniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Queries information about an LNI.
     *
     * @param request - GetNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkInterfaceResponse
     *
     * @param GetNetworkInterfaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNetworkInterfaceResponse
     */
    public function getNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about an LNI.
     *
     * @param request - GetNetworkInterfaceRequest
     *
     * @returns GetNetworkInterfaceResponse
     *
     * @param GetNetworkInterfaceRequest $request
     *
     * @return GetNetworkInterfaceResponse
     */
    public function getNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Queries the network information of a node.
     *
     * @param request - GetNodeInfoForPodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeInfoForPodResponse
     *
     * @param GetNodeInfoForPodRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNodeInfoForPodResponse
     */
    public function getNodeInfoForPodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNodeInfoForPod',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodeInfoForPodResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeInfoForPodResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the network information of a node.
     *
     * @param request - GetNodeInfoForPodRequest
     *
     * @returns GetNodeInfoForPodResponse
     *
     * @param GetNodeInfoForPodRequest $request
     *
     * @return GetNodeInfoForPodResponse
     */
    public function getNodeInfoForPod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeInfoForPodWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Lingjun subnet, including the type, CIDR block, instance ID, instance status, and number of NCs.
     *
     * @param request - GetSubnetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubnetResponse
     *
     * @param GetSubnetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSubnetResponse
     */
    public function getSubnetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSubnet',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSubnetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Lingjun subnet, including the type, CIDR block, instance ID, instance status, and number of NCs.
     *
     * @param request - GetSubnetRequest
     *
     * @returns GetSubnetResponse
     *
     * @param GetSubnetRequest $request
     *
     * @return GetSubnetResponse
     */
    public function getSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubnetWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Lingjun connection, including the specification, Express Connect circuit access port type, instance status, bandwidth, and BGP CIDR block.
     *
     * @param request - GetVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVccResponse
     *
     * @param GetVccRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetVccResponse
     */
    public function getVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Lingjun connection, including the specification, Express Connect circuit access port type, instance status, bandwidth, and BGP CIDR block.
     *
     * @param request - GetVccRequest
     *
     * @returns GetVccResponse
     *
     * @param GetVccRequest $request
     *
     * @return GetVccResponse
     */
    public function getVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccWithOptions($request, $runtime);
    }

    /**
     * Queries the details of cross-account resource authorization for a Lingjun connection, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *
     * @param request - GetVccGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVccGrantRuleResponse
     *
     * @param GetVccGrantRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetVccGrantRuleResponse
     */
    public function getVccGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVccGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVccGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of cross-account resource authorization for a Lingjun connection, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *
     * @param request - GetVccGrantRuleRequest
     *
     * @returns GetVccGrantRuleResponse
     *
     * @param GetVccGrantRuleRequest $request
     *
     * @return GetVccGrantRuleResponse
     */
    public function getVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Queries route entries.
     *
     * @param request - GetVccRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVccRouteEntryResponse
     *
     * @param GetVccRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVccRouteEntryResponse
     */
    public function getVccRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vccRouteEntryId) {
            @$body['VccRouteEntryId'] = $request->vccRouteEntryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVccRouteEntry',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVccRouteEntryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries route entries.
     *
     * @param request - GetVccRouteEntryRequest
     *
     * @returns GetVccRouteEntryResponse
     *
     * @param GetVccRouteEntryRequest $request
     *
     * @return GetVccRouteEntryResponse
     */
    public function getVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Lingjun CIDR block, including the status of the Lingjun CIDR block, the CIDR block, the number of subnets and NCs.
     *
     * @param request - GetVpdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpdResponse
     *
     * @param GetVpdRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetVpdResponse
     */
    public function getVpdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVpd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVpdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVpdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Lingjun CIDR block, including the status of the Lingjun CIDR block, the CIDR block, the number of subnets and NCs.
     *
     * @param request - GetVpdRequest
     *
     * @returns GetVpdResponse
     *
     * @param GetVpdRequest $request
     *
     * @return GetVpdResponse
     */
    public function getVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdWithOptions($request, $runtime);
    }

    /**
     * Queries the details of cross-account resource authorization for a Lingjun CIDR block, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *
     * @param request - GetVpdGrantRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpdGrantRuleResponse
     *
     * @param GetVpdGrantRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetVpdGrantRuleResponse
     */
    public function getVpdGrantRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVpdGrantRule',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVpdGrantRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of cross-account resource authorization for a Lingjun CIDR block, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *
     * @param request - GetVpdGrantRuleRequest
     *
     * @returns GetVpdGrantRuleResponse
     *
     * @param GetVpdGrantRuleRequest $request
     *
     * @return GetVpdGrantRuleResponse
     */
    public function getVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * Queries route entries.
     *
     * @param request - GetVpdRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpdRouteEntryResponse
     *
     * @param GetVpdRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVpdRouteEntryResponse
     */
    public function getVpdRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->vpdRouteEntryId) {
            @$body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVpdRouteEntry',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVpdRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVpdRouteEntryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries route entries.
     *
     * @param request - GetVpdRouteEntryRequest
     *
     * @returns GetVpdRouteEntryResponse
     *
     * @param GetVpdRouteEntryRequest $request
     *
     * @return GetVpdRouteEntryResponse
     */
    public function getVpdRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Initialize the Lingjun connection and authorize Intelligent Computing Lingjun to create an SLR in your account.
     *
     * @param request - InitializeVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeVccResponse
     *
     * @param InitializeVccRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InitializeVccResponse
     */
    public function initializeVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitializeVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InitializeVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitializeVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Initialize the Lingjun connection and authorize Intelligent Computing Lingjun to create an SLR in your account.
     *
     * @param request - InitializeVccRequest
     *
     * @returns InitializeVccResponse
     *
     * @param InitializeVccRequest $request
     *
     * @return InitializeVccResponse
     */
    public function initializeVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeVccWithOptions($request, $runtime);
    }

    /**
     * Queries the LENIs that are associated with a Lingjun node.
     *
     * @param request - ListElasticNetworkInterfacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListElasticNetworkInterfacesResponse
     *
     * @param ListElasticNetworkInterfacesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListElasticNetworkInterfacesResponse
     */
    public function listElasticNetworkInterfacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->networkType) {
            @$body['NetworkType'] = $request->networkType;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListElasticNetworkInterfaces',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListElasticNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListElasticNetworkInterfacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the LENIs that are associated with a Lingjun node.
     *
     * @param request - ListElasticNetworkInterfacesRequest
     *
     * @returns ListElasticNetworkInterfacesResponse
     *
     * @param ListElasticNetworkInterfacesRequest $request
     *
     * @return ListElasticNetworkInterfacesResponse
     */
    public function listElasticNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listElasticNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * Queries network instance connections.
     *
     * @param request - ListErAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListErAttachmentsResponse
     *
     * @param ListErAttachmentsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListErAttachmentsResponse
     */
    public function listErAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoReceiveAllRoute) {
            @$body['AutoReceiveAllRoute'] = $request->autoReceiveAllRoute;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erAttachmentId) {
            @$body['ErAttachmentId'] = $request->erAttachmentId;
        }

        if (null !== $request->erAttachmentName) {
            @$body['ErAttachmentName'] = $request->erAttachmentName;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceTenantId) {
            @$body['ResourceTenantId'] = $request->resourceTenantId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListErAttachments',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListErAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListErAttachmentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries network instance connections.
     *
     * @param request - ListErAttachmentsRequest
     *
     * @returns ListErAttachmentsResponse
     *
     * @param ListErAttachmentsRequest $request
     *
     * @return ListErAttachmentsResponse
     */
    public function listErAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErAttachmentsWithOptions($request, $runtime);
    }

    /**
     * Queries the route entries of the Lingjun HUB.
     *
     * @param request - ListErRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListErRouteEntriesResponse
     *
     * @param ListErRouteEntriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListErRouteEntriesResponse
     */
    public function listErRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->ignoreDetailedRouteEntry) {
            @$body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nextHopId) {
            @$body['NextHopId'] = $request->nextHopId;
        }

        if (null !== $request->nextHopType) {
            @$body['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->routeType) {
            @$body['RouteType'] = $request->routeType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListErRouteEntries',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListErRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListErRouteEntriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the route entries of the Lingjun HUB.
     *
     * @param request - ListErRouteEntriesRequest
     *
     * @returns ListErRouteEntriesResponse
     *
     * @param ListErRouteEntriesRequest $request
     *
     * @return ListErRouteEntriesResponse
     */
    public function listErRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Routing policies are queried.
     *
     * @param request - ListErRouteMapsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListErRouteMapsResponse
     *
     * @param ListErRouteMapsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListErRouteMapsResponse
     */
    public function listErRouteMapsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erRouteMapId) {
            @$body['ErRouteMapId'] = $request->erRouteMapId;
        }

        if (null !== $request->erRouteMapNum) {
            @$body['ErRouteMapNum'] = $request->erRouteMapNum;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->receptionInstanceId) {
            @$body['ReceptionInstanceId'] = $request->receptionInstanceId;
        }

        if (null !== $request->receptionInstanceName) {
            @$body['ReceptionInstanceName'] = $request->receptionInstanceName;
        }

        if (null !== $request->receptionInstanceType) {
            @$body['ReceptionInstanceType'] = $request->receptionInstanceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->routeMapAction) {
            @$body['RouteMapAction'] = $request->routeMapAction;
        }

        if (null !== $request->transmissionInstanceId) {
            @$body['TransmissionInstanceId'] = $request->transmissionInstanceId;
        }

        if (null !== $request->transmissionInstanceName) {
            @$body['TransmissionInstanceName'] = $request->transmissionInstanceName;
        }

        if (null !== $request->transmissionInstanceType) {
            @$body['TransmissionInstanceType'] = $request->transmissionInstanceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListErRouteMaps',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListErRouteMapsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListErRouteMapsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Routing policies are queried.
     *
     * @param request - ListErRouteMapsRequest
     *
     * @returns ListErRouteMapsResponse
     *
     * @param ListErRouteMapsRequest $request
     *
     * @return ListErRouteMapsResponse
     */
    public function listErRouteMaps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErRouteMapsWithOptions($request, $runtime);
    }

    /**
     * Queries the Lingjun HUB.
     *
     * @param request - ListErsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListErsResponse
     *
     * @param ListErsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListErsResponse
     */
    public function listErsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erName) {
            @$body['ErName'] = $request->erName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->masterZoneId) {
            @$body['MasterZoneId'] = $request->masterZoneId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListErs',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListErsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListErsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Lingjun HUB.
     *
     * @param request - ListErsRequest
     *
     * @returns ListErsResponse
     *
     * @param ListErsRequest $request
     *
     * @return ListErsResponse
     */
    public function listErs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErsWithOptions($request, $runtime);
    }

    /**
     * Queries the GPU node list of a specified GPU node whose communication distance does not exceed the specified NCD.
     *
     * @param request - ListInstancesByNcdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesByNcdResponse
     *
     * @param ListInstancesByNcdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstancesByNcdResponse
     */
    public function listInstancesByNcdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->maxNcd) {
            @$body['MaxNcd'] = $request->maxNcd;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstancesByNcd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesByNcdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesByNcdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the GPU node list of a specified GPU node whose communication distance does not exceed the specified NCD.
     *
     * @param request - ListInstancesByNcdRequest
     *
     * @returns ListInstancesByNcdResponse
     *
     * @param ListInstancesByNcdRequest $request
     *
     * @return ListInstancesByNcdResponse
     */
    public function listInstancesByNcd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesByNcdWithOptions($request, $runtime);
    }

    /**
     * Queries the list of secondary private IP addresses of Lingjun Elastic Network Interface.
     *
     * @param request - ListLeniPrivateIpAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLeniPrivateIpAddressesResponse
     *
     * @param ListLeniPrivateIpAddressesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLeniPrivateIpAddressesResponse
     */
    public function listLeniPrivateIpAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->privateIpAddress) {
            @$body['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLeniPrivateIpAddresses',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLeniPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLeniPrivateIpAddressesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of secondary private IP addresses of Lingjun Elastic Network Interface.
     *
     * @param request - ListLeniPrivateIpAddressesRequest
     *
     * @returns ListLeniPrivateIpAddressesResponse
     *
     * @param ListLeniPrivateIpAddressesRequest $request
     *
     * @return ListLeniPrivateIpAddressesResponse
     */
    public function listLeniPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLeniPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of secondary private IP addresses of Lingjun network interface controller.
     *
     * @param request - ListLniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLniPrivateIpAddressResponse
     *
     * @param ListLniPrivateIpAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLniPrivateIpAddressResponse
     */
    public function listLniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of secondary private IP addresses of Lingjun network interface controller.
     *
     * @param request - ListLniPrivateIpAddressRequest
     *
     * @returns ListLniPrivateIpAddressResponse
     *
     * @param ListLniPrivateIpAddressRequest $request
     *
     * @return ListLniPrivateIpAddressResponse
     */
    public function listLniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Queries Lingjun network interfaces (LNIs).
     *
     * @param request - ListNetworkInterfacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetworkInterfacesResponse
     *
     * @param ListNetworkInterfacesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListNetworkInterfacesResponse
     */
    public function listNetworkInterfacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNetworkInterfaces',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkInterfacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Lingjun network interfaces (LNIs).
     *
     * @param request - ListNetworkInterfacesRequest
     *
     * @returns ListNetworkInterfacesResponse
     *
     * @param ListNetworkInterfacesRequest $request
     *
     * @return ListNetworkInterfacesResponse
     */
    public function listNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * Queries node network information.
     *
     * @param request - ListNodeInfosForPodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodeInfosForPodResponse
     *
     * @param ListNodeInfosForPodRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListNodeInfosForPodResponse
     */
    public function listNodeInfosForPodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNodeInfosForPod',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodeInfosForPodResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodeInfosForPodResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries node network information.
     *
     * @param request - ListNodeInfosForPodRequest
     *
     * @returns ListNodeInfosForPodResponse
     *
     * @param ListNodeInfosForPodRequest $request
     *
     * @return ListNodeInfosForPodResponse
     */
    public function listNodeInfosForPod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInfosForPodWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of one or more Lingjun subnets, including the Lingjun subnet type, network address segment, and instance ID of the Lingjun CIDR block.
     *
     * @param request - ListSubnetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubnetsResponse
     *
     * @param ListSubnetsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSubnetsResponse
     */
    public function listSubnetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        if (null !== $request->subnetName) {
            @$body['SubnetName'] = $request->subnetName;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSubnets',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSubnetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSubnetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of one or more Lingjun subnets, including the Lingjun subnet type, network address segment, and instance ID of the Lingjun CIDR block.
     *
     * @param request - ListSubnetsRequest
     *
     * @returns ListSubnetsResponse
     *
     * @param ListSubnetsRequest $request
     *
     * @return ListSubnetsResponse
     */
    public function listSubnets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubnetsWithOptions($request, $runtime);
    }

    /**
     * Queries the traffic rate of a Lingjun connection.
     *
     * @param request - ListVccFlowInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVccFlowInfosResponse
     *
     * @param ListVccFlowInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVccFlowInfosResponse
     */
    public function listVccFlowInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->direction) {
            @$body['Direction'] = $request->direction;
        }

        if (null !== $request->from) {
            @$body['From'] = $request->from;
        }

        if (null !== $request->metricName) {
            @$body['MetricName'] = $request->metricName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->to) {
            @$body['To'] = $request->to;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVccFlowInfos',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVccFlowInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVccFlowInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the traffic rate of a Lingjun connection.
     *
     * @param request - ListVccFlowInfosRequest
     *
     * @returns ListVccFlowInfosResponse
     *
     * @param ListVccFlowInfosRequest $request
     *
     * @return ListVccFlowInfosResponse
     */
    public function listVccFlowInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccFlowInfosWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Lingjun connection authorization, including the authorized tenant ID, region, and Lingjun HUB instance information.
     *
     * @param request - ListVccGrantRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVccGrantRulesResponse
     *
     * @param ListVccGrantRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListVccGrantRulesResponse
     */
    public function listVccGrantRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->forSelect) {
            @$body['ForSelect'] = $request->forSelect;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVccGrantRules',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVccGrantRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVccGrantRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Lingjun connection authorization, including the authorized tenant ID, region, and Lingjun HUB instance information.
     *
     * @param request - ListVccGrantRulesRequest
     *
     * @returns ListVccGrantRulesResponse
     *
     * @param ListVccGrantRulesRequest $request
     *
     * @return ListVccGrantRulesResponse
     */
    public function listVccGrantRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccGrantRulesWithOptions($request, $runtime);
    }

    /**
     * Queries Lingjun connection route entries.
     *
     * @param request - ListVccRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVccRouteEntriesResponse
     *
     * @param ListVccRouteEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListVccRouteEntriesResponse
     */
    public function listVccRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->ignoreDetailedRouteEntry) {
            @$body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }

        if (null !== $request->nextHopId) {
            @$body['NextHopId'] = $request->nextHopId;
        }

        if (null !== $request->nextHopType) {
            @$body['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->routeType) {
            @$body['RouteType'] = $request->routeType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vpdRouteEntryId) {
            @$body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVccRouteEntries',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVccRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVccRouteEntriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Lingjun connection route entries.
     *
     * @param request - ListVccRouteEntriesRequest
     *
     * @returns ListVccRouteEntriesResponse
     *
     * @param ListVccRouteEntriesRequest $request
     *
     * @return ListVccRouteEntriesResponse
     */
    public function listVccRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * query the details of one or more lingjun connections, including the specification, Express Connect circuit access port type, instance status, bandwidth, and bgp network segment.
     *
     * @param request - ListVccsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVccsResponse
     *
     * @param ListVccsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListVccsResponse
     */
    public function listVccsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cenId) {
            @$body['CenId'] = $request->cenId;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->exStatus) {
            @$body['ExStatus'] = $request->exStatus;
        }

        if (null !== $request->filterErId) {
            @$body['FilterErId'] = $request->filterErId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVccs',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVccsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVccsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * query the details of one or more lingjun connections, including the specification, Express Connect circuit access port type, instance status, bandwidth, and bgp network segment.
     *
     * @param request - ListVccsRequest
     *
     * @returns ListVccsResponse
     *
     * @param ListVccsRequest $request
     *
     * @return ListVccsResponse
     */
    public function listVccs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of one or more route entries in the CIDR block of Lingjun, including the route type, route entry status, destination CIDR block, and instance information of the next route entry.
     *
     * @param request - ListVpdGrantRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpdGrantRulesResponse
     *
     * @param ListVpdGrantRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListVpdGrantRulesResponse
     */
    public function listVpdGrantRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->forSelect) {
            @$body['ForSelect'] = $request->forSelect;
        }

        if (null !== $request->grantRuleId) {
            @$body['GrantRuleId'] = $request->grantRuleId;
        }

        if (null !== $request->grantTenantId) {
            @$body['GrantTenantId'] = $request->grantTenantId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVpdGrantRules',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVpdGrantRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVpdGrantRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more route entries in the CIDR block of Lingjun, including the route type, route entry status, destination CIDR block, and instance information of the next route entry.
     *
     * @param request - ListVpdGrantRulesRequest
     *
     * @returns ListVpdGrantRulesResponse
     *
     * @param ListVpdGrantRulesRequest $request
     *
     * @return ListVpdGrantRulesResponse
     */
    public function listVpdGrantRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdGrantRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the route entries of the Lingjun CIDR block.
     *
     * @param request - ListVpdRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpdRouteEntriesResponse
     *
     * @param ListVpdRouteEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListVpdRouteEntriesResponse
     */
    public function listVpdRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->ignoreDetailedRouteEntry) {
            @$body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }

        if (null !== $request->nextHopId) {
            @$body['NextHopId'] = $request->nextHopId;
        }

        if (null !== $request->nextHopType) {
            @$body['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->routeType) {
            @$body['RouteType'] = $request->routeType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->vpdRouteEntryId) {
            @$body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVpdRouteEntries',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVpdRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVpdRouteEntriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the route entries of the Lingjun CIDR block.
     *
     * @param request - ListVpdRouteEntriesRequest
     *
     * @returns ListVpdRouteEntriesResponse
     *
     * @param ListVpdRouteEntriesRequest $request
     *
     * @return ListVpdRouteEntriesResponse
     */
    public function listVpdRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of one or more Lingjun CIDR blocks, including the status of Lingjun CIDR blocks, Cidr addresses, service CIDR blocks, and Subnet.
     *
     * @param request - ListVpdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpdsResponse
     *
     * @param ListVpdsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListVpdsResponse
     */
    public function listVpdsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePage) {
            @$body['EnablePage'] = $request->enablePage;
        }

        if (null !== $request->filterErId) {
            @$body['FilterErId'] = $request->filterErId;
        }

        if (null !== $request->forSelect) {
            @$body['ForSelect'] = $request->forSelect;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->vpdName) {
            @$body['VpdName'] = $request->vpdName;
        }

        if (null !== $request->withDependence) {
            @$body['WithDependence'] = $request->withDependence;
        }

        if (null !== $request->withoutVcc) {
            @$body['WithoutVcc'] = $request->withoutVcc;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVpds',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVpdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVpdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more Lingjun CIDR blocks, including the status of Lingjun CIDR blocks, Cidr addresses, service CIDR blocks, and Subnet.
     *
     * @param request - ListVpdsRequest
     *
     * @returns ListVpdsResponse
     *
     * @param ListVpdsRequest $request
     *
     * @return ListVpdsResponse
     */
    public function listVpds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdsWithOptions($request, $runtime);
    }

    /**
     * Query the network communication distance (Network Communication Distance,NCD) between instances (Lingjun node, Lingjun network interface controller).
     *
     * @param request - QueryInstanceNcdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceNcdResponse
     *
     * @param QueryInstanceNcdRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryInstanceNcdResponse
     */
    public function queryInstanceNcdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId1) {
            @$body['InstanceId1'] = $request->instanceId1;
        }

        if (null !== $request->instanceId2) {
            @$body['InstanceId2'] = $request->instanceId2;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryInstanceNcd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryInstanceNcdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryInstanceNcdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query the network communication distance (Network Communication Distance,NCD) between instances (Lingjun node, Lingjun network interface controller).
     *
     * @param request - QueryInstanceNcdRequest
     *
     * @returns QueryInstanceNcdResponse
     *
     * @param QueryInstanceNcdRequest $request
     *
     * @return QueryInstanceNcdResponse
     */
    public function queryInstanceNcd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceNcdWithOptions($request, $runtime);
    }

    /**
     * Unsubscribe inactive Lingjun connection.
     *
     * @remarks
     * Only unsubscribable for Lingjun connections in the prepayment status.
     *
     * @param request - RefundVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundVccResponse
     *
     * @param RefundVccRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RefundVccResponse
     */
    public function refundVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefundVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RefundVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefundVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unsubscribe inactive Lingjun connection.
     *
     * @remarks
     * Only unsubscribable for Lingjun connections in the prepayment status.
     *
     * @param request - RefundVccRequest
     *
     * @returns RefundVccResponse
     *
     * @param RefundVccRequest $request
     *
     * @return RefundVccResponse
     */
    public function refundVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundVccWithOptions($request, $runtime);
    }

    /**
     * Retry trying to create /delete a Lingjun connection.
     *
     * @remarks
     * This operation allows the user to retry the operation if the Lingjun connection creation and deletion processes fail. Only the Lingjun connection in the creation failure and deletion failure state can be retried
     *
     * @param request - RetryVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryVccResponse
     *
     * @param RetryVccRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RetryVccResponse
     */
    public function retryVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetryVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RetryVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetryVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Retry trying to create /delete a Lingjun connection.
     *
     * @remarks
     * This operation allows the user to retry the operation if the Lingjun connection creation and deletion processes fail. Only the Lingjun connection in the creation failure and deletion failure state can be retried
     *
     * @param request - RetryVccRequest
     *
     * @returns RetryVccResponse
     *
     * @param RetryVccRequest $request
     *
     * @return RetryVccResponse
     */
    public function retryVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryVccWithOptions($request, $runtime);
    }

    /**
     * Deletes an assigned secondary private IP address.
     *
     * @param request - UnAssignPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnAssignPrivateIpAddressResponse
     *
     * @param UnAssignPrivateIpAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnAssignPrivateIpAddressResponse
     */
    public function unAssignPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->networkInterfaceId) {
            @$body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->privateIpAddress) {
            @$body['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnAssignPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnAssignPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnAssignPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an assigned secondary private IP address.
     *
     * @param request - UnAssignPrivateIpAddressRequest
     *
     * @returns UnAssignPrivateIpAddressResponse
     *
     * @param UnAssignPrivateIpAddressRequest $request
     *
     * @return UnAssignPrivateIpAddressResponse
     */
    public function unAssignPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssignPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * This function can be used to delete the additional network segment of VPD.
     *
     * @remarks
     * *
     * **Warning** If the attached CIDR block has Lingjun subnet resources, you must delete the dependent resources before you can delete the attached CIDR block.
     *
     * @param request - UnAssociateVpdCidrBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnAssociateVpdCidrBlockResponse
     *
     * @param UnAssociateVpdCidrBlockRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnAssociateVpdCidrBlockResponse
     */
    public function unAssociateVpdCidrBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->secondaryCidrBlock) {
            @$body['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnAssociateVpdCidrBlock',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnAssociateVpdCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnAssociateVpdCidrBlockResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This function can be used to delete the additional network segment of VPD.
     *
     * @remarks
     * *
     * **Warning** If the attached CIDR block has Lingjun subnet resources, you must delete the dependent resources before you can delete the attached CIDR block.
     *
     * @param request - UnAssociateVpdCidrBlockRequest
     *
     * @returns UnAssociateVpdCidrBlockResponse
     *
     * @param UnAssociateVpdCidrBlockRequest $request
     *
     * @return UnAssociateVpdCidrBlockResponse
     */
    public function unAssociateVpdCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssociateVpdCidrBlockWithOptions($request, $runtime);
    }

    /**
     * Delete the assigned secondary private IP address of Lingjun Elastic Network Interface.
     *
     * @param request - UnassignLeniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassignLeniPrivateIpAddressResponse
     *
     * @param UnassignLeniPrivateIpAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnassignLeniPrivateIpAddressResponse
     */
    public function unassignLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnassignLeniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnassignLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnassignLeniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete the assigned secondary private IP address of Lingjun Elastic Network Interface.
     *
     * @param request - UnassignLeniPrivateIpAddressRequest
     *
     * @returns UnassignLeniPrivateIpAddressResponse
     *
     * @param UnassignLeniPrivateIpAddressRequest $request
     *
     * @return UnassignLeniPrivateIpAddressResponse
     */
    public function unassignLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Update Lingjun Elastic Network Interface information.
     *
     * @param request - UpdateElasticNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateElasticNetworkInterfaceResponse
     *
     * @param UpdateElasticNetworkInterfaceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateElasticNetworkInterfaceResponse
     */
    public function updateElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$body['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateElasticNetworkInterface',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateElasticNetworkInterfaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update Lingjun Elastic Network Interface information.
     *
     * @param request - UpdateElasticNetworkInterfaceRequest
     *
     * @returns UpdateElasticNetworkInterfaceResponse
     *
     * @param UpdateElasticNetworkInterfaceRequest $request
     *
     * @return UpdateElasticNetworkInterfaceResponse
     */
    public function updateElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Updated Lingjun HUB.
     *
     * @param request - UpdateErRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateErResponse
     *
     * @param UpdateErRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return UpdateErResponse
     */
    public function updateErWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erName) {
            @$body['ErName'] = $request->erName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEr',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateErResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateErResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updated Lingjun HUB.
     *
     * @param request - UpdateErRequest
     *
     * @returns UpdateErResponse
     *
     * @param UpdateErRequest $request
     *
     * @return UpdateErResponse
     */
    public function updateEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErWithOptions($request, $runtime);
    }

    /**
     * Updates a network instance connection.
     *
     * @param request - UpdateErAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateErAttachmentResponse
     *
     * @param UpdateErAttachmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateErAttachmentResponse
     */
    public function updateErAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erAttachmentId) {
            @$body['ErAttachmentId'] = $request->erAttachmentId;
        }

        if (null !== $request->erAttachmentName) {
            @$body['ErAttachmentName'] = $request->erAttachmentName;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateErAttachment',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateErAttachmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a network instance connection.
     *
     * @param request - UpdateErAttachmentRequest
     *
     * @returns UpdateErAttachmentResponse
     *
     * @param UpdateErAttachmentRequest $request
     *
     * @return UpdateErAttachmentResponse
     */
    public function updateErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErAttachmentWithOptions($request, $runtime);
    }

    /**
     * Update some information about the routing policy, including the description and name of the routing policy.
     *
     * @param request - UpdateErRouteMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateErRouteMapResponse
     *
     * @param UpdateErRouteMapRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateErRouteMapResponse
     */
    public function updateErRouteMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->erId) {
            @$body['ErId'] = $request->erId;
        }

        if (null !== $request->erRouteMapId) {
            @$body['ErRouteMapId'] = $request->erRouteMapId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateErRouteMap',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateErRouteMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update some information about the routing policy, including the description and name of the routing policy.
     *
     * @param request - UpdateErRouteMapRequest
     *
     * @returns UpdateErRouteMapResponse
     *
     * @param UpdateErRouteMapRequest $request
     *
     * @return UpdateErRouteMapResponse
     */
    public function updateErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErRouteMapWithOptions($request, $runtime);
    }

    /**
     * Updated the description of the secondary private network assigned by the Lingjun Elastic Network Interface.
     *
     * @param request - UpdateLeniPrivateIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLeniPrivateIpAddressResponse
     *
     * @param UpdateLeniPrivateIpAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLeniPrivateIpAddressResponse
     */
    public function updateLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->elasticNetworkInterfaceId) {
            @$body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }

        if (null !== $request->ipName) {
            @$body['IpName'] = $request->ipName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLeniPrivateIpAddress',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLeniPrivateIpAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updated the description of the secondary private network assigned by the Lingjun Elastic Network Interface.
     *
     * @param request - UpdateLeniPrivateIpAddressRequest
     *
     * @returns UpdateLeniPrivateIpAddressResponse
     *
     * @param UpdateLeniPrivateIpAddressRequest $request
     *
     * @return UpdateLeniPrivateIpAddressResponse
     */
    public function updateLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * Updates some information about a specified subnet instance, including the name of the subnet instance.
     *
     * @param request - UpdateSubnetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubnetResponse
     *
     * @param UpdateSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSubnetResponse
     */
    public function updateSubnetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subnetId) {
            @$body['SubnetId'] = $request->subnetId;
        }

        if (null !== $request->subnetName) {
            @$body['SubnetName'] = $request->subnetName;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSubnet',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSubnetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates some information about a specified subnet instance, including the name of the subnet instance.
     *
     * @param request - UpdateSubnetRequest
     *
     * @returns UpdateSubnetResponse
     *
     * @param UpdateSubnetRequest $request
     *
     * @return UpdateSubnetResponse
     */
    public function updateSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubnetWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Lingjun connection instance, including the peak bandwidth and name of the Lingjun connection instance.
     *
     * @param request - UpdateVccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVccResponse
     *
     * @param UpdateVccRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateVccResponse
     */
    public function updateVccWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->orderId) {
            @$body['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vccId) {
            @$body['VccId'] = $request->vccId;
        }

        if (null !== $request->vccName) {
            @$body['VccName'] = $request->vccName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVcc',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateVccResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateVccResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a Lingjun connection instance, including the peak bandwidth and name of the Lingjun connection instance.
     *
     * @param request - UpdateVccRequest
     *
     * @returns UpdateVccResponse
     *
     * @param UpdateVccRequest $request
     *
     * @return UpdateVccResponse
     */
    public function updateVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVccWithOptions($request, $runtime);
    }

    /**
     * Updates the information about the Lingjun CIDR block, including the name of the Lingjun CIDR block.
     *
     * @param request - UpdateVpdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpdResponse
     *
     * @param UpdateVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateVpdResponse
     */
    public function updateVpdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpdId) {
            @$body['VpdId'] = $request->vpdId;
        }

        if (null !== $request->vpdName) {
            @$body['VpdName'] = $request->vpdName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVpd',
            'version' => '2022-05-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateVpdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about the Lingjun CIDR block, including the name of the Lingjun CIDR block.
     *
     * @param request - UpdateVpdRequest
     *
     * @returns UpdateVpdResponse
     *
     * @param UpdateVpdRequest $request
     *
     * @return UpdateVpdResponse
     */
    public function updateVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpdWithOptions($request, $runtime);
    }
}
