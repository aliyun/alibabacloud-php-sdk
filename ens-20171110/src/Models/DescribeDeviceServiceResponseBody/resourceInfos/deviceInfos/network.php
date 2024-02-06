<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The port of the container.
     *
     * @example 10000-10010
     *
     * @var string
     */
    public $containerPorts;

    /**
     * @description The public IP address.
     *
     * @example 39.105.62.120
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description The port range.
     *
     * @example 80-8080
     *
     * @var string
     */
    public $hostPorts;

    /**
     * @description The protocol of the gateway. The value is of the enumeration type. Valid values:
     *
     *   TCP
     *   UDP
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'containerPorts' => 'ContainerPorts',
        'externalIp'     => 'ExternalIp',
        'hostPorts'      => 'HostPorts',
        'protocol'       => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return network
     */
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
