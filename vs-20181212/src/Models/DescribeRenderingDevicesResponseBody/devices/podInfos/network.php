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
    public $externalIsp;

    /**
     * @var string
     */
    public $externalPorts;

    /**
     * @var string
     */
    public $outgoingIp;

    /**
     * @var string
     */
    public $outgoingIsp;
    protected $_name = [
        'containerPorts' => 'ContainerPorts',
        'externalIp'     => 'ExternalIp',
        'externalIsp'    => 'ExternalIsp',
        'externalPorts'  => 'ExternalPorts',
        'outgoingIp'     => 'OutgoingIp',
        'outgoingIsp'    => 'OutgoingIsp',
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
        if (null !== $this->externalIsp) {
            $res['ExternalIsp'] = $this->externalIsp;
        }
        if (null !== $this->externalPorts) {
            $res['ExternalPorts'] = $this->externalPorts;
        }
        if (null !== $this->outgoingIp) {
            $res['OutgoingIp'] = $this->outgoingIp;
        }
        if (null !== $this->outgoingIsp) {
            $res['OutgoingIsp'] = $this->outgoingIsp;
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
        if (isset($map['ExternalIsp'])) {
            $model->externalIsp = $map['ExternalIsp'];
        }
        if (isset($map['ExternalPorts'])) {
            $model->externalPorts = $map['ExternalPorts'];
        }
        if (isset($map['OutgoingIp'])) {
            $model->outgoingIp = $map['OutgoingIp'];
        }
        if (isset($map['OutgoingIsp'])) {
            $model->outgoingIsp = $map['OutgoingIsp'];
        }

        return $model;
    }
}
