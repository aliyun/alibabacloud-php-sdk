<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs;
use AlibabaCloud\Tea\Model;

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
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCacheConfigs) {
            $res['DomainCacheConfigs'] = [];
            if (null !== $this->domainCacheConfigs && \is_array($this->domainCacheConfigs)) {
                $n = 0;
                foreach ($this->domainCacheConfigs as $item) {
                    $res['DomainCacheConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeWebCacheConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCacheConfigs'])) {
            if (!empty($map['DomainCacheConfigs'])) {
                $model->domainCacheConfigs = [];
                $n                         = 0;
                foreach ($map['DomainCacheConfigs'] as $item) {
                    $model->domainCacheConfigs[$n++] = null !== $item ? domainCacheConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
