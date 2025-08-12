<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\Dara\Model;

class nameList extends Model
{
    /**
     * @var string[]
     */
    public $nameList;
    protected $_name = [
        'nameList' => 'NameList',
    ];

    public function validate()
    {
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['NameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['NameList'][$n1] = $item1;
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
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['NameList'] as $item1) {
                    $model->nameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
