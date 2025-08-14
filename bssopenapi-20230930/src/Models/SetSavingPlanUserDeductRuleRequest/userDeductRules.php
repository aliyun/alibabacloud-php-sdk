<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest;

use AlibabaCloud\Dara\Model;

class userDeductRules extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var bool
     */
    public $skipDeduct;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'moduleCode' => 'ModuleCode',
        'skipDeduct' => 'SkipDeduct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->skipDeduct) {
            $res['SkipDeduct'] = $this->skipDeduct;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['SkipDeduct'])) {
            $model->skipDeduct = $map['SkipDeduct'];
        }

        return $model;
    }
}
