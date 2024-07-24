<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageRequest;

use AlibabaCloud\Tea\Model;

class advancedFilters extends Model
{
    /**
     * @description The key of the filter condition.
     *
     * @example regionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The operator. Valid values: eq and in.
     *
     * @example eq
     *
     * @var string
     */
    public $opType;

    /**
     * @description The value of the filter condition.
     *
     * @example cn-hangzhou
     *
     * @var string
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
