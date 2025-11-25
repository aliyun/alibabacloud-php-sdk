<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListClusterTypeResponseBody\clusterTypeDetailList;

class ListClusterTypeResponseBody extends Model
{
    /**
     * @var clusterTypeDetailList[]
     */
    public $clusterTypeDetailList;

    /**
     * @var string[]
     */
    public $clusterTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTypeDetailList' => 'ClusterTypeDetailList',
        'clusterTypeList' => 'ClusterTypeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterTypeDetailList)) {
            Model::validateArray($this->clusterTypeDetailList);
        }
        if (\is_array($this->clusterTypeList)) {
            Model::validateArray($this->clusterTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterTypeDetailList) {
            if (\is_array($this->clusterTypeDetailList)) {
                $res['ClusterTypeDetailList'] = [];
                $n1 = 0;
                foreach ($this->clusterTypeDetailList as $item1) {
                    $res['ClusterTypeDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterTypeList) {
            if (\is_array($this->clusterTypeList)) {
                $res['ClusterTypeList'] = [];
                $n1 = 0;
                foreach ($this->clusterTypeList as $item1) {
                    $res['ClusterTypeList'][$n1] = $item1;
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
        if (isset($map['ClusterTypeDetailList'])) {
            if (!empty($map['ClusterTypeDetailList'])) {
                $model->clusterTypeDetailList = [];
                $n1 = 0;
                foreach ($map['ClusterTypeDetailList'] as $item1) {
                    $model->clusterTypeDetailList[$n1] = clusterTypeDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterTypeList'])) {
            if (!empty($map['ClusterTypeList'])) {
                $model->clusterTypeList = [];
                $n1 = 0;
                foreach ($map['ClusterTypeList'] as $item1) {
                    $model->clusterTypeList[$n1] = $item1;
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
