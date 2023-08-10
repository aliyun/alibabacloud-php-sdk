<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponseBody\result;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The parameters that are used by a function in the expression.
     *
     * @example ar_edit_time
     *
     * @var string
     */
    public $arg;

    /**
     * @description The attribute, feature function, or field to be searched for.
     *
     * @example timeliness_ms()
     *
     * @var string
     */
    public $attribute;

    /**
     * @description The weight.
     *
     * Valid values: \[-100000,100000] (excluding 0).
     * @example 1
     *
     * @var float
     */
    public $weight;
    protected $_name = [
        'arg'       => 'arg',
        'attribute' => 'attribute',
        'weight'    => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg) {
            $res['arg'] = $this->arg;
        }
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arg'])) {
            $model->arg = $map['arg'];
        }
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
