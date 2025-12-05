<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponseBody\keyVersion;

class CreateKeyVersionResponseBody extends Model
{
    /**
     * @var keyVersion
     */
    public $keyVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyVersion' => 'KeyVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->keyVersion) {
            $this->keyVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyVersion) {
            $res['KeyVersion'] = null !== $this->keyVersion ? $this->keyVersion->toArray($noStream) : $this->keyVersion;
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
        if (isset($map['KeyVersion'])) {
            $model->keyVersion = keyVersion::fromMap($map['KeyVersion']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
