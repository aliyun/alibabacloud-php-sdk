<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleCapacitiesResponseBody;

use AlibabaCloud\Dara\Model;

class normalizationRuleCapacities extends Model
{
    /**
     * @var string[]
     */
    public $capacities;

    /**
     * @var string
     */
    public $capacityType;

    /**
     * @var string
     */
    public $normalizationRuleId;
    protected $_name = [
        'capacities' => 'Capacities',
        'capacityType' => 'CapacityType',
        'normalizationRuleId' => 'NormalizationRuleId',
    ];

    public function validate()
    {
        if (\is_array($this->capacities)) {
            Model::validateArray($this->capacities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacities) {
            if (\is_array($this->capacities)) {
                $res['Capacities'] = [];
                $n1 = 0;
                foreach ($this->capacities as $item1) {
                    $res['Capacities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->capacityType) {
            $res['CapacityType'] = $this->capacityType;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
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
        if (isset($map['Capacities'])) {
            if (!empty($map['Capacities'])) {
                $model->capacities = [];
                $n1 = 0;
                foreach ($map['Capacities'] as $item1) {
                    $model->capacities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CapacityType'])) {
            $model->capacityType = $map['CapacityType'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        return $model;
    }
}
