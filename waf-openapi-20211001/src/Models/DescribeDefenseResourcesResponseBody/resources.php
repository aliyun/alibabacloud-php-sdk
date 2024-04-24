<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The status of the tracking cookie.
     *
     *   **0:** disabled.
     *   **1:** enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $acwCookieStatus;

    /**
     * @description The status of the secure attribute in the tracking cookie.
     *
     *   **0:** disabled.
     *   **1:** enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwSecureStatus;

    /**
     * @description The status of the secure attribute in the slider CAPTCHA cookie.
     *
     *   **0:** disabled.
     *   **1:** enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwV3SecureStatus;

    /**
     * @description The custom XFF headers that are used to identify the originating IP addresses of clients. If the value of XffStatus is 1 and CustomHeaders is left empty, the first IP addresses in the XFF headers are used as the originating IP addresses of clients.
     *
     * @var string[]
     */
    public $customHeaders;

    /**
     * @description The description of the protected object.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the protected object. Different key-value pairs indicate different attributes of the protected object.
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @description The time when the protected object was created. Unit: milliseconds.
     *
     * @example 1652149203187
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the protected object was modified. Unit: milliseconds.
     *
     * @example 1665633032000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 135*********46
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The pattern in which the protected object is protected.
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
     * @example test
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The origin of the protected object.
     *
     * @example custom
     *
     * @var string
     */
    public $resourceOrigin;

    /**
     * @description Indicates whether the X-Forwarded-For (XFF) proxy is enabled.
     *
     * @example 1
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
     * @return resources
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
