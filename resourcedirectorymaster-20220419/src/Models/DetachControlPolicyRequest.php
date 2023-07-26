<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DetachControlPolicyRequest extends Model
{
    /**
     * @description The ID of the access control policy.
     *
     * @example cp-jExXAqIYkwHN****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The ID of the object from which you want to detach the access control policy. Access control policies can be attached to the following objects:
     *
     *   Root folder
     *   Subfolders of the Root folder
     *   Members
     *
     * @example fd-ZDNPiT****
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'policyId' => 'PolicyId',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
