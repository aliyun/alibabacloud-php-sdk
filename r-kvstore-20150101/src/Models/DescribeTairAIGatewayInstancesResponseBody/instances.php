<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairAIGatewayInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairAIGatewayInstancesResponseBody\instances\tairSemanticCacheInstances;

class instances extends Model
{
    /**
     * @var tairSemanticCacheInstances[]
     */
    public $tairSemanticCacheInstances;
    protected $_name = [
        'tairSemanticCacheInstances' => 'TairSemanticCacheInstances',
    ];

    public function validate()
    {
        if (\is_array($this->tairSemanticCacheInstances)) {
            Model::validateArray($this->tairSemanticCacheInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tairSemanticCacheInstances) {
            if (\is_array($this->tairSemanticCacheInstances)) {
                $res['TairSemanticCacheInstances'] = [];
                $n1 = 0;
                foreach ($this->tairSemanticCacheInstances as $item1) {
                    $res['TairSemanticCacheInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TairSemanticCacheInstances'])) {
            if (!empty($map['TairSemanticCacheInstances'])) {
                $model->tairSemanticCacheInstances = [];
                $n1 = 0;
                foreach ($map['TairSemanticCacheInstances'] as $item1) {
                    $model->tairSemanticCacheInstances[$n1] = tairSemanticCacheInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
