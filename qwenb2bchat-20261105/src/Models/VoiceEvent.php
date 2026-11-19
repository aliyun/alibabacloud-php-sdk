<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\communication;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\error;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\header;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\payload;

class VoiceEvent extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @var communication
     */
    public $communication;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var error
     */
    public $error;
    protected $_name = [
        'header' => 'header',
        'communication' => 'communication',
        'payload' => 'payload',
        'error' => 'error',
    ];

    public function validate()
    {
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->communication) {
            $this->communication->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->communication) {
            $res['communication'] = null !== $this->communication ? $this->communication->toArray($noStream) : $this->communication;
        }

        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }

        if (isset($map['communication'])) {
            $model->communication = communication::fromMap($map['communication']);
        }

        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        return $model;
    }
}
