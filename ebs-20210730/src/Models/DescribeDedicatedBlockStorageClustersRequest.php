<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersRequest\tag;

class DescribeDedicatedBlockStorageClustersRequest extends Model
{
    /**
     * @var string
     */
    public $azoneId;
    /**
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
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        if (\is_array($this->dedicatedBlockStorageClusterId)) {
            Model::validateArray($this->dedicatedBlockStorageClusterId);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dedicatedBlockStorageClusterId)) {
                $res['DedicatedBlockStorageClusterId'] = [];
                $n1                                    = 0;
                foreach ($this->dedicatedBlockStorageClusterId as $item1) {
                    $res['DedicatedBlockStorageClusterId'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1            = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $model->dedicatedBlockStorageClusterId = [];
                $n1                                    = 0;
                foreach ($map['DedicatedBlockStorageClusterId'] as $item1) {
                    $model->dedicatedBlockStorageClusterId[$n1++] = $item1;
                }
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
                $model->status = [];
                $n1            = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
