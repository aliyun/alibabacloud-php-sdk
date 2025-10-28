<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\configMountDescs;

use AlibabaCloud\Dara\Model;

class mountItems extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'key' => 'Key',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
