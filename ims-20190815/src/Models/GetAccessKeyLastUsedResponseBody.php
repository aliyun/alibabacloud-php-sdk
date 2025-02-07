<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponseBody\accessKeyLastUsed;

class GetAccessKeyLastUsedResponseBody extends Model
{
    /**
     * @var accessKeyLastUsed
     */
    public $accessKeyLastUsed;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeyLastUsed' => 'AccessKeyLastUsed',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessKeyLastUsed) {
            $this->accessKeyLastUsed->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyLastUsed) {
            $res['AccessKeyLastUsed'] = null !== $this->accessKeyLastUsed ? $this->accessKeyLastUsed->toArray($noStream) : $this->accessKeyLastUsed;
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
        if (isset($map['AccessKeyLastUsed'])) {
            $model->accessKeyLastUsed = accessKeyLastUsed::fromMap($map['AccessKeyLastUsed']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
