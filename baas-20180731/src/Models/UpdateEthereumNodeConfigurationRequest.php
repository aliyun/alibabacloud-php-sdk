<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateEthereumNodeConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodePub;

    /**
     * @var int
     */
    public $p2pPort;

    /**
     * @var int
     */
    public $raftPort;

    /**
     * @var int
     */
    public $rpcPort;

    /**
     * @var int
     */
    public $TMPort;

    /**
     * @var string
     */
    public $TMPub;

    /**
     * @var int
     */
    public $WSPort;
    protected $_name = [
        'IP'       => 'IP',
        'nodeId'   => 'NodeId',
        'nodePub'  => 'NodePub',
        'p2pPort'  => 'P2pPort',
        'raftPort' => 'RaftPort',
        'rpcPort'  => 'RpcPort',
        'TMPort'   => 'TMPort',
        'TMPub'    => 'TMPub',
        'WSPort'   => 'WSPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodePub) {
            $res['NodePub'] = $this->nodePub;
        }
        if (null !== $this->p2pPort) {
            $res['P2pPort'] = $this->p2pPort;
        }
        if (null !== $this->raftPort) {
            $res['RaftPort'] = $this->raftPort;
        }
        if (null !== $this->rpcPort) {
            $res['RpcPort'] = $this->rpcPort;
        }
        if (null !== $this->TMPort) {
            $res['TMPort'] = $this->TMPort;
        }
        if (null !== $this->TMPub) {
            $res['TMPub'] = $this->TMPub;
        }
        if (null !== $this->WSPort) {
            $res['WSPort'] = $this->WSPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEthereumNodeConfigurationRequest
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
        if (isset($map['NodePub'])) {
            $model->nodePub = $map['NodePub'];
        }
        if (isset($map['P2pPort'])) {
            $model->p2pPort = $map['P2pPort'];
        }
        if (isset($map['RaftPort'])) {
            $model->raftPort = $map['RaftPort'];
        }
        if (isset($map['RpcPort'])) {
            $model->rpcPort = $map['RpcPort'];
        }
        if (isset($map['TMPort'])) {
            $model->TMPort = $map['TMPort'];
        }
        if (isset($map['TMPub'])) {
            $model->TMPub = $map['TMPub'];
        }
        if (isset($map['WSPort'])) {
            $model->WSPort = $map['WSPort'];
        }

        return $model;
    }
}
