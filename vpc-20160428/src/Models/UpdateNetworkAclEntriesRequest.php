<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\ingressAclEntries;

class UpdateNetworkAclEntriesRequest extends Model
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
     * @var egressAclEntries[]
     */
    public $egressAclEntries;
    /**
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;
    /**
     * @var string
     */
    public $networkAclId;
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
     * @var bool
     */
    public $updateEgressAclEntries;
    /**
     * @var bool
     */
    public $updateIngressAclEntries;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'dryRun'                  => 'DryRun',
        'egressAclEntries'        => 'EgressAclEntries',
        'ingressAclEntries'       => 'IngressAclEntries',
        'networkAclId'            => 'NetworkAclId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'updateEgressAclEntries'  => 'UpdateEgressAclEntries',
        'updateIngressAclEntries' => 'UpdateIngressAclEntries',
    ];

    public function validate()
    {
        if (\is_array($this->egressAclEntries)) {
            Model::validateArray($this->egressAclEntries);
        }
        if (\is_array($this->ingressAclEntries)) {
            Model::validateArray($this->ingressAclEntries);
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

        if (null !== $this->egressAclEntries) {
            if (\is_array($this->egressAclEntries)) {
                $res['EgressAclEntries'] = [];
                $n1                      = 0;
                foreach ($this->egressAclEntries as $item1) {
                    $res['EgressAclEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ingressAclEntries) {
            if (\is_array($this->ingressAclEntries)) {
                $res['IngressAclEntries'] = [];
                $n1                       = 0;
                foreach ($this->ingressAclEntries as $item1) {
                    $res['IngressAclEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
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

        if (null !== $this->updateEgressAclEntries) {
            $res['UpdateEgressAclEntries'] = $this->updateEgressAclEntries;
        }

        if (null !== $this->updateIngressAclEntries) {
            $res['UpdateIngressAclEntries'] = $this->updateIngressAclEntries;
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

        if (isset($map['EgressAclEntries'])) {
            if (!empty($map['EgressAclEntries'])) {
                $model->egressAclEntries = [];
                $n1                      = 0;
                foreach ($map['EgressAclEntries'] as $item1) {
                    $model->egressAclEntries[$n1++] = egressAclEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n1                       = 0;
                foreach ($map['IngressAclEntries'] as $item1) {
                    $model->ingressAclEntries[$n1++] = ingressAclEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
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

        if (isset($map['UpdateEgressAclEntries'])) {
            $model->updateEgressAclEntries = $map['UpdateEgressAclEntries'];
        }

        if (isset($map['UpdateIngressAclEntries'])) {
            $model->updateIngressAclEntries = $map['UpdateIngressAclEntries'];
        }

        return $model;
    }
}
