<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;
use AlibabaCloud\Tea\Model;

class policyBindingList extends Model
{
    /**
     * @description The advanced options.
     *
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether to back up and restore data within the same Alibaba Cloud account or across Alibaba Cloud accounts. Default value: SELF_ACCOUNT. Valid values:
     *
     *   **SELF_ACCOUNT**: backs up data within the same Alibaba Cloud account.
     *   **CROSS_ACCOUNT**: backs up data across Alibaba Cloud accounts.
     *
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 144**********732
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the data source. The meaning of this parameter depends on the **SourceType** parameter. Valid values:
     *
     *   **UDM_ECS**: the ID of the Elastic Compute Service (ECS) instance
     *   **OSS**: the name of the Object Storage Service (OSS) bucket
     *   **NAS**: the ID of the Apsara File Storage NAS (NAS) file system
     *   **COMMON_NAS**: the ID of the on-premises NAS file system
     *   **ECS_FILE**: the ID of the ECS instance
     *   **File**: the ID of the Cloud Backup client
     *   **COMMON_FILE_SYSTEM**: the ID of the Cloud Parallel File Storage (CPFS) backup data source
     *
     * @example i-bp1************dl8
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Specifies whether to disable the backup policy for the data source. Valid values:
     *
     *   true: disables the backup policy for the data source
     *   false: enables the backup policy for the data source
     *
     * @example true
     *
     * @var string
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
     * @example Bind data sources to a backup policy
     *
     * @var string
     */
    public $policyBindingDescription;

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
     *   **UDM_ECS**: ECS instance
     *   **OSS**: OSS bucket
     *   **NAS**: NAS file system
     *   **COMMON_NAS**: on-premises NAS file system
     *   **ECS_FILE**: ECS file
     *   **File**: on-premises file
     *   **COMMON_FILE_SYSTEM**: CPFS file system
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
     * @example 0:24:1024
     *
     * @var string
     */
    public $speedLimit;
    protected $_name = [
        'advancedOptions'          => 'AdvancedOptions',
        'crossAccountRoleName'     => 'CrossAccountRoleName',
        'crossAccountType'         => 'CrossAccountType',
        'crossAccountUserId'       => 'CrossAccountUserId',
        'dataSourceId'             => 'DataSourceId',
        'disabled'                 => 'Disabled',
        'exclude'                  => 'Exclude',
        'include'                  => 'Include',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'source'                   => 'Source',
        'sourceType'               => 'SourceType',
        'speedLimit'               => 'SpeedLimit',
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
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->policyBindingDescription) {
            $res['PolicyBindingDescription'] = $this->policyBindingDescription;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyBindingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptions = advancedOptions::fromMap($map['AdvancedOptions']);
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
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['PolicyBindingDescription'])) {
            $model->policyBindingDescription = $map['PolicyBindingDescription'];
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

        return $model;
    }
}
