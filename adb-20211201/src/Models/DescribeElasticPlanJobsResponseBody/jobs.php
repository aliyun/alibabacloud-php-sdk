<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanJobsResponseBody;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $elasticAcu;

    /**
     * @var string
     */
    public $elasticPlanName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $instanceSize;

    /**
     * @var string
     */
    public $reserveAcu;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetSize;

    /**
     * @var string
     */
    public $totalAcu;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'elasticAcu' => 'ElasticAcu',
        'elasticPlanName' => 'ElasticPlanName',
        'endTime' => 'EndTime',
        'instanceSize' => 'InstanceSize',
        'reserveAcu' => 'ReserveAcu',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'targetSize' => 'TargetSize',
        'totalAcu' => 'TotalAcu',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticAcu) {
            $res['ElasticAcu'] = $this->elasticAcu;
        }

        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }

        if (null !== $this->reserveAcu) {
            $res['ReserveAcu'] = $this->reserveAcu;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
        }

        if (null !== $this->totalAcu) {
            $res['TotalAcu'] = $this->totalAcu;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ElasticAcu'])) {
            $model->elasticAcu = $map['ElasticAcu'];
        }

        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }

        if (isset($map['ReserveAcu'])) {
            $model->reserveAcu = $map['ReserveAcu'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }

        if (isset($map['TotalAcu'])) {
            $model->totalAcu = $map['TotalAcu'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
