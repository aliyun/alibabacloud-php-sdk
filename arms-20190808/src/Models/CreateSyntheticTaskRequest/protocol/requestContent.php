<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\body;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\header;
use AlibabaCloud\Tea\Model;

class requestContent extends Model
{
    /**
     * @description The custom body of a request to initiate an API performance synthetic monitoring task.
     *
     * @var body
     */
    public $body;

    /**
     * @description The custom header of a request to initiate an API performance synthetic monitoring task.
     *
     * @var header[]
     */
    public $header;

    /**
     * @description The request method.
     *
     *   POST
     *   GET
     *
     * @example POST
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'body' => 'Body',
        'header' => 'Header',
        'method' => 'Method',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->header) {
            $res['Header'] = [];
            if (null !== $this->header && \is_array($this->header)) {
                $n = 0;
                foreach ($this->header as $item) {
                    $res['Header'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }
        if (isset($map['Header'])) {
            if (!empty($map['Header'])) {
                $model->header = [];
                $n = 0;
                foreach ($map['Header'] as $item) {
                    $model->header[$n++] = null !== $item ? header::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
