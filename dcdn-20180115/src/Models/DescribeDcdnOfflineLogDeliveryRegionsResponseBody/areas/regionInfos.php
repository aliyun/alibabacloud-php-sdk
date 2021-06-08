<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRegionsResponseBody\areas;

use AlibabaCloud\Tea\Model;

class regionInfos extends Model
{
    /**
     * @var string
     */
    public $isOverseas;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'isOverseas'  => 'IsOverseas',
        'regionName'  => 'RegionName',
        'ossEndpoint' => 'OssEndpoint',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isOverseas) {
            $res['IsOverseas'] = $this->isOverseas;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsOverseas'])) {
            $model->isOverseas = $map['IsOverseas'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
