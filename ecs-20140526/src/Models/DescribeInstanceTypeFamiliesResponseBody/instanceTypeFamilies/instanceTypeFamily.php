<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponseBody\instanceTypeFamilies;

use AlibabaCloud\Tea\Model;

class instanceTypeFamily extends Model
{
    /**
     * @description The generation of the instance family.
     *
     * @example ecs-5
     *
     * @var string
     */
    public $generation;

    /**
     * @description The ID of the instance family.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamilyId;
    protected $_name = [
        'generation'           => 'Generation',
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceTypeFamily
     */
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
