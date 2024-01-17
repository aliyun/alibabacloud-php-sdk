<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $line;

    /**
     * @example 100
     *
     * @var int
     */
    public $priority;

    /**
     * @example 1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 60
     *
     * @var int
     */
    public $restoreDelay;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @example 203.***.***.39
     *
     * @var string
     */
    public $value;

    /**
     * @example 1
     *
     * @var int
     */
    public $valueType;
    protected $_name = [
        'line'         => 'Line',
        'priority'     => 'Priority',
        'regionId'     => 'RegionId',
        'restoreDelay' => 'RestoreDelay',
        'status'       => 'Status',
        'type'         => 'Type',
        'value'        => 'Value',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->restoreDelay) {
            $res['RestoreDelay'] = $this->restoreDelay;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RestoreDelay'])) {
            $model->restoreDelay = $map['RestoreDelay'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
