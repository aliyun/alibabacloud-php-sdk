<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters;

use AlibabaCloud\Tea\Model;

class historicalParameter extends Model
{
    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $newParameterValue;

    /**
     * @var string
     */
    public $oldParameterValue;

    /**
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
