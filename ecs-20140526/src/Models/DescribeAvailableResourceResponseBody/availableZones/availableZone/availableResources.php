<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource;

class availableResources extends Model
{
    /**
     * @var availableResource[]
     */
    public $availableResource;
    protected $_name = [
        'availableResource' => 'AvailableResource',
    ];

    public function validate()
    {
        if (\is_array($this->availableResource)) {
            Model::validateArray($this->availableResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableResource) {
            if (\is_array($this->availableResource)) {
                $res['AvailableResource'] = [];
                $n1 = 0;
                foreach ($this->availableResource as $item1) {
                    $res['AvailableResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableResource'])) {
            if (!empty($map['AvailableResource'])) {
                $model->availableResource = [];
                $n1 = 0;
                foreach ($map['AvailableResource'] as $item1) {
                    $model->availableResource[$n1++] = availableResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
