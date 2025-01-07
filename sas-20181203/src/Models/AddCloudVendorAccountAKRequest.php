<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCloudVendorAccountAKRequest extends Model
{
    /**
     * @description The type of the account to which the AccessKey pair belongs. Valid values:
     *
     *   **primary**: a primary account
     *   **sub**: a sub-account
     *
     * This parameter is required.
     * @example primary
     *
     * @var string
     */
    public $akType;

    /**
     * @description The modules that are associated with the AccessKey pair.
     *
     * @var string[]
     */
    public $authModules;

    /**
     * @description The Active Directory (AD) domain. This parameter takes effect only when Vendor is set to Azure. Valid values:
     *
     *   **china**
     *   **global**
     *
     * @example global
     *
     * @var string
     */
    public $domain;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The regions that are examined during AccessKey pair authentication. This parameter takes effect only when Vendor is set to AWS.
     *
     * @var string[]
     */
    public $regions;

    /**
     * @description The AccessKey ID. Valid values:
     *
     * 1\\. If AkType is set to primary, specify this parameter based on the following description:
     *
     *   **Tencent**: Enter the AccessKey ID of a primary account on Tencent Cloud.
     *   **HUAWEICLOUD**: Enter the AccessKey ID of a primary account on Huawei Cloud.
     *   **Azure**: Enter the AccessKey ID of a primary account on Microsoft Azure.
     *   **AWS**: Enter the AccessKey ID of a primary account on AWS.
     *
     * 2\\. If AkType is set to sub, specify this parameter based on the following description:
     *
     *   **Tencent**: Enter the AccessKey ID of a sub-account on Tencent Cloud.
     *   **HUAWEICLOUD**: Enter the AccessKey ID of a sub-account on Huawei Cloud.
     *   **Azure**: Enter the AccessKey ID of a sub-account on Microsoft Azure.
     *   **AWS**: Enter the AccessKey ID of a sub-account on AWS.
     *
     * This parameter is required.
     * @example 45GLRV4SOT0YFB****
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The AccessKey secret. Valid values:
     *
     * 1\\. If AkType is set to primary, specify this parameter based on the following description:
     *
     *   **Tencent**: Enter the AccessKey secret of a primary account on Tencent Cloud.
     *   **HUAWEICLOUD**: Enter the AccessKey secret of a primary account on Huawei Cloud.
     *   **Azure**: Enter the AccessKey secret of a primary account on Microsoft Azure.
     *   **AWS**: Enter the AccessKey secret of a primary account on AWS.
     *
     * 2\\. If AkType is set to sub, specify this parameter based on the following description:
     *
     *   **Tencent**: Enter the AccessKey secret of a sub-account on Tencent Cloud.
     *   **HUAWEICLOUD**: Enter the AccessKey secret of a sub-account on Huawei Cloud.
     *   **Azure**: Enter the AccessKey secret of a sub-account on Microsoft Azure.
     *   **AWS**: Enter the AccessKey secret of a sub-account on AWS.
     *
     * This parameter is required.
     * @example AE6SLd****
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The subscription IDs. This parameter takes effect only when Vendor is set to Azure.
     *
     * @var string[]
     */
    public $subscriptionIds;

    /**
     * @description The tenant ID. This parameter takes effect only when Vendor is set to Azure.
     *
     * @example 95304a97-339b-4de5-9a7d-cdbffaf****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The cloud service provider. Valid values:
     *
     *   **Tencent**: Tencent Cloud
     *   **HUAWEICLOUD**: Huawei Cloud
     *   **Azure**: Microsoft Azure
     *   **AWS**: Amazon Web Services (AWS)
     *
     * This parameter is required.
     * @example AWS
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'akType'          => 'AkType',
        'authModules'     => 'AuthModules',
        'domain'          => 'Domain',
        'lang'            => 'Lang',
        'regions'         => 'Regions',
        'secretId'        => 'SecretId',
        'secretKey'       => 'SecretKey',
        'subscriptionIds' => 'SubscriptionIds',
        'tenantId'        => 'TenantId',
        'vendor'          => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->akType) {
            $res['AkType'] = $this->akType;
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
        if (null !== $this->subscriptionIds) {
            $res['SubscriptionIds'] = $this->subscriptionIds;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCloudVendorAccountAKRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AkType'])) {
            $model->akType = $map['AkType'];
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
        if (isset($map['SubscriptionIds'])) {
            if (!empty($map['SubscriptionIds'])) {
                $model->subscriptionIds = $map['SubscriptionIds'];
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
