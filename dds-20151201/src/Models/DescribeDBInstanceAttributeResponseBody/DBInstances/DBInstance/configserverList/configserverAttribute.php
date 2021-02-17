<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList;

use AlibabaCloud\Tea\Model;

class configserverAttribute extends Model
{
    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $connectString;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $nodeDescription;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $nodeStorage;
    protected $_name = [
        'maxIOPS'         => 'MaxIOPS',
        'connectString'   => 'ConnectString',
        'nodeClass'       => 'NodeClass',
        'maxConnections'  => 'MaxConnections',
        'port'            => 'Port',
        'nodeDescription' => 'NodeDescription',
        'nodeId'          => 'NodeId',
        'nodeStorage'     => 'NodeStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configserverAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
        }

        return $model;
    }
}
