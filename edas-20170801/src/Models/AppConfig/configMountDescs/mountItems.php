<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\configMountDescs;

use AlibabaCloud\Tea\Model;

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
        'key'  => 'Key',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return mountItems
     */
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
