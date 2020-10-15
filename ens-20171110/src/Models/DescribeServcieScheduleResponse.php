<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse\podAbstractInfo;
use AlibabaCloud\Tea\Model;

class DescribeServcieScheduleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var int
     */
    public $instancePort;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $tcpPorts;

    /**
     * @var bool
     */
    public $requestRepeated;

    /**
     * @var podAbstractInfo
     */
    public $podAbstractInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instanceId'      => 'InstanceId',
        'instanceIp'      => 'InstanceIp',
        'instancePort'    => 'InstancePort',
        'index'           => 'Index',
        'tcpPorts'        => 'TcpPorts',
        'requestRepeated' => 'RequestRepeated',
        'podAbstractInfo' => 'PodAbstractInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceIp', $this->instanceIp, true);
        Model::validateRequired('instancePort', $this->instancePort, true);
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('tcpPorts', $this->tcpPorts, true);
        Model::validateRequired('requestRepeated', $this->requestRepeated, true);
        Model::validateRequired('podAbstractInfo', $this->podAbstractInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->tcpPorts) {
            $res['TcpPorts'] = $this->tcpPorts;
        }
        if (null !== $this->requestRepeated) {
            $res['RequestRepeated'] = $this->requestRepeated;
        }
        if (null !== $this->podAbstractInfo) {
            $res['PodAbstractInfo'] = null !== $this->podAbstractInfo ? $this->podAbstractInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServcieScheduleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['TcpPorts'])) {
            $model->tcpPorts = $map['TcpPorts'];
        }
        if (isset($map['RequestRepeated'])) {
            $model->requestRepeated = $map['RequestRepeated'];
        }
        if (isset($map['PodAbstractInfo'])) {
            $model->podAbstractInfo = podAbstractInfo::fromMap($map['PodAbstractInfo']);
        }

        return $model;
    }
}
