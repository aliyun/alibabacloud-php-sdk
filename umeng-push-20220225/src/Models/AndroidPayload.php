<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

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
        'body'                 => 'body',
        'displayType'          => 'displayType',
        'extra'                => 'extra',
        'message2ThirdChannel' => 'message2ThirdChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->message2ThirdChannel) {
            $res['message2ThirdChannel'] = null !== $this->message2ThirdChannel ? $this->message2ThirdChannel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AndroidPayload
     */
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
            $model->extra = $map['extra'];
        }
        if (isset($map['message2ThirdChannel'])) {
            $model->message2ThirdChannel = Message2ThirdChannel::fromMap($map['message2ThirdChannel']);
        }

        return $model;
    }
}
