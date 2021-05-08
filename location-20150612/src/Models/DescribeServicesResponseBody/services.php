<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\DescribeServicesResponseBody;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'services' => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = $map['Services'];
            }
        }

        return $model;
    }
}
