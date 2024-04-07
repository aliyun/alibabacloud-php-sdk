<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class cloudResources extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 11769793******
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The domain name. This parameter has a value only if the value of ResourceProduct is fc or sae.
     *
     * @example test-resource-domain
     *
     * @var string
     */
    public $resourceDomain;

    /**
     * @description The function name. This parameter has a value only if the value of ResourceProduct is fc.
     *
     * @example test-resource-function
     *
     * @var string
     */
    public $resourceFunction;

    /**
     * @description The ID of the resource.
     *
     * @example alb-ffff****
     *
     * @var string
     */
    public $resourceInstance;

    /**
     * @description The name of the resource.
     *
     * @example test-resource-name
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The cloud service to which the resource belongs. Valid values:
     *
     *   **alb**: ALB.
     *   **mse**: MSE.
     *   **fc**: Function Compute.
     *   **sae**: SAE.
     *
     * @example alb
     *
     * @var string
     */
    public $resourceProduct;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The route name. This parameter has a value only if the value of ResourceProduct is mse.
     *
     * @example test-route-name
     *
     * @var string
     */
    public $resourceRouteName;

    /**
     * @description The service name. This parameter has a value only if the value of ResourceProduct is fc.
     *
     * @example test-resource-service
     *
     * @var string
     */
    public $resourceService;
    protected $_name = [
        'ownerUserId'       => 'OwnerUserId',
        'resourceDomain'    => 'ResourceDomain',
        'resourceFunction'  => 'ResourceFunction',
        'resourceInstance'  => 'ResourceInstance',
        'resourceName'      => 'ResourceName',
        'resourceProduct'   => 'ResourceProduct',
        'resourceRegionId'  => 'ResourceRegionId',
        'resourceRouteName' => 'ResourceRouteName',
        'resourceService'   => 'ResourceService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->resourceDomain) {
            $res['ResourceDomain'] = $this->resourceDomain;
        }
        if (null !== $this->resourceFunction) {
            $res['ResourceFunction'] = $this->resourceFunction;
        }
        if (null !== $this->resourceInstance) {
            $res['ResourceInstance'] = $this->resourceInstance;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceRouteName) {
            $res['ResourceRouteName'] = $this->resourceRouteName;
        }
        if (null !== $this->resourceService) {
            $res['ResourceService'] = $this->resourceService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['ResourceDomain'])) {
            $model->resourceDomain = $map['ResourceDomain'];
        }
        if (isset($map['ResourceFunction'])) {
            $model->resourceFunction = $map['ResourceFunction'];
        }
        if (isset($map['ResourceInstance'])) {
            $model->resourceInstance = $map['ResourceInstance'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceRouteName'])) {
            $model->resourceRouteName = $map['ResourceRouteName'];
        }
        if (isset($map['ResourceService'])) {
            $model->resourceService = $map['ResourceService'];
        }

        return $model;
    }
}
