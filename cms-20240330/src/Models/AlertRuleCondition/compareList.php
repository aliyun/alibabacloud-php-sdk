<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList\valueLevelList;
use AlibabaCloud\Tea\Model;

class compareList extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var string
     */
    public $oper;

    /**
     * @var float
     */
    public $value;

    /**
     * @var valueLevelList[]
     */
    public $valueLevelList;

    /**
     * @var string
     */
    public $yoyTimeUnit;

    /**
     * @var int
     */
    public $yoyTimeValue;
    protected $_name = [
        'aggregate'      => 'aggregate',
        'oper'           => 'oper',
        'value'          => 'value',
        'valueLevelList' => 'valueLevelList',
        'yoyTimeUnit'    => 'yoyTimeUnit',
        'yoyTimeValue'   => 'yoyTimeValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['aggregate'] = $this->aggregate;
        }
        if (null !== $this->oper) {
            $res['oper'] = $this->oper;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueLevelList) {
            $res['valueLevelList'] = [];
            if (null !== $this->valueLevelList && \is_array($this->valueLevelList)) {
                $n = 0;
                foreach ($this->valueLevelList as $item) {
                    $res['valueLevelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->yoyTimeUnit) {
            $res['yoyTimeUnit'] = $this->yoyTimeUnit;
        }
        if (null !== $this->yoyTimeValue) {
            $res['yoyTimeValue'] = $this->yoyTimeValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compareList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aggregate'])) {
            $model->aggregate = $map['aggregate'];
        }
        if (isset($map['oper'])) {
            $model->oper = $map['oper'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueLevelList'])) {
            if (!empty($map['valueLevelList'])) {
                $model->valueLevelList = [];
                $n                     = 0;
                foreach ($map['valueLevelList'] as $item) {
                    $model->valueLevelList[$n++] = null !== $item ? valueLevelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['yoyTimeUnit'])) {
            $model->yoyTimeUnit = $map['yoyTimeUnit'];
        }
        if (isset($map['yoyTimeValue'])) {
            $model->yoyTimeValue = $map['yoyTimeValue'];
        }

        return $model;
    }
}
