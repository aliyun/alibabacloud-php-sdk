<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\hitTags;
use AlibabaCloud\Tea\Model;

class policyBindings extends Model
{
    /**
     * @description Advanced options.
     *
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @description Whether the resource is automatically associated through the backup policy resource tag.
     *
     * @example false
     *
     * @var bool
     */
    public $createdByTag;

    /**
     * @description Creation time. UNIX timestamp, in seconds.
     *
     * @example 1661399570
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the role created in the RAM of the original account for cross-account backup.
     *
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Cross-account backup type. Supported values:
     * - CROSS_ACCOUNT: Cross-account backup
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the original account for cross-account backup.
     *
     * @example 1480************
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description Data source ID.
     *
     * @example i-8vb************5ly
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description 策略是否对该数据源生效。
     * - false：未暂停
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description This parameter is required only when **SourceType** is **ECS_FILE** or **File**. It specifies the file types that should not be backed up, and all files of these types will be excluded. Supports up to 255 characters.
     *
     * @example [\\"*.doc\\",\\"*.xltm\\"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description Hit tag rules.
     *
     * @var hitTags[]
     */
    public $hitTags;

    /**
     * @description This parameter is required only when **SourceType** is **ECS_FILE** or **File**. It specifies the file types to be backed up, and all files of these types will be backed up. Supports up to 255 characters.
     *
     * @example [\\"*.doc\\",\\"*.xltm\\"]
     *
     * @var string
     */
    public $include;

    /**
     * @description Bound policy description.
     *
     * @example po-000************eslc-i-uf6************y5g
     *
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @description Bound policy ID.
     *
     * @example pd-000************slc
     *
     * @var string
     */
    public $policyBindingId;

    /**
     * @description Policy ID.
     *
     * @example po-000************56y
     *
     * @var string
     */
    public $policyId;

    /**
     * @description - When **SourceType** is **OSS**, it indicates the prefix to be backed up. If not specified, it means backing up the entire root directory of the Bucket.
     * - When **SourceType** is **ECS_FILE** or **File**, it indicates the file directory to be backed up. If not specified, it means backing up all directories.
     * @example backup/
     *
     * @var string
     */
    public $source;

    /**
     * @description Data source type, with the value range:
     * - **UDM_ECS**: indicates ECS full machine backup
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required only when **SourceType** is **ECS_FILE** or **File**. It specifies the backup traffic control. The format is `{start}{end}{bandwidth}`. Multiple traffic control configurations are separated by commas, and the configured times must not overlap.
     *
     * - **start**: Start hour.
     * - **end**: End hour.
     * - **bandwidth**: Limit rate, in KB/s.
     * @example 0:24:10240
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description Update time. UNIX timestamp, in seconds.
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
