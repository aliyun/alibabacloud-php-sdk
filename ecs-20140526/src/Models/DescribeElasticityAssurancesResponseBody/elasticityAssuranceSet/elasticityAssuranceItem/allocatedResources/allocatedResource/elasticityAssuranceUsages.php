<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource\elasticityAssuranceUsages\elasticityAssuranceUsage;

class elasticityAssuranceUsages extends Model
{
    /**
     * @var elasticityAssuranceUsage[]
     */
    public $elasticityAssuranceUsage;
    protected $_name = [
        'elasticityAssuranceUsage' => 'ElasticityAssuranceUsage',
    ];

    public function validate()
    {
        if (\is_array($this->elasticityAssuranceUsage)) {
            Model::validateArray($this->elasticityAssuranceUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticityAssuranceUsage) {
            if (\is_array($this->elasticityAssuranceUsage)) {
                $res['ElasticityAssuranceUsage'] = [];
                $n1                              = 0;
                foreach ($this->elasticityAssuranceUsage as $item1) {
                    $res['ElasticityAssuranceUsage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ElasticityAssuranceUsage'])) {
            if (!empty($map['ElasticityAssuranceUsage'])) {
                $model->elasticityAssuranceUsage = [];
                $n1                              = 0;
                foreach ($map['ElasticityAssuranceUsage'] as $item1) {
                    $model->elasticityAssuranceUsage[$n1++] = elasticityAssuranceUsage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
