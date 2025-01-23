<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions;

use AlibabaCloud\Dara\Model;

class ossDetail extends Model
{
    /**
     * @var bool
     */
    public $ignoreArchiveObject;
    /**
     * @var string
     */
    public $inventoryCleanupPolicy;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
