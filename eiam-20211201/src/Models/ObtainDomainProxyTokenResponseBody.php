<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponseBody\domainProxyToken;
use AlibabaCloud\Tea\Model;

class ObtainDomainProxyTokenResponseBody extends Model
{
    /**
     * @var domainProxyToken
     */
    public $domainProxyToken;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainProxyToken' => 'DomainProxyToken',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainProxyToken) {
            $res['DomainProxyToken'] = null !== $this->domainProxyToken ? $this->domainProxyToken->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ObtainDomainProxyTokenResponseBody
     */
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
