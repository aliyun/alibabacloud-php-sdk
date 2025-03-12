<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateOIDCProviderResponseBody\OIDCProvider;
use AlibabaCloud\Tea\Model;

class CreateOIDCProviderResponseBody extends Model
{
    /**
     * @description The information about the OIDC IdP.
     *
     * @var OIDCProvider
     */
    public $OIDCProvider;

    /**
     * @description The request ID.
     *
     * @example 64B11B41-636D-51E3-A39B-C8703CD2218C
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
     * @return CreateOIDCProviderResponseBody
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
