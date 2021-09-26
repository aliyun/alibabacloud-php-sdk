<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;

use AlibabaCloud\Tea\Model;

class propertyTypes extends Model
{
    /**
     * @var string[]
     */
    public $propertyType;
    protected $_name = [
        'propertyType' => 'PropertyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyType'])) {
            if (!empty($map['PropertyType'])) {
                $model->propertyType = $map['PropertyType'];
            }
        }

        return $model;
    }
}
