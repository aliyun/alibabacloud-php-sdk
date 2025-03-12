<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponseBody\respond;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The time when the parameter modification was initiated.
     *
     * @example 2024-11-26T08:03:34Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The resource ID of the parameter type. When you called this operation to query the modification history of cluster parameters, the value is DEFAULT_DIMENSION_VALUE. When you called this operation to query the modification history of tenant parameters, the value is the tenant ID.
     *
     * @example t69uo********
     *
     * @var string
     */
    public $dimensionValue;

    /**
     * @description The name of the parameter.
     *
     * @example connect_timeout
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the parameter after the modification.
     *
     * @example 30
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The value of the parameter before the modification.
     *
     * @example 10
     *
     * @var string
     */
    public $oldValue;

    /**
     * @description The modification status of the parameter. Valid values:
     * APPLIED: The parameter was modified.
     * SCHEDULING: The parameter was to be modified.
     *
     * @example APPLIED
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the parameter modification took effect.
     *
     * @example 2024-11-26T08:03:34Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'dimensionValue' => 'DimensionValue',
        'name'           => 'Name',
        'newValue'       => 'NewValue',
        'oldValue'       => 'OldValue',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
