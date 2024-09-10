<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudVendorAccountAKRequest extends Model
{
    /**
     * @description The unique ID of the AccessKey pair.
     *
     * This parameter is required.
     * @example 2832
     *
     * @var string
     */
    public $authIds;

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
     * @description The regions that are examined during AccessKey pair authentication. This parameter takes effect only when Vendor is set to AWS.
     *
     * >  You can call the [ListCloudVendorRegions](~~ListCloudVendorRegions~~) operation to query regions.
     * @var string[]
     */
    public $regions;

    /**
     * @description The AccessKey ID.
     *
     * @example S3D6c4O***
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The AccessKey secret. Valid values:
     *
     * 1\\. If AkType is set to primary, specify this parameter based on the following description:
     *
     *   **Tencent**: Specify the AccessKey secret of a primary account on Tencent Cloud.
     *   **HUAWEICLOUD**: Specify the AccessKey secret of a primary account on Huawei Cloud.
     *   **Azure**: Specify the AccessKey secret of a primary account on Microsoft Azure.
     *   **AWS**: Specifythe AccessKey secret of a primary account on Amazon Web Services (AWS).
     *
     * 2\\. If AkType is set to sub, specify this parameter based on the following description:
     *
     *   **Tencent**: Specify the AccessKey secret of a sub-account on Tencent Cloud.
     *   **HUAWEICLOUD**: Specify the AccessKey secret of a sub-account on Huawei Cloud.
     *   **Azure**: Specify the AccessKey secret of a sub-account on Microsoft Azure.
     *   **AWS**: Specify the AccessKey secret of a sub-account on AWS.
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
    protected $_name = [
        'authIds'         => 'AuthIds',
        'authModules'     => 'AuthModules',
        'domain'          => 'Domain',
        'regions'         => 'Regions',
        'secretId'        => 'SecretId',
        'secretKey'       => 'SecretKey',
        'status'          => 'Status',
        'subscriptionIds' => 'SubscriptionIds',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
