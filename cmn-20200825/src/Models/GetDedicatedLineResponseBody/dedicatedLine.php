<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetDedicatedLineResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedLine extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 111.111.xxx.xxx
     *
     * @var string
     */
    public $dedicatedLineGateway;

    /**
     * @example space_isp-6dk5xpoyoopr6obf
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example 111.111.xxx.xxx
     *
     * @var string
     */
    public $dedicatedLineIp;

    /**
     * @example 主
     *
     * @var string
     */
    public $dedicatedLineRole;

    /**
     * @var string
     */
    public $description;

    /**
     * @example device-evve560juend5owh
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example HZYT_USG6620_A
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example GigabitEthernet1/0/0
     *
     * @var string
     */
    public $devicePort;

    /**
     * @example 电信
     *
     * @var string
     */
    public $isp;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'dedicatedLineGateway' => 'DedicatedLineGateway',
        'dedicatedLineId'      => 'DedicatedLineId',
        'dedicatedLineIp'      => 'DedicatedLineIp',
        'dedicatedLineRole'    => 'DedicatedLineRole',
        'description'          => 'Description',
        'deviceId'             => 'DeviceId',
        'deviceName'           => 'DeviceName',
        'devicePort'           => 'DevicePort',
        'isp'                  => 'Isp',
        'physicalSpaceId'      => 'PhysicalSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->dedicatedLineGateway) {
            $res['DedicatedLineGateway'] = $this->dedicatedLineGateway;
        }
        if (null !== $this->dedicatedLineId) {
            $res['DedicatedLineId'] = $this->dedicatedLineId;
        }
        if (null !== $this->dedicatedLineIp) {
            $res['DedicatedLineIp'] = $this->dedicatedLineIp;
        }
        if (null !== $this->dedicatedLineRole) {
            $res['DedicatedLineRole'] = $this->dedicatedLineRole;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->devicePort) {
            $res['DevicePort'] = $this->devicePort;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['DedicatedLineGateway'])) {
            $model->dedicatedLineGateway = $map['DedicatedLineGateway'];
        }
        if (isset($map['DedicatedLineId'])) {
            $model->dedicatedLineId = $map['DedicatedLineId'];
        }
        if (isset($map['DedicatedLineIp'])) {
            $model->dedicatedLineIp = $map['DedicatedLineIp'];
        }
        if (isset($map['DedicatedLineRole'])) {
            $model->dedicatedLineRole = $map['DedicatedLineRole'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DevicePort'])) {
            $model->devicePort = $map['DevicePort'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }

        return $model;
    }
}
