<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBResourceGroupShrinkRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
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
     * @description The information about the resource group.
     *
     * This parameter is required.
     * @var string
     */
    public $resourceGroupItemsShrink;
    protected $_name = [
        'DBInstanceId'             => 'DBInstanceId',
        'ownerId'                  => 'OwnerId',
        'resourceGroupItemsShrink' => 'ResourceGroupItems',
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
        if (null !== $this->resourceGroupItemsShrink) {
            $res['ResourceGroupItems'] = $this->resourceGroupItemsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBResourceGroupShrinkRequest
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
            $model->resourceGroupItemsShrink = $map['ResourceGroupItems'];
        }

        return $model;
    }
}
