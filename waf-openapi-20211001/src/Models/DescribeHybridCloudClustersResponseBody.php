<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersResponseBody\clusterInfos;

class DescribeHybridCloudClustersResponseBody extends Model
{
    /**
     * @var clusterInfos[]
     */
    public $clusterInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterInfos' => 'ClusterInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterInfos)) {
            Model::validateArray($this->clusterInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterInfos) {
            if (\is_array($this->clusterInfos)) {
                $res['ClusterInfos'] = [];
                $n1 = 0;
                foreach ($this->clusterInfos as $item1) {
                    $res['ClusterInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClusterInfos'])) {
            if (!empty($map['ClusterInfos'])) {
                $model->clusterInfos = [];
                $n1 = 0;
                foreach ($map['ClusterInfos'] as $item1) {
                    $model->clusterInfos[$n1] = clusterInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
