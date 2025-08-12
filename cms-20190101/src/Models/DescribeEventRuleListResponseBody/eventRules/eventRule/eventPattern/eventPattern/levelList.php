<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\Dara\Model;

class levelList extends Model
{
    /**
     * @var string[]
     */
    public $levelList;
    protected $_name = [
        'levelList' => 'LevelList',
    ];

    public function validate()
    {
        if (\is_array($this->levelList)) {
            Model::validateArray($this->levelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levelList) {
            if (\is_array($this->levelList)) {
                $res['LevelList'] = [];
                $n1 = 0;
                foreach ($this->levelList as $item1) {
                    $res['LevelList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $n1 = 0;
                foreach ($map['LevelList'] as $item1) {
                    $model->levelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
