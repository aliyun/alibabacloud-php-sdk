<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListTopicsShrinkRequest extends Model
{
    /**
     * @description The condition that you want to use to filter topics in the instance. If you leave this parameter empty, all topics in the instance are queried.
     *
     * @example topic_test
     *
     * @var string
     */
    public $filter;

    /**
     * @description The message types of the topics.
     *
     * @var string
     */
    public $messageTypesShrink;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 3
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'filter'             => 'filter',
        'messageTypesShrink' => 'messageTypes',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->messageTypesShrink) {
            $res['messageTypes'] = $this->messageTypesShrink;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTopicsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['messageTypes'])) {
            $model->messageTypesShrink = $map['messageTypes'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
