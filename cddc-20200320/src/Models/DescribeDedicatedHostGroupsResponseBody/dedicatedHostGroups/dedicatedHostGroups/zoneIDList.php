<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->zoneIDList)) {
            Model::validateArray($this->zoneIDList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zoneIDList) {
            if (\is_array($this->zoneIDList)) {
                $res['ZoneIDList'] = [];
                $n1 = 0;
                foreach ($this->zoneIDList as $item1) {
                    $res['ZoneIDList'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneIDList'])) {
            if (!empty($map['ZoneIDList'])) {
                $model->zoneIDList = [];
                $n1 = 0;
                foreach ($map['ZoneIDList'] as $item1) {
                    $model->zoneIDList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
