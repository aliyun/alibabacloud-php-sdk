<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceRequest extends Model
{
    /**
     * @description The name of the security rule set corresponding to the control mode.
     *
     * @example 172.17.XXX.XXX
     *
     * @var string
     */
    public $host;

    /**
     * @description The name of the database link for the database instance.
     *
     * @example 5432
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to obtain the tenant ID.
     *
     * @example test
     *
     * @var string
     */
    public $sid;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the database instance belongs.
     *
     * @example 2***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
        'sid'  => 'Sid',
        'tid'  => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
