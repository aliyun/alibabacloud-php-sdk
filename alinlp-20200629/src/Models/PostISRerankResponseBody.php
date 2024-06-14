<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostISRerankResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var mixed[]
     */
    public $debugInfo;

    /**
     * @example null
     *
     * @var string
     */
    public $message;

    /**
     * @example xxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'data'      => 'Data',
        'debugInfo' => 'DebugInfo',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostISRerankResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
