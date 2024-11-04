<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify;

use AlibabaCloud\Tea\Model;

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
        'periodMin'    => 'periodMin',
        'silenceSec'   => 'silenceSec',
        'times'        => 'times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupingKeys) {
            $res['groupingKeys'] = $this->groupingKeys;
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

    /**
     * @param array $map
     *
     * @return groupingSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupingKeys'])) {
            if (!empty($map['groupingKeys'])) {
                $model->groupingKeys = $map['groupingKeys'];
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
