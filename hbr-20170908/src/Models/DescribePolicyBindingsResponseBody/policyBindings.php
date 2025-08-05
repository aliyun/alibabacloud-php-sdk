<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\hitTags;

class policyBindings extends Model
{
    /**
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @var bool
     */
    public $createdByTag;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @var string
     */
    public $crossAccountType;

    /**
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $exclude;

    /**
     * @var hitTags[]
     */
    public $hitTags;

    /**
     * @var string
     */
    public $include;

    /**
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @var string
     */
    public $policyBindingId;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $speedLimit;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'advancedOptions' => 'AdvancedOptions',
        'createdByTag' => 'CreatedByTag',
        'createdTime' => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'dataSourceId' => 'DataSourceId',
        'disabled' => 'Disabled',
        'exclude' => 'Exclude',
        'hitTags' => 'HitTags',
        'include' => 'Include',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'policyBindingId' => 'PolicyBindingId',
        'policyId' => 'PolicyId',
        'source' => 'Source',
        'sourceType' => 'SourceType',
        'speedLimit' => 'SpeedLimit',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (null !== $this->advancedOptions) {
            $this->advancedOptions->validate();
        }
        if (\is_array($this->hitTags)) {
            Model::validateArray($this->hitTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toArray($noStream) : $this->advancedOptions;
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
            if (\is_array($this->hitTags)) {
                $res['HitTags'] = [];
                $n1 = 0;
                foreach ($this->hitTags as $item1) {
                    $res['HitTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['HitTags'] as $item1) {
                    $model->hitTags[$n1] = hitTags::fromMap($item1);
                    ++$n1;
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
