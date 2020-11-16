<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $policyGroupId;
    protected $_name = [
        'regionId'      => 'RegionId',
        'policyGroupId' => 'PolicyGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = $map['PolicyGroupId'];
            }
        }

        return $model;
    }
}
