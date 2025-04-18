<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQuality;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQualityResult;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\sensitivityList;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\uncertaintyValues;

class data extends Model
{
    /**
     * @var dataQuality[]
     */
    public $dataQuality;

    /**
     * @var dataQualityResult
     */
    public $dataQualityResult;

    /**
     * @var sensitivityList[]
     */
    public $sensitivityList;

    /**
     * @var string
     */
    public $uncertainty;

    /**
     * @var uncertaintyValues[]
     */
    public $uncertaintyValues;
    protected $_name = [
        'dataQuality' => 'dataQuality',
        'dataQualityResult' => 'dataQualityResult',
        'sensitivityList' => 'sensitivityList',
        'uncertainty' => 'uncertainty',
        'uncertaintyValues' => 'uncertaintyValues',
    ];

    public function validate()
    {
        if (\is_array($this->dataQuality)) {
            Model::validateArray($this->dataQuality);
        }
        if (null !== $this->dataQualityResult) {
            $this->dataQualityResult->validate();
        }
        if (\is_array($this->sensitivityList)) {
            Model::validateArray($this->sensitivityList);
        }
        if (\is_array($this->uncertaintyValues)) {
            Model::validateArray($this->uncertaintyValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQuality) {
            if (\is_array($this->dataQuality)) {
                $res['dataQuality'] = [];
                $n1 = 0;
                foreach ($this->dataQuality as $item1) {
                    $res['dataQuality'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataQualityResult) {
            $res['dataQualityResult'] = null !== $this->dataQualityResult ? $this->dataQualityResult->toArray($noStream) : $this->dataQualityResult;
        }

        if (null !== $this->sensitivityList) {
            if (\is_array($this->sensitivityList)) {
                $res['sensitivityList'] = [];
                $n1 = 0;
                foreach ($this->sensitivityList as $item1) {
                    $res['sensitivityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uncertainty) {
            $res['uncertainty'] = $this->uncertainty;
        }

        if (null !== $this->uncertaintyValues) {
            if (\is_array($this->uncertaintyValues)) {
                $res['uncertaintyValues'] = [];
                $n1 = 0;
                foreach ($this->uncertaintyValues as $item1) {
                    $res['uncertaintyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dataQuality'])) {
            if (!empty($map['dataQuality'])) {
                $model->dataQuality = [];
                $n1 = 0;
                foreach ($map['dataQuality'] as $item1) {
                    $model->dataQuality[$n1++] = dataQuality::fromMap($item1);
                }
            }
        }

        if (isset($map['dataQualityResult'])) {
            $model->dataQualityResult = dataQualityResult::fromMap($map['dataQualityResult']);
        }

        if (isset($map['sensitivityList'])) {
            if (!empty($map['sensitivityList'])) {
                $model->sensitivityList = [];
                $n1 = 0;
                foreach ($map['sensitivityList'] as $item1) {
                    $model->sensitivityList[$n1++] = sensitivityList::fromMap($item1);
                }
            }
        }

        if (isset($map['uncertainty'])) {
            $model->uncertainty = $map['uncertainty'];
        }

        if (isset($map['uncertaintyValues'])) {
            if (!empty($map['uncertaintyValues'])) {
                $model->uncertaintyValues = [];
                $n1 = 0;
                foreach ($map['uncertaintyValues'] as $item1) {
                    $model->uncertaintyValues[$n1++] = uncertaintyValues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
