<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules\ruleInfo;

use AlibabaCloud\Dara\Model;

class businessCategoryNameList extends Model
{
    /**
     * @var string[]
     */
    public $businessCategoryNameList;
    protected $_name = [
        'businessCategoryNameList' => 'BusinessCategoryNameList',
    ];

    public function validate()
    {
        if (\is_array($this->businessCategoryNameList)) {
            Model::validateArray($this->businessCategoryNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessCategoryNameList) {
            if (\is_array($this->businessCategoryNameList)) {
                $res['BusinessCategoryNameList'] = [];
                $n1 = 0;
                foreach ($this->businessCategoryNameList as $item1) {
                    $res['BusinessCategoryNameList'][$n1++] = $item1;
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
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = [];
                $n1 = 0;
                foreach ($map['BusinessCategoryNameList'] as $item1) {
                    $model->businessCategoryNameList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
