<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsResponseBody\elasticQps;
use AlibabaCloud\Tea\Model;

class DescribeElasticQpsResponseBody extends Model
{
    /**
     * @description The information about the burstable QPS.
     *
     * @var elasticQps[]
     */
    public $elasticQps;

    /**
     * @description The request ID, which is used to locate and troubleshoot issues.
     *
     * @example 2E7F7F7B-39A8-5D92-BAB4-D89D9DCE7D4F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticQps' => 'ElasticQps',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticQps) {
            $res['ElasticQps'] = [];
            if (null !== $this->elasticQps && \is_array($this->elasticQps)) {
                $n = 0;
                foreach ($this->elasticQps as $item) {
                    $res['ElasticQps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeElasticQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticQps'])) {
            if (!empty($map['ElasticQps'])) {
                $model->elasticQps = [];
                $n                 = 0;
                foreach ($map['ElasticQps'] as $item) {
                    $model->elasticQps[$n++] = null !== $item ? elasticQps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
