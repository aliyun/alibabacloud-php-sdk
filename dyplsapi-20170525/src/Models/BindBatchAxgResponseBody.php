<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody\secretBindList;
use AlibabaCloud\Tea\Model;

class BindBatchAxgResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 5DCCA8CD-6C0A-50B4-A496-B1D2AB48A1C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @var secretBindList
     */
    public $secretBindList;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'secretBindList' => 'SecretBindList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretBindList) {
            $res['SecretBindList'] = null !== $this->secretBindList ? $this->secretBindList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindBatchAxgResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretBindList'])) {
            $model->secretBindList = secretBindList::fromMap($map['SecretBindList']);
        }

        return $model;
    }
}
