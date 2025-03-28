<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Dara\Model;

class sourceTag extends Model
{
    /**
     * @var mixed[]
     */
    public $resourceTags;

    /**
     * @var string[]
     */
    public $resourceTypeFilter;
    protected $_name = [
        'resourceTags' => 'ResourceTags',
        'resourceTypeFilter' => 'ResourceTypeFilter',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        if (\is_array($this->resourceTypeFilter)) {
            Model::validateArray($this->resourceTypeFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['ResourceTags'] = [];
                foreach ($this->resourceTags as $key1 => $value1) {
                    $res['ResourceTags'][$key1] = $value1;
                }
            }
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
        if (isset($map['ResourceTags'])) {
            if (!empty($map['ResourceTags'])) {
                $model->resourceTags = [];
                foreach ($map['ResourceTags'] as $key1 => $value1) {
                    $model->resourceTags[$key1] = $value1;
                }
            }
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
