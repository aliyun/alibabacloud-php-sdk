<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description An array of custom XFF headers that are used to identify the originating IP addresses of clients. If the value of the XffStatus parameter is 1 and the CustomHeaders field is left empty, the first IP address in the XFF header is the originating IP address of the client.
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
     * @description The description of the protected object. Different key-value pairs in a map indicate different properties of the protected object.
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @description The creation time of the protected object. Unit: seconds.
     *
     * @example 1652149203187
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The most recent modification time of the protected object. Unit: seconds.
     *
     * @example 1665633032000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The protection pattern.
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
     * @description The ID of the resource group.
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
     * @description Indicates whether the X-Forwarded-For (XFF) header is used.
     *
     * @example 1
     *
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'customHeaders'                  => 'CustomHeaders',
        'description'                    => 'Description',
        'detail'                         => 'Detail',
        'gmtCreate'                      => 'GmtCreate',
        'gmtModified'                    => 'GmtModified',
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
