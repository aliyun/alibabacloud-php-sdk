<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;
use AlibabaCloud\Tea\Model;

class policyBindings extends Model
{
    /**
     * @description The advanced options.
     *
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @description The time when the backup policy was created. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1661399570
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Indicates whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 1480************
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the data source.
     *
     * @example i-8vb************5ly
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Indicates whether the backup policy is enabled for the data source. Valid values:
     *
     *   true: The backup policy is disabled.
     *   false: The backup policy is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The description of the association.
     *
     * @example po-000************eslc-i-uf6************y5g
     *
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @description The ID of the association.
     *
     * @example pd-000************slc
     *
     * @var string
     */
    public $policyBindingId;

    /**
     * @description The policy ID.
     *
     * @example po-000************56y
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: ECS instances
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The time when the backup policy was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1653611573
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'advancedOptions'          => 'AdvancedOptions',
        'createdTime'              => 'CreatedTime',
        'crossAccountRoleName'     => 'CrossAccountRoleName',
        'crossAccountType'         => 'CrossAccountType',
        'crossAccountUserId'       => 'CrossAccountUserId',
        'dataSourceId'             => 'DataSourceId',
        'disabled'                 => 'Disabled',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyBindingId'          => 'PolicyBindingId',
        'policyId'                 => 'PolicyId',
        'sourceType'               => 'SourceType',
        'updatedTime'              => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->policyBindingDescription) {
            $res['PolicyBindingDescription'] = $this->policyBindingDescription;
        }
        if (null !== $this->policyBindingId) {
            $res['PolicyBindingId'] = $this->policyBindingId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyBindings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptions = advancedOptions::fromMap($map['AdvancedOptions']);
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['PolicyBindingDescription'])) {
            $model->policyBindingDescription = $map['PolicyBindingDescription'];
        }
        if (isset($map['PolicyBindingId'])) {
            $model->policyBindingId = $map['PolicyBindingId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
