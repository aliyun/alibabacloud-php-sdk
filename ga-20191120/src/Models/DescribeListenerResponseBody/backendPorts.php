<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody;

use AlibabaCloud\Tea\Model;

class backendPorts extends Model
{
    /**
     * @description The first port in the range of ports that are used by the backend server to receive requests.
     *
     * This parameter is returned only if an HTTPS listener is configured and the listener port is the same as the service port of the backend server.
     * @example 80
     *
     * @var string
     */
    public $fromPort;

    /**
     * @description The last port in the range of ports that are used by the backend server to receive requests.
     *
     * @example 80
     *
     * @var string
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
