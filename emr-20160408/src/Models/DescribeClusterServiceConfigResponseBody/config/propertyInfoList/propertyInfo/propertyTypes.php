<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;

use AlibabaCloud\Tea\Model;

class propertyTypes extends Model
{
    /**
     * @var string[]
     */
    public $propertyType;
    protected $_name = [
        'propertyType' => 'propertyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyType) {
            $res['propertyType'] = $this->propertyType;
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
        if (isset($map['propertyType'])) {
            if (!empty($map['propertyType'])) {
                $model->propertyType = $map['propertyType'];
            }
        }

        return $model;
    }
}
