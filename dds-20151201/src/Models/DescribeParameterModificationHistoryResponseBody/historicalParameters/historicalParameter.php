<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters;

use AlibabaCloud\Tea\Model;

class historicalParameter extends Model
{
    /**
     * @description The time when the parameter was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-12T07:58:24Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The parameter value after modification.
     *
     * @example 200
     *
     * @var string
     */
    public $newParameterValue;

    /**
     * @description The parameter value before modification.
     *
     * @example 100
     *
     * @var string
     */
    public $oldParameterValue;

    /**
     * @description The name of the modified parameter.
     *
     * @example operationProfiling.slowOpThresholdMs
     *
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'modifyTime'        => 'ModifyTime',
        'newParameterValue' => 'NewParameterValue',
        'oldParameterValue' => 'OldParameterValue',
        'parameterName'     => 'ParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->newParameterValue) {
            $res['NewParameterValue'] = $this->newParameterValue;
        }
        if (null !== $this->oldParameterValue) {
            $res['OldParameterValue'] = $this->oldParameterValue;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historicalParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NewParameterValue'])) {
            $model->newParameterValue = $map['NewParameterValue'];
        }
        if (isset($map['OldParameterValue'])) {
            $model->oldParameterValue = $map['OldParameterValue'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        return $model;
    }
}
