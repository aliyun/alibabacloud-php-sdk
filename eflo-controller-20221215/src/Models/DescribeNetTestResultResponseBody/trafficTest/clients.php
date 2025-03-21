<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\trafficTest;

use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @description Network card bond interface
     *
     * @example bond1
     *
     * @var string
     */
    public $bond;

    /**
     * @description Node IP
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $IP;

    /**
     * @description Resource ID
     *
     * @example e01-cn-20s41p6cx01
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 服务名称。
     *
     * @example xMv
     *
     * @var string
     */
    public $serverName;
    protected $_name = [
        'bond' => 'Bond',
        'IP' => 'IP',
        'resourceId' => 'ResourceId',
        'serverName' => 'ServerName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bond) {
            $res['Bond'] = $this->bond;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bond'])) {
            $model->bond = $map['Bond'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        return $model;
    }
}
