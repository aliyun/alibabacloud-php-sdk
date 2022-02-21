<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponseBody\devices\podInfos;

use AlibabaCloud\Tea\Model;

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
    public $externalPorts;
    protected $_name = [
        'containerPorts' => 'ContainerPorts',
        'externalIp'     => 'ExternalIp',
        'externalPorts'  => 'ExternalPorts',
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
        if (null !== $this->externalPorts) {
            $res['ExternalPorts'] = $this->externalPorts;
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
        if (isset($map['ExternalPorts'])) {
            $model->externalPorts = $map['ExternalPorts'];
        }

        return $model;
    }
}
