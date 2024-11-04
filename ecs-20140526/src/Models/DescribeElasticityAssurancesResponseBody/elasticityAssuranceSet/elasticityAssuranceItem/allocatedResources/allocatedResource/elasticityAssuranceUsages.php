<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource\elasticityAssuranceUsages\elasticityAssuranceUsage;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticityAssuranceUsage) {
            $res['ElasticityAssuranceUsage'] = [];
            if (null !== $this->elasticityAssuranceUsage && \is_array($this->elasticityAssuranceUsage)) {
                $n = 0;
                foreach ($this->elasticityAssuranceUsage as $item) {
                    $res['ElasticityAssuranceUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticityAssuranceUsage'])) {
            if (!empty($map['ElasticityAssuranceUsage'])) {
                $model->elasticityAssuranceUsage = [];
                $n                               = 0;
                foreach ($map['ElasticityAssuranceUsage'] as $item) {
                    $model->elasticityAssuranceUsage[$n++] = null !== $item ? elasticityAssuranceUsage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
