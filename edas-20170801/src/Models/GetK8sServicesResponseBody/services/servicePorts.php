<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class servicePorts extends Model
{
    /**
     * @description The port of the node.
     *
     * @example 0
     *
     * @var int
     */
    public $nodePort;

    /**
     * @description The frontend service port.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol of the service.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The backend container port.
     *
     * @example 8080
     *
     * @var string
     */
    public $targetPort;
    protected $_name = [
        'nodePort'   => 'NodePort',
        'port'       => 'Port',
        'protocol'   => 'Protocol',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodePort) {
            $res['NodePort'] = $this->nodePort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servicePorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodePort'])) {
            $model->nodePort = $map['NodePort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
