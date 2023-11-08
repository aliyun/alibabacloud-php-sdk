<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailResponseBody\details;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The name of a port.
     *
     * @example http-0
     *
     * @var string
     */
    public $name;

    /**
     * @description The node port.
     *
     * @example 12345
     *
     * @var int
     */
    public $nodePort;

    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol of the port.
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The container port.
     *
     * @example 8080
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'name'       => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
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
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
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
