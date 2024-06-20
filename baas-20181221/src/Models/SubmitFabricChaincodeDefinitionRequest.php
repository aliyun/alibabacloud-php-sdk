<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class SubmitFabricChaincodeDefinitionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @description This parameter is required.
     *
     * @example 1.0
     *
     * @var string
     */
    public $chaincodeVersion;

    /**
     * @description This parameter is required.
     *
     * @example chan-channelx-1l1hmckuuisxo
     *
     * @var string
     */
    public $channelId;

    /**
     * @example collectionconfig
     *
     * @var string
     */
    public $collectionConfig;

    /**
     * @description This parameter is required.
     *
     * @example OR ("perf9141MSP.member")
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example false
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
     * @description This parameter is required.
     *
     * @example sacc
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'chaincodePackageId' => 'ChaincodePackageId',
        'chaincodeVersion'   => 'ChaincodeVersion',
        'channelId'          => 'ChannelId',
        'collectionConfig'   => 'CollectionConfig',
        'endorsePolicy'      => 'EndorsePolicy',
        'initRequired'       => 'InitRequired',
        'location'           => 'Location',
        'name'               => 'Name',
        'organizationId'     => 'OrganizationId',
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
        if (null !== $this->chaincodeVersion) {
            $res['ChaincodeVersion'] = $this->chaincodeVersion;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitFabricChaincodeDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['ChaincodeVersion'])) {
            $model->chaincodeVersion = $map['ChaincodeVersion'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
