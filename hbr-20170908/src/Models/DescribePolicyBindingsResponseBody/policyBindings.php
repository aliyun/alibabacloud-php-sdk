<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;
use AlibabaCloud\Tea\Model;

class policyBindings extends Model
{
    /**
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @example 1661399570
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @example 1480************
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @example i-8vb************5ly
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example po-000************eslc-i-uf6************y5g
     *
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @example pd-000************slc
     *
     * @var string
     */
    public $policyBindingId;

    /**
     * @example po-000************56y
     *
     * @var string
     */
    public $policyId;

    /**
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
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
