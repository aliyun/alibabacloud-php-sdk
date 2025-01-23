<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class blockInstance extends Model
{
    /**
     * @var int
     */
    public $endCast;
    /**
     * @var int
     */
    public $finishTime;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var int
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endCast'    => 'EndCast',
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'nodeName'   => 'NodeName',
        'owner'      => 'Owner',
        'projectId'  => 'ProjectId',
        'status'     => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
