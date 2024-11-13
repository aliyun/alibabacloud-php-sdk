<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\hitTags;
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
     * @example false
     *
     * @var bool
     */
    public $createdByTag;

    /**
     * @description The time when the backup policy was created. The value is a UNIX timestamp. Unit: seconds.
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
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE** or **File**. This parameter specifies the type of files that do not need to be backed up. No files of the specified type are backed up. The value can be up to 255 characters in length.
     *
     * @example [\\"*.doc\\",\\"*.xltm\\"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @var hitTags[]
     */
    public $hitTags;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE** or **File**. This parameter specifies the type of files to be backed up. All files of the specified type are backed up. The value can be up to 255 characters in length.
     *
     * @example [\\"*.doc\\",\\"*.xltm\\"]
     *
     * @var string
     */
    public $include;

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
     * @description The ID of the backup policy.
     *
     * @example po-000************56y
     *
     * @var string
     */
    public $policyId;

    /**
     * @description *   If the SourceType parameter is set to **OSS**, set the Source parameter to the prefix of the path to the folder that you want to back up. If you do not specify the Source parameter, the entire bucket (root directory) is backed up.
     *   If the SourceType parameter is set to **ECS_FILE** or **File**, set the Source parameter to the path to the files that you want to back up. If you do not specify the Source parameter, all paths backed up.
     *
     * @example backup/
     *
     * @var string
     */
    public $source;

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
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE** or **File**. This parameter specifies the throttling rules. Format: `{start}{end}{bandwidth}`. Separate multiple throttling rules with vertical bars (|). The time ranges of the throttling rules cannot overlap.
     *
     *   **start**: the start hour.
     *   **end**: the end hour.
     *   **bandwidth**: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:10240
     *
     * @var string
     */
    public $speedLimit;

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
        'createdByTag'             => 'CreatedByTag',
        'createdTime'              => 'CreatedTime',
        'crossAccountRoleName'     => 'CrossAccountRoleName',
        'crossAccountType'         => 'CrossAccountType',
        'crossAccountUserId'       => 'CrossAccountUserId',
        'dataSourceId'             => 'DataSourceId',
        'disabled'                 => 'Disabled',
        'exclude'                  => 'Exclude',
        'hitTags'                  => 'HitTags',
        'include'                  => 'Include',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyBindingId'          => 'PolicyBindingId',
        'policyId'                 => 'PolicyId',
        'source'                   => 'Source',
        'sourceType'               => 'SourceType',
        'speedLimit'               => 'SpeedLimit',
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
        if (null !== $this->createdByTag) {
            $res['CreatedByTag'] = $this->createdByTag;
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
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->hitTags) {
            $res['HitTags'] = [];
            if (null !== $this->hitTags && \is_array($this->hitTags)) {
                $n = 0;
                foreach ($this->hitTags as $item) {
                    $res['HitTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
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
        if (isset($map['CreatedByTag'])) {
            $model->createdByTag = $map['CreatedByTag'];
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
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['HitTags'])) {
            if (!empty($map['HitTags'])) {
                $model->hitTags = [];
                $n              = 0;
                foreach ($map['HitTags'] as $item) {
                    $model->hitTags[$n++] = null !== $item ? hitTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
