<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceByCenterPolicyIdRequest extends Model
{
    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l69tQX7yFxx6/4dbooBAOc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The policy ID.
     *
     * This parameter is required.
     *
     * @example pg-53iyi2aar0nd6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The service type.
     *
     * Valid values:
     *
     *   app: cloud applications.
     *   resourceGroup: resource groups.
     *   desktop: cloud computers.
     *   desktopGroup: cloud computer shares.
     *
     * @example desktop
     *
     * @var string
     */
    public $productType;

    /**
     * @description The resource ID.
     *
     * @example ecd-ia2zw38bi6cm7****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'policyGroupId' => 'PolicyGroupId',
        'productType' => 'ProductType',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceByCenterPolicyIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
