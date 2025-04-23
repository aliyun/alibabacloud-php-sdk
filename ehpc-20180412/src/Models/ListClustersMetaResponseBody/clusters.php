<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaResponseBody\clusters\clusterInfoSimple;

class clusters extends Model
{
    /**
     * @var clusterInfoSimple[]
     */
    public $clusterInfoSimple;
    protected $_name = [
        'clusterInfoSimple' => 'ClusterInfoSimple',
    ];

    public function validate()
    {
        if (\is_array($this->clusterInfoSimple)) {
            Model::validateArray($this->clusterInfoSimple);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterInfoSimple) {
            if (\is_array($this->clusterInfoSimple)) {
                $res['ClusterInfoSimple'] = [];
                $n1 = 0;
                foreach ($this->clusterInfoSimple as $item1) {
                    $res['ClusterInfoSimple'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClusterInfoSimple'])) {
            if (!empty($map['ClusterInfoSimple'])) {
                $model->clusterInfoSimple = [];
                $n1 = 0;
                foreach ($map['ClusterInfoSimple'] as $item1) {
                    $model->clusterInfoSimple[$n1++] = clusterInfoSimple::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
