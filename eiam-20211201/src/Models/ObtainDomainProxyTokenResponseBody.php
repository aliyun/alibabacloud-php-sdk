<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponseBody\domainProxyToken;

class ObtainDomainProxyTokenResponseBody extends Model
{
    /**
     * @var domainProxyToken
     */
    public $domainProxyToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainProxyToken' => 'DomainProxyToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainProxyToken) {
            $this->domainProxyToken->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainProxyToken) {
            $res['DomainProxyToken'] = null !== $this->domainProxyToken ? $this->domainProxyToken->toArray($noStream) : $this->domainProxyToken;
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
        if (isset($map['DomainProxyToken'])) {
            $model->domainProxyToken = domainProxyToken::fromMap($map['DomainProxyToken']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
