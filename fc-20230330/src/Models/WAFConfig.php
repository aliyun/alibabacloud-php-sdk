<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class WAFConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableWAF;
    protected $_name = [
        'enableWAF' => 'enableWAF',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableWAF) {
            $res['enableWAF'] = $this->enableWAF;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WAFConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableWAF'])) {
            $model->enableWAF = $map['enableWAF'];
        }

        return $model;
    }
}
