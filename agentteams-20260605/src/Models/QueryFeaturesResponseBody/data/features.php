<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\QueryFeaturesResponseBody\data;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $featureCode;

    /**
     * @var bool
     */
    public $supported;

    /**
     * @var string
     */
    public $unsupportedReason;

    /**
     * @var string
     */
    public $unsupportedReasonCode;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'featureCode' => 'FeatureCode',
        'supported' => 'Supported',
        'unsupportedReason' => 'UnsupportedReason',
        'unsupportedReasonCode' => 'UnsupportedReasonCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->featureCode) {
            $res['FeatureCode'] = $this->featureCode;
        }

        if (null !== $this->supported) {
            $res['Supported'] = $this->supported;
        }

        if (null !== $this->unsupportedReason) {
            $res['UnsupportedReason'] = $this->unsupportedReason;
        }

        if (null !== $this->unsupportedReasonCode) {
            $res['UnsupportedReasonCode'] = $this->unsupportedReasonCode;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FeatureCode'])) {
            $model->featureCode = $map['FeatureCode'];
        }

        if (isset($map['Supported'])) {
            $model->supported = $map['Supported'];
        }

        if (isset($map['UnsupportedReason'])) {
            $model->unsupportedReason = $map['UnsupportedReason'];
        }

        if (isset($map['UnsupportedReasonCode'])) {
            $model->unsupportedReasonCode = $map['UnsupportedReasonCode'];
        }

        return $model;
    }
}
