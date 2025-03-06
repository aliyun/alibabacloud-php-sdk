<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class ossDetail extends Model
{
    /**
     * @description Do not prompt for archive-type objects in the task statistics and failed file list.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreArchiveObject;

    /**
     * @description Whether to delete the inventory file after the backup. This is only effective when using an OSS inventory. Supported values:
     * - **NO_CLEANUP**: Do not delete.
     * - **DELETE_CURRENT**: Delete the current file.
     * - **DELETE_CURRENT_AND_PREVIOUS**: Delete all files.
     * @example DELETE_CURRENT_AND_PREVIOUS
     *
     * @var string
     */
    public $inventoryCleanupPolicy;

    /**
     * @description The name of the OSS inventory. If this value is not empty, the OSS inventory will be used for performance optimization.
     * - The generation of the OSS inventory file takes time, and the backup may fail before the inventory file is generated. You can wait for the next cycle to execute.
     * @example inventory_test
     *
     * @var string
     */
    public $inventoryId;
    protected $_name = [
        'ignoreArchiveObject'    => 'IgnoreArchiveObject',
        'inventoryCleanupPolicy' => 'InventoryCleanupPolicy',
        'inventoryId'            => 'InventoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreArchiveObject) {
            $res['IgnoreArchiveObject'] = $this->ignoreArchiveObject;
        }
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
        if (isset($map['IgnoreArchiveObject'])) {
            $model->ignoreArchiveObject = $map['IgnoreArchiveObject'];
        }
        if (isset($map['InventoryCleanupPolicy'])) {
            $model->inventoryCleanupPolicy = $map['InventoryCleanupPolicy'];
        }
        if (isset($map['InventoryId'])) {
            $model->inventoryId = $map['InventoryId'];
        }

        return $model;
    }
}
