<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionDo extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $onsRegionId;

    /**
     * @description The ID of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;
    protected $_name = [
        'onsRegionId' => 'OnsRegionId',
        'regionName'  => 'RegionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onsRegionId) {
            $res['OnsRegionId'] = $this->onsRegionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnsRegionId'])) {
            $model->onsRegionId = $map['OnsRegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
