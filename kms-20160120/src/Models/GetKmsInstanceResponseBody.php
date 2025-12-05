<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance;

class GetKmsInstanceResponseBody extends Model
{
    /**
     * @var kmsInstance
     */
    public $kmsInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsInstance' => 'KmsInstance',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->kmsInstance) {
            $this->kmsInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsInstance) {
            $res['KmsInstance'] = null !== $this->kmsInstance ? $this->kmsInstance->toArray($noStream) : $this->kmsInstance;
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
        if (isset($map['KmsInstance'])) {
            $model->kmsInstance = kmsInstance::fromMap($map['KmsInstance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
