<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberRequest\customers;
use AlibabaCloud\Tea\Model;

class ImportNumberRequest extends Model
{
    /**
     * @var customers[]
     */
    public $customers;

    /**
     * @example 0
     *
     * @var int
     */
    public $failReturn;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 92
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'customers'            => 'Customers',
        'failReturn'           => 'FailReturn',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customers) {
            $res['Customers'] = [];
            if (null !== $this->customers && \is_array($this->customers)) {
                $n = 0;
                foreach ($this->customers as $item) {
                    $res['Customers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failReturn) {
            $res['FailReturn'] = $this->failReturn;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Customers'])) {
            if (!empty($map['Customers'])) {
                $model->customers = [];
                $n                = 0;
                foreach ($map['Customers'] as $item) {
                    $model->customers[$n++] = null !== $item ? customers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailReturn'])) {
            $model->failReturn = $map['FailReturn'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
