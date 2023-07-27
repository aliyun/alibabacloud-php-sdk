<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketInventoryRequest extends Model
{
    /**
     * @description 存储清单配置信息的容器。
     *
     * @var InventoryConfiguration
     */
    public $inventoryConfiguration;

    /**
     * @example report1
     *
     * @var string
     */
    public $inventoryId;
    protected $_name = [
        'inventoryConfiguration' => 'InventoryConfiguration',
        'inventoryId'            => 'inventoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryConfiguration) {
            $res['InventoryConfiguration'] = null !== $this->inventoryConfiguration ? $this->inventoryConfiguration->toMap() : null;
        }
        if (null !== $this->inventoryId) {
            $res['inventoryId'] = $this->inventoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InventoryConfiguration'])) {
            $model->inventoryConfiguration = InventoryConfiguration::fromMap($map['InventoryConfiguration']);
        }
        if (isset($map['inventoryId'])) {
            $model->inventoryId = $map['inventoryId'];
        }

        return $model;
    }
}
