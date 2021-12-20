<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InventoryDestination extends Model
{
    /**
     * @description The information about the bucket that stores the exported inventory list
     *
     * @var InventoryOSSBucketDestination
     */
    public $OSSBucketDestination;
    protected $_name = [
        'OSSBucketDestination' => 'OSSBucketDestination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OSSBucketDestination) {
            $res['OSSBucketDestination'] = null !== $this->OSSBucketDestination ? $this->OSSBucketDestination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InventoryDestination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSSBucketDestination'])) {
            $model->OSSBucketDestination = InventoryOSSBucketDestination::fromMap($map['OSSBucketDestination']);
        }

        return $model;
    }
}
