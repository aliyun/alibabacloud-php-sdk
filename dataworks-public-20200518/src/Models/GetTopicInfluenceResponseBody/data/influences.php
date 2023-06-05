<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody\data;

use AlibabaCloud\Tea\Model;

class influences extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @example 1553356800000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @example 360
     *
     * @var int
     */
    public $buffer;

    /**
     * @example 1
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example SAFE
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return influences
     */
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
