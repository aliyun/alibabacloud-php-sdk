<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponseBody\respond;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The request ID.
     *
     * @example 2021-09-14 10:57:44
     *
     * @var string
     */
    public $createTime;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeParametersHistory
     * &InstanceId=ob317v4uif****
     * &Dimension=TENANT
     * &DimensionValue=ob2mr3oae0****
     * ```
     * @example DEFAULT_DIMENSION_VALUE
     *
     * @var string
     */
    public $dimensionValue;

    /**
     * @description You can call this operation to query the modification history of cluster or tenant parameters.
     *
     * @example connect_timeout
     *
     * @var string
     */
    public $name;

    /**
     * @example 200
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The start time of the time range for querying the parameter modification history.
     *
     * @example 300
     *
     * @var string
     */
    public $oldValue;

    /**
     * @description -
     *
     * @example APPLIED
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the parameter.
     *
     * @example 2021-09-14 10:57:44
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
