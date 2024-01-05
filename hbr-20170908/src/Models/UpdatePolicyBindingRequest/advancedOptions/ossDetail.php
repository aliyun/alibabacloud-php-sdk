<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions;

use AlibabaCloud\Tea\Model;

class ossDetail extends Model
{
    /**
     * @description Specifies whether the system deletes the inventory lists after a backup is complete. This parameter is available only when OSS inventory lists are used. Valid values:
     *
     *   **NO_CLEANUP**: Does not delete inventory lists.
     *   **DELETE_CURRENT**: Deletes the current inventory list.
     *   **DELETE_CURRENT_AND_PREVIOUS**: Deletes all inventory lists.
     *
     * @example NO_CLEANUP
     *
     * @var string
     */
    public $inventoryCleanupPolicy;

    /**
     * @description The name of the OSS inventory list. The OSS inventory list specified for this parameter is used for performance optimization.
     *
     *   If you want to back up more than 100 million OSS objects, we recommend that you use inventory lists to accelerate incremental backup. Storage fees for inventory lists are included in your OSS bills.
     *   An extended period of time is required for OSS to generate inventory lists. Before inventory lists are generated, OSS objects may fail to be backed up. In this case, you can back up the OSS objects in the next backup cycle.
     *
     * @example 30663060
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
