<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data\operations;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The keyword of the condition. Valid values:
     *
     *   **MD5**
     *   **PATH**
     *
     * @example MD5
     *
     * @var string
     */
    public $conditionKey;

    /**
     * @description The name of the condition.
     *
     * @example MD5
     *
     * @var string
     */
    public $conditionName;

    /**
     * @description The matching types.
     *
     * @var string[]
     */
    public $supportedMisType;
    protected $_name = [
        'conditionKey'     => 'ConditionKey',
        'conditionName'    => 'ConditionName',
        'supportedMisType' => 'SupportedMisType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionKey) {
            $res['ConditionKey'] = $this->conditionKey;
        }
        if (null !== $this->conditionName) {
            $res['ConditionName'] = $this->conditionName;
        }
        if (null !== $this->supportedMisType) {
            $res['SupportedMisType'] = $this->supportedMisType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionKey'])) {
            $model->conditionKey = $map['ConditionKey'];
        }
        if (isset($map['ConditionName'])) {
            $model->conditionName = $map['ConditionName'];
        }
        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = $map['SupportedMisType'];
            }
        }

        return $model;
    }
}
