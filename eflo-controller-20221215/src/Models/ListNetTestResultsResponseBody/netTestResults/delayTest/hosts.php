<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\delayTest;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description Bond interface of the network card
     *
     * @example bond1
     *
     * @var string
     */
    public $bond;

    /**
     * @description Node IP
     *
     * @example pgm-bp174z988a27wre71o.pg.rds.aliyuncs.com
     *
     * @var string
     */
    public $IP;

    /**
     * @description 资源id
     *
     * @example e01-cn-wwo3eteze19
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Service name
     *
     * @example WrF
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
     * @return hosts
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
