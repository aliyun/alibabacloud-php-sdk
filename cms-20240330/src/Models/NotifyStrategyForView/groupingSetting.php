<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView;

use AlibabaCloud\Dara\Model;

class groupingSetting extends Model
{
    /**
     * @var string[]
     */
    public $groupingKeys;

    /**
     * @var int
     */
    public $periodMin;

    /**
     * @var int
     */
    public $silenceSec;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'groupingKeys' => 'groupingKeys',
        'periodMin' => 'periodMin',
        'silenceSec' => 'silenceSec',
        'times' => 'times',
    ];

    public function validate()
    {
        if (\is_array($this->groupingKeys)) {
            Model::validateArray($this->groupingKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupingKeys) {
            if (\is_array($this->groupingKeys)) {
                $res['groupingKeys'] = [];
                $n1 = 0;
                foreach ($this->groupingKeys as $item1) {
                    $res['groupingKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->periodMin) {
            $res['periodMin'] = $this->periodMin;
        }

        if (null !== $this->silenceSec) {
            $res['silenceSec'] = $this->silenceSec;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
        if (isset($map['groupingKeys'])) {
            if (!empty($map['groupingKeys'])) {
                $model->groupingKeys = [];
                $n1 = 0;
                foreach ($map['groupingKeys'] as $item1) {
                    $model->groupingKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['periodMin'])) {
            $model->periodMin = $map['periodMin'];
        }

        if (isset($map['silenceSec'])) {
            $model->silenceSec = $map['silenceSec'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
