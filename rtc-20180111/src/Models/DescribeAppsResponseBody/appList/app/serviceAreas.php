<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app;

use AlibabaCloud\Tea\Model;

class serviceAreas extends Model
{
    /**
     * @var string[]
     */
    public $serviceArea;
    protected $_name = [
        'serviceArea' => 'ServiceArea',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceAreas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceArea'])) {
            if (!empty($map['ServiceArea'])) {
                $model->serviceArea = $map['ServiceArea'];
            }
        }

        return $model;
    }
}
