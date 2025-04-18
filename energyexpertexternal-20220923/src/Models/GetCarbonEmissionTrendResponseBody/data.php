<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\actualEmissionList;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\targetEmissionList;

class data extends Model
{
    /**
     * @var actualEmissionList[]
     */
    public $actualEmissionList;

    /**
     * @var targetEmissionList[]
     */
    public $targetEmissionList;
    protected $_name = [
        'actualEmissionList' => 'actualEmissionList',
        'targetEmissionList' => 'targetEmissionList',
    ];

    public function validate()
    {
        if (\is_array($this->actualEmissionList)) {
            Model::validateArray($this->actualEmissionList);
        }
        if (\is_array($this->targetEmissionList)) {
            Model::validateArray($this->targetEmissionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualEmissionList) {
            if (\is_array($this->actualEmissionList)) {
                $res['actualEmissionList'] = [];
                $n1 = 0;
                foreach ($this->actualEmissionList as $item1) {
                    $res['actualEmissionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetEmissionList) {
            if (\is_array($this->targetEmissionList)) {
                $res['targetEmissionList'] = [];
                $n1 = 0;
                foreach ($this->targetEmissionList as $item1) {
                    $res['targetEmissionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['actualEmissionList'])) {
            if (!empty($map['actualEmissionList'])) {
                $model->actualEmissionList = [];
                $n1 = 0;
                foreach ($map['actualEmissionList'] as $item1) {
                    $model->actualEmissionList[$n1++] = actualEmissionList::fromMap($item1);
                }
            }
        }

        if (isset($map['targetEmissionList'])) {
            if (!empty($map['targetEmissionList'])) {
                $model->targetEmissionList = [];
                $n1 = 0;
                foreach ($map['targetEmissionList'] as $item1) {
                    $model->targetEmissionList[$n1++] = targetEmissionList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
