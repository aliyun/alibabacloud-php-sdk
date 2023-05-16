<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody\bandwidthQuota\bandwidthInfo;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody\bandwidthQuota\instanceInfo;
use AlibabaCloud\Tea\Model;

class bandwidthQuota extends Model
{
    /**
     * @var bandwidthInfo
     */
    public $bandwidthInfo;

    /**
     * @var string
     */
    public $date;

    /**
     * @var instanceInfo[]
     */
    public $instanceInfo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bandwidthInfo' => 'BandwidthInfo',
        'date'          => 'Date',
        'instanceInfo'  => 'InstanceInfo',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthInfo) {
            $res['BandwidthInfo'] = null !== $this->bandwidthInfo ? $this->bandwidthInfo->toMap() : null;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = [];
            if (null !== $this->instanceInfo && \is_array($this->instanceInfo)) {
                $n = 0;
                foreach ($this->instanceInfo as $item) {
                    $res['InstanceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthInfo'])) {
            $model->bandwidthInfo = bandwidthInfo::fromMap($map['BandwidthInfo']);
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['InstanceInfo'])) {
            if (!empty($map['InstanceInfo'])) {
                $model->instanceInfo = [];
                $n                   = 0;
                foreach ($map['InstanceInfo'] as $item) {
                    $model->instanceInfo[$n++] = null !== $item ? instanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
