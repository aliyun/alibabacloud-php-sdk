<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainRequest extends Model
{
    /**
     * @var string
     */
    public $antChainName;

    /**
     * @var string
     */
    public $blockchainRegionId;

    /**
     * @var string
     */
    public $cipherSuit;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var int
     */
    public $liveTime;

    /**
     * @var string
     */
    public $merkleTreeSuit;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var int
     */
    public $resourceSize;

    /**
     * @var string
     */
    public $tlsAlgo;
    protected $_name = [
        'antChainName'       => 'AntChainName',
        'blockchainRegionId' => 'BlockchainRegionId',
        'cipherSuit'         => 'CipherSuit',
        'consortiumId'       => 'ConsortiumId',
        'liveTime'           => 'LiveTime',
        'merkleTreeSuit'     => 'MerkleTreeSuit',
        'nodeNum'            => 'NodeNum',
        'resourceSize'       => 'ResourceSize',
        'tlsAlgo'            => 'TlsAlgo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainName) {
            $res['AntChainName'] = $this->antChainName;
        }
        if (null !== $this->blockchainRegionId) {
            $res['BlockchainRegionId'] = $this->blockchainRegionId;
        }
        if (null !== $this->cipherSuit) {
            $res['CipherSuit'] = $this->cipherSuit;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->liveTime) {
            $res['LiveTime'] = $this->liveTime;
        }
        if (null !== $this->merkleTreeSuit) {
            $res['MerkleTreeSuit'] = $this->merkleTreeSuit;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->resourceSize) {
            $res['ResourceSize'] = $this->resourceSize;
        }
        if (null !== $this->tlsAlgo) {
            $res['TlsAlgo'] = $this->tlsAlgo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainName'])) {
            $model->antChainName = $map['AntChainName'];
        }
        if (isset($map['BlockchainRegionId'])) {
            $model->blockchainRegionId = $map['BlockchainRegionId'];
        }
        if (isset($map['CipherSuit'])) {
            $model->cipherSuit = $map['CipherSuit'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['LiveTime'])) {
            $model->liveTime = $map['LiveTime'];
        }
        if (isset($map['MerkleTreeSuit'])) {
            $model->merkleTreeSuit = $map['MerkleTreeSuit'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['ResourceSize'])) {
            $model->resourceSize = $map['ResourceSize'];
        }
        if (isset($map['TlsAlgo'])) {
            $model->tlsAlgo = $map['TlsAlgo'];
        }

        return $model;
    }
}
