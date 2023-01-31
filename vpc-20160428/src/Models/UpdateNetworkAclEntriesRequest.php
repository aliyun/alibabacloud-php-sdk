<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\ingressAclEntries;
use AlibabaCloud\Tea\Model;

class UpdateNetworkAclEntriesRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var egressAclEntries[]
     */
    public $egressAclEntries;

    /**
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;

    /**
     * @example nacl-bp1lhl0taikrzxsc****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-hangzhou
     *
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
     * @example false
     *
     * @var bool
     */
    public $updateEgressAclEntries;

    /**
     * @example false
     *
     * @var bool
     */
    public $updateIngressAclEntries;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'egressAclEntries'        => 'EgressAclEntries',
        'ingressAclEntries'       => 'IngressAclEntries',
        'networkAclId'            => 'NetworkAclId',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'updateEgressAclEntries'  => 'UpdateEgressAclEntries',
        'updateIngressAclEntries' => 'UpdateIngressAclEntries',
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
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = [];
            if (null !== $this->egressAclEntries && \is_array($this->egressAclEntries)) {
                $n = 0;
                foreach ($this->egressAclEntries as $item) {
                    $res['EgressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
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
        if (null !== $this->updateEgressAclEntries) {
            $res['UpdateEgressAclEntries'] = $this->updateEgressAclEntries;
        }
        if (null !== $this->updateIngressAclEntries) {
            $res['UpdateIngressAclEntries'] = $this->updateIngressAclEntries;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n                        = 0;
                foreach ($map['IngressAclEntries'] as $item) {
                    $model->ingressAclEntries[$n++] = null !== $item ? ingressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
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
        if (isset($map['UpdateEgressAclEntries'])) {
            $model->updateEgressAclEntries = $map['UpdateEgressAclEntries'];
        }
        if (isset($map['UpdateIngressAclEntries'])) {
            $model->updateIngressAclEntries = $map['UpdateIngressAclEntries'];
        }

        return $model;
    }
}
