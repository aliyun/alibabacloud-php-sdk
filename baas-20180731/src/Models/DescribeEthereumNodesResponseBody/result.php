<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consensus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ethereumId;

    /**
     * @var string
     */
    public $ethereumName;

    /**
     * @var bool
     */
    public $external;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $networkId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rpcPort;

    /**
     * @var string
     */
    public $state;

    /**
     * @var bool
     */
    public $validator;

    /**
     * @var string
     */
    public $wsPort;
    protected $_name = [
        'consensus'    => 'Consensus',
        'createTime'   => 'CreateTime',
        'creator'      => 'Creator',
        'description'  => 'Description',
        'ethereumId'   => 'EthereumId',
        'ethereumName' => 'EthereumName',
        'external'     => 'External',
        'id'           => 'Id',
        'networkId'    => 'NetworkId',
        'nodeName'     => 'NodeName',
        'publicIp'     => 'PublicIp',
        'regionId'     => 'RegionId',
        'rpcPort'      => 'RpcPort',
        'state'        => 'State',
        'validator'    => 'Validator',
        'wsPort'       => 'WsPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consensus) {
            $res['Consensus'] = $this->consensus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ethereumId) {
            $res['EthereumId'] = $this->ethereumId;
        }
        if (null !== $this->ethereumName) {
            $res['EthereumName'] = $this->ethereumName;
        }
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rpcPort) {
            $res['RpcPort'] = $this->rpcPort;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->validator) {
            $res['Validator'] = $this->validator;
        }
        if (null !== $this->wsPort) {
            $res['WsPort'] = $this->wsPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Consensus'])) {
            $model->consensus = $map['Consensus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EthereumId'])) {
            $model->ethereumId = $map['EthereumId'];
        }
        if (isset($map['EthereumName'])) {
            $model->ethereumName = $map['EthereumName'];
        }
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RpcPort'])) {
            $model->rpcPort = $map['RpcPort'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Validator'])) {
            $model->validator = $map['Validator'];
        }
        if (isset($map['WsPort'])) {
            $model->wsPort = $map['WsPort'];
        }

        return $model;
    }
}
