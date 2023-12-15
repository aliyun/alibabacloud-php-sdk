<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeDefinitionTaskResponseBody\result\content;

use AlibabaCloud\Tea\Model;

class chaincodeDefinition extends Model
{
    /**
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @var string
     */
    public $collectionConfig;

    /**
     * @var string
     */
    public $endorsementPolicy;

    /**
     * @var bool
     */
    public $initRequired;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sequence;

    /**
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
