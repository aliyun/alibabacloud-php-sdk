<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos;

use AlibabaCloud\Dara\Model;

class network extends Model
{
    /**
     * @var string
     */
    public $containerPorts;

    /**
     * @var string
     */
    public $externalIp;

    /**
     * @var string
     */
    public $hostPorts;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'containerPorts' => 'ContainerPorts',
        'externalIp' => 'ExternalIp',
        'hostPorts' => 'HostPorts',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerPorts) {
            $res['ContainerPorts'] = $this->containerPorts;
        }

        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }

        if (null !== $this->hostPorts) {
            $res['HostPorts'] = $this->hostPorts;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['ContainerPorts'])) {
            $model->containerPorts = $map['ContainerPorts'];
        }

        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }

        if (isset($map['HostPorts'])) {
            $model->hostPorts = $map['HostPorts'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
