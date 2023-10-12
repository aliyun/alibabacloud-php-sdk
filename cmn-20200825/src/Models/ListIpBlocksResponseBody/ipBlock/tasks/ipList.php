<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock\tasks;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @example device_xxx
     *
     * @var string
     */
    public $devId;

    /**
     * @example TEST
     *
     * @var string
     */
    public $devName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example DOMAIN
     *
     * @var string
     */
    public $origin;

    /**
     * @example FAIL/OK
     *
     * @var string
     */
    public $ping;
    protected $_name = [
        'devId'   => 'DevId',
        'devName' => 'DevName',
        'ip'      => 'Ip',
        'origin'  => 'Origin',
        'ping'    => 'Ping',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devId) {
            $res['DevId'] = $this->devId;
        }
        if (null !== $this->devName) {
            $res['DevName'] = $this->devName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevId'])) {
            $model->devId = $map['DevId'];
        }
        if (isset($map['DevName'])) {
            $model->devName = $map['DevName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }

        return $model;
    }
}
