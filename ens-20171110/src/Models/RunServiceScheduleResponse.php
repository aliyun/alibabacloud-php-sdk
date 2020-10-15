<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse\commandResults;
use AlibabaCloud\Tea\Model;

class RunServiceScheduleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestRepeated;

    /**
     * @var bool
     */
    public $tcpPorts;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instancePort;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var int
     */
    public $index;

    /**
     * @var commandResults
     */
    public $commandResults;
    protected $_name = [
        'requestId'       => 'RequestId',
        'requestRepeated' => 'RequestRepeated',
        'tcpPorts'        => 'TcpPorts',
        'instanceId'      => 'InstanceId',
        'instancePort'    => 'InstancePort',
        'instanceIp'      => 'InstanceIp',
        'index'           => 'Index',
        'commandResults'  => 'CommandResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('requestRepeated', $this->requestRepeated, true);
        Model::validateRequired('tcpPorts', $this->tcpPorts, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instancePort', $this->instancePort, true);
        Model::validateRequired('instanceIp', $this->instanceIp, true);
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('commandResults', $this->commandResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestRepeated) {
            $res['RequestRepeated'] = $this->requestRepeated;
        }
        if (null !== $this->tcpPorts) {
            $res['TcpPorts'] = $this->tcpPorts;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instancePort) {
            $res['InstancePort'] = $this->instancePort;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->commandResults) {
            $res['CommandResults'] = null !== $this->commandResults ? $this->commandResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunServiceScheduleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestRepeated'])) {
            $model->requestRepeated = $map['RequestRepeated'];
        }
        if (isset($map['TcpPorts'])) {
            $model->tcpPorts = $map['TcpPorts'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstancePort'])) {
            $model->instancePort = $map['InstancePort'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CommandResults'])) {
            $model->commandResults = commandResults::fromMap($map['CommandResults']);
        }

        return $model;
    }
}
