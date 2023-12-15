<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetNodeListResponseBody\result;

use AlibabaCloud\Tea\Model;

class chainNodeInfoList extends Model
{
    /**
     * @var string
     */
    public $diskTotal;

    /**
     * @var string
     */
    public $diskUse;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodePort;

    /**
     * @var string
     */
    public $nodeSource;

    /**
     * @var string
     */
    public $nodeState;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $publicKey;
    protected $_name = [
        'diskTotal'  => 'DiskTotal',
        'diskUse'    => 'DiskUse',
        'nodeId'     => 'NodeId',
        'nodeIp'     => 'NodeIp',
        'nodeName'   => 'NodeName',
        'nodePort'   => 'NodePort',
        'nodeSource' => 'NodeSource',
        'nodeState'  => 'NodeState',
        'nodeType'   => 'NodeType',
        'publicKey'  => 'PublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskTotal) {
            $res['DiskTotal'] = $this->diskTotal;
        }
        if (null !== $this->diskUse) {
            $res['DiskUse'] = $this->diskUse;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodePort) {
            $res['NodePort'] = $this->nodePort;
        }
        if (null !== $this->nodeSource) {
            $res['NodeSource'] = $this->nodeSource;
        }
        if (null !== $this->nodeState) {
            $res['NodeState'] = $this->nodeState;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainNodeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskTotal'])) {
            $model->diskTotal = $map['DiskTotal'];
        }
        if (isset($map['DiskUse'])) {
            $model->diskUse = $map['DiskUse'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodePort'])) {
            $model->nodePort = $map['NodePort'];
        }
        if (isset($map['NodeSource'])) {
            $model->nodeSource = $map['NodeSource'];
        }
        if (isset($map['NodeState'])) {
            $model->nodeState = $map['NodeState'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        return $model;
    }
}
