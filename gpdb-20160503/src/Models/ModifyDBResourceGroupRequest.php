<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupRequest\resourceGroupItems;
use AlibabaCloud\Tea\Model;

class ModifyDBResourceGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @var resourceGroupItems[]
     */
    public $resourceGroupItems;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'ownerId'            => 'OwnerId',
        'resourceGroupItems' => 'ResourceGroupItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupItems) {
            $res['ResourceGroupItems'] = [];
            if (null !== $this->resourceGroupItems && \is_array($this->resourceGroupItems)) {
                $n = 0;
                foreach ($this->resourceGroupItems as $item) {
                    $res['ResourceGroupItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBResourceGroupRequest
     */
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
                $n                         = 0;
                foreach ($map['ResourceGroupItems'] as $item) {
                    $model->resourceGroupItems[$n++] = null !== $item ? resourceGroupItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
