<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\communication;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\data;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\header;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\params;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload;

class VoiceCommand extends Model
{
    /**
     * @var communication
     */
    public $communication;

    /**
     * @var data
     */
    public $data;

    /**
     * @var params
     */
    public $params;

    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'communication' => 'communication',
        'data' => 'data',
        'params' => 'params',
        'header' => 'header',
        'payload' => 'payload',
    ];

    public function validate()
    {
        if (null !== $this->communication) {
            $this->communication->validate();
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (null !== $this->params) {
            $this->params->validate();
        }
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->communication) {
            $res['communication'] = null !== $this->communication ? $this->communication->toArray($noStream) : $this->communication;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toArray($noStream) : $this->params;
        }

        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
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
        if (isset($map['communication'])) {
            $model->communication = communication::fromMap($map['communication']);
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['params'])) {
            $model->params = params::fromMap($map['params']);
        }

        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }

        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }

        return $model;
    }
}
