<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRequest\ingressRules;
use AlibabaCloud\Tea\Model;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $trafficMirrorFilterDescription;

    /**
     * @var string
     */
    public $trafficMirrorFilterName;
    protected $_name = [
        'clientToken'                    => 'ClientToken',
        'dryRun'                         => 'DryRun',
        'egressRules'                    => 'EgressRules',
        'ingressRules'                   => 'IngressRules',
        'ownerAccount'                   => 'OwnerAccount',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'trafficMirrorFilterDescription' => 'TrafficMirrorFilterDescription',
        'trafficMirrorFilterName'        => 'TrafficMirrorFilterName',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->egressRules) {
            $res['EgressRules'] = [];
            if (null !== $this->egressRules && \is_array($this->egressRules)) {
                $n = 0;
                foreach ($this->egressRules as $item) {
                    $res['EgressRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ingressRules) {
            $res['IngressRules'] = [];
            if (null !== $this->ingressRules && \is_array($this->ingressRules)) {
                $n = 0;
                foreach ($this->ingressRules as $item) {
                    $res['IngressRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->trafficMirrorFilterDescription) {
            $res['TrafficMirrorFilterDescription'] = $this->trafficMirrorFilterDescription;
        }
        if (null !== $this->trafficMirrorFilterName) {
            $res['TrafficMirrorFilterName'] = $this->trafficMirrorFilterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficMirrorFilterRequest
     */
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
                $n                  = 0;
                foreach ($map['EgressRules'] as $item) {
                    $model->egressRules[$n++] = null !== $item ? egressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n                   = 0;
                foreach ($map['IngressRules'] as $item) {
                    $model->ingressRules[$n++] = null !== $item ? ingressRules::fromMap($item) : $item;
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
