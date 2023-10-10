<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponseBody;

use AlibabaCloud\Tea\Model;

class secureToken extends Model
{
    /**
     * @description The AccessKey ID used in the namespace.
     *
     * @example f676f1**************
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The address of Address Server associated with the namespace.
     *
     * @example addr-****-****.edas.aliyun.com
     *
     * @var string
     */
    public $addressServerHost;

    /**
     * @description The ID of the region.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $belongRegion;

    /**
     * @description The description of the namespace.
     *
     * @example ”“
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Alibaba Cloud account that activated Enterprise Distributed Application Service (EDAS).
     *
     * @example 11727458********
     *
     * @var string
     */
    public $edasId;

    /**
     * @description The ID of the security token.
     *
     * @example 7279
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the MSE instance.
     *
     * @example mse_prepaid_public_cn-tl32p******
     *
     * @var string
     */
    public $mseInstanceId;

    /**
     * @description The public endpoint of the MSE registry.
     *
     * @example mse-aa2******-p.nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $mseInternetAddress;

    /**
     * @description The private endpoint of the MSE registry.
     *
     * @example mse-72******-nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $mseIntranetAddress;

    /**
     * @description The type of the Microservices Engine (MSE) registry.
     *
     *   default: the shared registry of EDAS
     *   exclusive_mse: MSE Nacos registry
     *
     * @example exclusive_mse
     *
     * @var string
     */
    public $mseRegistryType;

    /**
     * @description The ID of the region where the namespace resides.
     *
     * @example cn-shenzhen:x*******
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region where the namespace resides.
     *
     * @example x******
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The AccessKey secret used in the namespace.
     *
     * @example gOSgbgR2R*************
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The tenant ID of the namespace.
     *
     * @example 401b7bc8-9441-4693-****-************
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the user.
     *
     * @example edas_com***_****@******-*****.***
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accessKey'          => 'AccessKey',
        'addressServerHost'  => 'AddressServerHost',
        'belongRegion'       => 'BelongRegion',
        'description'        => 'Description',
        'edasId'             => 'EdasId',
        'id'                 => 'Id',
        'mseInstanceId'      => 'MseInstanceId',
        'mseInternetAddress' => 'MseInternetAddress',
        'mseIntranetAddress' => 'MseIntranetAddress',
        'mseRegistryType'    => 'MseRegistryType',
        'regionId'           => 'RegionId',
        'regionName'         => 'RegionName',
        'secretKey'          => 'SecretKey',
        'tenantId'           => 'TenantId',
        'userId'             => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return secureToken
     */
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
