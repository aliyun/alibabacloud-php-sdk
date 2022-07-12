<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyGroupId' => 'PolicyGroupId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = $map['PolicyGroupId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
