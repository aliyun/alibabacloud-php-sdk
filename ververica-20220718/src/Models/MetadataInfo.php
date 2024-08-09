<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class MetadataInfo extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $virtual;
    protected $_name = [
        'key'     => 'key',
        'virtual' => 'virtual',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->virtual) {
            $res['virtual'] = $this->virtual;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetadataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['virtual'])) {
            $model->virtual = $map['virtual'];
        }

        return $model;
    }
}
