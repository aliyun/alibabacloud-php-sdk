<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody\resourceTypes\codeMapping;
use AlibabaCloud\Tea\Model;

class resourceTypes extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var codeMapping
     */
    public $codeMapping;

    /**
     * @description The supported filter conditions.
     *
     * @var string[]
     */
    public $filterKeys;

    /**
     * @description The name of the Alibaba Cloud service.
     *
     * @example Container Service for Kubernetes
     *
     * @var string
     */
    public $productName;

    /**
     * @description The resource type.
     *
     * @example ACS::ACK::Cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the resource type.
     *
     * @example Cluster
     *
     * @var string
     */
    public $resourceTypeName;
    protected $_name = [
        'authorized'       => 'Authorized',
        'codeMapping'      => 'CodeMapping',
        'filterKeys'       => 'FilterKeys',
        'productName'      => 'ProductName',
        'resourceType'     => 'ResourceType',
        'resourceTypeName' => 'ResourceTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->codeMapping) {
            $res['CodeMapping'] = null !== $this->codeMapping ? $this->codeMapping->toMap() : null;
        }
        if (null !== $this->filterKeys) {
            $res['FilterKeys'] = $this->filterKeys;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceTypeName) {
            $res['ResourceTypeName'] = $this->resourceTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['CodeMapping'])) {
            $model->codeMapping = codeMapping::fromMap($map['CodeMapping']);
        }
        if (isset($map['FilterKeys'])) {
            if (!empty($map['FilterKeys'])) {
                $model->filterKeys = $map['FilterKeys'];
            }
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceTypeName'])) {
            $model->resourceTypeName = $map['ResourceTypeName'];
        }

        return $model;
    }
}
