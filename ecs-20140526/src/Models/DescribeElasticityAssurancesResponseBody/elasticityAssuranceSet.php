<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceSet extends Model
{
    /**
     * @var elasticityAssuranceItem[]
     */
    public $elasticityAssuranceItem;
    protected $_name = [
        'elasticityAssuranceItem' => 'ElasticityAssuranceItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticityAssuranceItem) {
            $res['ElasticityAssuranceItem'] = [];
            if (null !== $this->elasticityAssuranceItem && \is_array($this->elasticityAssuranceItem)) {
                $n = 0;
                foreach ($this->elasticityAssuranceItem as $item) {
                    $res['ElasticityAssuranceItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticityAssuranceItem'])) {
            if (!empty($map['ElasticityAssuranceItem'])) {
                $model->elasticityAssuranceItem = [];
                $n                              = 0;
                foreach ($map['ElasticityAssuranceItem'] as $item) {
                    $model->elasticityAssuranceItem[$n++] = null !== $item ? elasticityAssuranceItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
