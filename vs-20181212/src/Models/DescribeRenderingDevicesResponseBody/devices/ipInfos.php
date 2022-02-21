<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponseBody\devices;

use AlibabaCloud\Tea\Model;

class ipInfos extends Model
{
    /**
     * @var string
     */
    public $externalIp;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $ISP;

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
    public $ipProtocol;

    /**
     * @var string
     */
    public $natType;
    protected $_name = [
        'externalIp'   => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'ISP'          => 'ISP',
        'internalIp'   => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol'   => 'IpProtocol',
        'natType'      => 'NatType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }

        return $model;
    }
}
