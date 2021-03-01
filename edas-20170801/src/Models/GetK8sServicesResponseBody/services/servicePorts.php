<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class servicePorts extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var int
     */
    public $nodePort;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'protocol'   => 'Protocol',
        'targetPort' => 'TargetPort',
        'nodePort'   => 'NodePort',
        'port'       => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->nodePort) {
            $res['NodePort'] = $this->nodePort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['NodePort'])) {
            $model->nodePort = $map['NodePort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
