<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewResponseBody\result;

use AlibabaCloud\Tea\Model;

class antChains extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $antChainName;

    /**
     * @var string
     */
    public $chainType;

    /**
     * @var string
     */
    public $cipherSuit;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $memberStatus;

    /**
     * @var string
     */
    public $merkleTreeSuit;

    /**
     * @var bool
     */
    public $monitorStatus;

    /**
     * @var string
     */
    public $network;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceSize;

    /**
     * @var string
     */
    public $restStatus;

    /**
     * @var string
     */
    public $tlsAlgo;

    /**
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
