<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string[]
     */
    public $customHeaders;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $resourceOrigin;

    /**
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'customHeaders'  => 'CustomHeaders',
        'description'    => 'Description',
        'detail'         => 'Detail',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'pattern'        => 'Pattern',
        'product'        => 'Product',
        'resource'       => 'Resource',
        'resourceGroup'  => 'ResourceGroup',
        'resourceOrigin' => 'ResourceOrigin',
        'xffStatus'      => 'XffStatus',
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
        if (isset($map['ResourceOrigin'])) {
            $model->resourceOrigin = $map['ResourceOrigin'];
        }
        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
