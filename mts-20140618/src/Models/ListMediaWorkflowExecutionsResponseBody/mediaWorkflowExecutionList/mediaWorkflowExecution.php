<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\activityList;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\input;
use AlibabaCloud\Tea\Model;

class mediaWorkflowExecution extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var activityList
     */
    public $activityList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $runId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'mediaWorkflowId' => 'MediaWorkflowId',
        'state'           => 'State',
        'activityList'    => 'ActivityList',
        'name'            => 'Name',
        'input'           => 'Input',
        'mediaId'         => 'MediaId',
        'runId'           => 'RunId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->activityList) {
            $res['ActivityList'] = null !== $this->activityList ? $this->activityList->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaWorkflowExecution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ActivityList'])) {
            $model->activityList = activityList::fromMap($map['ActivityList']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        return $model;
    }
}
