<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class UpdateTopicRequest extends Model
{
    /**
     * @var int
     */
    public $maxSendTps;

    /**
     * @description The new remarks on the topic.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'maxSendTps' => 'maxSendTps',
        'remark'     => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSendTps) {
            $res['maxSendTps'] = $this->maxSendTps;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxSendTps'])) {
            $model->maxSendTps = $map['maxSendTps'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
