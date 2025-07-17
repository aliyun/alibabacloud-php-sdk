<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest;

use AlibabaCloud\Tea\Model;

class advancedFilters extends Model
{
    /**
     * @description The filter condition. The taskType and dataId fields are supported.
     *
     *   To query the list of synthetic test results, set the key to taskType.
     *   To query the result details of a synthetic monitoring task, set the key to dataId.
     *
     * @example taskType
     *
     * @var string
     */
    public $key;

    /**
     * @description The type of the filter condition. Valid values: eq and in. eq: equal to. in: include.
     *
     * @example eq
     *
     * @var string
     */
    public $opType;

    /**
     * @description The value of the filter condition. The type of the task. Valid values: 1: ICMP 2: TCP 3: DNS 4: HTTP 5: website speed measurement 6: file download
     *
     * @example 1
     *
     * @var mixed
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'opType' => 'OpType',
        'value' => 'Value',
    ];

    public function validate() {}

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
