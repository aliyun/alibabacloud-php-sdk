<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTerraformPricingMappingsResponseBody;

use AlibabaCloud\Dara\Model;

class mappings extends Model
{
    /**
     * @var mixed[][]
     */
    public $pricingTargets;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'pricingTargets' => 'pricingTargets',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->pricingTargets)) {
            Model::validateArray($this->pricingTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pricingTargets) {
            if (\is_array($this->pricingTargets)) {
                $res['pricingTargets'] = [];
                $n1 = 0;
                foreach ($this->pricingTargets as $item1) {
                    if (\is_array($item1)) {
                        $res['pricingTargets'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['pricingTargets'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['pricingTargets'])) {
            if (!empty($map['pricingTargets'])) {
                $model->pricingTargets = [];
                $n1 = 0;
                foreach ($map['pricingTargets'] as $item1) {
                    if (!empty($item1)) {
                        $model->pricingTargets[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->pricingTargets[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
