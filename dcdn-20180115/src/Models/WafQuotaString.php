<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class WafQuotaString extends Model
{
    /**
     * @var string
     */
    public $regexp;
    protected $_name = [
        'regexp' => 'Regexp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regexp) {
            $res['Regexp'] = $this->regexp;
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
        if (isset($map['Regexp'])) {
            $model->regexp = $map['Regexp'];
        }

        return $model;
    }
}
