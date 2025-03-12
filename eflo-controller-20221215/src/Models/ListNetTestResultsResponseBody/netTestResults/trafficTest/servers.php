<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\trafficTest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description Network interface bond port
     *
     * @example bond1
     *
     * @var string
     */
    public $bond;

    /**
     * @description Node IP
     *
     * @example 10.1.168.183
     *
     * @var string
     */
    public $IP;

    /**
     * @description Resource ID.
     *
     * @example e01-cn-wwo3eteze19
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Service name.
     *
     * @example prod-gf-cn.juequling.com
     *
     * @var string
     */
    public $serverName;
    protected $_name = [
        'bond'       => 'Bond',
        'IP'         => 'IP',
        'resourceId' => 'ResourceId',
        'serverName' => 'ServerName',
    ];

    public function validate()
    {
    }

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
     * @return servers
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
