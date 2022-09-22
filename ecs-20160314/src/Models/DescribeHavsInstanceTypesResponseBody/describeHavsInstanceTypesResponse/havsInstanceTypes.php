<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesResponseBody\describeHavsInstanceTypesResponse;

use AlibabaCloud\Tea\Model;

class havsInstanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $havsInstanceTypes;
    protected $_name = [
        'havsInstanceTypes' => 'HavsInstanceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->havsInstanceTypes) {
            $res['HavsInstanceTypes'] = $this->havsInstanceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return havsInstanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HavsInstanceTypes'])) {
            if (!empty($map['HavsInstanceTypes'])) {
                $model->havsInstanceTypes = $map['HavsInstanceTypes'];
            }
        }

        return $model;
    }
}
