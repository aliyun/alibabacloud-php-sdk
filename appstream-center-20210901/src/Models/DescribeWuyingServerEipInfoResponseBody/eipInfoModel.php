<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoResponseBody;

use AlibabaCloud\Dara\Model;

class eipInfoModel extends Model
{
    /**
     * @var string
     */
    public $eipId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $serverPortRange;
    protected $_name = [
        'eipId' => 'EipId',
        'ipAddress' => 'IpAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'serverPortRange' => 'ServerPortRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->serverPortRange) {
            $res['ServerPortRange'] = $this->serverPortRange;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['ServerPortRange'])) {
            $model->serverPortRange = $map['ServerPortRange'];
        }

        return $model;
    }
}
