<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions\region;

use AlibabaCloud\Tea\Model;

class serviceResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $serviceResourceType;
    protected $_name = [
        'serviceResourceType' => 'ServiceResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceResourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceResourceType'])) {
            if (!empty($map['ServiceResourceType'])) {
                $model->serviceResourceType = $map['ServiceResourceType'];
            }
        }

        return $model;
    }
}
