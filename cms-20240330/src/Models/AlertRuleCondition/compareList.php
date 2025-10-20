<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList\valueLevelList;

class compareList extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var string
     */
    public $baseUnit;

    /**
     * @var string
     */
    public $displayUnit;

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
        'aggregate' => 'aggregate',
        'baseUnit' => 'baseUnit',
        'displayUnit' => 'displayUnit',
        'oper' => 'oper',
        'value' => 'value',
        'valueLevelList' => 'valueLevelList',
        'yoyTimeUnit' => 'yoyTimeUnit',
        'yoyTimeValue' => 'yoyTimeValue',
    ];

    public function validate()
    {
        if (\is_array($this->valueLevelList)) {
            Model::validateArray($this->valueLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['aggregate'] = $this->aggregate;
        }

        if (null !== $this->baseUnit) {
            $res['baseUnit'] = $this->baseUnit;
        }

        if (null !== $this->displayUnit) {
            $res['displayUnit'] = $this->displayUnit;
        }

        if (null !== $this->oper) {
            $res['oper'] = $this->oper;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueLevelList) {
            if (\is_array($this->valueLevelList)) {
                $res['valueLevelList'] = [];
                $n1 = 0;
                foreach ($this->valueLevelList as $item1) {
                    $res['valueLevelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aggregate'])) {
            $model->aggregate = $map['aggregate'];
        }

        if (isset($map['baseUnit'])) {
            $model->baseUnit = $map['baseUnit'];
        }

        if (isset($map['displayUnit'])) {
            $model->displayUnit = $map['displayUnit'];
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
                $n1 = 0;
                foreach ($map['valueLevelList'] as $item1) {
                    $model->valueLevelList[$n1] = valueLevelList::fromMap($item1);
                    ++$n1;
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
