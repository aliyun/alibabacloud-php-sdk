<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody\result;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The parameters that are used by a function in the expression.
     *
     * For more information, see [Rough sort functions](https://help.aliyun.com/document_detail/180765.html).
     * @example ""
     *
     * @var string
     */
    public $arg;

    /**
     * @description The attribute, feature function, or field to be searched for.
     *
     * For more information about supported feature functions, see [Rough sort functions](https://help.aliyun.com/document_detail/180765.html).
     * @example static_bm25()
     *
     * @var string
     */
    public $attribute;

    /**
     * @description The weight.
     *
     * Valid values: [-100000,100000] (excluding 0).
     * @example 1
     *
     * @var int
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
