<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta;

use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config\featureConfig;
use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config\labelLogic;
use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config\weightLogicList;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $bhvTableSourceIds;

    /**
     * @var featureConfig
     */
    public $featureConfig;

    /**
     * @var labelLogic
     */
    public $labelLogic;

    /**
     * @var weightLogicList[]
     */
    public $weightLogicList;
    protected $_name = [
        'bhvTableSourceIds' => 'BhvTableSourceIds',
        'featureConfig'     => 'FeatureConfig',
        'labelLogic'        => 'LabelLogic',
        'weightLogicList'   => 'WeightLogicList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bhvTableSourceIds) {
            $res['BhvTableSourceIds'] = $this->bhvTableSourceIds;
        }
        if (null !== $this->featureConfig) {
            $res['FeatureConfig'] = null !== $this->featureConfig ? $this->featureConfig->toMap() : null;
        }
        if (null !== $this->labelLogic) {
            $res['LabelLogic'] = null !== $this->labelLogic ? $this->labelLogic->toMap() : null;
        }
        if (null !== $this->weightLogicList) {
            $res['WeightLogicList'] = [];
            if (null !== $this->weightLogicList && \is_array($this->weightLogicList)) {
                $n = 0;
                foreach ($this->weightLogicList as $item) {
                    $res['WeightLogicList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BhvTableSourceIds'])) {
            if (!empty($map['BhvTableSourceIds'])) {
                $model->bhvTableSourceIds = $map['BhvTableSourceIds'];
            }
        }
        if (isset($map['FeatureConfig'])) {
            $model->featureConfig = featureConfig::fromMap($map['FeatureConfig']);
        }
        if (isset($map['LabelLogic'])) {
            $model->labelLogic = labelLogic::fromMap($map['LabelLogic']);
        }
        if (isset($map['WeightLogicList'])) {
            if (!empty($map['WeightLogicList'])) {
                $model->weightLogicList = [];
                $n                      = 0;
                foreach ($map['WeightLogicList'] as $item) {
                    $model->weightLogicList[$n++] = null !== $item ? weightLogicList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
