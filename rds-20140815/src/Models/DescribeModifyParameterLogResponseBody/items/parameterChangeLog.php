<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponseBody\items;

use AlibabaCloud\Tea\Model;

class parameterChangeLog extends Model
{
    /**
     * @description The time when the parameter was modified. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1584076066000
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The new value of the parameter.
     *
     * @example 3
     *
     * @var string
     */
    public $newParameterValue;

    /**
     * @description The original value of the parameter.
     *
     * @example 8
     *
     * @var string
     */
    public $oldParameterValue;

    /**
     * @description The name of the parameter.
     *
     * @example innodb_stats_sample_pages
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The status of the new value specified for the parameter. Valid values:
     *
     *   **Applied:** The new value has taken effect.
     *   **Syncing:** The new value is being applied and has not taken effect.
     *
     * @example Syncing
     *
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
