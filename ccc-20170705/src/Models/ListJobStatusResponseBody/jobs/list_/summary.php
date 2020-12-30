<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListJobStatusResponseBody\jobs\list_;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $summaryName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $summaryId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $conversationDetailId;
    protected $_name = [
        'summaryName'          => 'SummaryName',
        'groupId'              => 'GroupId',
        'jobId'                => 'JobId',
        'category'             => 'Category',
        'content'              => 'Content',
        'summaryId'            => 'SummaryId',
        'taskId'               => 'TaskId',
        'conversationDetailId' => 'ConversationDetailId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryName) {
            $res['SummaryName'] = $this->summaryName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->summaryId) {
            $res['SummaryId'] = $this->summaryId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->conversationDetailId) {
            $res['ConversationDetailId'] = $this->conversationDetailId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryName'])) {
            $model->summaryName = $map['SummaryName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SummaryId'])) {
            $model->summaryId = $map['SummaryId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ConversationDetailId'])) {
            $model->conversationDetailId = $map['ConversationDetailId'];
        }

        return $model;
    }
}
