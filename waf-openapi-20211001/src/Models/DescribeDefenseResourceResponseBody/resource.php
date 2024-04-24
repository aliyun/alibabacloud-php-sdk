<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceResponseBody;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The status of the tracking cookie.
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwCookieStatus;

    /**
     * @description The status of the secure attribute of the tracking cookie.
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwSecureStatus;

    /**
     * @description The status of the secure attribute of the slider CAPTCHA cookie.
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwV3SecureStatus;

    /**
     * @description The custom header fields.
     *
     * >  If the value of XffStatus is 1, the first IP address in the specified header field is used as the originating IP address of the client to prevent X-Forwarded-For (XFF) forgery. If you specify multiple header fields, WAF reads the values of the header fields in sequence until the originating IP address is obtained. If the originating IP address cannot be obtained, the first IP address in the XFF header field is used as the originating IP address of the client.
     * @var string[]
     */
    public $customHeaders;

    /**
     * @description The description of the protected object.
     *
     * @example This is Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the protected object. Different key-value pairs indicate different attributes of the protected object.
     *
     * @example {
     * "product": "waf",
     * "domain": "demo.aliyundoc****.com"
     * }
     * @var mixed[]
     */
    public $detail;

    /**
     * @description The time when the protected object was created. Unit: milliseconds.
     *
     * @example 1607493144000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the protected object was modified. Unit: milliseconds.
     *
     * @example 1691720010000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The user ID (UID) of the Alibaba Cloud account to which the protected object belongs.
     *
     * @example 170457******9107
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The pattern used for the protected object.
     *
     * @example domain
     *
     * @var string
     */
    public $pattern;

    /**
     * @description The name of the cloud service.
     *
     * @example alb
     *
     * @var string
     */
    public $product;

    /**
     * @description The name of the protected object.
     *
     * @example alb-rencs***
     *
     * @var string
     */
    public $resource;

    /**
     * @description The name of the protected object group to which the protected object belongs.
     *
     * @example example_resource_group
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfmoiy****p2oq
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The origin of the protected object. Valid values:
     *
     *   **custom**
     *   **access**
     *
     * @example custom
     *
     * @var string
     */
    public $resourceOrigin;

    /**
     * @description Indicates whether a Layer 7 proxy is deployed in front of WAF, such as Anti-DDoS Proxy and Alibaba Cloud CDN. Valid values:
     *
     *   **0**: No Layer 7 proxy is deployed.
     *   **1**: A Layer 7 proxy is deployed.
     *
     * @example 0
     *
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'acwCookieStatus'                => 'AcwCookieStatus',
        'acwSecureStatus'                => 'AcwSecureStatus',
        'acwV3SecureStatus'              => 'AcwV3SecureStatus',
        'customHeaders'                  => 'CustomHeaders',
        'description'                    => 'Description',
        'detail'                         => 'Detail',
        'gmtCreate'                      => 'GmtCreate',
        'gmtModified'                    => 'GmtModified',
        'ownerUserId'                    => 'OwnerUserId',
        'pattern'                        => 'Pattern',
        'product'                        => 'Product',
        'resource'                       => 'Resource',
        'resourceGroup'                  => 'ResourceGroup',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceOrigin'                 => 'ResourceOrigin',
        'xffStatus'                      => 'XffStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acwCookieStatus) {
            $res['AcwCookieStatus'] = $this->acwCookieStatus;
        }
        if (null !== $this->acwSecureStatus) {
            $res['AcwSecureStatus'] = $this->acwSecureStatus;
        }
        if (null !== $this->acwV3SecureStatus) {
            $res['AcwV3SecureStatus'] = $this->acwV3SecureStatus;
        }
        if (null !== $this->customHeaders) {
            $res['CustomHeaders'] = $this->customHeaders;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceOrigin) {
            $res['ResourceOrigin'] = $this->resourceOrigin;
        }
        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcwCookieStatus'])) {
            $model->acwCookieStatus = $map['AcwCookieStatus'];
        }
        if (isset($map['AcwSecureStatus'])) {
            $model->acwSecureStatus = $map['AcwSecureStatus'];
        }
        if (isset($map['AcwV3SecureStatus'])) {
            $model->acwV3SecureStatus = $map['AcwV3SecureStatus'];
        }
        if (isset($map['CustomHeaders'])) {
            if (!empty($map['CustomHeaders'])) {
                $model->customHeaders = $map['CustomHeaders'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceOrigin'])) {
            $model->resourceOrigin = $map['ResourceOrigin'];
        }
        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
