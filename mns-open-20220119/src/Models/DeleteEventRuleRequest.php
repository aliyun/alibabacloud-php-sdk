<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example oss
     *
     * @var string
     */
    public $productName;

    /**
     * @description This parameter is required.
     *
     * @example rule-xsXDW
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'productName' => 'ProductName',
        'ruleName' => 'RuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
