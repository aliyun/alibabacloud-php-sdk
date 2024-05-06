<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion\zoneIdList;
use AlibabaCloud\Tea\Model;

class KVStoreRegion extends Model
{
    /**
     * @description The name of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint of the region.
     *
     * @example r-kvstore.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The zone IDs.
     *
     * @var zoneIdList
     */
    public $zoneIdList;

    /**
     * @description The IDs of the zones in the region.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
        'zoneIdList'     => 'ZoneIdList',
        'zoneIds'        => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ZoneIdList'] = null !== $this->zoneIdList ? $this->zoneIdList->toMap() : null;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KVStoreRegion
     */
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
