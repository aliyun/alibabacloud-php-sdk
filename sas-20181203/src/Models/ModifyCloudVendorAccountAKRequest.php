<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudVendorAccountAKRequest extends Model
{
    /**
     * @description The unique ID of the AccessKey pair.
     *
     * >  You can call the [DescribeCloudVendorAccountAKList](~~DescribeCloudVendorAccountAKList~~) operation to query the unique ID.
     *
     * This parameter is required.
     *
     * @example 2832
     *
     * @var string
     */
    public $authIds;

    /**
     * @description The modules that are associated with the AccessKey pair. Valid values:
     *
     *   **HOST**: host.
     *   **CSPM**: configuration assessment.
     *   **SIEM**: Cloud Threat Detection and Response (CTDR).
     *   **TRIAL**: log audit.
     *
     * >  You can call the [GetSupportedModules](~~GetSupportedModules~~) operation to query the supported modules.
     *
     * @var string[]
     */
    public $authModules;

    /**
     * @description The Active Directory (AD) domain. Valid values:
     *
     *   **china**
     *   **global**
     *
     * >  This parameter takes effect only when Vendor is set to Azure.
     *
     * @example global
     *
     * @var string
     */
    public $domain;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The regions that are examined during AccessKey pair authentication.
     *
     * >  This parameter takes effect only when Vendor is set to AWS. You can call the [ListCloudVendorRegions](~~ListCloudVendorRegions~~) operation to query regions.
     *
     * @var string[]
     */
    public $regions;

    /**
     * @description The AccessKey ID.
     *
     * >  If AkType is set to **primary**, you must set SecretId to the AccessKey ID of the third-party master account. If AkType is set to **sub**, you must set SecretId to the AccessKey ID of the third-party sub-account. This parameter value does not change for a **Microsoft Azure account**. For an Azure account, set this parameter to the **app ID** that is used for authentication.
     *
     * @example S3D6c4O***
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The AccessKey secret.
     *
     * >  If AkType is set to **primary**, you must set SecretKey to the AccessKey secret of the third-party master account. If AkType is set to **sub**, you must set SecretKey to the AccessKey secret of the third-party sub-account. This parameter value does not change for a **Microsoft Azure account**. For an Azure account, set this parameter to the **password** that is used for authentication.
     *
     * @example AE6SLd****
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The status of the AccessKey pair. Valid values:
     *
     *   **0**: enabled.
     *   **1**: disabled.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The IDs of subscriptions.
     *
     * >  This parameter takes effect only when Vendor is set to Azure.
     *
     * @var string[]
     */
    public $subscriptionIds;

    /**
     * @description The tenant ID.
     *
     * >  This parameter takes effect only when Vendor is set to Azure.
     *
     * @example 95304a97-339b-4de5-9a7d-cdbffaf****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the AccessKey pair.
     *
     * >  The account information of the third-party cloud servers.
     *
     * @example test
     *
     * @var string
     */
    public $vendorAuthAlias;
    protected $_name = [
        'authIds' => 'AuthIds',
        'authModules' => 'AuthModules',
        'domain' => 'Domain',
        'lang' => 'Lang',
        'regions' => 'Regions',
        'secretId' => 'SecretId',
        'secretKey' => 'SecretKey',
        'status' => 'Status',
        'subscriptionIds' => 'SubscriptionIds',
        'tenantId' => 'TenantId',
        'vendorAuthAlias' => 'VendorAuthAlias',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authIds) {
            $res['AuthIds'] = $this->authIds;
        }
        if (null !== $this->authModules) {
            $res['AuthModules'] = $this->authModules;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscriptionIds) {
            $res['SubscriptionIds'] = $this->subscriptionIds;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vendorAuthAlias) {
            $res['VendorAuthAlias'] = $this->vendorAuthAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudVendorAccountAKRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthIds'])) {
            $model->authIds = $map['AuthIds'];
        }
        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = $map['AuthModules'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = $map['Regions'];
            }
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscriptionIds'])) {
            if (!empty($map['SubscriptionIds'])) {
                $model->subscriptionIds = $map['SubscriptionIds'];
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VendorAuthAlias'])) {
            $model->vendorAuthAlias = $map['VendorAuthAlias'];
        }

        return $model;
    }
}
