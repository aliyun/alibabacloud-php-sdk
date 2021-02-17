<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance\instanceNodeList;

use AlibabaCloud\Tea\Model;

class instanceNodes extends Model
{
    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'nodeIp'            => 'NodeIp',
        'dedicatedHostName' => 'DedicatedHostName',
        'insName'           => 'InsName',
        'nodeType'          => 'NodeType',
        'zoneId'            => 'ZoneId',
        'role'              => 'Role',
        'port'              => 'Port',
        'nodeId'            => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
