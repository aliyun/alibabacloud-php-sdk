<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest\taint;
use AlibabaCloud\Tea\Model;

class CreateVirtualNodeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IP address of the DNS server. If dnsPolicy=ClusterFirst is configured for the Elastic Container Instance pod, Elastic Container Instance uses the configuration to provide DNS services to containers. You can configure multiple IP addresses. Separate multiple IP addresses with commas (,).
     *
     * @example 100.1.XX.XX
     *
     * @var string
     */
    public $clusterDNS;

    /**
     * @description The domain name of the cluster. If this parameter is specified, in addition to the search domain of the host, Kubelet configures all containers to search for the specified domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description The custom resources that are supported by the virtual node. If a custom resource is specified in the request of an Elastic Container Instance pod, the pod is scheduled to run on the virtual node that supports the custom resource. You can use the Resource name = Number of resources format to specify custom resources. Separate multiple resources with commas (,).
     *
     * @example example1.com=100,example2.com=200
     *
     * @var string
     */
    public $customResources;

    /**
     * @description The ID of the elastic IP address (EIP).
     *
     * @example eip-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description Specifies whether to enable Internet access for the VNode. Default value: false.
     *
     * If the value of this parameter is true, the VNode exposes a public IP address to external services.
     * @example false
     *
     * @var bool
     */
    public $enablePublicNetwork;

    /**
     * @description KubeConfig of the Kubernetes cluster to which the VNode is to be connected. The value must be Base64-encoded.
     *
     * @example JTVDbmFwaVZlcnNpb24lM0ElMjB2MSU1Q25jbHVzdGVycyUzQSU1Q24tJTIwY2x1c3RlciUzQSU1Q24uLi******
     *
     * @var string
     */
    public $kubeConfig;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the virtual node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the security group. The VNode and the elastic container instances in the VNode are added to the security group.
     *
     * @example sg-2ze81zoc3yl7a3we****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Tag.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Taint.
     *
     * @var taint[]
     */
    public $taint;

    /**
     * @description Specifies whether to enable TLS bootstrapping. If you set this parameter to true, use the KubeConfig certificate for TLS bootstrapping. Valid values:
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $tlsBootstrapEnabled;

    /**
     * @description The ID of the vSwitch. The vSwitch is connected to the VNode and the elastic container instances in the VNode.
     *
     * You can specify 1 to 10 vSwitches for a VPC.
     * @example vsw-2ze23nqzig8inprou****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the VNode. The name must be 2 to 128 characters in length, and can contain lowercase letters, digits, periods (.), and hyphens (-).
     *
     * @example testNode
     *
     * @var string
     */
    public $virtualNodeName;

    /**
     * @description The zone ID of the VNode.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'clusterDNS'           => 'ClusterDNS',
        'clusterDomain'        => 'ClusterDomain',
        'customResources'      => 'CustomResources',
        'eipInstanceId'        => 'EipInstanceId',
        'enablePublicNetwork'  => 'EnablePublicNetwork',
        'kubeConfig'           => 'KubeConfig',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityGroupId'      => 'SecurityGroupId',
        'tag'                  => 'Tag',
        'taint'                => 'Taint',
        'tlsBootstrapEnabled'  => 'TlsBootstrapEnabled',
        'vSwitchId'            => 'VSwitchId',
        'virtualNodeName'      => 'VirtualNodeName',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterDNS) {
            $res['ClusterDNS'] = $this->clusterDNS;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->customResources) {
            $res['CustomResources'] = $this->customResources;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->enablePublicNetwork) {
            $res['EnablePublicNetwork'] = $this->enablePublicNetwork;
        }
        if (null !== $this->kubeConfig) {
            $res['KubeConfig'] = $this->kubeConfig;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taint) {
            $res['Taint'] = [];
            if (null !== $this->taint && \is_array($this->taint)) {
                $n = 0;
                foreach ($this->taint as $item) {
                    $res['Taint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tlsBootstrapEnabled) {
            $res['TlsBootstrapEnabled'] = $this->tlsBootstrapEnabled;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->virtualNodeName) {
            $res['VirtualNodeName'] = $this->virtualNodeName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterDNS'])) {
            $model->clusterDNS = $map['ClusterDNS'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['CustomResources'])) {
            $model->customResources = $map['CustomResources'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['EnablePublicNetwork'])) {
            $model->enablePublicNetwork = $map['EnablePublicNetwork'];
        }
        if (isset($map['KubeConfig'])) {
            $model->kubeConfig = $map['KubeConfig'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Taint'])) {
            if (!empty($map['Taint'])) {
                $model->taint = [];
                $n            = 0;
                foreach ($map['Taint'] as $item) {
                    $model->taint[$n++] = null !== $item ? taint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TlsBootstrapEnabled'])) {
            $model->tlsBootstrapEnabled = $map['TlsBootstrapEnabled'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VirtualNodeName'])) {
            $model->virtualNodeName = $map['VirtualNodeName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
