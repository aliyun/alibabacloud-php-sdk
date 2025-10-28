<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJavaStartUpConfigResponseBody\javaStartUpConfig;

class GetJavaStartUpConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var javaStartUpConfig
     */
    public $javaStartUpConfig;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'javaStartUpConfig' => 'JavaStartUpConfig',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->javaStartUpConfig) {
            $this->javaStartUpConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = null !== $this->javaStartUpConfig ? $this->javaStartUpConfig->toArray($noStream) : $this->javaStartUpConfig;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = javaStartUpConfig::fromMap($map['JavaStartUpConfig']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
