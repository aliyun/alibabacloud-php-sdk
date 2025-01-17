<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListClusterCnnfStatusDetailRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
    ];

    public function validate()
    {
        if (\is_array($this->clusterIds)) {
            Model::validateArray($this->clusterIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIds) {
            if (\is_array($this->clusterIds)) {
                $res['ClusterIds'] = [];
                $n1                = 0;
                foreach ($this->clusterIds as $item1) {
                    $res['ClusterIds'][$n1++] = $item1;
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
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = [];
                $n1                = 0;
                foreach ($map['ClusterIds'] as $item1) {
                    $model->clusterIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
