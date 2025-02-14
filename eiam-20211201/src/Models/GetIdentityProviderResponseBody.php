<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

class GetIdentityProviderResponseBody extends Model
{
    /**
     * @var identityProviderDetail
     */
    public $identityProviderDetail;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identityProviderDetail' => 'IdentityProviderDetail',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->identityProviderDetail) {
            $this->identityProviderDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderDetail) {
            $res['IdentityProviderDetail'] = null !== $this->identityProviderDetail ? $this->identityProviderDetail->toArray($noStream) : $this->identityProviderDetail;
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
        if (isset($map['IdentityProviderDetail'])) {
            $model->identityProviderDetail = identityProviderDetail::fromMap($map['IdentityProviderDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
