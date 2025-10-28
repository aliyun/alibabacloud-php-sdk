<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services;

use AlibabaCloud\Dara\Model;

class servicePorts extends Model
{
    /**
     * @var int
     */
    public $nodePort;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $targetPort;
    protected $_name = [
        'nodePort' => 'NodePort',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
