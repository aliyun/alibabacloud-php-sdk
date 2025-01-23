<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions;

class UpdatePolicyBindingRequest extends Model
{
    /**
     * @var advancedOptions
     */
    public $advancedOptions;
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
    protected $_name = [
        'advancedOptions'          => 'AdvancedOptions',
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
        if (null !== $this->advancedOptions) {
            $this->advancedOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toArray($noStream) : $this->advancedOptions;
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
