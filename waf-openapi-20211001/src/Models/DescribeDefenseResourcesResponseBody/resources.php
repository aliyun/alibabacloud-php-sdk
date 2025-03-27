<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody\resources\responseHeaders;

class resources extends Model
{
    /**
     * @var int
     */
    public $acwCookieStatus;

    /**
     * @var int
     */
    public $acwSecureStatus;

    /**
     * @var int
     */
    public $acwV3SecureStatus;

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
    public $ownerUserId;

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
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $resourceOrigin;

    /**
     * @var responseHeaders[]
     */
    public $responseHeaders;

    /**
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'acwCookieStatus' => 'AcwCookieStatus',
        'acwSecureStatus' => 'AcwSecureStatus',
        'acwV3SecureStatus' => 'AcwV3SecureStatus',
        'customHeaders' => 'CustomHeaders',
        'description' => 'Description',
        'detail' => 'Detail',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ownerUserId' => 'OwnerUserId',
        'pattern' => 'Pattern',
        'product' => 'Product',
        'resource' => 'Resource',
        'resourceGroup' => 'ResourceGroup',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceOrigin' => 'ResourceOrigin',
        'responseHeaders' => 'ResponseHeaders',
        'xffStatus' => 'XffStatus',
    ];

    public function validate()
    {
        if (\is_array($this->customHeaders)) {
            Model::validateArray($this->customHeaders);
        }
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        if (\is_array($this->responseHeaders)) {
            Model::validateArray($this->responseHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->customHeaders)) {
                $res['CustomHeaders'] = [];
                $n1 = 0;
                foreach ($this->customHeaders as $item1) {
                    $res['CustomHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                foreach ($this->detail as $key1 => $value1) {
                    $res['Detail'][$key1] = $value1;
                }
            }
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

        if (null !== $this->responseHeaders) {
            if (\is_array($this->responseHeaders)) {
                $res['ResponseHeaders'] = [];
                $n1 = 0;
                foreach ($this->responseHeaders as $item1) {
                    $res['ResponseHeaders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
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
                $model->customHeaders = [];
                $n1 = 0;
                foreach ($map['CustomHeaders'] as $item1) {
                    $model->customHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                foreach ($map['Detail'] as $key1 => $value1) {
                    $model->detail[$key1] = $value1;
                }
            }
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

        if (isset($map['ResponseHeaders'])) {
            if (!empty($map['ResponseHeaders'])) {
                $model->responseHeaders = [];
                $n1 = 0;
                foreach ($map['ResponseHeaders'] as $item1) {
                    $model->responseHeaders[$n1++] = responseHeaders::fromMap($item1);
                }
            }
        }

        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
