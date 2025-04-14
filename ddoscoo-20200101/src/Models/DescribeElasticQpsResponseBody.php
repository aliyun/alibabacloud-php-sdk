<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsResponseBody\elasticQps;

class DescribeElasticQpsResponseBody extends Model
{
    /**
     * @var elasticQps[]
     */
    public $elasticQps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticQps' => 'ElasticQps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elasticQps)) {
            Model::validateArray($this->elasticQps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticQps) {
            if (\is_array($this->elasticQps)) {
                $res['ElasticQps'] = [];
                $n1 = 0;
                foreach ($this->elasticQps as $item1) {
                    $res['ElasticQps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ElasticQps'])) {
            if (!empty($map['ElasticQps'])) {
                $model->elasticQps = [];
                $n1 = 0;
                foreach ($map['ElasticQps'] as $item1) {
                    $model->elasticQps[$n1++] = elasticQps::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
