<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;

class availableResourceCreation extends Model
{
    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1                   = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1++] = $item1;
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
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1                   = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
