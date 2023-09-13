<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensResponseBody\domainProxyTokens;
use AlibabaCloud\Tea\Model;

class ListDomainProxyTokensResponseBody extends Model
{
    /**
     * @var domainProxyTokens[]
     */
    public $domainProxyTokens;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainProxyTokens' => 'DomainProxyTokens',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainProxyTokens) {
            $res['DomainProxyTokens'] = [];
            if (null !== $this->domainProxyTokens && \is_array($this->domainProxyTokens)) {
                $n = 0;
                foreach ($this->domainProxyTokens as $item) {
                    $res['DomainProxyTokens'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainProxyTokensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainProxyTokens'])) {
            if (!empty($map['DomainProxyTokens'])) {
                $model->domainProxyTokens = [];
                $n                        = 0;
                foreach ($map['DomainProxyTokens'] as $item) {
                    $model->domainProxyTokens[$n++] = null !== $item ? domainProxyTokens::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
