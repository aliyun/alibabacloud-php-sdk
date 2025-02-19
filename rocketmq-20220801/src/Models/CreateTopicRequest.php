<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class CreateTopicRequest extends Model
{
    /**
     * @var int
     */
    public $maxSendTps;
    /**
     * @var string
     */
    public $messageType;
    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'maxSendTps'  => 'maxSendTps',
        'messageType' => 'messageType',
        'remark'      => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxSendTps) {
            $res['maxSendTps'] = $this->maxSendTps;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['maxSendTps'])) {
            $model->maxSendTps = $map['maxSendTps'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
