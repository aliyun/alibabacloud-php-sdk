<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoShowListTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoShowListTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoShowListTasks' => 'AutoShowListTasks',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoShowListTasks) {
            $res['AutoShowListTasks'] = $this->autoShowListTasks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoShowListTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoShowListTasks'])) {
            $model->autoShowListTasks = $map['AutoShowListTasks'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
