<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;
use AlibabaCloud\Tea\Model;

class propertyInfoList extends Model
{
    /**
     * @var propertyInfo[]
     */
    public $propertyInfo;
    protected $_name = [
        'propertyInfo' => 'PropertyInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyInfo) {
            $res['PropertyInfo'] = [];
            if (null !== $this->propertyInfo && \is_array($this->propertyInfo)) {
                $n = 0;
                foreach ($this->propertyInfo as $item) {
                    $res['PropertyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyInfo'])) {
            if (!empty($map['PropertyInfo'])) {
                $model->propertyInfo = [];
                $n                   = 0;
                foreach ($map['PropertyInfo'] as $item) {
                    $model->propertyInfo[$n++] = null !== $item ? propertyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
