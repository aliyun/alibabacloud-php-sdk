<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderResponseBody\OIDCProvider;
use AlibabaCloud\Tea\Model;

class RemoveFingerprintFromOIDCProviderResponseBody extends Model
{
    /**
     * @var OIDCProvider
     */
    public $OIDCProvider;

    /**
     * @example C90CE971-4C7F-5D93-BD3E-2D0E79D03C01
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
     * @return RemoveFingerprintFromOIDCProviderResponseBody
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
