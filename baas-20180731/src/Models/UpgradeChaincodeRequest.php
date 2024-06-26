<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpgradeChaincodeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example code-sacc-fk9z4r97****
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @example string
     *
     * @var string
     */
    public $collectionConfig;

    /**
     * @example OR ("wholesalerMSP.peer")
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @example peers-wholesaler-15ix77tof****
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'chaincodeId'      => 'ChaincodeId',
        'collectionConfig' => 'CollectionConfig',
        'endorsePolicy'    => 'EndorsePolicy',
        'location'         => 'Location',
        'organizationId'   => 'OrganizationId',
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
        if (null !== $this->collectionConfig) {
            $res['CollectionConfig'] = $this->collectionConfig;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
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
     * @return UpgradeChaincodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['CollectionConfig'])) {
            $model->collectionConfig = $map['CollectionConfig'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
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
