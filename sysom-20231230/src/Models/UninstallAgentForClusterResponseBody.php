<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterResponseBody\data;

class UninstallAgentForClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $code;
    /**
     * @var data
     */
    public $data;
    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'code',
        'data'      => 'data',
        'message'   => 'message',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
