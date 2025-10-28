<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponseBody;

use AlibabaCloud\Dara\Model;

class secureToken extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $addressServerHost;

    /**
     * @var string
     */
    public $belongRegion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mseInstanceId;

    /**
     * @var string
     */
    public $mseInternetAddress;

    /**
     * @var string
     */
    public $mseIntranetAddress;

    /**
     * @var string
     */
    public $mseRegistryType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'addressServerHost' => 'AddressServerHost',
        'belongRegion' => 'BelongRegion',
        'description' => 'Description',
        'edasId' => 'EdasId',
        'id' => 'Id',
        'mseInstanceId' => 'MseInstanceId',
        'mseInternetAddress' => 'MseInternetAddress',
        'mseIntranetAddress' => 'MseIntranetAddress',
        'mseRegistryType' => 'MseRegistryType',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'secretKey' => 'SecretKey',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->addressServerHost) {
            $res['AddressServerHost'] = $this->addressServerHost;
        }

        if (null !== $this->belongRegion) {
            $res['BelongRegion'] = $this->belongRegion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->edasId) {
            $res['EdasId'] = $this->edasId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mseInstanceId) {
            $res['MseInstanceId'] = $this->mseInstanceId;
        }

        if (null !== $this->mseInternetAddress) {
            $res['MseInternetAddress'] = $this->mseInternetAddress;
        }

        if (null !== $this->mseIntranetAddress) {
            $res['MseIntranetAddress'] = $this->mseIntranetAddress;
        }

        if (null !== $this->mseRegistryType) {
            $res['MseRegistryType'] = $this->mseRegistryType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['AddressServerHost'])) {
            $model->addressServerHost = $map['AddressServerHost'];
        }

        if (isset($map['BelongRegion'])) {
            $model->belongRegion = $map['BelongRegion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EdasId'])) {
            $model->edasId = $map['EdasId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MseInstanceId'])) {
            $model->mseInstanceId = $map['MseInstanceId'];
        }

        if (isset($map['MseInternetAddress'])) {
            $model->mseInternetAddress = $map['MseInternetAddress'];
        }

        if (isset($map['MseIntranetAddress'])) {
            $model->mseIntranetAddress = $map['MseIntranetAddress'];
        }

        if (isset($map['MseRegistryType'])) {
            $model->mseRegistryType = $map['MseRegistryType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
