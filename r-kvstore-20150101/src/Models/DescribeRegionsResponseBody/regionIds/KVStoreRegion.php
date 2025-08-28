<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion\zoneIdList;

class KVStoreRegion extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var zoneIdList
     */
    public $zoneIdList;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'localName' => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
        'zoneIdList' => 'ZoneIdList',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (null !== $this->zoneIdList) {
            $this->zoneIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->zoneIdList) {
            $res['ZoneIdList'] = null !== $this->zoneIdList ? $this->zoneIdList->toArray($noStream) : $this->zoneIdList;
        }

        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ZoneIdList'])) {
            $model->zoneIdList = zoneIdList::fromMap($map['ZoneIdList']);
        }

        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
