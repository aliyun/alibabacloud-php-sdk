<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class StopVisualServiceRequest extends Model
{
    /**
     * @description A public IP address of login nodes in the cluster.
     *
     * @example 100.168.**.**
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The fixed port. Set the value to 12016.
     *
     * @example 12016
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'cidrIp'    => 'CidrIp',
        'clusterId' => 'ClusterId',
        'port'      => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopVisualServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
