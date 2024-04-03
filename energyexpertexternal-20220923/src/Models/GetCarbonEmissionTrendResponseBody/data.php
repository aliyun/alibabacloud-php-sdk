<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\actualEmissionList;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\targetEmissionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Actual emission list.
     *
     * @var actualEmissionList[]
     */
    public $actualEmissionList;

    /**
     * @description Target Emission List.
     *
     * @var targetEmissionList[]
     */
    public $targetEmissionList;
    protected $_name = [
        'actualEmissionList' => 'actualEmissionList',
        'targetEmissionList' => 'targetEmissionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualEmissionList) {
            $res['actualEmissionList'] = [];
            if (null !== $this->actualEmissionList && \is_array($this->actualEmissionList)) {
                $n = 0;
                foreach ($this->actualEmissionList as $item) {
                    $res['actualEmissionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetEmissionList) {
            $res['targetEmissionList'] = [];
            if (null !== $this->targetEmissionList && \is_array($this->targetEmissionList)) {
                $n = 0;
                foreach ($this->targetEmissionList as $item) {
                    $res['targetEmissionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['actualEmissionList'])) {
            if (!empty($map['actualEmissionList'])) {
                $model->actualEmissionList = [];
                $n                         = 0;
                foreach ($map['actualEmissionList'] as $item) {
                    $model->actualEmissionList[$n++] = null !== $item ? actualEmissionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['targetEmissionList'])) {
            if (!empty($map['targetEmissionList'])) {
                $model->targetEmissionList = [];
                $n                         = 0;
                foreach ($map['targetEmissionList'] as $item) {
                    $model->targetEmissionList[$n++] = null !== $item ? targetEmissionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
