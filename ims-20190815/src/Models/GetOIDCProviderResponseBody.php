<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetOIDCProviderResponseBody\OIDCProvider;
use AlibabaCloud\Tea\Model;

class GetOIDCProviderResponseBody extends Model
{
    /**
     * @var OIDCProvider
     */
    public $OIDCProvider;

    /**
     * @example E5E1A300-279D-5FBD-A8CF-F4EDC20C4896
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'OIDCProvider' => 'OIDCProvider',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OIDCProvider) {
            $res['OIDCProvider'] = null !== $this->OIDCProvider ? $this->OIDCProvider->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOIDCProviderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OIDCProvider'])) {
            $model->OIDCProvider = OIDCProvider::fromMap($map['OIDCProvider']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
