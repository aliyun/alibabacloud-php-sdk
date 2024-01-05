<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class ossDetail extends Model
{
    /**
     * @description Indicates whether the system deletes the inventory lists when a backup is completed. This parameter is valid only when OSS inventories are used. Valid values:
     *
     *   **NO_CLEANUP**: Inventory lists are not deleted.
     *   **DELETE_CURRENT**: The current inventory list is deleted.
     *   **DELETE_CURRENT_AND_PREVIOUS**: All inventory lists are deleted.
     *
     * @example DELETE_CURRENT_AND_PREVIOUS
     *
     * @var string
     */
    public $inventoryCleanupPolicy;

    /**
     * @description The name of the OSS inventory. If this parameter is not empty, the OSS inventory is used for performance optimization.
     *
     *   If you want to back up more than 100 million OSS objects, we recommend that you use inventory lists to accelerate incremental backup. Storage fees for inventory lists are included into your OSS bills.
     *   A certain amount of time is required for OSS to generate inventory lists. Before inventory lists are generated, OSS objects may fail to be backed up. In this case, you can back up the OSS objects in the next backup cycle.
     *
     * @example inventory_test
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
