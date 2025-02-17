<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem;

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
        if (\is_array($this->elasticityAssuranceItem)) {
            Model::validateArray($this->elasticityAssuranceItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticityAssuranceItem) {
            if (\is_array($this->elasticityAssuranceItem)) {
                $res['ElasticityAssuranceItem'] = [];
                $n1                             = 0;
                foreach ($this->elasticityAssuranceItem as $item1) {
                    $res['ElasticityAssuranceItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ElasticityAssuranceItem'])) {
            if (!empty($map['ElasticityAssuranceItem'])) {
                $model->elasticityAssuranceItem = [];
                $n1                             = 0;
                foreach ($map['ElasticityAssuranceItem'] as $item1) {
                    $model->elasticityAssuranceItem[$n1++] = elasticityAssuranceItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
