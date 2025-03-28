<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Dara\Model;

class sourceResources extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $relatedResourceTypeFilter;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'regionId' => 'RegionId',
        'relatedResourceTypeFilter' => 'RelatedResourceTypeFilter',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->relatedResourceTypeFilter)) {
            Model::validateArray($this->relatedResourceTypeFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relatedResourceTypeFilter) {
            if (\is_array($this->relatedResourceTypeFilter)) {
                $res['RelatedResourceTypeFilter'] = [];
                $n1 = 0;
                foreach ($this->relatedResourceTypeFilter as $item1) {
                    $res['RelatedResourceTypeFilter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelatedResourceTypeFilter'])) {
            if (!empty($map['RelatedResourceTypeFilter'])) {
                $model->relatedResourceTypeFilter = [];
                $n1 = 0;
                foreach ($map['RelatedResourceTypeFilter'] as $item1) {
                    $model->relatedResourceTypeFilter[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
