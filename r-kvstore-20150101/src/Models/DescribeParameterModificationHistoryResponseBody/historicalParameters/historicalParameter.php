<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters;

use AlibabaCloud\Dara\Model;

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
        'modifyTime' => 'ModifyTime',
        'newParameterValue' => 'NewParameterValue',
        'oldParameterValue' => 'OldParameterValue',
        'parameterName' => 'ParameterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
