<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersResponseBody\clusters;

class DescribeServiceMeshClustersResponseBody extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;

    /**
     * @var int
     */
    public $numberOfClusters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusters' => 'Clusters',
        'numberOfClusters' => 'NumberOfClusters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['Clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['Clusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numberOfClusters) {
            $res['NumberOfClusters'] = $this->numberOfClusters;
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
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['Clusters'] as $item1) {
                    $model->clusters[$n1] = clusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NumberOfClusters'])) {
            $model->numberOfClusters = $map['NumberOfClusters'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
