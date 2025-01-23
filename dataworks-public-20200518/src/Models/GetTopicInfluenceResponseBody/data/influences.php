<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody\data;

use AlibabaCloud\Dara\Model;

class influences extends Model
{
    /**
     * @var int
     */
    public $baselineId;
    /**
     * @var string
     */
    public $baselineName;
    /**
     * @var int
     */
    public $bizdate;
    /**
     * @var int
     */
    public $buffer;
    /**
     * @var int
     */
    public $inGroupId;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'baselineId'   => 'BaselineId',
        'baselineName' => 'BaselineName',
        'bizdate'      => 'Bizdate',
        'buffer'       => 'Buffer',
        'inGroupId'    => 'InGroupId',
        'owner'        => 'Owner',
        'priority'     => 'Priority',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }

        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }

        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }

        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }

        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }

        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }

        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
