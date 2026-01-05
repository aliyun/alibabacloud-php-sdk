<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsAppIcpRecordRequest extends Model
{
    /**
     * @var string
     */
    public $appApprovalDate;

    /**
     * @var string
     */
    public $appIcpLicenseNumber;

    /**
     * @var string
     */
    public $appIcpRecordPic;

    /**
     * @var string
     */
    public $appPrincipalUnitName;

    /**
     * @var string
     */
    public $appServiceName;

    /**
     * @var string
     */
    public $domain;

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
        'appApprovalDate' => 'AppApprovalDate',
        'appIcpLicenseNumber' => 'AppIcpLicenseNumber',
        'appIcpRecordPic' => 'AppIcpRecordPic',
        'appPrincipalUnitName' => 'AppPrincipalUnitName',
        'appServiceName' => 'AppServiceName',
        'domain' => 'Domain',
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
        if (null !== $this->appApprovalDate) {
            $res['AppApprovalDate'] = $this->appApprovalDate;
        }

        if (null !== $this->appIcpLicenseNumber) {
            $res['AppIcpLicenseNumber'] = $this->appIcpLicenseNumber;
        }

        if (null !== $this->appIcpRecordPic) {
            $res['AppIcpRecordPic'] = $this->appIcpRecordPic;
        }

        if (null !== $this->appPrincipalUnitName) {
            $res['AppPrincipalUnitName'] = $this->appPrincipalUnitName;
        }

        if (null !== $this->appServiceName) {
            $res['AppServiceName'] = $this->appServiceName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['AppApprovalDate'])) {
            $model->appApprovalDate = $map['AppApprovalDate'];
        }

        if (isset($map['AppIcpLicenseNumber'])) {
            $model->appIcpLicenseNumber = $map['AppIcpLicenseNumber'];
        }

        if (isset($map['AppIcpRecordPic'])) {
            $model->appIcpRecordPic = $map['AppIcpRecordPic'];
        }

        if (isset($map['AppPrincipalUnitName'])) {
            $model->appPrincipalUnitName = $map['AppPrincipalUnitName'];
        }

        if (isset($map['AppServiceName'])) {
            $model->appServiceName = $map['AppServiceName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
