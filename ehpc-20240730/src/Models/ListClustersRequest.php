<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListClustersRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;

    /**
     * @var string[]
     */
    public $clusterNames;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'clusterNames' => 'ClusterNames',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->clusterIds)) {
            Model::validateArray($this->clusterIds);
        }
        if (\is_array($this->clusterNames)) {
            Model::validateArray($this->clusterNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIds) {
            if (\is_array($this->clusterIds)) {
                $res['ClusterIds'] = [];
                $n1 = 0;
                foreach ($this->clusterIds as $item1) {
                    $res['ClusterIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterNames) {
            if (\is_array($this->clusterNames)) {
                $res['ClusterNames'] = [];
                $n1 = 0;
                foreach ($this->clusterNames as $item1) {
                    $res['ClusterNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = [];
                $n1 = 0;
                foreach ($map['ClusterIds'] as $item1) {
                    $model->clusterIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterNames'])) {
            if (!empty($map['ClusterNames'])) {
                $model->clusterNames = [];
                $n1 = 0;
                foreach ($map['ClusterNames'] as $item1) {
                    $model->clusterNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
