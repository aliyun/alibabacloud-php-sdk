<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetTrustedOriginResponseBody\trustedOrigin;

class GetTrustedOriginResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trustedOrigin
     */
    public $trustedOrigin;
    protected $_name = [
        'requestId' => 'RequestId',
        'trustedOrigin' => 'TrustedOrigin',
    ];

    public function validate()
    {
        if (null !== $this->trustedOrigin) {
            $this->trustedOrigin->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trustedOrigin) {
            $res['TrustedOrigin'] = null !== $this->trustedOrigin ? $this->trustedOrigin->toArray($noStream) : $this->trustedOrigin;
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

        if (isset($map['TrustedOrigin'])) {
            $model->trustedOrigin = trustedOrigin::fromMap($map['TrustedOrigin']);
        }

        return $model;
    }
}
