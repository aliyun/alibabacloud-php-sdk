<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class OSSTriggerKey extends Model
{
    /**
     * @description prefix
     *
     * @var string
     */
    public $prefix;

    /**
     * @description suffix
     *
     * @var string
     */
    public $suffix;
    protected $_name = [
        'prefix' => 'prefix',
        'suffix' => 'suffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSTriggerKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }

        return $model;
    }
}
