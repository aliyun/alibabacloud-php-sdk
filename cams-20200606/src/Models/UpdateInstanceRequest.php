<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $facebookBmId;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isConfirmAudit;

    /**
     * @var string
     */
    public $isvTerms;

    /**
     * @var string
     */
    public $officeAddress;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'contactMail' => 'ContactMail',
        'countryId' => 'CountryId',
        'facebookBmId' => 'FacebookBmId',
        'instanceDescription' => 'InstanceDescription',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isConfirmAudit' => 'IsConfirmAudit',
        'isvTerms' => 'IsvTerms',
        'officeAddress' => 'OfficeAddress',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }

        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }

        if (null !== $this->facebookBmId) {
            $res['FacebookBmId'] = $this->facebookBmId;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isConfirmAudit) {
            $res['IsConfirmAudit'] = $this->isConfirmAudit;
        }

        if (null !== $this->isvTerms) {
            $res['IsvTerms'] = $this->isvTerms;
        }

        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }

        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        if (isset($map['FacebookBmId'])) {
            $model->facebookBmId = $map['FacebookBmId'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsConfirmAudit'])) {
            $model->isConfirmAudit = $map['IsConfirmAudit'];
        }

        if (isset($map['IsvTerms'])) {
            $model->isvTerms = $map['IsvTerms'];
        }

        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
