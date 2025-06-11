<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponseBody\SAMLServiceProvider;

class GetDirectorySAMLServiceProviderInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLServiceProvider
     */
    public $SAMLServiceProvider;
    protected $_name = [
        'requestId' => 'RequestId',
        'SAMLServiceProvider' => 'SAMLServiceProvider',
    ];

    public function validate()
    {
        if (null !== $this->SAMLServiceProvider) {
            $this->SAMLServiceProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SAMLServiceProvider) {
            $res['SAMLServiceProvider'] = null !== $this->SAMLServiceProvider ? $this->SAMLServiceProvider->toArray($noStream) : $this->SAMLServiceProvider;
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

        if (isset($map['SAMLServiceProvider'])) {
            $model->SAMLServiceProvider = SAMLServiceProvider::fromMap($map['SAMLServiceProvider']);
        }

        return $model;
    }
}
