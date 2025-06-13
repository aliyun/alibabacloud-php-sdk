<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody\clusters\cluster;

class clusters extends Model
{
    /**
     * @var cluster[]
     */
    public $cluster;
    protected $_name = [
        'cluster' => 'Cluster',
    ];

    public function validate()
    {
        if (\is_array($this->cluster)) {
            Model::validateArray($this->cluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            if (\is_array($this->cluster)) {
                $res['Cluster'] = [];
                $n1 = 0;
                foreach ($this->cluster as $item1) {
                    $res['Cluster'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Cluster'])) {
            if (!empty($map['Cluster'])) {
                $model->cluster = [];
                $n1 = 0;
                foreach ($map['Cluster'] as $item1) {
                    $model->cluster[$n1] = cluster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
