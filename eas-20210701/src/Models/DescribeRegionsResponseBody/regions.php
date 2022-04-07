<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description 地域Id
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
