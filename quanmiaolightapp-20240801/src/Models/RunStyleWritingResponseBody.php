<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody\header;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody\payload;

class RunStyleWritingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $end;

    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'end' => 'end',
        'header' => 'header',
        'payload' => 'payload',
    ];

    public function validate()
    {
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
        if (null !== $this->end) {
            $res['end'] = $this->end;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
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
