<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobErrorInfoResponseBody\errorInfo;

class GetTrainingJobErrorInfoResponseBody extends Model
{
    /**
     * @var errorInfo
     */
    public $errorInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorInfo' => 'ErrorInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->errorInfo) {
            $this->errorInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = null !== $this->errorInfo ? $this->errorInfo->toArray($noStream) : $this->errorInfo;
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
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = errorInfo::fromMap($map['ErrorInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
