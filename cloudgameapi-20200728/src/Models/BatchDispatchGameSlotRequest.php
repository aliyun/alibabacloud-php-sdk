<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class BatchDispatchGameSlotRequest extends Model
{
    /**
     * @var string
     */
    public $queueUserList;
    protected $_name = [
        'queueUserList' => 'QueueUserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueUserList) {
            $res['QueueUserList'] = $this->queueUserList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDispatchGameSlotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueUserList'])) {
            $model->queueUserList = $map['QueueUserList'];
        }

        return $model;
    }
}
