<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClustersRequest extends Model
{
    /**
     * @description The zone ID of the dedicated block storage cluster. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * @example cn-heyuan-b
     *
     * @var string
     */
    public $azoneId;

    /**
     * @description The category of disks that can be created in the dedicated block storage cluster.
     *
     * Set the value to cloud_essd. Only enhanced SSDs (ESSDs) can be created in dedicated block storage clusters.
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the dedicated block storage cluster. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmvs4****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'azoneId'                        => 'AzoneId',
        'category'                       => 'Category',
        'clientToken'                    => 'ClientToken',
        'dedicatedBlockStorageClusterId' => 'DedicatedBlockStorageClusterId',
        'maxResults'                     => 'MaxResults',
        'nextToken'                      => 'NextToken',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'status'                         => 'Status',
        'tag'                            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return DescribeDedicatedBlockStorageClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            if (!empty($map['DedicatedBlockStorageClusterId'])) {
                $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
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
