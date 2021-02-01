<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\CreateDeviceResponseBody;

use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateDeviceResponseBody\data\subDeviceSipInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sipIp;

    /**
     * @var string
     */
    public $sipReaml;

    /**
     * @var string
     */
    public $sipDeviceGbId;

    /**
     * @var string
     */
    public $sipPassword;

    /**
     * @var string
     */
    public $sipPort;

    /**
     * @var string
     */
    public $sipGbId;

    /**
     * @var subDeviceSipInfo[]
     */
    public $subDeviceSipInfo;

    /**
     * @var string
     */
    public $deviceCode;
    protected $_name = [
        'sipIp'            => 'SipIp',
        'sipReaml'         => 'SipReaml',
        'sipDeviceGbId'    => 'SipDeviceGbId',
        'sipPassword'      => 'SipPassword',
        'sipPort'          => 'SipPort',
        'sipGbId'          => 'SipGbId',
        'subDeviceSipInfo' => 'SubDeviceSipInfo',
        'deviceCode'       => 'DeviceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sipIp) {
            $res['SipIp'] = $this->sipIp;
        }
        if (null !== $this->sipReaml) {
            $res['SipReaml'] = $this->sipReaml;
        }
        if (null !== $this->sipDeviceGbId) {
            $res['SipDeviceGbId'] = $this->sipDeviceGbId;
        }
        if (null !== $this->sipPassword) {
            $res['SipPassword'] = $this->sipPassword;
        }
        if (null !== $this->sipPort) {
            $res['SipPort'] = $this->sipPort;
        }
        if (null !== $this->sipGbId) {
            $res['SipGbId'] = $this->sipGbId;
        }
        if (null !== $this->subDeviceSipInfo) {
            $res['SubDeviceSipInfo'] = [];
            if (null !== $this->subDeviceSipInfo && \is_array($this->subDeviceSipInfo)) {
                $n = 0;
                foreach ($this->subDeviceSipInfo as $item) {
                    $res['SubDeviceSipInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SipIp'])) {
            $model->sipIp = $map['SipIp'];
        }
        if (isset($map['SipReaml'])) {
            $model->sipReaml = $map['SipReaml'];
        }
        if (isset($map['SipDeviceGbId'])) {
            $model->sipDeviceGbId = $map['SipDeviceGbId'];
        }
        if (isset($map['SipPassword'])) {
            $model->sipPassword = $map['SipPassword'];
        }
        if (isset($map['SipPort'])) {
            $model->sipPort = $map['SipPort'];
        }
        if (isset($map['SipGbId'])) {
            $model->sipGbId = $map['SipGbId'];
        }
        if (isset($map['SubDeviceSipInfo'])) {
            if (!empty($map['SubDeviceSipInfo'])) {
                $model->subDeviceSipInfo = [];
                $n                       = 0;
                foreach ($map['SubDeviceSipInfo'] as $item) {
                    $model->subDeviceSipInfo[$n++] = null !== $item ? subDeviceSipInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }

        return $model;
    }
}
