<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources\supportedResource;

class supportedResources extends Model
{
    /**
     * @var supportedResource[]
     */
    public $supportedResource;
    protected $_name = [
        'supportedResource' => 'SupportedResource',
    ];

    public function validate()
    {
        if (\is_array($this->supportedResource)) {
            Model::validateArray($this->supportedResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedResource) {
            if (\is_array($this->supportedResource)) {
                $res['SupportedResource'] = [];
                $n1 = 0;
                foreach ($this->supportedResource as $item1) {
                    $res['SupportedResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedResource'])) {
            if (!empty($map['SupportedResource'])) {
                $model->supportedResource = [];
                $n1 = 0;
                foreach ($map['SupportedResource'] as $item1) {
                    $model->supportedResource[$n1++] = supportedResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
