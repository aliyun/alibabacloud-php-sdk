<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGResponseBody\data\nodes\coordinate;

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
     * @var int
     */
    public $dependentStrategy;

    /**
     * @var int
     */
    public $id;

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
        'dependentStrategy' => 'DependentStrategy',
        'id' => 'Id',
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

        if (null !== $this->dependentStrategy) {
            $res['DependentStrategy'] = $this->dependentStrategy;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['DependentStrategy'])) {
            $model->dependentStrategy = $map['DependentStrategy'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
