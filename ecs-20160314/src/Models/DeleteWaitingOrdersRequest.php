<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DeleteWaitingOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $waitingOrderId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'ownerAccount'    => 'OwnerAccount',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'waitingOrderId'  => 'WaitingOrderId',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->waitingOrderId) {
            $res['WaitingOrderId'] = $this->waitingOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWaitingOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['WaitingOrderId'])) {
            if (!empty($map['WaitingOrderId'])) {
                $model->waitingOrderId = $map['WaitingOrderId'];
            }
        }

        return $model;
    }
}
