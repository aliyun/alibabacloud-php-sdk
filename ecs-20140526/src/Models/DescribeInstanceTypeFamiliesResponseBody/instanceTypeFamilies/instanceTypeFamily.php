<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponseBody\instanceTypeFamilies;

use AlibabaCloud\Dara\Model;

class instanceTypeFamily extends Model
{
    /**
     * @var string
     */
    public $generation;
    /**
     * @var string
     */
    public $instanceTypeFamilyId;
    protected $_name = [
        'generation'           => 'Generation',
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }

        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
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
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }

        return $model;
    }
}
