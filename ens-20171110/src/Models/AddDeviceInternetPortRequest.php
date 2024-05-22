<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AddDeviceInternetPortRequest extends Model
{
    /**
     * @description The Internet service provider (ISP). If you leave this parameter empty, the system automatically allows a random ISP. Valid values:
     *
     *   telecom: China Telecom
     *   cmcc: China Mobile
     *   unicom: China Unicom
     *   cbn: China Broadcasting Network (CBN)
     *
     * @example telecom
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The ID of the instance. You can specify the ID of the server or container.
     *
     * This parameter is required.
     * @example i-5saiou41t6ude2ia56ri902ke
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The internal IP address of the instance.
     *
     * This parameter is required.
     * @example 10.0.0.50
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description The internal port number. Specify this parameter in the following format: first port/last port. Separate multiple port number groups with commas (,). Example: 1026/2001,2005/2005. This parameter is required if you set NatType to DNAT. If you set NatType to SNAT, the value of this parameter is invalid.
     *
     * @example 12022/12022
     *
     * @var string
     */
    public $internalPort;

    /**
     * @description The type of the NAT gateway. The value of this parameter is of the enumerated data type. Valid values:
     *
     *   SNAT
     *   DNAT
     *
     * This parameter is required.
     * @example DNAT
     *
     * @var string
     */
    public $natType;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * This parameter is required.
     * @example cn-wuxi-5
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ISP'          => 'ISP',
        'instanceId'   => 'InstanceId',
        'internalIp'   => 'InternalIp',
        'internalPort' => 'InternalPort',
        'natType'      => 'NatType',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDeviceInternetPortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
