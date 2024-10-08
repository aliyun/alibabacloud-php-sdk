<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return packageSigns
     */
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
