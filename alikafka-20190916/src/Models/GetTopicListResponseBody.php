<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList;
use AlibabaCloud\Tea\Model;

class GetTopicListResponseBody extends Model
{
    /**
     * @description The number of topics.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The HTTP status code returned. The HTTP status code 200 indicates that the call is successful.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The information about the topic.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description The status of the topic. Valid values:
     *
     **0:** indicates that the topic is running.
     *
     * If the topic is deleted, this parameter is not returned.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The message returned.
     *
     * @example C0D3DC5B-5C37-47AD-9F22-1F559880****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned on each page.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The description. Valid values:
     *
     *   The description contains only letters, digits, hyphens (-), and underscores (\_).
     *   The description is 3 to 64 characters in length.
     *
     * @var topicList
     */
    public $topicList;

    /**
     * @description The number of partitions in the topic.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'        => 'Code',
        'currentPage' => 'CurrentPage',
        'message'     => 'Message',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'topicList'   => 'TopicList',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->topicList) {
            $res['TopicList'] = null !== $this->topicList ? $this->topicList->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTopicListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TopicList'])) {
            $model->topicList = topicList::fromMap($map['TopicList']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
