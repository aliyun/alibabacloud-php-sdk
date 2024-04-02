<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults;

use AlibabaCloud\Tea\Model;

class mustache extends Model
{
    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'rate'  => 'Rate',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mustache
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
