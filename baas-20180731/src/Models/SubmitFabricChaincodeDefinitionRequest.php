<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class SubmitFabricChaincodeDefinitionRequest extends Model
{
    /**
     * @var string
     */
    public $chaincodePackageId;

    /**
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
     * @var string
     */
    public $name;

    /**
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
