<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups;

use AlibabaCloud\Tea\Model;

class zoneIDList extends Model
{
    /**
     * @var string[]
     */
    public $zoneIDList;
    protected $_name = [
        'zoneIDList' => 'ZoneIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneIDList) {
            $res['ZoneIDList'] = $this->zoneIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneIDList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneIDList'])) {
            if (!empty($map['ZoneIDList'])) {
                $model->zoneIDList = $map['ZoneIDList'];
            }
        }

        return $model;
    }
}
