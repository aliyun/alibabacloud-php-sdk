<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\trafficTest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The bonding of network interface card.
     *
     * @example bond1
     *
     * @var string
     */
    public $bond;

    /**
     * @description The IP address of the node.
     *
     * @example 47.121.110.190
     *
     * @var string
     */
    public $IP;

    /**
     * @description The node ID.
     *
     * @example e01-tw-bqisacl3z6l
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The resource ID.
     *
     * @example e01-cn-wwo3etaqu0b
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the service.
     *
     * @example xMv
     *
     * @var string
     */
    public $serverName;
    protected $_name = [
        'bond' => 'Bond',
        'IP' => 'IP',
        'nodeId' => 'NodeId',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
