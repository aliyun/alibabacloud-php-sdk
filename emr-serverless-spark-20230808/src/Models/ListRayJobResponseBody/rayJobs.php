<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayJobResponseBody;

use AlibabaCloud\Dara\Model;

class rayJobs extends Model
{
    /**
     * @var string
     */
    public $clusterState;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var float
     */
    public $cuHours;

    /**
     * @var string
     */
    public $dashboardUrl;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceQueue;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submissionId;

    /**
     * @var int
     */
    public $submitTime;
    protected $_name = [
        'clusterState' => 'clusterState',
        'creatorName' => 'creatorName',
        'cuHours' => 'cuHours',
        'dashboardUrl' => 'dashboardUrl',
        'duration' => 'duration',
        'endTime' => 'endTime',
        'name' => 'name',
        'resourceQueue' => 'resourceQueue',
        'startTime' => 'startTime',
        'status' => 'status',
        'submissionId' => 'submissionId',
        'submitTime' => 'submitTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterState) {
            $res['clusterState'] = $this->clusterState;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->cuHours) {
            $res['cuHours'] = $this->cuHours;
        }

        if (null !== $this->dashboardUrl) {
            $res['dashboardUrl'] = $this->dashboardUrl;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceQueue) {
            $res['resourceQueue'] = $this->resourceQueue;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->submissionId) {
            $res['submissionId'] = $this->submissionId;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
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
        if (isset($map['clusterState'])) {
            $model->clusterState = $map['clusterState'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['cuHours'])) {
            $model->cuHours = $map['cuHours'];
        }

        if (isset($map['dashboardUrl'])) {
            $model->dashboardUrl = $map['dashboardUrl'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceQueue'])) {
            $model->resourceQueue = $map['resourceQueue'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['submissionId'])) {
            $model->submissionId = $map['submissionId'];
        }

        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }

        return $model;
    }
}
