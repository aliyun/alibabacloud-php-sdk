<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketInventoryRequest extends Model
{
    /**
     * @example list1
     *
     * @var string
     */
    public $inventoryId;
    protected $_name = [
        'inventoryId' => 'inventoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryId) {
            $res['inventoryId'] = $this->inventoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inventoryId'])) {
            $model->inventoryId = $map['inventoryId'];
        }

        return $model;
    }
}
