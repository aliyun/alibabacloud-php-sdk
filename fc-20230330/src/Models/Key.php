<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Key extends Model
{
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var string
     */
    public $suffix;
    protected $_name = [
        'prefix' => 'prefix',
        'suffix' => 'suffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
