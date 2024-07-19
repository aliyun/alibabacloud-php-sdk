<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceResourcesRequest extends Model
{
    /**
     * @description End time of resource usage.
     * <notice>Note: Only supports querying service instances on private deployments.
     * @example 2022-03-01T12:00:00
     *
     * @var string
     */
    public $expireTimeEnd;

    /**
     * @description Start time of resource usage.
     * <notice>Note: Only supports querying service instances on private deployments.
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $expireTimeStart;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If **NextToken** is not returned, it indicates that no additional results exist.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The billing method of the read-only instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID. Valid values:
     *
     *   cn-hangzhou: China (Hangzhou).
     *   ap-southeast-1: Singapore.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of a resource.
     *
     * @var string[]
     */
    public $resourceARN;

    /**
     * @description The ID of the service instance.
     *
     * This parameter is required.
     * @example si-d8a0cc2a1ee04dce****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description Service Instance resource type，include AliyunResource and ContainerResource.
     *
     * @example AliyunResource
     *
     * @var string
     */
    public $serviceInstanceResourceType;

    /**
     * @description The tag key and value.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'expireTimeEnd'               => 'ExpireTimeEnd',
        'expireTimeStart'             => 'ExpireTimeStart',
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'payType'                     => 'PayType',
        'regionId'                    => 'RegionId',
        'resourceARN'                 => 'ResourceARN',
        'serviceInstanceId'           => 'ServiceInstanceId',
        'serviceInstanceResourceType' => 'ServiceInstanceResourceType',
        'tag'                         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTimeEnd) {
            $res['ExpireTimeEnd'] = $this->expireTimeEnd;
        }
        if (null !== $this->expireTimeStart) {
            $res['ExpireTimeStart'] = $this->expireTimeStart;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceARN) {
            $res['ResourceARN'] = $this->resourceARN;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceInstanceResourceType) {
            $res['ServiceInstanceResourceType'] = $this->serviceInstanceResourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTimeEnd'])) {
            $model->expireTimeEnd = $map['ExpireTimeEnd'];
        }
        if (isset($map['ExpireTimeStart'])) {
            $model->expireTimeStart = $map['ExpireTimeStart'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceARN'])) {
            if (!empty($map['ResourceARN'])) {
                $model->resourceARN = $map['ResourceARN'];
            }
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceInstanceResourceType'])) {
            $model->serviceInstanceResourceType = $map['ServiceInstanceResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
