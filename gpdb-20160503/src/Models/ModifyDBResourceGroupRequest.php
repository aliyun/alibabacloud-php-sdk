<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupRequest\resourceGroupItems;

class ModifyDBResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var resourceGroupItems[]
     */
    public $resourceGroupItems;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'ownerId' => 'OwnerId',
        'resourceGroupItems' => 'ResourceGroupItems',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupItems)) {
            Model::validateArray($this->resourceGroupItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceGroupItems) {
            if (\is_array($this->resourceGroupItems)) {
                $res['ResourceGroupItems'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupItems as $item1) {
                    $res['ResourceGroupItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceGroupItems'])) {
            if (!empty($map['ResourceGroupItems'])) {
                $model->resourceGroupItems = [];
                $n1 = 0;
                foreach ($map['ResourceGroupItems'] as $item1) {
                    $model->resourceGroupItems[$n1++] = resourceGroupItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
