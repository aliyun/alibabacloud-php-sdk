<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyResourceCenterPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @var string
     */
    public $policyGroupType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'policyGroupIds' => 'PolicyGroupIds',
        'policyGroupType' => 'PolicyGroupType',
        'productType' => 'ProductType',
        'resourceIds' => 'ResourceIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
