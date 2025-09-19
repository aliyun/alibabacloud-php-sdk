<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListResponseBody\clusterList;

class DescribeClusterInfoListResponseBody extends Model
{
    /**
     * @var clusterList[]
     */
    public $clusterList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterList)) {
            Model::validateArray($this->clusterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterList) {
            if (\is_array($this->clusterList)) {
                $res['ClusterList'] = [];
                $n1 = 0;
                foreach ($this->clusterList as $item1) {
                    $res['ClusterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClusterList'])) {
            if (!empty($map['ClusterList'])) {
                $model->clusterList = [];
                $n1 = 0;
                foreach ($map['ClusterList'] as $item1) {
                    $model->clusterList[$n1] = clusterList::fromMap($item1);
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
