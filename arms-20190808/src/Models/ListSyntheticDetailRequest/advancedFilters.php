<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest;

use AlibabaCloud\Tea\Model;

class advancedFilters extends Model
{
    /**
     * @example taskType
     *
     * @var string
     */
    public $key;

    /**
     * @example eq
     *
     * @var string
     */
    public $opType;

    /**
     * @example 1
     *
     * @var mixed
     */
    public $value;
    protected $_name = [
        'key'    => 'Key',
        'opType' => 'OpType',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
