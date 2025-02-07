<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveClientIdFromOIDCProviderResponseBody\OIDCProvider;

class RemoveClientIdFromOIDCProviderResponseBody extends Model
{
    /**
     * @var OIDCProvider
     */
    public $OIDCProvider;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'OIDCProvider' => 'OIDCProvider',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->OIDCProvider) {
            $this->OIDCProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OIDCProvider) {
            $res['OIDCProvider'] = null !== $this->OIDCProvider ? $this->OIDCProvider->toArray($noStream) : $this->OIDCProvider;
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
        if (isset($map['OIDCProvider'])) {
            $model->OIDCProvider = OIDCProvider::fromMap($map['OIDCProvider']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
