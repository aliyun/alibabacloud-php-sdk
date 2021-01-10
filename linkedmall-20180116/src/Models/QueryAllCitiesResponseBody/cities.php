<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesResponseBody\cities\city;
use AlibabaCloud\Tea\Model;

class cities extends Model
{
    /**
     * @var city[]
     */
    public $city;
    protected $_name = [
        'city' => 'City',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = [];
            if (null !== $this->city && \is_array($this->city)) {
                $n = 0;
                foreach ($this->city as $item) {
                    $res['City'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            if (!empty($map['City'])) {
                $model->city = [];
                $n           = 0;
                foreach ($map['City'] as $item) {
                    $model->city[$n++] = null !== $item ? city::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
