<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class OssSourceConfig extends Model
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
        'bucket' => 'bucket',
        'object' => 'object',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
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
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        return $model;
    }
}
