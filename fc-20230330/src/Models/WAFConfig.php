<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class WAFConfig extends Model
{
    /**
     * @var bool
     */
    public $enableWAF;
    protected $_name = [
        'enableWAF' => 'enableWAF',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableWAF) {
            $res['enableWAF'] = $this->enableWAF;
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
        if (isset($map['enableWAF'])) {
            $model->enableWAF = $map['enableWAF'];
        }

        return $model;
    }
}
