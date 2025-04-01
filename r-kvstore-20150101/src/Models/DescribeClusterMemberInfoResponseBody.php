<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponseBody\clusterChildren;

class DescribeClusterMemberInfoResponseBody extends Model
{
    /**
     * @var clusterChildren[]
     */
    public $clusterChildren;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterChildren' => 'ClusterChildren',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterChildren)) {
            Model::validateArray($this->clusterChildren);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterChildren) {
            if (\is_array($this->clusterChildren)) {
                $res['ClusterChildren'] = [];
                $n1 = 0;
                foreach ($this->clusterChildren as $item1) {
                    $res['ClusterChildren'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClusterChildren'])) {
            if (!empty($map['ClusterChildren'])) {
                $model->clusterChildren = [];
                $n1 = 0;
                foreach ($map['ClusterChildren'] as $item1) {
                    $model->clusterChildren[$n1++] = clusterChildren::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
