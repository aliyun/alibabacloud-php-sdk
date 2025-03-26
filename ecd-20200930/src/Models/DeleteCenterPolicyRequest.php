<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteCenterPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'businessType' => 'BusinessType',
        'policyGroupIds' => 'PolicyGroupIds',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
