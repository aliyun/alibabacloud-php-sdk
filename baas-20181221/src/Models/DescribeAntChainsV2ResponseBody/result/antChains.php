<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsV2ResponseBody\result;

use AlibabaCloud\Tea\Model;

class antChains extends Model
{
    /**
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $antChainName;

    /**
     * @example Contract
     *
     * @var string
     */
    public $chainType;

    /**
     * @example classic
     *
     * @var string
     */
    public $cipherSuit;

    /**
     * @example 1609221924000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1672329600000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example ALIYUN202012291405173265824745109
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAdmin;

    /**
     * @example ChainApplied
     *
     * @var string
     */
    public $memberStatus;

    /**
     * @example fdmt
     *
     * @var string
     */
    public $merkleTreeSuit;

    /**
     * @example true
     *
     * @var bool
     */
    public $monitorStatus;

    /**
     * @example Running
     *
     * @var string
     */
    public $network;

    /**
     * @example 4
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Basic
     *
     * @var string
     */
    public $resourceSize;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $restStatus;

    /**
     * @example rsa
     *
     * @var string
     */
    public $tlsAlgo;

    /**
     * @example 2.19.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'antChainId'     => 'AntChainId',
        'antChainName'   => 'AntChainName',
        'chainType'      => 'ChainType',
        'cipherSuit'     => 'CipherSuit',
        'createTime'     => 'CreateTime',
        'expireTime'     => 'ExpireTime',
        'instanceId'     => 'InstanceId',
        'isAdmin'        => 'IsAdmin',
        'memberStatus'   => 'MemberStatus',
        'merkleTreeSuit' => 'MerkleTreeSuit',
        'monitorStatus'  => 'MonitorStatus',
        'network'        => 'Network',
        'nodeNum'        => 'NodeNum',
        'regionId'       => 'RegionId',
        'resourceSize'   => 'ResourceSize',
        'restStatus'     => 'RestStatus',
        'tlsAlgo'        => 'TlsAlgo',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->antChainName) {
            $res['AntChainName'] = $this->antChainName;
        }
        if (null !== $this->chainType) {
            $res['ChainType'] = $this->chainType;
        }
        if (null !== $this->cipherSuit) {
            $res['CipherSuit'] = $this->cipherSuit;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }
        if (null !== $this->memberStatus) {
            $res['MemberStatus'] = $this->memberStatus;
        }
        if (null !== $this->merkleTreeSuit) {
            $res['MerkleTreeSuit'] = $this->merkleTreeSuit;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceSize) {
            $res['ResourceSize'] = $this->resourceSize;
        }
        if (null !== $this->restStatus) {
            $res['RestStatus'] = $this->restStatus;
        }
        if (null !== $this->tlsAlgo) {
            $res['TlsAlgo'] = $this->tlsAlgo;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return antChains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['AntChainName'])) {
            $model->antChainName = $map['AntChainName'];
        }
        if (isset($map['ChainType'])) {
            $model->chainType = $map['ChainType'];
        }
        if (isset($map['CipherSuit'])) {
            $model->cipherSuit = $map['CipherSuit'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }
        if (isset($map['MemberStatus'])) {
            $model->memberStatus = $map['MemberStatus'];
        }
        if (isset($map['MerkleTreeSuit'])) {
            $model->merkleTreeSuit = $map['MerkleTreeSuit'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceSize'])) {
            $model->resourceSize = $map['ResourceSize'];
        }
        if (isset($map['RestStatus'])) {
            $model->restStatus = $map['RestStatus'];
        }
        if (isset($map['TlsAlgo'])) {
            $model->tlsAlgo = $map['TlsAlgo'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
