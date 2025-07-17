<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SimplyAddInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example 192.168.XXX.XXX
     *
     * @var string
     */
    public $host;

    /**
     * @example 188****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 5432
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'host' => 'Host',
        'instanceId' => 'InstanceId',
        'port' => 'Port',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
