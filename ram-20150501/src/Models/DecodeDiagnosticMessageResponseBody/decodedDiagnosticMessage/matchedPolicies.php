<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;

use AlibabaCloud\Dara\Model;

class matchedPolicies extends Model
{
    /**
     * @var string
     */
    public $attachedEntityType;

    /**
     * @var string
     */
    public $attachedScope;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $policyIdentifier;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyVersion;
    protected $_name = [
        'attachedEntityType' => 'AttachedEntityType',
        'attachedScope' => 'AttachedScope',
        'effect' => 'Effect',
        'policyIdentifier' => 'PolicyIdentifier',
        'policyType' => 'PolicyType',
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedEntityType) {
            $res['AttachedEntityType'] = $this->attachedEntityType;
        }

        if (null !== $this->attachedScope) {
            $res['AttachedScope'] = $this->attachedScope;
        }

        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }

        if (null !== $this->policyIdentifier) {
            $res['PolicyIdentifier'] = $this->policyIdentifier;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
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
        if (isset($map['AttachedEntityType'])) {
            $model->attachedEntityType = $map['AttachedEntityType'];
        }

        if (isset($map['AttachedScope'])) {
            $model->attachedScope = $map['AttachedScope'];
        }

        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }

        if (isset($map['PolicyIdentifier'])) {
            $model->policyIdentifier = $map['PolicyIdentifier'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        return $model;
    }
}
