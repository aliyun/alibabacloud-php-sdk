<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensResponseBody\domainProxyTokens;

class ListDomainProxyTokensResponseBody extends Model
{
    /**
     * @var domainProxyTokens[]
     */
    public $domainProxyTokens;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainProxyTokens' => 'DomainProxyTokens',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainProxyTokens)) {
            Model::validateArray($this->domainProxyTokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainProxyTokens) {
            if (\is_array($this->domainProxyTokens)) {
                $res['DomainProxyTokens'] = [];
                $n1                       = 0;
                foreach ($this->domainProxyTokens as $item1) {
                    $res['DomainProxyTokens'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DomainProxyTokens'])) {
            if (!empty($map['DomainProxyTokens'])) {
                $model->domainProxyTokens = [];
                $n1                       = 0;
                foreach ($map['DomainProxyTokens'] as $item1) {
                    $model->domainProxyTokens[$n1++] = domainProxyTokens::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
