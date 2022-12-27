<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody\podAbstractInfo;
use AlibabaCloud\Tea\Model;

class DescribeServcieScheduleResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $index;

    /**
     * @example i-5myukg7hnpbto7m024002w8qd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 120.26.79.96
     *
     * @var string
     */
    public $instanceIp;

    /**
     * @example 3306
     *
     * @var int
     */
    public $instancePort;

    /**
     * @var podAbstractInfo
     */
    public $podAbstractInfo;

    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BA984
     *
     * @var string
     */
    public $requestId;

    /**
     * @example false
     *
     * @var bool
     */
    public $requestRepeated;

    /**
     * @example 80-88
     *
     * @var string
     */
    public $tcpPorts;
    protected $_name = [
        'index'           => 'Index',
        'instanceId'      => 'InstanceId',
        'instanceIp'      => 'InstanceIp',
        'instancePort'    => 'InstancePort',
        'podAbstractInfo' => 'PodAbstractInfo',
        'requestId'       => 'RequestId',
        'requestRepeated' => 'RequestRepeated',
        'tcpPorts'        => 'TcpPorts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instancePort) {
            $res['InstancePort'] = $this->instancePort;
        }
        if (null !== $this->podAbstractInfo) {
            $res['PodAbstractInfo'] = null !== $this->podAbstractInfo ? $this->podAbstractInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestRepeated) {
            $res['RequestRepeated'] = $this->requestRepeated;
        }
        if (null !== $this->tcpPorts) {
            $res['TcpPorts'] = $this->tcpPorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServcieScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstancePort'])) {
            $model->instancePort = $map['InstancePort'];
        }
        if (isset($map['PodAbstractInfo'])) {
            $model->podAbstractInfo = podAbstractInfo::fromMap($map['PodAbstractInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestRepeated'])) {
            $model->requestRepeated = $map['RequestRepeated'];
        }
        if (isset($map['TcpPorts'])) {
            $model->tcpPorts = $map['TcpPorts'];
        }

        return $model;
    }
}
