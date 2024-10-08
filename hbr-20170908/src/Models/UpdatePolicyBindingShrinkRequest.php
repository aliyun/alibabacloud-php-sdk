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
     * @example [\\"*.doc\\",\\"*.xltm\\"]
     *
     * @var string
     */
    public $exclude;

    /**
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
     * @example po-000************ky9
     *
     * @var string
     */
    public $policyId;

    /**
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
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;
    protected $_name = [
        'advancedOptionsShrink'    => 'AdvancedOptions',
        'dataSourceId'             => 'DataSourceId',
        'disabled'                 => 'Disabled',
        'exclude'                  => 'Exclude',
        'include'                  => 'Include',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyId'                 => 'PolicyId',
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
