<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpgradeFabricChaincodeDefinitionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chaincodeVersion;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $collectionConfig;

    /**
     * @var string
     */
    public $endorsePolicy;

    /**
     * @var bool
     */
    public $initRequired;

    /**
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'chaincodeId'        => 'ChaincodeId',
        'chaincodePackageId' => 'ChaincodePackageId',
        'chaincodeVersion'   => 'ChaincodeVersion',
        'channelId'          => 'ChannelId',
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
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
