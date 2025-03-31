<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage;

use AlibabaCloud\Dara\Model;

class packageSigns extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'name' => 'Name',
        'sign' => 'Sign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        return $model;
    }
}
