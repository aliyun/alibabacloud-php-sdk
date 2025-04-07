<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolicyBindingShrinkRequest extends Model
{
    /**
     * @description The advanced options.
     *
     * @var string
     */
    public $advancedOptionsShrink;

    /**
     * @description The ID of the data source.
     *
     * This parameter is required.
     *
     * @example i-bp1************dtv
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
     * @example po-000************5xx-i-2ze************nw4
     *
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @description The ID of the backup policy.
     *
     * This parameter is required.
     *
     * @example po-000************ky9
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
     *   **UDM_ECS**: ECS instance backup
     *
     * This parameter is required.
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
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;
    protected $_name = [
        'advancedOptionsShrink' => 'AdvancedOptions',
        'dataSourceId' => 'DataSourceId',
        'disabled' => 'Disabled',
        'exclude' => 'Exclude',
        'include' => 'Include',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyId' => 'PolicyId',
        'source' => 'Source',
        'sourceType' => 'SourceType',
        'speedLimit' => 'SpeedLimit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedOptionsShrink) {
            $res['AdvancedOptions'] = $this->advancedOptionsShrink;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolicyBindingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptionsShrink = $map['AdvancedOptions'];
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

        return $model;
    }
}
