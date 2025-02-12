<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes;

class DescribeL7RsPolicyResponseBody extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;
    /**
     * @var string
     */
    public $proxyMode;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $rsAttrRwTimeoutMax;
    /**
     * @var int
     */
    public $upstreamRetry;
    protected $_name = [
        'attributes'         => 'Attributes',
        'proxyMode'          => 'ProxyMode',
        'requestId'          => 'RequestId',
        'rsAttrRwTimeoutMax' => 'RsAttrRwTimeoutMax',
        'upstreamRetry'      => 'UpstreamRetry',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                $n1                = 0;
                foreach ($this->attributes as $item1) {
                    $res['Attributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->proxyMode) {
            $res['ProxyMode'] = $this->proxyMode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rsAttrRwTimeoutMax) {
            $res['RsAttrRwTimeoutMax'] = $this->rsAttrRwTimeoutMax;
        }

        if (null !== $this->upstreamRetry) {
            $res['UpstreamRetry'] = $this->upstreamRetry;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n1                = 0;
                foreach ($map['Attributes'] as $item1) {
                    $model->attributes[$n1++] = attributes::fromMap($item1);
                }
            }
        }

        if (isset($map['ProxyMode'])) {
            $model->proxyMode = $map['ProxyMode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RsAttrRwTimeoutMax'])) {
            $model->rsAttrRwTimeoutMax = $map['RsAttrRwTimeoutMax'];
        }

        if (isset($map['UpstreamRetry'])) {
            $model->upstreamRetry = $map['UpstreamRetry'];
        }

        return $model;
    }
}
