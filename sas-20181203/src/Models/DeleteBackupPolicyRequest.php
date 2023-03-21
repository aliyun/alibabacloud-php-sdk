<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupPolicyRequest extends Model
{
    /**
     * @description The ID of the anti-ransomware policy that you want to delete.
     *
     * >  You can call the [DescribeBackupPolicies](~~DescribeBackupPolicies~~) operation to query the IDs of anti-ransomware policies.
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The version of the anti-ransomware policy that you want to delete. You can call the [DescribeBackupPolicies](~~DescribeBackupPolicies~~) operation to query the versions of anti-ransomware policies. Valid values:
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;
    protected $_name = [
        'id'            => 'Id',
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        return $model;
    }
}
