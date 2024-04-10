<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class ListQueueRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example demo-queue
     *
     * @var string
     */
    public $queueName;
    protected $_name = [
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'queueName' => 'QueueName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
