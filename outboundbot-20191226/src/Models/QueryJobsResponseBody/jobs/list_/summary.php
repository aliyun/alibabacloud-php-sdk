<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_;

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
     * @example 098b9b09-9223-4a8b-a422-99726f0457f3
     *
     * @var string
     */
    public $conversationDetailId;

    /**
     * @example ba1ba502-d044-48c0-b710-0f1f840a7c53
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 994b8baf-7ef8-480c-b141-b7b6db77c4df
     *
     * @var string
     */
    public $jobId;

    /**
     * @example dc67d544-df06-4625-ae48-13e3c9f72d8a
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
     * @example 9fdf7a81-6781-4ab8-92fb-1d4231ef365e
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'category'             => 'Category',
        'content'              => 'Content',
        'conversationDetailId' => 'ConversationDetailId',
        'groupId'              => 'GroupId',
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
