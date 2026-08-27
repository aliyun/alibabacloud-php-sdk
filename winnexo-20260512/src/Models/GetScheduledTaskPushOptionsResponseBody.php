<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody\channels;

class GetScheduledTaskPushOptionsResponseBody extends Model
{
    /**
     * @var channels[]
     */
    public $channels;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $emptyHint;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channels' => 'channels',
        'code' => 'code',
        'emptyHint' => 'emptyHint',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['channels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->emptyHint) {
            $res['emptyHint'] = $this->emptyHint;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['channels'] as $item1) {
                    $model->channels[$n1] = channels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['emptyHint'])) {
            $model->emptyHint = $map['emptyHint'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
