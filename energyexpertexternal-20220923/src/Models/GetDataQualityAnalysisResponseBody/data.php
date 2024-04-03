<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQuality;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQualityResult;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\sensitivityList;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\uncertaintyValues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Score of each inventory.
     *
     * @var dataQuality[]
     */
    public $dataQuality;

    /**
     * @description Data quality result.
     *
     * @var dataQualityResult
     */
    public $dataQualityResult;

    /**
     * @description Sensitivity analysis list
     *
     * @var sensitivityList[]
     */
    public $sensitivityList;

    /**
     * @description Uncertainty value. The model\"s overall percentage uncertainty results. "10.00%" symbolizes a 10.00% uncertainty, indicating that the carbon footprint lies within ±10.00%. This is derived from a weighted aggregation of individual inventory uncertainties.
     *
     * @example 10.00
     *
     * @var string
     */
    public $uncertainty;

    /**
     * @description Uncertainty list
     *
     * @var uncertaintyValues[]
     */
    public $uncertaintyValues;
    protected $_name = [
        'dataQuality'       => 'dataQuality',
        'dataQualityResult' => 'dataQualityResult',
        'sensitivityList'   => 'sensitivityList',
        'uncertainty'       => 'uncertainty',
        'uncertaintyValues' => 'uncertaintyValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQuality) {
            $res['dataQuality'] = [];
            if (null !== $this->dataQuality && \is_array($this->dataQuality)) {
                $n = 0;
                foreach ($this->dataQuality as $item) {
                    $res['dataQuality'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataQualityResult) {
            $res['dataQualityResult'] = null !== $this->dataQualityResult ? $this->dataQualityResult->toMap() : null;
        }
        if (null !== $this->sensitivityList) {
            $res['sensitivityList'] = [];
            if (null !== $this->sensitivityList && \is_array($this->sensitivityList)) {
                $n = 0;
                foreach ($this->sensitivityList as $item) {
                    $res['sensitivityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uncertainty) {
            $res['uncertainty'] = $this->uncertainty;
        }
        if (null !== $this->uncertaintyValues) {
            $res['uncertaintyValues'] = [];
            if (null !== $this->uncertaintyValues && \is_array($this->uncertaintyValues)) {
                $n = 0;
                foreach ($this->uncertaintyValues as $item) {
                    $res['uncertaintyValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataQuality'])) {
            if (!empty($map['dataQuality'])) {
                $model->dataQuality = [];
                $n                  = 0;
                foreach ($map['dataQuality'] as $item) {
                    $model->dataQuality[$n++] = null !== $item ? dataQuality::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dataQualityResult'])) {
            $model->dataQualityResult = dataQualityResult::fromMap($map['dataQualityResult']);
        }
        if (isset($map['sensitivityList'])) {
            if (!empty($map['sensitivityList'])) {
                $model->sensitivityList = [];
                $n                      = 0;
                foreach ($map['sensitivityList'] as $item) {
                    $model->sensitivityList[$n++] = null !== $item ? sensitivityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['uncertainty'])) {
            $model->uncertainty = $map['uncertainty'];
        }
        if (isset($map['uncertaintyValues'])) {
            if (!empty($map['uncertaintyValues'])) {
                $model->uncertaintyValues = [];
                $n                        = 0;
                foreach ($map['uncertaintyValues'] as $item) {
                    $model->uncertaintyValues[$n++] = null !== $item ? uncertaintyValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
