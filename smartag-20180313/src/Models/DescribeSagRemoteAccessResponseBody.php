<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses;
use AlibabaCloud\Tea\Model;

class DescribeSagRemoteAccessResponseBody extends Model
{
    /**
     * @var remoteAccesses
     */
    public $remoteAccesses;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'remoteAccesses' => 'RemoteAccesses',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'smartAGId'      => 'SmartAGId',
        'code'           => 'Code',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteAccesses) {
            $res['RemoteAccesses'] = null !== $this->remoteAccesses ? $this->remoteAccesses->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagRemoteAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemoteAccesses'])) {
            $model->remoteAccesses = remoteAccesses::fromMap($map['RemoteAccesses']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
