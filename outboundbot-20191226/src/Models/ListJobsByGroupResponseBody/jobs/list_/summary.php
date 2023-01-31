<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsByGroupResponseBody\jobs\list_;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $category;

    /**
     * @example 5
     *
     * @var string
     */
    public $content;

    /**
     * @example 62a860f5-a8b3-4b75-9512-c7e04bb7c8bc
     *
     * @var string
     */
    public $conversationDetailId;

    /**
     * @example 88e56cfb-33f8-477a-907c-0fe83292d924
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example f102a853-5f5a-47fb-8869-b31ea74a9620
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 680f1905-81ae-4aab-99dd-2964dfb767fa
     *
     * @var string
     */
    public $summaryId;

    /**
     * @example score
     *
     * @var string
     */
    public $summaryName;

    /**
     * @example b0f35dd1-0337-402e-9c4f-3a6c2426950a
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'category'             => 'Category',
        'content'              => 'Content',
        'conversationDetailId' => 'ConversationDetailId',
        'jobGroupId'           => 'JobGroupId',
        'jobId'                => 'JobId',
        'summaryId'            => 'SummaryId',
        'summaryName'          => 'SummaryName',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
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

    /**
     * @param array $map
     *
     * @return summary
     */
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
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
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
