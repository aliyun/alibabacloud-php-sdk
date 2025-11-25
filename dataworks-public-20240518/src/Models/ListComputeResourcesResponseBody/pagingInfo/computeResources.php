<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComputeResourcesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComputeResourcesResponseBody\pagingInfo\computeResources\computeResource;

class computeResources extends Model
{
    /**
     * @var computeResource[]
     */
    public $computeResource;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->computeResource)) {
            Model::validateArray($this->computeResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            if (\is_array($this->computeResource)) {
                $res['ComputeResource'] = [];
                $n1 = 0;
                foreach ($this->computeResource as $item1) {
                    $res['ComputeResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ComputeResource'])) {
            if (!empty($map['ComputeResource'])) {
                $model->computeResource = [];
                $n1 = 0;
                foreach ($map['ComputeResource'] as $item1) {
                    $model->computeResource[$n1] = computeResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
