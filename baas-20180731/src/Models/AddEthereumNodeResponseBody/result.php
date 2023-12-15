<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\AddEthereumNodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
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
     * @var string
     */
    public $id;

    /**
     * @var string
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
     * @var int
     */
    public $rpcPort;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $wsPort;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'creator'      => 'Creator',
        'description'  => 'Description',
        'ethereumId'   => 'EthereumId',
        'ethereumName' => 'EthereumName',
        'id'           => 'Id',
        'networkId'    => 'NetworkId',
        'nodeName'     => 'NodeName',
        'publicIp'     => 'PublicIp',
        'regionId'     => 'RegionId',
        'rpcPort'      => 'RpcPort',
        'state'        => 'State',
        'wsPort'       => 'WsPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['WsPort'])) {
            $model->wsPort = $map['WsPort'];
        }

        return $model;
    }
}
