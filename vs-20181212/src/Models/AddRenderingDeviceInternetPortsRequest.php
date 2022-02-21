<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class AddRenderingDeviceInternetPortsRequest extends Model
{
    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $internalPort;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'ISP'          => 'ISP',
        'instanceIds'  => 'InstanceIds',
        'internalPort' => 'InternalPort',
        'ipProtocol'   => 'IpProtocol',
        'ownerId'      => 'OwnerId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRenderingDeviceInternetPortsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
