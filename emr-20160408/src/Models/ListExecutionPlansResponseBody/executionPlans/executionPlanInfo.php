<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlansResponseBody\executionPlans;

use AlibabaCloud\Tea\Model;

class executionPlanInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $timeInterval;

    /**
     * @var string
     */
    public $stragety;

    /**
     * @var bool
     */
    public $createClusterOnDemand;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'status'                => 'Status',
        'startTime'             => 'StartTime',
        'timeInterval'          => 'TimeInterval',
        'stragety'              => 'Stragety',
        'createClusterOnDemand' => 'CreateClusterOnDemand',
        'name'                  => 'Name',
        'timeUnit'              => 'TimeUnit',
        'id'                    => 'Id',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->stragety) {
            $res['Stragety'] = $this->stragety;
        }
        if (null !== $this->createClusterOnDemand) {
            $res['CreateClusterOnDemand'] = $this->createClusterOnDemand;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionPlanInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['Stragety'])) {
            $model->stragety = $map['Stragety'];
        }
        if (isset($map['CreateClusterOnDemand'])) {
            $model->createClusterOnDemand = $map['CreateClusterOnDemand'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
