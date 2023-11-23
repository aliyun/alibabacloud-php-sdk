<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data\operations\conditions;
use AlibabaCloud\Tea\Model;

class operations extends Model
{
    /**
     * @description The rule conditions.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The operation code.
     *
     *   Only **whitelist** may be returned, which indicates that the alert event is added to the whitelist.
     *
     * @example whitelist
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The name of the operation.
     *
     * @example whitelist
     *
     * @var string
     */
    public $operationName;
    protected $_name = [
        'conditions'    => 'Conditions',
        'operationCode' => 'OperationCode',
        'operationName' => 'OperationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }

        return $model;
    }
}
