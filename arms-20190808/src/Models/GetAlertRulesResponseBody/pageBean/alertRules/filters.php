<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters\customSLSFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters\dimFilters;
use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The custom filter condition of the Browser Monitoring alert rule.
     *
     * @var customSLSFilters[]
     */
    public $customSLSFilters;

    /**
     * @description The information about the aggregation dimension.
     *
     * @var string[]
     */
    public $customSLSGroupByDimensions;

    /**
     * @description The details of the custom filter condition.
     *
     * @var string[]
     */
    public $customSLSWheres;

    /**
     * @description The information about each filter condition of the Application Monitoring or Browser Monitoring alert rule.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSLSFilters) {
            $res['CustomSLSFilters'] = [];
            if (null !== $this->customSLSFilters && \is_array($this->customSLSFilters)) {
                $n = 0;
                foreach ($this->customSLSFilters as $item) {
                    $res['CustomSLSFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customSLSGroupByDimensions) {
            $res['CustomSLSGroupByDimensions'] = $this->customSLSGroupByDimensions;
        }
        if (null !== $this->customSLSWheres) {
            $res['CustomSLSWheres'] = $this->customSLSWheres;
        }
        if (null !== $this->dimFilters) {
            $res['DimFilters'] = [];
            if (null !== $this->dimFilters && \is_array($this->dimFilters)) {
                $n = 0;
                foreach ($this->dimFilters as $item) {
                    $res['DimFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSLSFilters'])) {
            if (!empty($map['CustomSLSFilters'])) {
                $model->customSLSFilters = [];
                $n                       = 0;
                foreach ($map['CustomSLSFilters'] as $item) {
                    $model->customSLSFilters[$n++] = null !== $item ? customSLSFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomSLSGroupByDimensions'])) {
            if (!empty($map['CustomSLSGroupByDimensions'])) {
                $model->customSLSGroupByDimensions = $map['CustomSLSGroupByDimensions'];
            }
        }
        if (isset($map['CustomSLSWheres'])) {
            if (!empty($map['CustomSLSWheres'])) {
                $model->customSLSWheres = $map['CustomSLSWheres'];
            }
        }
        if (isset($map['DimFilters'])) {
            if (!empty($map['DimFilters'])) {
                $model->dimFilters = [];
                $n                 = 0;
                foreach ($map['DimFilters'] as $item) {
                    $model->dimFilters[$n++] = null !== $item ? dimFilters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
