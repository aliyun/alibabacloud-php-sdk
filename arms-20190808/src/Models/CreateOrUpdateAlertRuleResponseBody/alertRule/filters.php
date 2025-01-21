<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters\customSLSFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters\dimFilters;

class filters extends Model
{
    /**
     * @var customSLSFilters[]
     */
    public $customSLSFilters;
    /**
     * @var string[]
     */
    public $customSLSGroupByDimensions;
    /**
     * @var string[]
     */
    public $customSLSWheres;
    /**
     * @var dimFilters[]
     */
    public $dimFilters;
    protected $_name = [
        'customSLSFilters'           => 'CustomSLSFilters',
        'customSLSGroupByDimensions' => 'CustomSLSGroupByDimensions',
        'customSLSWheres'            => 'CustomSLSWheres',
        'dimFilters'                 => 'DimFilters',
    ];

    public function validate()
    {
        if (\is_array($this->customSLSFilters)) {
            Model::validateArray($this->customSLSFilters);
        }
        if (\is_array($this->customSLSGroupByDimensions)) {
            Model::validateArray($this->customSLSGroupByDimensions);
        }
        if (\is_array($this->customSLSWheres)) {
            Model::validateArray($this->customSLSWheres);
        }
        if (\is_array($this->dimFilters)) {
            Model::validateArray($this->dimFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customSLSFilters) {
            if (\is_array($this->customSLSFilters)) {
                $res['CustomSLSFilters'] = [];
                $n1                      = 0;
                foreach ($this->customSLSFilters as $item1) {
                    $res['CustomSLSFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->customSLSGroupByDimensions) {
            if (\is_array($this->customSLSGroupByDimensions)) {
                $res['CustomSLSGroupByDimensions'] = [];
                $n1                                = 0;
                foreach ($this->customSLSGroupByDimensions as $item1) {
                    $res['CustomSLSGroupByDimensions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->customSLSWheres) {
            if (\is_array($this->customSLSWheres)) {
                $res['CustomSLSWheres'] = [];
                $n1                     = 0;
                foreach ($this->customSLSWheres as $item1) {
                    $res['CustomSLSWheres'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dimFilters) {
            if (\is_array($this->dimFilters)) {
                $res['DimFilters'] = [];
                $n1                = 0;
                foreach ($this->dimFilters as $item1) {
                    $res['DimFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomSLSFilters'])) {
            if (!empty($map['CustomSLSFilters'])) {
                $model->customSLSFilters = [];
                $n1                      = 0;
                foreach ($map['CustomSLSFilters'] as $item1) {
                    $model->customSLSFilters[$n1++] = customSLSFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['CustomSLSGroupByDimensions'])) {
            if (!empty($map['CustomSLSGroupByDimensions'])) {
                $model->customSLSGroupByDimensions = [];
                $n1                                = 0;
                foreach ($map['CustomSLSGroupByDimensions'] as $item1) {
                    $model->customSLSGroupByDimensions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CustomSLSWheres'])) {
            if (!empty($map['CustomSLSWheres'])) {
                $model->customSLSWheres = [];
                $n1                     = 0;
                foreach ($map['CustomSLSWheres'] as $item1) {
                    $model->customSLSWheres[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DimFilters'])) {
            if (!empty($map['DimFilters'])) {
                $model->dimFilters = [];
                $n1                = 0;
                foreach ($map['DimFilters'] as $item1) {
                    $model->dimFilters[$n1++] = dimFilters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
