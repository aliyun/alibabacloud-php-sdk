<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolicyBindingShrinkRequest extends Model
{
    /**
     * @description Advanced options.
     *
     * @var string
     */
    public $advancedOptionsShrink;

    /**
     * @description The ID of the data source.
     *
     * @example i-bp1************dtv
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Specifies whether to disable the backup policy for the data source.
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
     * @example po-000************ky9
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: ECS instance backup
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'advancedOptionsShrink'    => 'AdvancedOptions',
        'dataSourceId'             => 'DataSourceId',
        'disabled'                 => 'Disabled',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyId'                 => 'PolicyId',
        'sourceType'               => 'SourceType',
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
        if (null !== $this->policyBindingDescription) {
            $res['PolicyBindingDescription'] = $this->policyBindingDescription;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['PolicyBindingDescription'])) {
            $model->policyBindingDescription = $map['PolicyBindingDescription'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
