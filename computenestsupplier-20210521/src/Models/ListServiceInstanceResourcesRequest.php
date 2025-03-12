<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceResourcesRequest\filters;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceResourcesRequest extends Model
{
    /**
     * @description The filter.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The maximum number of entries per page.
     *
     * Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token.
     *
     * @example AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID where the service instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'filters'                     => 'Filters',
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'regionId'                    => 'RegionId',
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
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
