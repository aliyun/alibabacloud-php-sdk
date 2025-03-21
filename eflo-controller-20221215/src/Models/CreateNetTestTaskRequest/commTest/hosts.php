<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\commTest;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description IP address.
     *
     * @example 169.253.253.15
     *
     * @var string
     */
    public $IP;

    /**
     * @description Node ID.
     *
     * @example e01-tw-bqisacl3z6l
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Resource ID
     *
     * @example i111670831721110797708
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Service name.
     *
     * @example VBw
     *
     * @var string
     */
    public $serverName;
    protected $_name = [
        'IP' => 'IP',
        'nodeId' => 'NodeId',
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
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
