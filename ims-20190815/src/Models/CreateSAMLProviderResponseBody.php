<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderResponseBody\SAMLProvider;

class CreateSAMLProviderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var SAMLProvider
     */
    public $SAMLProvider;
    protected $_name = [
        'requestId'    => 'RequestId',
        'SAMLProvider' => 'SAMLProvider',
    ];

    public function validate()
    {
        if (null !== $this->SAMLProvider) {
            $this->SAMLProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SAMLProvider) {
            $res['SAMLProvider'] = null !== $this->SAMLProvider ? $this->SAMLProvider->toArray($noStream) : $this->SAMLProvider;
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

        if (isset($map['SAMLProvider'])) {
            $model->SAMLProvider = SAMLProvider::fromMap($map['SAMLProvider']);
        }

        return $model;
    }
}
