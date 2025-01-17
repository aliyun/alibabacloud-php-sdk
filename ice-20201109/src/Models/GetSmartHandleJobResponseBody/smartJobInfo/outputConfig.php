<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;

use AlibabaCloud\Dara\Model;

class outputConfig extends Model
{
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var string
     */
    public $object;
    protected $_name = [
        'bucket' => 'Bucket',
        'object' => 'Object',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
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
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        return $model;
    }
}
