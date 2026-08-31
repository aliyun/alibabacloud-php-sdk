<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeClustersResponseBody\pageResult\clusterList;

class pageResult extends Model
{
    /**
     * @var clusterList[]
     */
    public $clusterList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'totalCount' => 'TotalCount',
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
