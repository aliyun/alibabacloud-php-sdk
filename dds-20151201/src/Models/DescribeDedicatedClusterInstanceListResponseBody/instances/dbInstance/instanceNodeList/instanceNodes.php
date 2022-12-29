<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance\instanceNodeList;

use AlibabaCloud\Tea\Model;

class instanceNodes extends Model
{
    /**
     * @description The ID of the host to which the instances in a dedicated cluster belong.
     *
     * @example ch-t4n**************
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The name of the shard.
     *
     * @example xr-dhgi-mongo-21
     *
     * @var string
     */
    public $insName;

    /**
     * @description The ID of the node.
     *
     * @example 4068
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The IP address of the node.
     *
     * @example 192.168.0.2
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The type of the node.
     *
     * @example normal
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The port number corresponding to the node.
     *
     * @example 3002
     *
     * @var int
     */
    public $port;

    /**
     * @description The role of the node. Valid values:
     *
     *   **master**: a primary node.
     *   **slave**: a secondary node.
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dedicatedHostName' => 'DedicatedHostName',
        'insName'           => 'InsName',
        'nodeId'            => 'NodeId',
        'nodeIp'            => 'NodeIp',
        'nodeType'          => 'NodeType',
        'port'              => 'Port',
        'role'              => 'Role',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
