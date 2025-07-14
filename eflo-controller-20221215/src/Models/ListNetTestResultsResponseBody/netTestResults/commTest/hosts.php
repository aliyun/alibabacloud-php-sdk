<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\commTest;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description The IP address of the node.
     *
     * @example 10.51.16.21
     *
     * @var string
     */
    public $IP;

    /**
     * @description The resource ID.
     *
     * @example e01-cn-wwo3eteze19
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the service.
     *
     * @example www.xinjiaoyu.com
     *
     * @var string
     */
    public $serverName;
    protected $_name = [
        'IP' => 'IP',
        'resourceId' => 'ResourceId',
        'serverName' => 'ServerName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
