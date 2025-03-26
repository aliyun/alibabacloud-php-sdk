<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest\ingressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest\tag;

class CreateTrafficMirrorFilterRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var egressRules[]
     */
    public $egressRules;

    /**
     * @var ingressRules[]
     */
    public $ingressRules;

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
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $trafficMirrorFilterDescription;

    /**
     * @var string
     */
    public $trafficMirrorFilterName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'egressRules' => 'EgressRules',
        'ingressRules' => 'IngressRules',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
        'trafficMirrorFilterDescription' => 'TrafficMirrorFilterDescription',
        'trafficMirrorFilterName' => 'TrafficMirrorFilterName',
    ];

    public function validate()
    {
        if (\is_array($this->egressRules)) {
            Model::validateArray($this->egressRules);
        }
        if (\is_array($this->ingressRules)) {
            Model::validateArray($this->ingressRules);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressRules) {
            if (\is_array($this->egressRules)) {
                $res['EgressRules'] = [];
                $n1 = 0;
                foreach ($this->egressRules as $item1) {
                    $res['EgressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ingressRules) {
            if (\is_array($this->ingressRules)) {
                $res['IngressRules'] = [];
                $n1 = 0;
                foreach ($this->ingressRules as $item1) {
                    $res['IngressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trafficMirrorFilterDescription) {
            $res['TrafficMirrorFilterDescription'] = $this->trafficMirrorFilterDescription;
        }

        if (null !== $this->trafficMirrorFilterName) {
            $res['TrafficMirrorFilterName'] = $this->trafficMirrorFilterName;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressRules'])) {
            if (!empty($map['EgressRules'])) {
                $model->egressRules = [];
                $n1 = 0;
                foreach ($map['EgressRules'] as $item1) {
                    $model->egressRules[$n1++] = egressRules::fromMap($item1);
                }
            }
        }

        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n1 = 0;
                foreach ($map['IngressRules'] as $item1) {
                    $model->ingressRules[$n1++] = ingressRules::fromMap($item1);
                }
            }
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TrafficMirrorFilterDescription'])) {
            $model->trafficMirrorFilterDescription = $map['TrafficMirrorFilterDescription'];
        }

        if (isset($map['TrafficMirrorFilterName'])) {
            $model->trafficMirrorFilterName = $map['TrafficMirrorFilterName'];
        }

        return $model;
    }
}
