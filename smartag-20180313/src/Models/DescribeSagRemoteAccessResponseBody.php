<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses;

class DescribeSagRemoteAccessResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var remoteAccesses
     */
    public $remoteAccesses;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'remoteAccesses' => 'RemoteAccesses',
        'requestId' => 'RequestId',
        'smartAGId' => 'SmartAGId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->remoteAccesses) {
            $this->remoteAccesses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->remoteAccesses) {
            $res['RemoteAccesses'] = null !== $this->remoteAccesses ? $this->remoteAccesses->toArray($noStream) : $this->remoteAccesses;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RemoteAccesses'])) {
            $model->remoteAccesses = remoteAccesses::fromMap($map['RemoteAccesses']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
