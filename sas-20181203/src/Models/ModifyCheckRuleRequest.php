<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCheckRuleRequest\addInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCheckRuleRequest\deleteInstanceList;
use AlibabaCloud\Tea\Model;

class ModifyCheckRuleRequest extends Model
{
    /**
     * @description The list of instances to be added in this rule update. This parameter does not need to be passed if there are no instances to add.
     *
     * @var addInstanceList[]
     */
    public $addInstanceList;

    /**
     * @description The list of instances to be removed in this rule update. This parameter does not need to be passed if there are no instances to remove.
     *
     * @var deleteInstanceList[]
     */
    public $deleteInstanceList;

    /**
     * @description Remarks.
     *
     * @example testRemark
     *
     * @var string
     */
    public $remark;

    /**
     * @description Rule ID.
     * > You can obtain this parameter by calling the [ListCheckRule](https://help.aliyun.com/document_detail/2590599.html) API.
     *
     * This parameter is required.
     *
     * @example 9000**
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description Rule type. Default is **WHITE**. Values:
     * - **WHITE**: Add to whitelist
     *
     * @example WHITE
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The scope of effect for modifying the rule:
     * - **INSTANCE**: Instance
     * - **ITEM**: Check item
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'addInstanceList' => 'AddInstanceList',
        'deleteInstanceList' => 'DeleteInstanceList',
        'remark' => 'Remark',
        'ruleId' => 'RuleId',
        'ruleType' => 'RuleType',
        'scopeType' => 'ScopeType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addInstanceList) {
            $res['AddInstanceList'] = [];
            if (null !== $this->addInstanceList && \is_array($this->addInstanceList)) {
                $n = 0;
                foreach ($this->addInstanceList as $item) {
                    $res['AddInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deleteInstanceList) {
            $res['DeleteInstanceList'] = [];
            if (null !== $this->deleteInstanceList && \is_array($this->deleteInstanceList)) {
                $n = 0;
                foreach ($this->deleteInstanceList as $item) {
                    $res['DeleteInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCheckRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddInstanceList'])) {
            if (!empty($map['AddInstanceList'])) {
                $model->addInstanceList = [];
                $n = 0;
                foreach ($map['AddInstanceList'] as $item) {
                    $model->addInstanceList[$n++] = null !== $item ? addInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeleteInstanceList'])) {
            if (!empty($map['DeleteInstanceList'])) {
                $model->deleteInstanceList = [];
                $n = 0;
                foreach ($map['DeleteInstanceList'] as $item) {
                    $model->deleteInstanceList[$n++] = null !== $item ? deleteInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
