<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\checkRules\checkPolicies;
use AlibabaCloud\Tea\Model;

class checkRules extends Model
{
    /**
     * @description The UID of the current user.
     *
     * @example 176316827610****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The subtype of the cloud product.
     *
     * > For specific meanings, refer to the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) AssetSubType.
     *
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The type of cloud asset.
     * > For specific meanings, refer to the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) AssetType.
     *
     * @example 1
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The ID of the check item.
     *
     * @example 77
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The display name of the check item section.
     *
     * @var checkPolicies[]
     */
    public $checkPolicies;

    /**
     * @description The name of the check item.
     *
     * @example Check for IPS Whitelist on CEN (Enterprise Edition) Tab
     *
     * @var string
     */
    public $checkShowName;

    /**
     * @description The sub-asset type of the cloud product.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $instanceSubType;

    /**
     * @description The asset type of the cloud product.
     *
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Remark.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the rule.
     *
     * @example 8000**
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The type of rule. Default is **WHITE**. Values:
     * - **WHITE**: Add to whitelist
     *
     * @example WHITE
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The scope where the rule applies. Values:
     * - **INSTNACE**: Instance
     * - **ITEM**: Check item
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The server vendor. Values:
     *
     * - **0**: Alibaba Cloud asset
     * - **1**: Non-cloud asset
     * - **2**: IDC asset
     * - **3**, **4**, **5**, **7**: Other cloud assets
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;

    /**
     * @description The name of the server provider.
     *
     * @example ALIYUN
     *
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

    public function validate() {}

    public function toMap()
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
            $res['CheckPolicies'] = [];
            if (null !== $this->checkPolicies && \is_array($this->checkPolicies)) {
                $n = 0;
                foreach ($this->checkPolicies as $item) {
                    $res['CheckPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return checkRules
     */
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
                $n = 0;
                foreach ($map['CheckPolicies'] as $item) {
                    $model->checkPolicies[$n++] = null !== $item ? checkPolicies::fromMap($item) : $item;
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
