<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponseBody\items;

use AlibabaCloud\Dara\Model;

class parameterChangeLog extends Model
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
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'modifyTime'        => 'ModifyTime',
        'newParameterValue' => 'NewParameterValue',
        'oldParameterValue' => 'OldParameterValue',
        'parameterName'     => 'ParameterName',
        'status'            => 'Status',
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
