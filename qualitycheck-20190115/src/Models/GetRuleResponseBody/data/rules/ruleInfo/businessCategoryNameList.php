<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules\ruleInfo;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = $this->businessCategoryNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessCategoryNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = $map['BusinessCategoryNameList'];
            }
        }

        return $model;
    }
}
