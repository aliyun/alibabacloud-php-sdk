<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The ID of the policy template that you want to manage.
     *
     * > You can call the [ListDefensePolicies](~~195814~~) operation to query the IDs of all policy templates.
     * @var string[]
     */
    public $policyId;

    /**
     * @description The ID of the region where the automatic snapshot policy is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            if (!empty($map['PolicyId'])) {
                $model->policyId = $map['PolicyId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
