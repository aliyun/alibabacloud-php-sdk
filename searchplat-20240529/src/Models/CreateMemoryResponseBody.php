<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemoryResponseBody\result;

class CreateMemoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $latency;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'latency' => 'latency',
        'requestId' => 'request_id',
        'result' => 'result',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latency) {
            $res['latency'] = $this->latency;
        }

        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
        if (isset($map['latency'])) {
            $model->latency = $map['latency'];
        }

        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
