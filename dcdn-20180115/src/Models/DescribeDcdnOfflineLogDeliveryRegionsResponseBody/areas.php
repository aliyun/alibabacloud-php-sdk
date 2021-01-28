<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRegionsResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRegionsResponseBody\areas\regionInfos;
use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @var string
     */
    public $areaName;

    /**
     * @var string
     */
    public $areaId;

    /**
     * @var regionInfos[]
     */
    public $regionInfos;
    protected $_name = [
        'areaName'    => 'AreaName',
        'areaId'      => 'AreaId',
        'regionInfos' => 'RegionInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->regionInfos) {
            $res['RegionInfos'] = [];
            if (null !== $this->regionInfos && \is_array($this->regionInfos)) {
                $n = 0;
                foreach ($this->regionInfos as $item) {
                    $res['RegionInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['RegionInfos'])) {
            if (!empty($map['RegionInfos'])) {
                $model->regionInfos = [];
                $n                  = 0;
                foreach ($map['RegionInfos'] as $item) {
                    $model->regionInfos[$n++] = null !== $item ? regionInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
