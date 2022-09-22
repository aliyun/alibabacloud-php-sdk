<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesResponseBody\describeHavsInstanceTypesResponse\havsInstanceTypes;
use AlibabaCloud\Tea\Model;

class describeHavsInstanceTypesResponse extends Model
{
    /**
     * @var havsInstanceTypes
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
            $res['HavsInstanceTypes'] = null !== $this->havsInstanceTypes ? $this->havsInstanceTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeHavsInstanceTypesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HavsInstanceTypes'])) {
            $model->havsInstanceTypes = havsInstanceTypes::fromMap($map['HavsInstanceTypes']);
        }

        return $model;
    }
}
