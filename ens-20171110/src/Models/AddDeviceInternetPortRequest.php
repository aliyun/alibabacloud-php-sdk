<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AddDeviceInternetPortRequest extends Model
{
    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internalIp;

    /**
     * @var string
     */
    public $internalPort;

    /**
     * @var string
     */
    public $natType;

    /**
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
