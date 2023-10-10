<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponseBody\result\content;

use AlibabaCloud\Tea\Model;

class chaincodeDefinition extends Model
{
    /**
     * @example sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @example collectionconfig
     *
     * @var string
     */
    public $collectionConfig;

    /**
     * @example OR ("perf9141MSP.member")
     *
     * @var string
     */
    public $endorsementPolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $initRequired;

    /**
     * @example sacc
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @example 698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860
     *
     * @var string
     */
    public $uid;

    /**
     * @example 1.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'chaincodePackageId' => 'ChaincodePackageId',
        'collectionConfig'   => 'CollectionConfig',
        'endorsementPolicy'  => 'EndorsementPolicy',
        'initRequired'       => 'InitRequired',
        'name'               => 'Name',
        'sequence'           => 'Sequence',
        'uid'                => 'Uid',
        'version'            => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
        if (null !== $this->collectionConfig) {
            $res['CollectionConfig'] = $this->collectionConfig;
        }
        if (null !== $this->endorsementPolicy) {
            $res['EndorsementPolicy'] = $this->endorsementPolicy;
        }
        if (null !== $this->initRequired) {
            $res['InitRequired'] = $this->initRequired;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chaincodeDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['CollectionConfig'])) {
            $model->collectionConfig = $map['CollectionConfig'];
        }
        if (isset($map['EndorsementPolicy'])) {
            $model->endorsementPolicy = $map['EndorsementPolicy'];
        }
        if (isset($map['InitRequired'])) {
            $model->initRequired = $map['InitRequired'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
