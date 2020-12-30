<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\ingressAclEntries;
use AlibabaCloud\Tea\Model;

class UpdateNetworkAclEntriesRequest extends Model
{
    /**
     * @var bool
     */
    public $updateIngressAclEntries;

    /**
     * @var bool
     */
    public $updateEgressAclEntries;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;

    /**
     * @var egressAclEntries[]
     */
    public $egressAclEntries;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'updateIngressAclEntries' => 'UpdateIngressAclEntries',
        'updateEgressAclEntries'  => 'UpdateEgressAclEntries',
        'networkAclId'            => 'NetworkAclId',
        'regionId'                => 'RegionId',
        'ingressAclEntries'       => 'IngressAclEntries',
        'egressAclEntries'        => 'EgressAclEntries',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerId'                 => 'OwnerId',
        'clientToken'             => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateIngressAclEntries) {
            $res['UpdateIngressAclEntries'] = $this->updateIngressAclEntries;
        }
        if (null !== $this->updateEgressAclEntries) {
            $res['UpdateEgressAclEntries'] = $this->updateEgressAclEntries;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = [];
            if (null !== $this->ingressAclEntries && \is_array($this->ingressAclEntries)) {
                $n = 0;
                foreach ($this->ingressAclEntries as $item) {
                    $res['IngressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = [];
            if (null !== $this->egressAclEntries && \is_array($this->egressAclEntries)) {
                $n = 0;
                foreach ($this->egressAclEntries as $item) {
                    $res['EgressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNetworkAclEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateIngressAclEntries'])) {
            $model->updateIngressAclEntries = $map['UpdateIngressAclEntries'];
        }
        if (isset($map['UpdateEgressAclEntries'])) {
            $model->updateEgressAclEntries = $map['UpdateEgressAclEntries'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n                        = 0;
                foreach ($map['IngressAclEntries'] as $item) {
                    $model->ingressAclEntries[$n++] = null !== $item ? ingressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EgressAclEntries'])) {
            if (!empty($map['EgressAclEntries'])) {
                $model->egressAclEntries = [];
                $n                       = 0;
                foreach ($map['EgressAclEntries'] as $item) {
                    $model->egressAclEntries[$n++] = null !== $item ? egressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
