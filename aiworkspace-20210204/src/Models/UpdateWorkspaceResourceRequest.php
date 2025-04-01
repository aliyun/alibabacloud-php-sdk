<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResourceRequest\labels;

class UpdateWorkspaceResourceRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var labels[]
     */
    public $labels;

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
    public $resourceType;

    /**
     * @var mixed[]
     */
    public $spec;
    protected $_name = [
        'groupName' => 'GroupName',
        'isDefault' => 'IsDefault',
        'labels' => 'Labels',
        'productType' => 'ProductType',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['Spec'] = [];
                foreach ($this->spec as $key1 => $value1) {
                    $res['Spec'][$key1] = $value1;
                }
            }
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Spec'])) {
            if (!empty($map['Spec'])) {
                $model->spec = [];
                foreach ($map['Spec'] as $key1 => $value1) {
                    $model->spec[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
