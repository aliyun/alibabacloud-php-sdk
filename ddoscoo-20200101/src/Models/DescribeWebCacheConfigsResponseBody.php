<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs;

class DescribeWebCacheConfigsResponseBody extends Model
{
    /**
     * @var domainCacheConfigs[]
     */
    public $domainCacheConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainCacheConfigs' => 'DomainCacheConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainCacheConfigs)) {
            Model::validateArray($this->domainCacheConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainCacheConfigs) {
            if (\is_array($this->domainCacheConfigs)) {
                $res['DomainCacheConfigs'] = [];
                $n1 = 0;
                foreach ($this->domainCacheConfigs as $item1) {
                    $res['DomainCacheConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainCacheConfigs'])) {
            if (!empty($map['DomainCacheConfigs'])) {
                $model->domainCacheConfigs = [];
                $n1 = 0;
                foreach ($map['DomainCacheConfigs'] as $item1) {
                    $model->domainCacheConfigs[$n1++] = domainCacheConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
