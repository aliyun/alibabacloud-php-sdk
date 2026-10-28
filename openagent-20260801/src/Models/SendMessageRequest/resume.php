<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest;

use AlibabaCloud\Dara\Model;

class resume extends Model
{
    /**
     * @var string
     */
    public $interruptId;

    /**
     * @var mixed
     */
    public $payload;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'interruptId' => 'interruptId',
        'payload' => 'payload',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interruptId) {
            $res['interruptId'] = $this->interruptId;
        }

        if (null !== $this->payload) {
            $res['payload'] = $this->payload;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['interruptId'])) {
            $model->interruptId = $map['interruptId'];
        }

        if (isset($map['payload'])) {
            $model->payload = $map['payload'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
