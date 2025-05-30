<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyV2ShrinkRequest extends Model
{
    /**
     * @description The description of the backup policy.
     *
     * @example Data is backed up at 10:00:00 every day and replicated to the China (Shanghai) region for geo-redundancy.
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The name of the backup policy.
     *
     * @example Daily Local Backup + Remote Backup
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The policy type. Valid values:
     *
     *   **STANDARD**: the general backup policy. This type of policy applies to backups other than Elastic Compute Service (ECS) instance backup.
     *   **UDM_ECS_ONLY**: This type of policy applies only to ECS instance backup.
     *
     * If the policy type is not specified, Cloud Backup automatically sets the policy type based on whether the backup vault is specified in the rules of the policy:
     *
     *   If the backup vault is specified, Cloud Backup sets the policy type to **STANDARD**.
     *   If the backup vault is not specified, Cloud Backup sets the policy type to **UDM_ECS_ONLY**.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The rules in the backup policy.
     *
     * @var string
     */
    public $rulesShrink;
    protected $_name = [
        'policyDescription' => 'PolicyDescription',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'rulesShrink' => 'Rules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        return $model;
    }
}
