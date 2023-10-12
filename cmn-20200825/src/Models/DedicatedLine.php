<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DedicatedLine extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $devicePort;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $lineGateway;

    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $lineIp;

    /**
     * @var string
     */
    public $lineRole;
    protected $_name = [
        'bandwidth'   => 'Bandwidth',
        'deviceId'    => 'DeviceId',
        'devicePort'  => 'DevicePort',
        'isp'         => 'Isp',
        'lineGateway' => 'LineGateway',
        'lineId'      => 'LineId',
        'lineIp'      => 'LineIp',
        'lineRole'    => 'LineRole',
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
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->devicePort) {
            $res['DevicePort'] = $this->devicePort;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->lineGateway) {
            $res['LineGateway'] = $this->lineGateway;
        }
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->lineIp) {
            $res['LineIp'] = $this->lineIp;
        }
        if (null !== $this->lineRole) {
            $res['LineRole'] = $this->lineRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DevicePort'])) {
            $model->devicePort = $map['DevicePort'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['LineGateway'])) {
            $model->lineGateway = $map['LineGateway'];
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['LineIp'])) {
            $model->lineIp = $map['LineIp'];
        }
        if (isset($map['LineRole'])) {
            $model->lineRole = $map['LineRole'];
        }

        return $model;
    }
}
