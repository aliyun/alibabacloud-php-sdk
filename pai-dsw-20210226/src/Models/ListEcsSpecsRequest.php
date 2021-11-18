<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListEcsSpecsRequest extends Model
{
    /**
     * @description 每页返回的实例数
     *
     * @var string
     */
    public $acceleratorTypeEquals;
    protected $_name = [
        'acceleratorTypeEquals' => 'AcceleratorTypeEquals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorTypeEquals) {
            $res['AcceleratorTypeEquals'] = $this->acceleratorTypeEquals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcsSpecsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorTypeEquals'])) {
            $model->acceleratorTypeEquals = $map['AcceleratorTypeEquals'];
        }

        return $model;
    }
}
