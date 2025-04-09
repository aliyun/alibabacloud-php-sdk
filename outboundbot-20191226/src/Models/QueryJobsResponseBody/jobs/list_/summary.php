<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
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
    public $conversationDetailId;

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
    public $summaryId;

    /**
     * @var string
     */
    public $summaryName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'category' => 'Category',
        'content' => 'Content',
        'conversationDetailId' => 'ConversationDetailId',
        'groupId' => 'GroupId',
        'jobId' => 'JobId',
        'summaryId' => 'SummaryId',
        'summaryName' => 'SummaryName',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->conversationDetailId) {
            $res['ConversationDetailId'] = $this->conversationDetailId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->summaryId) {
            $res['SummaryId'] = $this->summaryId;
        }

        if (null !== $this->summaryName) {
            $res['SummaryName'] = $this->summaryName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ConversationDetailId'])) {
            $model->conversationDetailId = $map['ConversationDetailId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['SummaryId'])) {
            $model->summaryId = $map['SummaryId'];
        }

        if (isset($map['SummaryName'])) {
            $model->summaryName = $map['SummaryName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
