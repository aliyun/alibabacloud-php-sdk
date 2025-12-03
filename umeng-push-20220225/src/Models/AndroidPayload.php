<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class AndroidPayload extends Model
{
    /**
     * @var Body
     */
    public $body;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var Message2ThirdChannel
     */
    public $message2ThirdChannel;
    protected $_name = [
        'body' => 'body',
        'displayType' => 'displayType',
        'extra' => 'extra',
        'message2ThirdChannel' => 'message2ThirdChannel',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (null !== $this->message2ThirdChannel) {
            $this->message2ThirdChannel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message2ThirdChannel) {
            $res['message2ThirdChannel'] = null !== $this->message2ThirdChannel ? $this->message2ThirdChannel->toArray($noStream) : $this->message2ThirdChannel;
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
        if (isset($map['body'])) {
            $model->body = Body::fromMap($map['body']);
        }

        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['message2ThirdChannel'])) {
            $model->message2ThirdChannel = Message2ThirdChannel::fromMap($map['message2ThirdChannel']);
        }

        return $model;
    }
}
