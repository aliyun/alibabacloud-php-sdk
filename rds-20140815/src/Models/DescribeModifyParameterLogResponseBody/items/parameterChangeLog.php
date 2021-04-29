<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponseBody\items;

use AlibabaCloud\Tea\Model;

class parameterChangeLog extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $oldParameterValue;

    /**
     * @var string
     */
    public $newParameterValue;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'status'            => 'Status',
        'parameterName'     => 'ParameterName',
        'oldParameterValue' => 'OldParameterValue',
        'newParameterValue' => 'NewParameterValue',
        'modifyTime'        => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->oldParameterValue) {
            $res['OldParameterValue'] = $this->oldParameterValue;
        }
        if (null !== $this->newParameterValue) {
            $res['NewParameterValue'] = $this->newParameterValue;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterChangeLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['OldParameterValue'])) {
            $model->oldParameterValue = $map['OldParameterValue'];
        }
        if (isset($map['NewParameterValue'])) {
            $model->newParameterValue = $map['NewParameterValue'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
