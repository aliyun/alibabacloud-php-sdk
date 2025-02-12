<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $line;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $restoreDelay;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $value;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
