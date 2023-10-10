<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpgradeFabricChaincodeDefinitionRequest extends Model
{
    /**
     * @example code-sacc-jbkuldd3i7ad
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @example sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @example 1.1
     *
     * @var string
     */
    public $chaincodeVersion;

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
    public $endorsePolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $initRequired;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'chaincodeId'        => 'ChaincodeId',
        'chaincodePackageId' => 'ChaincodePackageId',
        'chaincodeVersion'   => 'ChaincodeVersion',
        'collectionConfig'   => 'CollectionConfig',
        'endorsePolicy'      => 'EndorsePolicy',
        'initRequired'       => 'InitRequired',
        'location'           => 'Location',
        'organizationId'     => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
        if (null !== $this->chaincodeVersion) {
            $res['ChaincodeVersion'] = $this->chaincodeVersion;
        }
        if (null !== $this->collectionConfig) {
            $res['CollectionConfig'] = $this->collectionConfig;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
        }
        if (null !== $this->initRequired) {
            $res['InitRequired'] = $this->initRequired;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeFabricChaincodeDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['ChaincodeVersion'])) {
            $model->chaincodeVersion = $map['ChaincodeVersion'];
        }
        if (isset($map['CollectionConfig'])) {
            $model->collectionConfig = $map['CollectionConfig'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
        }
        if (isset($map['InitRequired'])) {
            $model->initRequired = $map['InitRequired'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
