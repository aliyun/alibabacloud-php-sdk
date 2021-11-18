<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceTypesRequest extends Model
{
    /**
     * @description AcceleratorType
     *
     * @var string
     */
    public $acceleratorType;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        return $model;
    }
}
