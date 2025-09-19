<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\checkRules\checkPolicies;

class checkRules extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $assetSubType;

    /**
     * @var int
     */
    public $assetType;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var checkPolicies[]
     */
    public $checkPolicies;

    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var string
     */
    public $instanceSubType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var int
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'aliUid' => 'AliUid',
        'assetSubType' => 'AssetSubType',
        'assetType' => 'AssetType',
        'checkId' => 'CheckId',
        'checkPolicies' => 'CheckPolicies',
        'checkShowName' => 'CheckShowName',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'remark' => 'Remark',
        'ruleId' => 'RuleId',
        'ruleType' => 'RuleType',
        'scopeType' => 'ScopeType',
        'vendor' => 'Vendor',
        'vendorName' => 'VendorName',
    ];

    public function validate()
    {
        if (\is_array($this->checkPolicies)) {
            Model::validateArray($this->checkPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkPolicies) {
            if (\is_array($this->checkPolicies)) {
                $res['CheckPolicies'] = [];
                $n1 = 0;
                foreach ($this->checkPolicies as $item1) {
                    $res['CheckPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckPolicies'])) {
            if (!empty($map['CheckPolicies'])) {
                $model->checkPolicies = [];
                $n1 = 0;
                foreach ($map['CheckPolicies'] as $item1) {
                    $model->checkPolicies[$n1] = checkPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
