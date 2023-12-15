<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateBlockchainApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $blockchainRegionId;

    /**
     * @var string
     */
    public $blockchainType;

    /**
     * @var string
     */
    public $cipherSuit;

    /**
     * @var int
     */
    public $liveTime;

    /**
     * @var int
     */
    public $machineNum;

    /**
     * @var string
     */
    public $merkleTreeSuit;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $tlsAlgo;
    protected $_name = [
        'bizid'              => 'Bizid',
        'blockchainRegionId' => 'BlockchainRegionId',
        'blockchainType'     => 'BlockchainType',
        'cipherSuit'         => 'CipherSuit',
        'liveTime'           => 'LiveTime',
        'machineNum'         => 'MachineNum',
        'merkleTreeSuit'     => 'MerkleTreeSuit',
        'size'               => 'Size',
        'tlsAlgo'            => 'TlsAlgo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->blockchainRegionId) {
            $res['BlockchainRegionId'] = $this->blockchainRegionId;
        }
        if (null !== $this->blockchainType) {
            $res['BlockchainType'] = $this->blockchainType;
        }
        if (null !== $this->cipherSuit) {
            $res['CipherSuit'] = $this->cipherSuit;
        }
        if (null !== $this->liveTime) {
            $res['LiveTime'] = $this->liveTime;
        }
        if (null !== $this->machineNum) {
            $res['MachineNum'] = $this->machineNum;
        }
        if (null !== $this->merkleTreeSuit) {
            $res['MerkleTreeSuit'] = $this->merkleTreeSuit;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tlsAlgo) {
            $res['TlsAlgo'] = $this->tlsAlgo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBlockchainApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['BlockchainRegionId'])) {
            $model->blockchainRegionId = $map['BlockchainRegionId'];
        }
        if (isset($map['BlockchainType'])) {
            $model->blockchainType = $map['BlockchainType'];
        }
        if (isset($map['CipherSuit'])) {
            $model->cipherSuit = $map['CipherSuit'];
        }
        if (isset($map['LiveTime'])) {
            $model->liveTime = $map['LiveTime'];
        }
        if (isset($map['MachineNum'])) {
            $model->machineNum = $map['MachineNum'];
        }
        if (isset($map['MerkleTreeSuit'])) {
            $model->merkleTreeSuit = $map['MerkleTreeSuit'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TlsAlgo'])) {
            $model->tlsAlgo = $map['TlsAlgo'];
        }

        return $model;
    }
}
