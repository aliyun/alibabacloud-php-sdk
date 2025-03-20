<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;
use AlibabaCloud\Tea\Model;

class GetIdentityProviderResponseBody extends Model
{
    /**
     * @var identityProviderDetail
     */
    public $identityProviderDetail;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identityProviderDetail' => 'IdentityProviderDetail',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityProviderDetail) {
            $res['IdentityProviderDetail'] = null !== $this->identityProviderDetail ? $this->identityProviderDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIdentityProviderResponseBody
     */
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
