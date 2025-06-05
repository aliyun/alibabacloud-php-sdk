<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest\taint;

class CreateVirtualNodeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterDNS;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $customResources;

    /**
     * @var string
     */
    public $eipInstanceId;

    /**
     * @var bool
     */
    public $enablePublicNetwork;

    /**
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
     * @var string
     */
    public $regionId;

    /**
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
     * @var string
     */
    public $securityGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var taint[]
     */
    public $taint;

    /**
     * @var bool
     */
    public $tlsBootstrapEnabled;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $virtualNodeName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'clusterDNS' => 'ClusterDNS',
        'clusterDomain' => 'ClusterDomain',
        'customResources' => 'CustomResources',
        'eipInstanceId' => 'EipInstanceId',
        'enablePublicNetwork' => 'EnablePublicNetwork',
        'kubeConfig' => 'KubeConfig',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupId' => 'SecurityGroupId',
        'tag' => 'Tag',
        'taint' => 'Taint',
        'tlsBootstrapEnabled' => 'TlsBootstrapEnabled',
        'vSwitchId' => 'VSwitchId',
        'virtualNodeName' => 'VirtualNodeName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->taint)) {
            Model::validateArray($this->taint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taint) {
            if (\is_array($this->taint)) {
                $res['Taint'] = [];
                $n1 = 0;
                foreach ($this->taint as $item1) {
                    $res['Taint'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['Taint'])) {
            if (!empty($map['Taint'])) {
                $model->taint = [];
                $n1 = 0;
                foreach ($map['Taint'] as $item1) {
                    $model->taint[$n1++] = taint::fromMap($item1);
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
