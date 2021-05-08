<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regionIds extends Model
{
    /**
     * @var string[]
     */
    public $regionIds;
    protected $_name = [
        'regionIds' => 'RegionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }

        return $model;
    }
}
