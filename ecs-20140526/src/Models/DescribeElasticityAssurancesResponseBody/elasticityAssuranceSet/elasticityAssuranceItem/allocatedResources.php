<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource;

class allocatedResources extends Model
{
    /**
     * @var allocatedResource[]
     */
    public $allocatedResource;
    protected $_name = [
        'allocatedResource' => 'AllocatedResource',
    ];

    public function validate()
    {
        if (\is_array($this->allocatedResource)) {
            Model::validateArray($this->allocatedResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedResource) {
            if (\is_array($this->allocatedResource)) {
                $res['AllocatedResource'] = [];
                $n1                       = 0;
                foreach ($this->allocatedResource as $item1) {
                    $res['AllocatedResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AllocatedResource'])) {
            if (!empty($map['AllocatedResource'])) {
                $model->allocatedResource = [];
                $n1                       = 0;
                foreach ($map['AllocatedResource'] as $item1) {
                    $model->allocatedResource[$n1++] = allocatedResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
