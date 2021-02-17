<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionDo extends Model
{
    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $onsRegionId;
    protected $_name = [
        'regionName'  => 'RegionName',
        'onsRegionId' => 'OnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->onsRegionId) {
            $res['OnsRegionId'] = $this->onsRegionId;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['OnsRegionId'])) {
            $model->onsRegionId = $map['OnsRegionId'];
        }

        return $model;
    }
}
