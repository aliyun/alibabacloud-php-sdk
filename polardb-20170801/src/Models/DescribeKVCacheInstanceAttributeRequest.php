<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeKVCacheInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $KVCacheInstanceId;
    protected $_name = [
        'KVCacheInstanceId' => 'KVCacheInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVCacheInstanceId) {
            $res['KVCacheInstanceId'] = $this->KVCacheInstanceId;
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
        if (isset($map['KVCacheInstanceId'])) {
            $model->KVCacheInstanceId = $map['KVCacheInstanceId'];
        }

        return $model;
    }
}
