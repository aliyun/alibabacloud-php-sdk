<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Apply for a secondary private IP address for the current Lingjun Elastic Network Interface. You can automatically assign a secondary private IP address.
     *  *
     * @description Apply for a secondary private IP address for the specified Lingjun Elastic Network Interface.
     * *   If the PrivateIp field is empty, a secondary private IP address is automatically assigned and the unique identifier of the IP address is returned.
     * *   You can use the GetLeniPrivateIpAddress or ListLeniPrivateIpAddresses interface to check whether the secondary private IP address is assigned.
     *  *
     * @param AssignLeniPrivateIpAddressRequest $request AssignLeniPrivateIpAddressRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignLeniPrivateIpAddressResponse AssignLeniPrivateIpAddressResponse
     */
    public function assignLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $body['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssignLeniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Apply for a secondary private IP address for the current Lingjun Elastic Network Interface. You can automatically assign a secondary private IP address.
     *  *
     * @description Apply for a secondary private IP address for the specified Lingjun Elastic Network Interface.
     * *   If the PrivateIp field is empty, a secondary private IP address is automatically assigned and the unique identifier of the IP address is returned.
     * *   You can use the GetLeniPrivateIpAddress or ListLeniPrivateIpAddresses interface to check whether the secondary private IP address is assigned.
     *  *
     * @param AssignLeniPrivateIpAddressRequest $request AssignLeniPrivateIpAddressRequest
     *
     * @return AssignLeniPrivateIpAddressResponse AssignLeniPrivateIpAddressResponse
     */
    public function assignLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for a private secondary IP address for the current LNI. You can also call this operation to assign a secondary MAC address to the current LNI.
     *  *
     * @description >  Apply for secondary private IP addresses
     * *   By default, each network interface controller can apply for three secondary private IP addresses. If the quota is exceeded, contact the administrator.
     * *   The secondary private IP address is allocated from the Lingjun subnet to which the current network interface controller belongs. The first address and the last two addresses belong to reserved addresses and do not participate in the allocation.
     *  *
     * @param AssignPrivateIpAddressRequest $request AssignPrivateIpAddressRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignPrivateIpAddressResponse AssignPrivateIpAddressResponse
     */
    public function assignPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignMac)) {
            $body['AssignMac'] = $request->assignMac;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $body['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->skipConfig)) {
            $body['SkipConfig'] = $request->skipConfig;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssignPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for a private secondary IP address for the current LNI. You can also call this operation to assign a secondary MAC address to the current LNI.
     *  *
     * @description >  Apply for secondary private IP addresses
     * *   By default, each network interface controller can apply for three secondary private IP addresses. If the quota is exceeded, contact the administrator.
     * *   The secondary private IP address is allocated from the Lingjun subnet to which the current network interface controller belongs. The first address and the last two addresses belong to reserved addresses and do not participate in the allocation.
     *  *
     * @param AssignPrivateIpAddressRequest $request AssignPrivateIpAddressRequest
     *
     * @return AssignPrivateIpAddressResponse AssignPrivateIpAddressResponse
     */
    public function assignPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary When the VPD primary network segment address is not enough to allocate, you can choose to create an additional network segment as the additional network segment of the VPD primary network segment.
     *  *
     * @description >  **Add a CIDR block**
     * *   The CIDR block cannot start with 0. The subnet mask must be 8 to 28 bits in length.
     * *   The secondary IPv4 CIDR block must not overlap with the primary IPv4 CIDR block of the Lingjun CIDR block and the added secondary IPv4 CIDR block.
     * *   You cannot use 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 as the CIDR block of Lingjun. Example: In the Lingjun CIDR block whose primary IPv4 CIDR block is 192.168.0.0/16, you cannot add the following CIDR blocks as additional IPv4 CIDR blocks. The CIDR block that is in the same range as 192.168.0.0/16. A CIDR block that is larger than 192.168.0.0/16. Example: 192.168.0.0/8. A CIDR block that is smaller than 192.168.0.0/16. Example: 192.168.0.0/24.
     * *   By default, each tenant can create three additional CIDR blocks in each region.
     *  *
     * @param AssociateVpdCidrBlockRequest $request AssociateVpdCidrBlockRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateVpdCidrBlockResponse AssociateVpdCidrBlockResponse
     */
    public function associateVpdCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->secondaryCidrBlock)) {
            $body['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateVpdCidrBlock',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateVpdCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary When the VPD primary network segment address is not enough to allocate, you can choose to create an additional network segment as the additional network segment of the VPD primary network segment.
     *  *
     * @description >  **Add a CIDR block**
     * *   The CIDR block cannot start with 0. The subnet mask must be 8 to 28 bits in length.
     * *   The secondary IPv4 CIDR block must not overlap with the primary IPv4 CIDR block of the Lingjun CIDR block and the added secondary IPv4 CIDR block.
     * *   You cannot use 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 as the CIDR block of Lingjun. Example: In the Lingjun CIDR block whose primary IPv4 CIDR block is 192.168.0.0/16, you cannot add the following CIDR blocks as additional IPv4 CIDR blocks. The CIDR block that is in the same range as 192.168.0.0/16. A CIDR block that is larger than 192.168.0.0/16. Example: 192.168.0.0/8. A CIDR block that is smaller than 192.168.0.0/16. Example: 192.168.0.0/24.
     * *   By default, each tenant can create three additional CIDR blocks in each region.
     *  *
     * @param AssociateVpdCidrBlockRequest $request AssociateVpdCidrBlockRequest
     *
     * @return AssociateVpdCidrBlockResponse AssociateVpdCidrBlockResponse
     */
    public function associateVpdCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVpdCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Lingjun ENI is bound to NC.
     *  *
     * @description This interface is an asynchronous interface. You need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the available state.
     *  *
     * @param AttachElasticNetworkInterfaceRequest $request AttachElasticNetworkInterfaceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachElasticNetworkInterfaceResponse AttachElasticNetworkInterfaceResponse
     */
    public function attachElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lingjun ENI is bound to NC.
     *  *
     * @description This interface is an asynchronous interface. You need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the available state.
     *  *
     * @param AttachElasticNetworkInterfaceRequest $request AttachElasticNetworkInterfaceRequest
     *
     * @return AttachElasticNetworkInterfaceResponse AttachElasticNetworkInterfaceResponse
     */
    public function attachElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an LENI.
     *  *
     * @param CreateElasticNetworkInterfaceRequest $request CreateElasticNetworkInterfaceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateElasticNetworkInterfaceResponse CreateElasticNetworkInterfaceResponse
     */
    public function createElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableJumboFrame)) {
            $body['EnableJumboFrame'] = $request->enableJumboFrame;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an LENI.
     *  *
     * @param CreateElasticNetworkInterfaceRequest $request CreateElasticNetworkInterfaceRequest
     *
     * @return CreateElasticNetworkInterfaceResponse CreateElasticNetworkInterfaceResponse
     */
    public function createElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Create a Lingjun HUB.
     *  *
     * @description When you call this operation to create a Lingjun HUB, note that:
     * *   Make sure that you have sufficient Lingjun HUB quota.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the ID of a Lingjun HUB. At this time, the Lingjun HUB instance may not be created yet, and the system background creation task is still in progress. You can call the ListErs or GetEr operation to query the status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Executing, it indicates that it is being created.
     *     *   If the status of the Lingjun HUB is Available, the creation is successful.
     *  *
     * @param CreateErRequest $request CreateErRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateErResponse CreateErResponse
     */
    public function createErWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->erName)) {
            $body['ErName'] = $request->erName;
        }
        if (!Utils::isUnset($request->masterZoneId)) {
            $body['MasterZoneId'] = $request->masterZoneId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEr',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateErResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create a Lingjun HUB.
     *  *
     * @description When you call this operation to create a Lingjun HUB, note that:
     * *   Make sure that you have sufficient Lingjun HUB quota.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the ID of a Lingjun HUB. At this time, the Lingjun HUB instance may not be created yet, and the system background creation task is still in progress. You can call the ListErs or GetEr operation to query the status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Executing, it indicates that it is being created.
     *     *   If the status of the Lingjun HUB is Available, the creation is successful.
     *  *
     * @param CreateErRequest $request CreateErRequest
     *
     * @return CreateErResponse CreateErResponse
     */
    public function createEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErWithOptions($request, $runtime);
    }

    /**
     * @summary Create a network instance connection.
     *  *
     * @description When you call this operation to create a network instance connection, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have sufficient quota for network instance connections.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the network instance connection. In this case, the network instance connection may not be created yet, and the system is still creating the network instance in the background. You can query the connection status of a network instance by ListErAttachments or GetErAttachment:
     *     *   If the connection status of the network instance is Executing, the network instance is being created.
     *     *   If the connection status of the network instance is Available, the network instance is created.
     *  *
     * @param CreateErAttachmentRequest $request CreateErAttachmentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateErAttachmentResponse CreateErAttachmentResponse
     */
    public function createErAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoReceiveAllRoute)) {
            $body['AutoReceiveAllRoute'] = $request->autoReceiveAllRoute;
        }
        if (!Utils::isUnset($request->erAttachmentName)) {
            $body['ErAttachmentName'] = $request->erAttachmentName;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceTenantId)) {
            $body['ResourceTenantId'] = $request->resourceTenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateErAttachment',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create a network instance connection.
     *  *
     * @description When you call this operation to create a network instance connection, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have sufficient quota for network instance connections.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the network instance connection. In this case, the network instance connection may not be created yet, and the system is still creating the network instance in the background. You can query the connection status of a network instance by ListErAttachments or GetErAttachment:
     *     *   If the connection status of the network instance is Executing, the network instance is being created.
     *     *   If the connection status of the network instance is Available, the network instance is created.
     *  *
     * @param CreateErAttachmentRequest $request CreateErAttachmentRequest
     *
     * @return CreateErAttachmentResponse CreateErAttachmentResponse
     */
    public function createErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary Users can use this API to create routing policy by specifying the network instance connection under Lingjun HUB.
     *  *
     * @description When you call this operation to create a routing policy, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have created a network instance connection.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the routing policy. In this case, the routing policy instance may not be created yet, and the system background creation task is still in progress. You can use ListErRouteMaps or GetErRouteMap to query the status of a routing policy.
     *     *   If the status of the routing policy is Execute, the system is creating the instance.
     *     *   If the status of the routing policy is Available, the creation is successful.
     *  *
     * @param CreateErRouteMapRequest $request CreateErRouteMapRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateErRouteMapResponse CreateErRouteMapResponse
     */
    public function createErRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->receptionInstanceId)) {
            $body['ReceptionInstanceId'] = $request->receptionInstanceId;
        }
        if (!Utils::isUnset($request->receptionInstanceOwner)) {
            $body['ReceptionInstanceOwner'] = $request->receptionInstanceOwner;
        }
        if (!Utils::isUnset($request->receptionInstanceType)) {
            $body['ReceptionInstanceType'] = $request->receptionInstanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->routeMapAction)) {
            $body['RouteMapAction'] = $request->routeMapAction;
        }
        if (!Utils::isUnset($request->routeMapNum)) {
            $body['RouteMapNum'] = $request->routeMapNum;
        }
        if (!Utils::isUnset($request->transmissionInstanceId)) {
            $body['TransmissionInstanceId'] = $request->transmissionInstanceId;
        }
        if (!Utils::isUnset($request->transmissionInstanceOwner)) {
            $body['TransmissionInstanceOwner'] = $request->transmissionInstanceOwner;
        }
        if (!Utils::isUnset($request->transmissionInstanceType)) {
            $body['TransmissionInstanceType'] = $request->transmissionInstanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateErRouteMap',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Users can use this API to create routing policy by specifying the network instance connection under Lingjun HUB.
     *  *
     * @description When you call this operation to create a routing policy, note that:
     * *   Make sure that you have created a Lingjun HUB instance.
     * *   Make sure that you have created a network instance connection.
     * *   This operation is an asynchronous operation. After you call this operation, the system returns the ID of the routing policy. In this case, the routing policy instance may not be created yet, and the system background creation task is still in progress. You can use ListErRouteMaps or GetErRouteMap to query the status of a routing policy.
     *     *   If the status of the routing policy is Execute, the system is creating the instance.
     *     *   If the status of the routing policy is Available, the creation is successful.
     *  *
     * @param CreateErRouteMapRequest $request CreateErRouteMapRequest
     *
     * @return CreateErRouteMapResponse CreateErRouteMapResponse
     */
    public function createErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createErRouteMapWithOptions($request, $runtime);
    }

    /**
     * @summary Users can use this API to create a Lingjun subnet under the Lingjun network segment.
     *  *
     * @description When you call this operation to create a Lingjun subnet, note that:
     * *   You have created a Lingjun CIDR block.
     * *   Only one network segment can be specified for a Lingjun subnet.
     * *   The network segment cannot be modified after the Lingjun subnet is created.
     * *   Make sure that you have sufficient Lingjun subnet quota.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun subnet. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListSubnets or GetSubnet operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun subnet is Executed, it indicates that it is being created.
     *     *   If the status of the Lingjun subnet is Available, the creation is successful.
     *  *
     * @param CreateSubnetRequest $request CreateSubnetRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubnetResponse CreateSubnetResponse
     */
    public function createSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cidr)) {
            $body['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetName)) {
            $body['SubnetName'] = $request->subnetName;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Users can use this API to create a Lingjun subnet under the Lingjun network segment.
     *  *
     * @description When you call this operation to create a Lingjun subnet, note that:
     * *   You have created a Lingjun CIDR block.
     * *   Only one network segment can be specified for a Lingjun subnet.
     * *   The network segment cannot be modified after the Lingjun subnet is created.
     * *   Make sure that you have sufficient Lingjun subnet quota.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun subnet. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListSubnets or GetSubnet operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun subnet is Executed, it indicates that it is being created.
     *     *   If the status of the Lingjun subnet is Available, the creation is successful.
     *  *
     * @param CreateSubnetRequest $request CreateSubnetRequest
     *
     * @return CreateSubnetResponse CreateSubnetResponse
     */
    public function createSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubnetWithOptions($request, $runtime);
    }

    /**
     * @summary You can create a Lingjun connection to connect Lingjun network environment and Alibaba Cloud network environment.
     *  *
     * @description When you call this operation to create a Lingjun connection, note that:
     * *   When you specify the vccId parameter, the system will configure the purchased Lingjun connection for you. When the default vccId parameter is set, the system will automatically place an order and configure the Lingjun connection for you.
     * *   Make sure that you have called the InitializeVcc operation to grant permissions.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the Lingjun connection ID, but the Lingjun connection instance may not be created yet, and the system background creation task is still in progress. You can call the ListVccs or GetVcc operation to query the status of the Lingjun connection.
     *     *   If the status of the Lingjun connection is Executed, the Lingjun connection is being created.
     *     *   If the status of the Lingjun connection is Available, the Lingjun connection is created.
     *  *
     * @param CreateVccRequest $request CreateVccRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVccResponse CreateVccResponse
     */
    public function createVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessCouldService)) {
            $body['AccessCouldService'] = $request->accessCouldService;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bgpAsn)) {
            $body['BgpAsn'] = $request->bgpAsn;
        }
        if (!Utils::isUnset($request->bgpCidr)) {
            $body['BgpCidr'] = $request->bgpCidr;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $body['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->connectionType)) {
            $body['ConnectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vccName)) {
            $body['VccName'] = $request->vccName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can create a Lingjun connection to connect Lingjun network environment and Alibaba Cloud network environment.
     *  *
     * @description When you call this operation to create a Lingjun connection, note that:
     * *   When you specify the vccId parameter, the system will configure the purchased Lingjun connection for you. When the default vccId parameter is set, the system will automatically place an order and configure the Lingjun connection for you.
     * *   Make sure that you have called the InitializeVcc operation to grant permissions.
     * *   This interface is an asynchronous interface. After this interface is called, the system will return the Lingjun connection ID, but the Lingjun connection instance may not be created yet, and the system background creation task is still in progress. You can call the ListVccs or GetVcc operation to query the status of the Lingjun connection.
     *     *   If the status of the Lingjun connection is Executed, the Lingjun connection is being created.
     *     *   If the status of the Lingjun connection is Available, the Lingjun connection is created.
     *  *
     * @param CreateVccRequest $request CreateVccRequest
     *
     * @return CreateVccResponse CreateVccResponse
     */
    public function createVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccWithOptions($request, $runtime);
    }

    /**
     * @summary Users can use this API to connect Lingjun instance to the Lingjun HUB instance of the target account. After authorization, the target account can be associated with your Lingjun connection by using the authorized Lingjun HUB instance.
     *  *
     * @description When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *  *
     * @param CreateVccGrantRuleRequest $request CreateVccGrantRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVccGrantRuleResponse CreateVccGrantRuleResponse
     */
    public function createVccGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVccGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Users can use this API to connect Lingjun instance to the Lingjun HUB instance of the target account. After authorization, the target account can be associated with your Lingjun connection by using the authorized Lingjun HUB instance.
     *  *
     * @description When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *  *
     * @param CreateVccGrantRuleRequest $request CreateVccGrantRuleRequest
     *
     * @return CreateVccGrantRuleResponse CreateVccGrantRuleResponse
     */
    public function createVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Create a Lingjun connection route entry.
     *  *
     * @description When you call this operation to create a VBR route entry, take note of the following items:
     * *   After you call this operation, static route entries and BGP network announcements are created on the VBR to which the Lingjun connection belongs.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entry may not be created yet, and the system still creates the static route entry in the background. You can query the status of VBR static route entries by ListVccRouteEntries or GetVccRouteEntry:
     *     *   If the VBR static route entry is in the Executing state, it indicates that it is being created.
     *     *   If the status of the VBR static route entry is Available, the VBR is created.
     *  *
     * @param CreateVccRouteEntryRequest $request CreateVccRouteEntryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVccRouteEntryResponse CreateVccRouteEntryResponse
     */
    public function createVccRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVccRouteEntry',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create a Lingjun connection route entry.
     *  *
     * @description When you call this operation to create a VBR route entry, take note of the following items:
     * *   After you call this operation, static route entries and BGP network announcements are created on the VBR to which the Lingjun connection belongs.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entry may not be created yet, and the system still creates the static route entry in the background. You can query the status of VBR static route entries by ListVccRouteEntries or GetVccRouteEntry:
     *     *   If the VBR static route entry is in the Executing state, it indicates that it is being created.
     *     *   If the status of the VBR static route entry is Available, the VBR is created.
     *  *
     * @param CreateVccRouteEntryRequest $request CreateVccRouteEntryRequest
     *
     * @return CreateVccRouteEntryResponse CreateVccRouteEntryResponse
     */
    public function createVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Create a private Lingjun CIDR block. This CIDR block has an independent network environment.
     *  *
     * @description When you call this operation to create a CIDR block for Lingjun, take note of the following:
     * *   A Lingjun network segment can specify an additional network segment in addition to a main network segment.
     * *   After the Lingjun network segment is created, the network segment cannot be modified.
     * *   Make sure that you have a sufficient quota of Lingjun CIDR blocks.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun network segment. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListVpds or GetVpd operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun CIDR block is Executed, the CIDR block is being created.
     *     *   If the status of the Lingjun CIDR block is Available, the creation is successful.
     *  *
     * @param CreateVpdRequest $request CreateVpdRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpdResponse CreateVpdResponse
     */
    public function createVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cidr)) {
            $body['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subnets)) {
            $body['Subnets'] = $request->subnets;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpdName)) {
            $body['VpdName'] = $request->vpdName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create a private Lingjun CIDR block. This CIDR block has an independent network environment.
     *  *
     * @description When you call this operation to create a CIDR block for Lingjun, take note of the following:
     * *   A Lingjun network segment can specify an additional network segment in addition to a main network segment.
     * *   After the Lingjun network segment is created, the network segment cannot be modified.
     * *   Make sure that you have a sufficient quota of Lingjun CIDR blocks.
     * *   This interface is an asynchronous interface. After calling this interface, the system will return the ID of a Lingjun network segment. At this time, the Lingjun network segment may not be created yet, and the system background creation task is still in progress. You can call the ListVpds or GetVpd operation to query the status of the CIDR block of Lingjun.
     *     *   If the status of the Lingjun CIDR block is Executed, the CIDR block is being created.
     *     *   If the status of the Lingjun CIDR block is Available, the creation is successful.
     *  *
     * @param CreateVpdRequest $request CreateVpdRequest
     *
     * @return CreateVpdResponse CreateVpdResponse
     */
    public function createVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpdWithOptions($request, $runtime);
    }

    /**
     * @summary Users can use this API to authorize Lingjun HUB instances of the target account. After authorization, the target account can be associated with your Lingjun CIDR block by using the authorized Lingjun HUB instance.
     *  *
     * @description When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *  *
     * @param CreateVpdGrantRuleRequest $request CreateVpdGrantRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpdGrantRuleResponse CreateVpdGrantRuleResponse
     */
    public function createVpdGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpdGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Users can use this API to authorize Lingjun HUB instances of the target account. After authorization, the target account can be associated with your Lingjun CIDR block by using the authorized Lingjun HUB instance.
     *  *
     * @description When you call this operation to create cross-account authorization for Lingjun HUB, note that:
     * *   Make sure that the Alibaba Cloud ID and Lingjun HUB instance that you want to authorize are correct.
     * *   If you authorize the account of the other party, the account of the other party can load your local network instance to its Lingjun HUB, and the other party\\"s network will be connected to your network. Please proceed with caution.
     *  *
     * @param CreateVpdGrantRuleRequest $request CreateVpdGrantRuleRequest
     *
     * @return CreateVpdGrantRuleResponse CreateVpdGrantRuleResponse
     */
    public function createVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Lingjun Elastic Network Interface. After deletion, all relevant data will be lost and cannot be recovered. Please operate with caution.
     *  *
     * @param DeleteElasticNetworkInterfaceRequest $request DeleteElasticNetworkInterfaceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteElasticNetworkInterfaceResponse DeleteElasticNetworkInterfaceResponse
     */
    public function deleteElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Lingjun Elastic Network Interface. After deletion, all relevant data will be lost and cannot be recovered. Please operate with caution.
     *  *
     * @param DeleteElasticNetworkInterfaceRequest $request DeleteElasticNetworkInterfaceRequest
     *
     * @return DeleteElasticNetworkInterfaceResponse DeleteElasticNetworkInterfaceResponse
     */
    public function deleteElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary After you delete a Lingjun HUB instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete the Lingjun HUB, note that:
     * *   Before you delete the instance, make sure that no network instance is connected to the Lingjun HUB instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun HUB instance may not be deleted, and the system background deletion task is still in progress. You can call the ListErs or GetEr operation to query the deletion status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Deleting, the Lingjun HUB instance is being deleted.
     *     *   If no Lingjun HUB instance is recorded, the Lingjun HUB instance has been deleted.
     *  *
     * @param DeleteErRequest $request DeleteErRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteErResponse DeleteErResponse
     */
    public function deleteErWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEr',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteErResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After you delete a Lingjun HUB instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete the Lingjun HUB, note that:
     * *   Before you delete the instance, make sure that no network instance is connected to the Lingjun HUB instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun HUB instance may not be deleted, and the system background deletion task is still in progress. You can call the ListErs or GetEr operation to query the deletion status of the Lingjun HUB.
     *     *   If the status of the Lingjun HUB is Deleting, the Lingjun HUB instance is being deleted.
     *     *   If no Lingjun HUB instance is recorded, the Lingjun HUB instance has been deleted.
     *  *
     * @param DeleteErRequest $request DeleteErRequest
     *
     * @return DeleteErResponse DeleteErResponse
     */
    public function deleteEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErWithOptions($request, $runtime);
    }

    /**
     * @summary If you delete a network instance that is connected to an instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a network instance connection, take note of the following:
     * *   Before you delete the instance, make sure that no routing policy exists under the network instance connection instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the network instance that is connected to the instance may not be deleted. The system still deletes the instance in the background. You can call the ListErAttachments or GetErAttachment to query the deletion status of network instance connections:
     *     *   If the status of the network instance connection is Deleting, the network instance connection is being deleted.
     *     *   If there is no connection record for the network instance, the connection to the network instance has been deleted.
     *  *
     * @param DeleteErAttachmentRequest $request DeleteErAttachmentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteErAttachmentResponse DeleteErAttachmentResponse
     */
    public function deleteErAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erAttachmentId)) {
            $body['ErAttachmentId'] = $request->erAttachmentId;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteErAttachment',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If you delete a network instance that is connected to an instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a network instance connection, take note of the following:
     * *   Before you delete the instance, make sure that no routing policy exists under the network instance connection instance.
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the network instance that is connected to the instance may not be deleted. The system still deletes the instance in the background. You can call the ListErAttachments or GetErAttachment to query the deletion status of network instance connections:
     *     *   If the status of the network instance connection is Deleting, the network instance connection is being deleted.
     *     *   If there is no connection record for the network instance, the connection to the network instance has been deleted.
     *  *
     * @param DeleteErAttachmentRequest $request DeleteErAttachmentRequest
     *
     * @return DeleteErAttachmentResponse DeleteErAttachmentResponse
     */
    public function deleteErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary If you delete a routing policy instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a routing policy, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the routing policy instance may not be deleted yet, and the system background deletion task is still in progress. You can call the ListErRouteMaps or GetErRouteMap operation to query the deletion status of a routing policy.
     *     *   If the routing policy is in the Deleting state, the routing policy instance is being deleted.
     *     *   If no routing policy instance is recorded, the routing policy instance has been deleted.
     *  *
     * @param DeleteErRouteMapRequest $request DeleteErRouteMapRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteErRouteMapResponse DeleteErRouteMapResponse
     */
    public function deleteErRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erRouteMapIds)) {
            $body['ErRouteMapIds'] = $request->erRouteMapIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteErRouteMap',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If you delete a routing policy instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a routing policy, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the routing policy instance may not be deleted yet, and the system background deletion task is still in progress. You can call the ListErRouteMaps or GetErRouteMap operation to query the deletion status of a routing policy.
     *     *   If the routing policy is in the Deleting state, the routing policy instance is being deleted.
     *     *   If no routing policy instance is recorded, the routing policy instance has been deleted.
     *  *
     * @param DeleteErRouteMapRequest $request DeleteErRouteMapRequest
     *
     * @return DeleteErRouteMapResponse DeleteErRouteMapResponse
     */
    public function deleteErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteErRouteMapWithOptions($request, $runtime);
    }

    /**
     * @summary If you delete a Lingjun subnet instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a Lingjun subnet, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun subnet instance may not be deleted, and the system background deletion task is still in progress. You can call the ListSubnets or GetSubnet operation to query the deletion status of the subnet.
     *     *   If the status of the Lingjun subnet is Deleting, the Lingjun subnet instance is being deleted.
     *     *   If there is no record of the Lingjun subnet instance, the Lingjun subnet instance has been deleted.
     *  *
     * @param DeleteSubnetRequest $request DeleteSubnetRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSubnetResponse DeleteSubnetResponse
     */
    public function deleteSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If you delete a Lingjun subnet instance, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a Lingjun subnet, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun subnet instance may not be deleted, and the system background deletion task is still in progress. You can call the ListSubnets or GetSubnet operation to query the deletion status of the subnet.
     *     *   If the status of the Lingjun subnet is Deleting, the Lingjun subnet instance is being deleted.
     *     *   If there is no record of the Lingjun subnet instance, the Lingjun subnet instance has been deleted.
     *  *
     * @param DeleteSubnetRequest $request DeleteSubnetRequest
     *
     * @return DeleteSubnetResponse DeleteSubnetResponse
     */
    public function deleteSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubnetWithOptions($request, $runtime);
    }

    /**
     * @summary If you delete a Lingjun HUB cross-account authorization that is connected to Lingjun, the related data is lost and cannot be recovered.
     *  *
     * @param DeleteVccGrantRuleRequest $request DeleteVccGrantRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVccGrantRuleResponse DeleteVccGrantRuleResponse
     */
    public function deleteVccGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVccGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If you delete a Lingjun HUB cross-account authorization that is connected to Lingjun, the related data is lost and cannot be recovered.
     *  *
     * @param DeleteVccGrantRuleRequest $request DeleteVccGrantRuleRequest
     *
     * @return DeleteVccGrantRuleResponse DeleteVccGrantRuleResponse
     */
    public function deleteVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Delete a Lingjun connection route entry.
     *  *
     * @description When you call this operation to delete a VBR static route entry, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entries may not be deleted. The system still deletes the VBR static route entries in the background. You can call the ListVccRouteEntries or GetVccRouteEntry to query the deletion status of VBR static route entries:
     *     *   If the VBR static route entry is in the Deleting state, the VBR static route entry is being deleted.
     *     *   If no VBR static route entry instance is recorded, the VBR static route entry instance has been deleted.
     *  *
     * @param DeleteVccRouteEntryRequest $request DeleteVccRouteEntryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVccRouteEntryResponse DeleteVccRouteEntryResponse
     */
    public function deleteVccRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vccRouteEntryId)) {
            $body['VccRouteEntryId'] = $request->vccRouteEntryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVccRouteEntry',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete a Lingjun connection route entry.
     *  *
     * @description When you call this operation to delete a VBR static route entry, note that:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   This operation is an asynchronous operation. After you call this operation, the VBR static route entries may not be deleted. The system still deletes the VBR static route entries in the background. You can call the ListVccRouteEntries or GetVccRouteEntry to query the deletion status of VBR static route entries:
     *     *   If the VBR static route entry is in the Deleting state, the VBR static route entry is being deleted.
     *     *   If no VBR static route entry instance is recorded, the VBR static route entry instance has been deleted.
     *  *
     * @param DeleteVccRouteEntryRequest $request DeleteVccRouteEntryRequest
     *
     * @return DeleteVccRouteEntryResponse DeleteVccRouteEntryResponse
     */
    public function deleteVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary After you delete a Lingjun CIDR block, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a Lingjun CIDR block, take note of the following items:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   Before deleting, make sure that all Lingjun subnet instances under the Lingjun CIDR block have been deleted.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun network segment instance may not be deleted, and the system background deletion task is still in progress. You can call the ListVpds or GetVpd operation to query the deletion status of the CIDR block.
     *     *   If the status of the Lingjun CIDR block is Deleting, the Lingjun CIDR block is being deleted.
     *     *   If there is no record of the Lingjun CIDR block instance, the Lingjun CIDR block instance has been deleted.
     *  *
     * @param DeleteVpdRequest $request DeleteVpdRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpdResponse DeleteVpdResponse
     */
    public function deleteVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After you delete a Lingjun CIDR block, the related data is lost and cannot be recovered.
     *  *
     * @description When you call this operation to delete a Lingjun CIDR block, take note of the following items:
     * *   After deletion, all related data is lost and cannot be recovered. Exercise caution when performing this operation.
     * *   Before deleting, make sure that all Lingjun subnet instances under the Lingjun CIDR block have been deleted.
     * *   This interface is an asynchronous interface. After this interface is called, the Lingjun network segment instance may not be deleted, and the system background deletion task is still in progress. You can call the ListVpds or GetVpd operation to query the deletion status of the CIDR block.
     *     *   If the status of the Lingjun CIDR block is Deleting, the Lingjun CIDR block is being deleted.
     *     *   If there is no record of the Lingjun CIDR block instance, the Lingjun CIDR block instance has been deleted.
     *  *
     * @param DeleteVpdRequest $request DeleteVpdRequest
     *
     * @return DeleteVpdResponse DeleteVpdResponse
     */
    public function deleteVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpdWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the Lingjun HUB cross-account authorization for a Lingjun CIDR block. After the deletion, the related data is lost and cannot be recovered.
     *  *
     * @param DeleteVpdGrantRuleRequest $request DeleteVpdGrantRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpdGrantRuleResponse DeleteVpdGrantRuleResponse
     */
    public function deleteVpdGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpdGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the Lingjun HUB cross-account authorization for a Lingjun CIDR block. After the deletion, the related data is lost and cannot be recovered.
     *  *
     * @param DeleteVpdGrantRuleRequest $request DeleteVpdGrantRuleRequest
     *
     * @return DeleteVpdGrantRuleResponse DeleteVpdGrantRuleResponse
     */
    public function deleteVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query whether the user has the SLR role-AliyunServiceRoleForEfloVcc required for Lingjun connection.
     *  *
     * @description You can call this operation to query whether a user account has a **AliyunServiceRoleForEfloVcc** role.
     * >  If you do not have a **AliyunServiceRoleForEfloVcc** role, you need to use the initializeVcc interface to complete authorization, otherwise users will not be able to use Lingjun to connect to the product.
     *  *
     * @param DescribeSlrRequest $request DescribeSlrRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlrResponse DescribeSlrResponse
     */
    public function describeSlrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlr',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query whether the user has the SLR role-AliyunServiceRoleForEfloVcc required for Lingjun connection.
     *  *
     * @description You can call this operation to query whether a user account has a **AliyunServiceRoleForEfloVcc** role.
     * >  If you do not have a **AliyunServiceRoleForEfloVcc** role, you need to use the initializeVcc interface to complete authorization, otherwise users will not be able to use Lingjun to connect to the product.
     *  *
     * @param DescribeSlrRequest $request DescribeSlrRequest
     *
     * @return DescribeSlrResponse DescribeSlrResponse
     */
    public function describeSlr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlrWithOptions($request, $runtime);
    }

    /**
     * @summary Unbind Lingjun ENI from NC.
     *  *
     * @description This interface is an asynchronous interface, and you need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the unbound state.
     *  *
     * @param DetachElasticNetworkInterfaceRequest $request DetachElasticNetworkInterfaceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachElasticNetworkInterfaceResponse DetachElasticNetworkInterfaceResponse
     */
    public function detachElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbind Lingjun ENI from NC.
     *  *
     * @description This interface is an asynchronous interface, and you need to use the query interface to wait for the Lingjun Elastic Network Interface to reach the unbound state.
     *  *
     * @param DetachElasticNetworkInterfaceRequest $request DetachElasticNetworkInterfaceRequest
     *
     * @return DetachElasticNetworkInterfaceResponse DetachElasticNetworkInterfaceResponse
     */
    public function detachElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Users can use this API to query the destination CIDR block of the source policy instance when creating a routing strategy.
     *  *
     * @param GetDestinationCidrBlockRequest $request GetDestinationCidrBlockRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDestinationCidrBlockResponse GetDestinationCidrBlockResponse
     */
    public function getDestinationCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDestinationCidrBlock',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDestinationCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Users can use this API to query the destination CIDR block of the source policy instance when creating a routing strategy.
     *  *
     * @param GetDestinationCidrBlockRequest $request GetDestinationCidrBlockRequest
     *
     * @return GetDestinationCidrBlockResponse GetDestinationCidrBlockResponse
     */
    public function getDestinationCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDestinationCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an LENI.
     *  *
     * @param GetElasticNetworkInterfaceRequest $request GetElasticNetworkInterfaceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetElasticNetworkInterfaceResponse GetElasticNetworkInterfaceResponse
     */
    public function getElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an LENI.
     *  *
     * @param GetElasticNetworkInterfaceRequest $request GetElasticNetworkInterfaceRequest
     *
     * @return GetElasticNetworkInterfaceResponse GetElasticNetworkInterfaceResponse
     */
    public function getElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Lingjun HUB.
     *  *
     * @param GetErRequest   $request GetErRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErResponse GetErResponse
     */
    public function getErWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEr',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Lingjun HUB.
     *  *
     * @param GetErRequest $request GetErRequest
     *
     * @return GetErResponse GetErResponse
     */
    public function getEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErWithOptions($request, $runtime);
    }

    /**
     * @summary Queries network instance connections.
     *  *
     * @param GetErAttachmentRequest $request GetErAttachmentRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErAttachmentResponse GetErAttachmentResponse
     */
    public function getErAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erAttachmentId)) {
            $body['ErAttachmentId'] = $request->erAttachmentId;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetErAttachment',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries network instance connections.
     *  *
     * @param GetErAttachmentRequest $request GetErAttachmentRequest
     *
     * @return GetErAttachmentResponse GetErAttachmentResponse
     */
    public function getErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of Lingjun HUB route entries.
     *  *
     * @param GetErRouteEntryRequest $request GetErRouteEntryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErRouteEntryResponse GetErRouteEntryResponse
     */
    public function getErRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erRouteEntryId)) {
            $body['ErRouteEntryId'] = $request->erRouteEntryId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetErRouteEntry',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of Lingjun HUB route entries.
     *  *
     * @param GetErRouteEntryRequest $request GetErRouteEntryRequest
     *
     * @return GetErRouteEntryResponse GetErRouteEntryResponse
     */
    public function getErRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary query lingjun hub routing policy details.
     *  *
     * @param GetErRouteMapRequest $request GetErRouteMapRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErRouteMapResponse GetErRouteMapResponse
     */
    public function getErRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erRouteMapId)) {
            $body['ErRouteMapId'] = $request->erRouteMapId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetErRouteMap',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary query lingjun hub routing policy details.
     *  *
     * @param GetErRouteMapRequest $request GetErRouteMapRequest
     *
     * @return GetErRouteMapResponse GetErRouteMapResponse
     */
    public function getErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErRouteMapWithOptions($request, $runtime);
    }

    /**
     * @summary Query the physical topology information of Lingjun network interface controller and Lingjun nodes under VPD.
     *  *
     * @param GetFabricTopologyRequest $request GetFabricTopologyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFabricTopologyResponse GetFabricTopologyResponse
     */
    public function getFabricTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->lniIds)) {
            $body['LniIds'] = $request->lniIds;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $body['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFabricTopology',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFabricTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the physical topology information of Lingjun network interface controller and Lingjun nodes under VPD.
     *  *
     * @param GetFabricTopologyRequest $request GetFabricTopologyRequest
     *
     * @return GetFabricTopologyResponse GetFabricTopologyResponse
     */
    public function getFabricTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFabricTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of the secondary private IP address of a specified Lingjun Elastic Network Interface.
     *  *
     * @param GetLeniPrivateIpAddressRequest $request GetLeniPrivateIpAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLeniPrivateIpAddressResponse GetLeniPrivateIpAddressResponse
     */
    public function getLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLeniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of the secondary private IP address of a specified Lingjun Elastic Network Interface.
     *  *
     * @param GetLeniPrivateIpAddressRequest $request GetLeniPrivateIpAddressRequest
     *
     * @return GetLeniPrivateIpAddressResponse GetLeniPrivateIpAddressResponse
     */
    public function getLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details about the secondary private IP address.
     *  *
     * @param GetLniPrivateIpAddressRequest $request GetLniPrivateIpAddressRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLniPrivateIpAddressResponse GetLniPrivateIpAddressResponse
     */
    public function getLniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details about the secondary private IP address.
     *  *
     * @param GetLniPrivateIpAddressRequest $request GetLniPrivateIpAddressRequest
     *
     * @return GetLniPrivateIpAddressResponse GetLniPrivateIpAddressResponse
     */
    public function getLniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an LNI.
     *  *
     * @param GetNetworkInterfaceRequest $request GetNetworkInterfaceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkInterfaceResponse GetNetworkInterfaceResponse
     */
    public function getNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an LNI.
     *  *
     * @param GetNetworkInterfaceRequest $request GetNetworkInterfaceRequest
     *
     * @return GetNetworkInterfaceResponse GetNetworkInterfaceResponse
     */
    public function getNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network information of a node.
     *  *
     * @param GetNodeInfoForPodRequest $request GetNodeInfoForPodRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeInfoForPodResponse GetNodeInfoForPodResponse
     */
    public function getNodeInfoForPodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeInfoForPod',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeInfoForPodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network information of a node.
     *  *
     * @param GetNodeInfoForPodRequest $request GetNodeInfoForPodRequest
     *
     * @return GetNodeInfoForPodResponse GetNodeInfoForPodResponse
     */
    public function getNodeInfoForPod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeInfoForPodWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Lingjun subnet, including the type, CIDR block, instance ID, instance status, and number of NCs.
     *  *
     * @param GetSubnetRequest $request GetSubnetRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSubnetResponse GetSubnetResponse
     */
    public function getSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Lingjun subnet, including the type, CIDR block, instance ID, instance status, and number of NCs.
     *  *
     * @param GetSubnetRequest $request GetSubnetRequest
     *
     * @return GetSubnetResponse GetSubnetResponse
     */
    public function getSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubnetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Lingjun connection, including the specification, Express Connect circuit access port type, instance status, bandwidth, and BGP CIDR block.
     *  *
     * @param GetVccRequest  $request GetVccRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVccResponse GetVccResponse
     */
    public function getVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Lingjun connection, including the specification, Express Connect circuit access port type, instance status, bandwidth, and BGP CIDR block.
     *  *
     * @param GetVccRequest $request GetVccRequest
     *
     * @return GetVccResponse GetVccResponse
     */
    public function getVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of cross-account resource authorization for a Lingjun connection, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *  *
     * @param GetVccGrantRuleRequest $request GetVccGrantRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVccGrantRuleResponse GetVccGrantRuleResponse
     */
    public function getVccGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVccGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVccGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of cross-account resource authorization for a Lingjun connection, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *  *
     * @param GetVccGrantRuleRequest $request GetVccGrantRuleRequest
     *
     * @return GetVccGrantRuleResponse GetVccGrantRuleResponse
     */
    public function getVccGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param GetVccRouteEntryRequest $request GetVccRouteEntryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVccRouteEntryResponse GetVccRouteEntryResponse
     */
    public function getVccRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vccRouteEntryId)) {
            $body['VccRouteEntryId'] = $request->vccRouteEntryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVccRouteEntry',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVccRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param GetVccRouteEntryRequest $request GetVccRouteEntryRequest
     *
     * @return GetVccRouteEntryResponse GetVccRouteEntryResponse
     */
    public function getVccRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Lingjun CIDR block, including the status of the Lingjun CIDR block, the CIDR block, the number of subnets and NCs.
     *  *
     * @param GetVpdRequest  $request GetVpdRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVpdResponse GetVpdResponse
     */
    public function getVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Lingjun CIDR block, including the status of the Lingjun CIDR block, the CIDR block, the number of subnets and NCs.
     *  *
     * @param GetVpdRequest $request GetVpdRequest
     *
     * @return GetVpdResponse GetVpdResponse
     */
    public function getVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of cross-account resource authorization for a Lingjun CIDR block, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *  *
     * @param GetVpdGrantRuleRequest $request GetVpdGrantRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVpdGrantRuleResponse GetVpdGrantRuleResponse
     */
    public function getVpdGrantRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVpdGrantRule',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpdGrantRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of cross-account resource authorization for a Lingjun CIDR block, including the authorized tenant ID, Lingjun HUB instance ID, and network instance ID.
     *  *
     * @param GetVpdGrantRuleRequest $request GetVpdGrantRuleRequest
     *
     * @return GetVpdGrantRuleResponse GetVpdGrantRuleResponse
     */
    public function getVpdGrantRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdGrantRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param GetVpdRouteEntryRequest $request GetVpdRouteEntryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVpdRouteEntryResponse GetVpdRouteEntryResponse
     */
    public function getVpdRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->vpdRouteEntryId)) {
            $body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVpdRouteEntry',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpdRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param GetVpdRouteEntryRequest $request GetVpdRouteEntryRequest
     *
     * @return GetVpdRouteEntryResponse GetVpdRouteEntryResponse
     */
    public function getVpdRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Initialize the Lingjun connection and authorize Intelligent Computing Lingjun to create an SLR in your account.
     *  *
     * @param InitializeVccRequest $request InitializeVccRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeVccResponse InitializeVccResponse
     */
    public function initializeVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitializeVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initialize the Lingjun connection and authorize Intelligent Computing Lingjun to create an SLR in your account.
     *  *
     * @param InitializeVccRequest $request InitializeVccRequest
     *
     * @return InitializeVccResponse InitializeVccResponse
     */
    public function initializeVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeVccWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the LENIs that are associated with a Lingjun node.
     *  *
     * @param ListElasticNetworkInterfacesRequest $request ListElasticNetworkInterfacesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListElasticNetworkInterfacesResponse ListElasticNetworkInterfacesResponse
     */
    public function listElasticNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListElasticNetworkInterfaces',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListElasticNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the LENIs that are associated with a Lingjun node.
     *  *
     * @param ListElasticNetworkInterfacesRequest $request ListElasticNetworkInterfacesRequest
     *
     * @return ListElasticNetworkInterfacesResponse ListElasticNetworkInterfacesResponse
     */
    public function listElasticNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listElasticNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries network instance connections.
     *  *
     * @param ListErAttachmentsRequest $request ListErAttachmentsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListErAttachmentsResponse ListErAttachmentsResponse
     */
    public function listErAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoReceiveAllRoute)) {
            $body['AutoReceiveAllRoute'] = $request->autoReceiveAllRoute;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erAttachmentId)) {
            $body['ErAttachmentId'] = $request->erAttachmentId;
        }
        if (!Utils::isUnset($request->erAttachmentName)) {
            $body['ErAttachmentName'] = $request->erAttachmentName;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceTenantId)) {
            $body['ResourceTenantId'] = $request->resourceTenantId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListErAttachments',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListErAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries network instance connections.
     *  *
     * @param ListErAttachmentsRequest $request ListErAttachmentsRequest
     *
     * @return ListErAttachmentsResponse ListErAttachmentsResponse
     */
    public function listErAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the route entries of the Lingjun HUB.
     *  *
     * @param ListErRouteEntriesRequest $request ListErRouteEntriesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListErRouteEntriesResponse ListErRouteEntriesResponse
     */
    public function listErRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->ignoreDetailedRouteEntry)) {
            $body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $body['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $body['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListErRouteEntries',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListErRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the route entries of the Lingjun HUB.
     *  *
     * @param ListErRouteEntriesRequest $request ListErRouteEntriesRequest
     *
     * @return ListErRouteEntriesResponse ListErRouteEntriesResponse
     */
    public function listErRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Routing policies are queried.
     *  *
     * @param ListErRouteMapsRequest $request ListErRouteMapsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListErRouteMapsResponse ListErRouteMapsResponse
     */
    public function listErRouteMapsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erRouteMapId)) {
            $body['ErRouteMapId'] = $request->erRouteMapId;
        }
        if (!Utils::isUnset($request->erRouteMapNum)) {
            $body['ErRouteMapNum'] = $request->erRouteMapNum;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->receptionInstanceId)) {
            $body['ReceptionInstanceId'] = $request->receptionInstanceId;
        }
        if (!Utils::isUnset($request->receptionInstanceName)) {
            $body['ReceptionInstanceName'] = $request->receptionInstanceName;
        }
        if (!Utils::isUnset($request->receptionInstanceType)) {
            $body['ReceptionInstanceType'] = $request->receptionInstanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->routeMapAction)) {
            $body['RouteMapAction'] = $request->routeMapAction;
        }
        if (!Utils::isUnset($request->transmissionInstanceId)) {
            $body['TransmissionInstanceId'] = $request->transmissionInstanceId;
        }
        if (!Utils::isUnset($request->transmissionInstanceName)) {
            $body['TransmissionInstanceName'] = $request->transmissionInstanceName;
        }
        if (!Utils::isUnset($request->transmissionInstanceType)) {
            $body['TransmissionInstanceType'] = $request->transmissionInstanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListErRouteMaps',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListErRouteMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Routing policies are queried.
     *  *
     * @param ListErRouteMapsRequest $request ListErRouteMapsRequest
     *
     * @return ListErRouteMapsResponse ListErRouteMapsResponse
     */
    public function listErRouteMaps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErRouteMapsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Lingjun HUB.
     *  *
     * @param ListErsRequest $request ListErsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListErsResponse ListErsResponse
     */
    public function listErsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erName)) {
            $body['ErName'] = $request->erName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->masterZoneId)) {
            $body['MasterZoneId'] = $request->masterZoneId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListErs',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListErsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Lingjun HUB.
     *  *
     * @param ListErsRequest $request ListErsRequest
     *
     * @return ListErsResponse ListErsResponse
     */
    public function listErs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listErsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the GPU node list of a specified GPU node whose communication distance does not exceed the specified NCD.
     *  *
     * @param ListInstancesByNcdRequest $request ListInstancesByNcdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesByNcdResponse ListInstancesByNcdResponse
     */
    public function listInstancesByNcdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->maxNcd)) {
            $body['MaxNcd'] = $request->maxNcd;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstancesByNcd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesByNcdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the GPU node list of a specified GPU node whose communication distance does not exceed the specified NCD.
     *  *
     * @param ListInstancesByNcdRequest $request ListInstancesByNcdRequest
     *
     * @return ListInstancesByNcdResponse ListInstancesByNcdResponse
     */
    public function listInstancesByNcd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesByNcdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of secondary private IP addresses of Lingjun Elastic Network Interface.
     *  *
     * @param ListLeniPrivateIpAddressesRequest $request ListLeniPrivateIpAddressesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLeniPrivateIpAddressesResponse ListLeniPrivateIpAddressesResponse
     */
    public function listLeniPrivateIpAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $body['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLeniPrivateIpAddresses',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLeniPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of secondary private IP addresses of Lingjun Elastic Network Interface.
     *  *
     * @param ListLeniPrivateIpAddressesRequest $request ListLeniPrivateIpAddressesRequest
     *
     * @return ListLeniPrivateIpAddressesResponse ListLeniPrivateIpAddressesResponse
     */
    public function listLeniPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLeniPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of secondary private IP addresses of Lingjun network interface controller.
     *  *
     * @param ListLniPrivateIpAddressRequest $request ListLniPrivateIpAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLniPrivateIpAddressResponse ListLniPrivateIpAddressResponse
     */
    public function listLniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of secondary private IP addresses of Lingjun network interface controller.
     *  *
     * @param ListLniPrivateIpAddressRequest $request ListLniPrivateIpAddressRequest
     *
     * @return ListLniPrivateIpAddressResponse ListLniPrivateIpAddressResponse
     */
    public function listLniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Lingjun network interfaces (LNIs).
     *  *
     * @param ListNetworkInterfacesRequest $request ListNetworkInterfacesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkInterfacesResponse ListNetworkInterfacesResponse
     */
    public function listNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkInterfaces',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Lingjun network interfaces (LNIs).
     *  *
     * @param ListNetworkInterfacesRequest $request ListNetworkInterfacesRequest
     *
     * @return ListNetworkInterfacesResponse ListNetworkInterfacesResponse
     */
    public function listNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries node network information.
     *  *
     * @param ListNodeInfosForPodRequest $request ListNodeInfosForPodRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeInfosForPodResponse ListNodeInfosForPodResponse
     */
    public function listNodeInfosForPodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodeInfosForPod',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeInfosForPodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries node network information.
     *  *
     * @param ListNodeInfosForPodRequest $request ListNodeInfosForPodRequest
     *
     * @return ListNodeInfosForPodResponse ListNodeInfosForPodResponse
     */
    public function listNodeInfosForPod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInfosForPodWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the details of one or more Lingjun subnets, including the Lingjun subnet type, network address segment, and instance ID of the Lingjun CIDR block.
     *  *
     * @param ListSubnetsRequest $request ListSubnetsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSubnetsResponse ListSubnetsResponse
     */
    public function listSubnetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->subnetName)) {
            $body['SubnetName'] = $request->subnetName;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSubnets',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubnetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the details of one or more Lingjun subnets, including the Lingjun subnet type, network address segment, and instance ID of the Lingjun CIDR block.
     *  *
     * @param ListSubnetsRequest $request ListSubnetsRequest
     *
     * @return ListSubnetsResponse ListSubnetsResponse
     */
    public function listSubnets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubnetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic rate of a Lingjun connection.
     *  *
     * @param ListVccFlowInfosRequest $request ListVccFlowInfosRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVccFlowInfosResponse ListVccFlowInfosResponse
     */
    public function listVccFlowInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->direction)) {
            $body['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->metricName)) {
            $body['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVccFlowInfos',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVccFlowInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic rate of a Lingjun connection.
     *  *
     * @param ListVccFlowInfosRequest $request ListVccFlowInfosRequest
     *
     * @return ListVccFlowInfosResponse ListVccFlowInfosResponse
     */
    public function listVccFlowInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccFlowInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Lingjun connection authorization, including the authorized tenant ID, region, and Lingjun HUB instance information.
     *  *
     * @param ListVccGrantRulesRequest $request ListVccGrantRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVccGrantRulesResponse ListVccGrantRulesResponse
     */
    public function listVccGrantRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->forSelect)) {
            $body['ForSelect'] = $request->forSelect;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVccGrantRules',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVccGrantRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Lingjun connection authorization, including the authorized tenant ID, region, and Lingjun HUB instance information.
     *  *
     * @param ListVccGrantRulesRequest $request ListVccGrantRulesRequest
     *
     * @return ListVccGrantRulesResponse ListVccGrantRulesResponse
     */
    public function listVccGrantRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccGrantRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Lingjun connection route entries.
     *  *
     * @param ListVccRouteEntriesRequest $request ListVccRouteEntriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVccRouteEntriesResponse ListVccRouteEntriesResponse
     */
    public function listVccRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->ignoreDetailedRouteEntry)) {
            $body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $body['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $body['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vpdRouteEntryId)) {
            $body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVccRouteEntries',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVccRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Lingjun connection route entries.
     *  *
     * @param ListVccRouteEntriesRequest $request ListVccRouteEntriesRequest
     *
     * @return ListVccRouteEntriesResponse ListVccRouteEntriesResponse
     */
    public function listVccRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary query the details of one or more lingjun connections, including the specification, Express Connect circuit access port type, instance status, bandwidth, and bgp network segment.
     *  *
     * @param ListVccsRequest $request ListVccsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVccsResponse ListVccsResponse
     */
    public function listVccsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->exStatus)) {
            $body['ExStatus'] = $request->exStatus;
        }
        if (!Utils::isUnset($request->filterErId)) {
            $body['FilterErId'] = $request->filterErId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVccs',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVccsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary query the details of one or more lingjun connections, including the specification, Express Connect circuit access port type, instance status, bandwidth, and bgp network segment.
     *  *
     * @param ListVccsRequest $request ListVccsRequest
     *
     * @return ListVccsResponse ListVccsResponse
     */
    public function listVccs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of one or more route entries in the CIDR block of Lingjun, including the route type, route entry status, destination CIDR block, and instance information of the next route entry.
     *  *
     * @param ListVpdGrantRulesRequest $request ListVpdGrantRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVpdGrantRulesResponse ListVpdGrantRulesResponse
     */
    public function listVpdGrantRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->forSelect)) {
            $body['ForSelect'] = $request->forSelect;
        }
        if (!Utils::isUnset($request->grantRuleId)) {
            $body['GrantRuleId'] = $request->grantRuleId;
        }
        if (!Utils::isUnset($request->grantTenantId)) {
            $body['GrantTenantId'] = $request->grantTenantId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVpdGrantRules',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpdGrantRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of one or more route entries in the CIDR block of Lingjun, including the route type, route entry status, destination CIDR block, and instance information of the next route entry.
     *  *
     * @param ListVpdGrantRulesRequest $request ListVpdGrantRulesRequest
     *
     * @return ListVpdGrantRulesResponse ListVpdGrantRulesResponse
     */
    public function listVpdGrantRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdGrantRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the route entries of the Lingjun CIDR block.
     *  *
     * @param ListVpdRouteEntriesRequest $request ListVpdRouteEntriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVpdRouteEntriesResponse ListVpdRouteEntriesResponse
     */
    public function listVpdRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->ignoreDetailedRouteEntry)) {
            $body['IgnoreDetailedRouteEntry'] = $request->ignoreDetailedRouteEntry;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $body['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $body['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->vpdRouteEntryId)) {
            $body['VpdRouteEntryId'] = $request->vpdRouteEntryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVpdRouteEntries',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpdRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the route entries of the Lingjun CIDR block.
     *  *
     * @param ListVpdRouteEntriesRequest $request ListVpdRouteEntriesRequest
     *
     * @return ListVpdRouteEntriesResponse ListVpdRouteEntriesResponse
     */
    public function listVpdRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of one or more Lingjun CIDR blocks, including the status of Lingjun CIDR blocks, Cidr addresses, service CIDR blocks, and Subnet.
     *  *
     * @param ListVpdsRequest $request ListVpdsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVpdsResponse ListVpdsResponse
     */
    public function listVpdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->filterErId)) {
            $body['FilterErId'] = $request->filterErId;
        }
        if (!Utils::isUnset($request->forSelect)) {
            $body['ForSelect'] = $request->forSelect;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->vpdName)) {
            $body['VpdName'] = $request->vpdName;
        }
        if (!Utils::isUnset($request->withDependence)) {
            $body['WithDependence'] = $request->withDependence;
        }
        if (!Utils::isUnset($request->withoutVcc)) {
            $body['WithoutVcc'] = $request->withoutVcc;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVpds',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of one or more Lingjun CIDR blocks, including the status of Lingjun CIDR blocks, Cidr addresses, service CIDR blocks, and Subnet.
     *  *
     * @param ListVpdsRequest $request ListVpdsRequest
     *
     * @return ListVpdsResponse ListVpdsResponse
     */
    public function listVpds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the network communication distance (Network Communication Distance,NCD) between instances (Lingjun node, Lingjun network interface controller).
     *  *
     * @param QueryInstanceNcdRequest $request QueryInstanceNcdRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryInstanceNcdResponse QueryInstanceNcdResponse
     */
    public function queryInstanceNcdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId1)) {
            $body['InstanceId1'] = $request->instanceId1;
        }
        if (!Utils::isUnset($request->instanceId2)) {
            $body['InstanceId2'] = $request->instanceId2;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceNcd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceNcdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the network communication distance (Network Communication Distance,NCD) between instances (Lingjun node, Lingjun network interface controller).
     *  *
     * @param QueryInstanceNcdRequest $request QueryInstanceNcdRequest
     *
     * @return QueryInstanceNcdResponse QueryInstanceNcdResponse
     */
    public function queryInstanceNcd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceNcdWithOptions($request, $runtime);
    }

    /**
     * @summary Unsubscribe inactive Lingjun connection
     *  *
     * @description Only unsubscribable for Lingjun connections in the prepayment status.
     *  *
     * @param RefundVccRequest $request RefundVccRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundVccResponse RefundVccResponse
     */
    public function refundVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefundVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unsubscribe inactive Lingjun connection
     *  *
     * @description Only unsubscribable for Lingjun connections in the prepayment status.
     *  *
     * @param RefundVccRequest $request RefundVccRequest
     *
     * @return RefundVccResponse RefundVccResponse
     */
    public function refundVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundVccWithOptions($request, $runtime);
    }

    /**
     * @summary Retry trying to create /delete a Lingjun connection.
     *  *
     * @description This operation allows the user to retry the operation if the Lingjun connection creation and deletion processes fail. Only the Lingjun connection in the creation failure and deletion failure state can be retried
     *  *
     * @param RetryVccRequest $request RetryVccRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryVccResponse RetryVccResponse
     */
    public function retryVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RetryVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retry trying to create /delete a Lingjun connection.
     *  *
     * @description This operation allows the user to retry the operation if the Lingjun connection creation and deletion processes fail. Only the Lingjun connection in the creation failure and deletion failure state can be retried
     *  *
     * @param RetryVccRequest $request RetryVccRequest
     *
     * @return RetryVccResponse RetryVccResponse
     */
    public function retryVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryVccWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an assigned secondary private IP address.
     *  *
     * @param UnAssignPrivateIpAddressRequest $request UnAssignPrivateIpAddressRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UnAssignPrivateIpAddressResponse UnAssignPrivateIpAddressResponse
     */
    public function unAssignPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $body['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $body['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnAssignPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAssignPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an assigned secondary private IP address.
     *  *
     * @param UnAssignPrivateIpAddressRequest $request UnAssignPrivateIpAddressRequest
     *
     * @return UnAssignPrivateIpAddressResponse UnAssignPrivateIpAddressResponse
     */
    public function unAssignPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssignPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary This function can be used to delete the additional network segment of VPD.
     *  *
     * @description **
     * **Warning** If the attached CIDR block has Lingjun subnet resources, you must delete the dependent resources before you can delete the attached CIDR block.
     *  *
     * @param UnAssociateVpdCidrBlockRequest $request UnAssociateVpdCidrBlockRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UnAssociateVpdCidrBlockResponse UnAssociateVpdCidrBlockResponse
     */
    public function unAssociateVpdCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->secondaryCidrBlock)) {
            $body['SecondaryCidrBlock'] = $request->secondaryCidrBlock;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnAssociateVpdCidrBlock',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAssociateVpdCidrBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This function can be used to delete the additional network segment of VPD.
     *  *
     * @description **
     * **Warning** If the attached CIDR block has Lingjun subnet resources, you must delete the dependent resources before you can delete the attached CIDR block.
     *  *
     * @param UnAssociateVpdCidrBlockRequest $request UnAssociateVpdCidrBlockRequest
     *
     * @return UnAssociateVpdCidrBlockResponse UnAssociateVpdCidrBlockResponse
     */
    public function unAssociateVpdCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssociateVpdCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the assigned secondary private IP address of Lingjun Elastic Network Interface.
     *  *
     * @param UnassignLeniPrivateIpAddressRequest $request UnassignLeniPrivateIpAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassignLeniPrivateIpAddressResponse UnassignLeniPrivateIpAddressResponse
     */
    public function unassignLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnassignLeniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassignLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the assigned secondary private IP address of Lingjun Elastic Network Interface.
     *  *
     * @param UnassignLeniPrivateIpAddressRequest $request UnassignLeniPrivateIpAddressRequest
     *
     * @return UnassignLeniPrivateIpAddressResponse UnassignLeniPrivateIpAddressResponse
     */
    public function unassignLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Update Lingjun Elastic Network Interface information.
     *  *
     * @param UpdateElasticNetworkInterfaceRequest $request UpdateElasticNetworkInterfaceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateElasticNetworkInterfaceResponse UpdateElasticNetworkInterfaceResponse
     */
    public function updateElasticNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateElasticNetworkInterface',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateElasticNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update Lingjun Elastic Network Interface information.
     *  *
     * @param UpdateElasticNetworkInterfaceRequest $request UpdateElasticNetworkInterfaceRequest
     *
     * @return UpdateElasticNetworkInterfaceResponse UpdateElasticNetworkInterfaceResponse
     */
    public function updateElasticNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateElasticNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @summary Updated Lingjun HUB.
     *  *
     * @param UpdateErRequest $request UpdateErRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateErResponse UpdateErResponse
     */
    public function updateErWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erName)) {
            $body['ErName'] = $request->erName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEr',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateErResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updated Lingjun HUB.
     *  *
     * @param UpdateErRequest $request UpdateErRequest
     *
     * @return UpdateErResponse UpdateErResponse
     */
    public function updateEr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a network instance connection.
     *  *
     * @param UpdateErAttachmentRequest $request UpdateErAttachmentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateErAttachmentResponse UpdateErAttachmentResponse
     */
    public function updateErAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->erAttachmentId)) {
            $body['ErAttachmentId'] = $request->erAttachmentId;
        }
        if (!Utils::isUnset($request->erAttachmentName)) {
            $body['ErAttachmentName'] = $request->erAttachmentName;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateErAttachment',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateErAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a network instance connection.
     *  *
     * @param UpdateErAttachmentRequest $request UpdateErAttachmentRequest
     *
     * @return UpdateErAttachmentResponse UpdateErAttachmentResponse
     */
    public function updateErAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary Update some information about the routing policy, including the description and name of the routing policy.
     *  *
     * @param UpdateErRouteMapRequest $request UpdateErRouteMapRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateErRouteMapResponse UpdateErRouteMapResponse
     */
    public function updateErRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->erId)) {
            $body['ErId'] = $request->erId;
        }
        if (!Utils::isUnset($request->erRouteMapId)) {
            $body['ErRouteMapId'] = $request->erRouteMapId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateErRouteMap',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateErRouteMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update some information about the routing policy, including the description and name of the routing policy.
     *  *
     * @param UpdateErRouteMapRequest $request UpdateErRouteMapRequest
     *
     * @return UpdateErRouteMapResponse UpdateErRouteMapResponse
     */
    public function updateErRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateErRouteMapWithOptions($request, $runtime);
    }

    /**
     * @summary Updated the description of the secondary private network assigned by the Lingjun Elastic Network Interface.
     *  *
     * @param UpdateLeniPrivateIpAddressRequest $request UpdateLeniPrivateIpAddressRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLeniPrivateIpAddressResponse UpdateLeniPrivateIpAddressResponse
     */
    public function updateLeniPrivateIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->elasticNetworkInterfaceId)) {
            $body['ElasticNetworkInterfaceId'] = $request->elasticNetworkInterfaceId;
        }
        if (!Utils::isUnset($request->ipName)) {
            $body['IpName'] = $request->ipName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLeniPrivateIpAddress',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLeniPrivateIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updated the description of the secondary private network assigned by the Lingjun Elastic Network Interface.
     *  *
     * @param UpdateLeniPrivateIpAddressRequest $request UpdateLeniPrivateIpAddressRequest
     *
     * @return UpdateLeniPrivateIpAddressResponse UpdateLeniPrivateIpAddressResponse
     */
    public function updateLeniPrivateIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLeniPrivateIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Updates some information about a specified subnet instance, including the name of the subnet instance.
     *  *
     * @param UpdateSubnetRequest $request UpdateSubnetRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSubnetResponse UpdateSubnetResponse
     */
    public function updateSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->subnetName)) {
            $body['SubnetName'] = $request->subnetName;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates some information about a specified subnet instance, including the name of the subnet instance.
     *  *
     * @param UpdateSubnetRequest $request UpdateSubnetRequest
     *
     * @return UpdateSubnetResponse UpdateSubnetResponse
     */
    public function updateSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubnetWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a Lingjun connection instance, including the peak bandwidth and name of the Lingjun connection instance.
     *  *
     * @param UpdateVccRequest $request UpdateVccRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVccResponse UpdateVccResponse
     */
    public function updateVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vccName)) {
            $body['VccName'] = $request->vccName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a Lingjun connection instance, including the peak bandwidth and name of the Lingjun connection instance.
     *  *
     * @param UpdateVccRequest $request UpdateVccRequest
     *
     * @return UpdateVccResponse UpdateVccResponse
     */
    public function updateVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVccWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about the Lingjun CIDR block, including the name of the Lingjun CIDR block.
     *  *
     * @param UpdateVpdRequest $request UpdateVpdRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpdResponse UpdateVpdResponse
     */
    public function updateVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->vpdName)) {
            $body['VpdName'] = $request->vpdName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about the Lingjun CIDR block, including the name of the Lingjun CIDR block.
     *  *
     * @param UpdateVpdRequest $request UpdateVpdRequest
     *
     * @return UpdateVpdResponse UpdateVpdResponse
     */
    public function updateVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpdWithOptions($request, $runtime);
    }
}
