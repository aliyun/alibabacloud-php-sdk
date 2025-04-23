<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class instanceComputeMetrics extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobOwner;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $usage;
    protected $_name = [
        'endTime' => 'endTime',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'projectName' => 'projectName',
        'signature' => 'signature',
        'specCode' => 'specCode',
        'submitTime' => 'submitTime',
        'type' => 'type',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }

        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
