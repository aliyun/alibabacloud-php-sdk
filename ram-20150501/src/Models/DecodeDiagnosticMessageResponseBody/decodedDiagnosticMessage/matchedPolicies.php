<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;

use AlibabaCloud\Tea\Model;

class matchedPolicies extends Model
{
    /**
     * @description The type of the entity to which the policy is attached.
     *
     * Valid values:
     *
     *   RamUser: RAM user
     *   RamRole: RAM role
     *   ResourceDirectoryTarget: entity in a resource directory
     *   RamGroup: RAM user group
     *
     * @example RamUser
     *
     * @var string
     */
    public $attachedEntityType;

    /**
     * @description The authorization scope of the policy.
     *
     * Valid values:
     *
     *   Account: Alibaba Cloud account
     *   Folder: folder in the resource directory
     *   ResourceGroup: resource group
     *
     * @example Account
     *
     * @var string
     */
    public $attachedScope;

    /**
     * @description The effect of the policy.
     *
     * Valid values:
     *
     *   Deny
     *
     * <!-- -->
     *
     *   Allow
     *
     * <!-- -->
     * @example Deny
     *
     * @var string
     */
    public $effect;

    /**
     * @description The identifier of the policy.
     *
     *   Control policy: the ID of the control policy
     *   RAM policy: the name of the policy
     *
     * @example MyPolicyName
     *
     * @var string
     */
    public $policyIdentifier;

    /**
     * @description The type of the policy.
     *
     * Valid values:
     *   Custom: custom policy
     *   System: system policy
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The version number of the policy.
     *
     * > Only custom policies have version numbers.
     * @example v1
     *
     * @var string
     */
    public $policyVersion;
    protected $_name = [
        'attachedEntityType' => 'AttachedEntityType',
        'attachedScope'      => 'AttachedScope',
        'effect'             => 'Effect',
        'policyIdentifier'   => 'PolicyIdentifier',
        'policyType'         => 'PolicyType',
        'policyVersion'      => 'PolicyVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return matchedPolicies
     */
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
