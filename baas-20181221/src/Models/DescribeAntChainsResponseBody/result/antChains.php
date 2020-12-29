<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponseBody\result;

use AlibabaCloud\Tea\Model;

class antChains extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $chainType;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $merkleTreeSuit;

    /**
     * @var string
     */
    public $memberStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $antChainName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $tlsAlgo;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $cipherSuit;

    /**
     * @var string
     */
    public $resourceSize;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'expireTime'     => 'ExpireTime',
        'createTime'     => 'CreateTime',
        'chainType'      => 'ChainType',
        'isAdmin'        => 'IsAdmin',
        'merkleTreeSuit' => 'MerkleTreeSuit',
        'memberStatus'   => 'MemberStatus',
        'regionId'       => 'RegionId',
        'antChainName'   => 'AntChainName',
        'network'        => 'Network',
        'tlsAlgo'        => 'TlsAlgo',
        'version'        => 'Version',
        'cipherSuit'     => 'CipherSuit',
        'resourceSize'   => 'ResourceSize',
        'nodeNum'        => 'NodeNum',
        'antChainId'     => 'AntChainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chainType) {
            $res['ChainType'] = $this->chainType;
        }
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }
        if (null !== $this->merkleTreeSuit) {
            $res['MerkleTreeSuit'] = $this->merkleTreeSuit;
        }
        if (null !== $this->memberStatus) {
            $res['MemberStatus'] = $this->memberStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->antChainName) {
            $res['AntChainName'] = $this->antChainName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->tlsAlgo) {
            $res['TlsAlgo'] = $this->tlsAlgo;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->cipherSuit) {
            $res['CipherSuit'] = $this->cipherSuit;
        }
        if (null !== $this->resourceSize) {
            $res['ResourceSize'] = $this->resourceSize;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChainType'])) {
            $model->chainType = $map['ChainType'];
        }
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }
        if (isset($map['MerkleTreeSuit'])) {
            $model->merkleTreeSuit = $map['MerkleTreeSuit'];
        }
        if (isset($map['MemberStatus'])) {
            $model->memberStatus = $map['MemberStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AntChainName'])) {
            $model->antChainName = $map['AntChainName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['TlsAlgo'])) {
            $model->tlsAlgo = $map['TlsAlgo'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['CipherSuit'])) {
            $model->cipherSuit = $map['CipherSuit'];
        }
        if (isset($map['ResourceSize'])) {
            $model->resourceSize = $map['ResourceSize'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
