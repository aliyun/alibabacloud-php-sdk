<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponseBody\commandResults;
use AlibabaCloud\Tea\Model;

class RunServiceScheduleResponseBody extends Model
{
    /**
     * @description The execution results of the commands.
     *
     * @var commandResults
     */
    public $commandResults;

    /**
     * @description The index number of the scheduled virtual device (pod).
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The ID of the scheduled instance.
     *
     * @example i-5qvji3mom4ec013dyygmtxlkj
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the scheduled instance.
     *
     * @example 172.16.246.11
     *
     * @var string
     */
    public $instanceIp;

    /**
     * @description The start port of the scheduled instance.
     *
     * @example 1024
     *
     * @var int
     */
    public $instancePort;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is repeated. This parameter is not returned if ServcieAction is set to Console.
     *
     * @example false
     *
     * @var string
     */
    public $requestRepeated;

    /**
     * @description The TCP port range of the scheduled instance or container. The value is in the ${from}-$-{to} format. Example: 80-88.
     *
     * @example "80-88"
     *
     * @var bool
     */
    public $tcpPorts;
    protected $_name = [
        'commandResults' => 'CommandResults',
        'index' => 'Index',
        'instanceId' => 'InstanceId',
        'instanceIp' => 'InstanceIp',
        'instancePort' => 'InstancePort',
        'requestId' => 'RequestId',
        'requestRepeated' => 'RequestRepeated',
        'tcpPorts' => 'TcpPorts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandResults) {
            $res['CommandResults'] = null !== $this->commandResults ? $this->commandResults->toMap() : null;
        }
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
     * @return RunServiceScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandResults'])) {
            $model->commandResults = commandResults::fromMap($map['CommandResults']);
        }
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
