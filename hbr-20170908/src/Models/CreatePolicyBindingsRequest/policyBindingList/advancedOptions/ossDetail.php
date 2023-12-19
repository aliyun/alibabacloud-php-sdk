<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;

use AlibabaCloud\Tea\Model;

class ossDetail extends Model
{
    /**
     * @description Whether delete inventory file after backup.
     * - **NO_CLEANUP**: Do not delete.
     * - **DELETE_CURRENT**: Delete current.
     * - **DELETE_CURRENT_AND_PREVIOUS**: Delete all.
     * @example NO_CLEANUP
     *
     * @var string
     */
    public $inventoryCleanupPolicy;

    /**
     * @description OSS inventory name.
     * - OSS inventory file generation takes time. The backup may fail before the OSS inventory file is generated. You can wait for the next cycle to execute.
     * @example oss-inventory-default
     *
     * @var string
     */
    public $inventoryId;
    protected $_name = [
        'inventoryCleanupPolicy' => 'InventoryCleanupPolicy',
        'inventoryId'            => 'InventoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryCleanupPolicy) {
            $res['InventoryCleanupPolicy'] = $this->inventoryCleanupPolicy;
        }
        if (null !== $this->inventoryId) {
            $res['InventoryId'] = $this->inventoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InventoryCleanupPolicy'])) {
            $model->inventoryCleanupPolicy = $map['InventoryCleanupPolicy'];
        }
        if (isset($map['InventoryId'])) {
            $model->inventoryId = $map['InventoryId'];
        }

        return $model;
    }
}
