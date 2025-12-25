<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowExecutionDAGResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowExecutionDAGResponseBody\data\nodes\coordinate;

class nodes extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var coordinate
     */
    public $coordinate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'appName' => 'AppName',
        'coordinate' => 'Coordinate',
        'id' => 'Id',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'name' => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->coordinate) {
            $this->coordinate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->coordinate) {
            $res['Coordinate'] = null !== $this->coordinate ? $this->coordinate->toArray($noStream) : $this->coordinate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Coordinate'])) {
            $model->coordinate = coordinate::fromMap($map['Coordinate']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
