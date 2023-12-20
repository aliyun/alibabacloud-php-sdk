<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody\data\deviceInfoList\gbDeviceInfo;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody\data\deviceInfoList\rtmpDeviceInfo;
use AlibabaCloud\Tea\Model;

class deviceInfoList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $deviceType;

    /**
     * @var gbDeviceInfo
     */
    public $gbDeviceInfo;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var rtmpDeviceInfo
     */
    public $rtmpDeviceInfo;
    protected $_name = [
        'description'    => 'Description',
        'deviceType'     => 'DeviceType',
        'gbDeviceInfo'   => 'GbDeviceInfo',
        'iotId'          => 'IotId',
        'rtmpDeviceInfo' => 'RtmpDeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->gbDeviceInfo) {
            $res['GbDeviceInfo'] = null !== $this->gbDeviceInfo ? $this->gbDeviceInfo->toMap() : null;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->rtmpDeviceInfo) {
            $res['RtmpDeviceInfo'] = null !== $this->rtmpDeviceInfo ? $this->rtmpDeviceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['GbDeviceInfo'])) {
            $model->gbDeviceInfo = gbDeviceInfo::fromMap($map['GbDeviceInfo']);
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['RtmpDeviceInfo'])) {
            $model->rtmpDeviceInfo = rtmpDeviceInfo::fromMap($map['RtmpDeviceInfo']);
        }

        return $model;
    }
}
