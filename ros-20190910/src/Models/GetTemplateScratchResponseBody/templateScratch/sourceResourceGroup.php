<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;

use AlibabaCloud\Dara\Model;

class sourceResourceGroup extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $resourceTypeFilter;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTypeFilter' => 'ResourceTypeFilter',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeFilter)) {
            Model::validateArray($this->resourceTypeFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTypeFilter) {
            if (\is_array($this->resourceTypeFilter)) {
                $res['ResourceTypeFilter'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeFilter as $item1) {
                    $res['ResourceTypeFilter'][$n1++] = $item1;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTypeFilter'])) {
            if (!empty($map['ResourceTypeFilter'])) {
                $model->resourceTypeFilter = [];
                $n1 = 0;
                foreach ($map['ResourceTypeFilter'] as $item1) {
                    $model->resourceTypeFilter[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
