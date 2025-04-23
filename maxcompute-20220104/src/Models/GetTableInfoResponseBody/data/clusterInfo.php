<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\clusterInfo\sortCols;

class clusterInfo extends Model
{
    /**
     * @var int
     */
    public $bucketNum;

    /**
     * @var string[]
     */
    public $clusterCols;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var sortCols[]
     */
    public $sortCols;
    protected $_name = [
        'bucketNum' => 'bucketNum',
        'clusterCols' => 'clusterCols',
        'clusterType' => 'clusterType',
        'sortCols' => 'sortCols',
    ];

    public function validate()
    {
        if (\is_array($this->clusterCols)) {
            Model::validateArray($this->clusterCols);
        }
        if (\is_array($this->sortCols)) {
            Model::validateArray($this->sortCols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketNum) {
            $res['bucketNum'] = $this->bucketNum;
        }

        if (null !== $this->clusterCols) {
            if (\is_array($this->clusterCols)) {
                $res['clusterCols'] = [];
                $n1 = 0;
                foreach ($this->clusterCols as $item1) {
                    $res['clusterCols'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        if (null !== $this->sortCols) {
            if (\is_array($this->sortCols)) {
                $res['sortCols'] = [];
                $n1 = 0;
                foreach ($this->sortCols as $item1) {
                    $res['sortCols'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['bucketNum'])) {
            $model->bucketNum = $map['bucketNum'];
        }

        if (isset($map['clusterCols'])) {
            if (!empty($map['clusterCols'])) {
                $model->clusterCols = [];
                $n1 = 0;
                foreach ($map['clusterCols'] as $item1) {
                    $model->clusterCols[$n1++] = $item1;
                }
            }
        }

        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        if (isset($map['sortCols'])) {
            if (!empty($map['sortCols'])) {
                $model->sortCols = [];
                $n1 = 0;
                foreach ($map['sortCols'] as $item1) {
                    $model->sortCols[$n1++] = sortCols::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
