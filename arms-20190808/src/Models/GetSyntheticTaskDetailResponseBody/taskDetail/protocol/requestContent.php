<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\header;

class requestContent extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var header[]
     */
    public $header;

    /**
     * @var string
     */
    public $method;
    protected $_name = [
        'body' => 'Body',
        'header' => 'Header',
        'method' => 'Method',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (\is_array($this->header)) {
            Model::validateArray($this->header);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->header) {
            if (\is_array($this->header)) {
                $res['Header'] = [];
                $n1 = 0;
                foreach ($this->header as $item1) {
                    $res['Header'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
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
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['Header'])) {
            if (!empty($map['Header'])) {
                $model->header = [];
                $n1 = 0;
                foreach ($map['Header'] as $item1) {
                    $model->header[$n1] = header::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
