<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponseBody\mediaWorkflowExecutionList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\activityList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\input;
use AlibabaCloud\Tea\Model;

class mediaWorkflowExecution extends Model
{
    /**
     * @var activityList
     */
    public $activityList;

    /**
     * @var string
     */
    public $creationTime;

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
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'activityList'    => 'ActivityList',
        'creationTime'    => 'CreationTime',
        'input'           => 'Input',
        'mediaId'         => 'MediaId',
        'mediaWorkflowId' => 'MediaWorkflowId',
        'name'            => 'Name',
        'runId'           => 'RunId',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityList) {
            $res['ActivityList'] = null !== $this->activityList ? $this->activityList->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ActivityList'])) {
            $model->activityList = activityList::fromMap($map['ActivityList']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
