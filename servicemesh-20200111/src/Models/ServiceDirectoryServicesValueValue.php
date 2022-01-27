<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class ServiceDirectoryServicesValueValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $targetPort;

    /**
     * @var int
     */
    public $nodePort;
    protected $_name = [
        'name'       => 'Name',
        'protocol'   => 'Protocol',
        'port'       => 'Port',
        'targetPort' => 'TargetPort',
        'nodePort'   => 'NodePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->nodePort) {
            $res['NodePort'] = $this->nodePort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceDirectoryServicesValueValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['NodePort'])) {
            $model->nodePort = $map['NodePort'];
        }

        return $model;
    }
}
