<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeFileSystemsRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var bool
     */
    public $useUTCDateTime;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $packageIds;

    /**
     * @var string
     */
    public $fileSystemIds;

    /**
     * @var string
     */
    public $orderByField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'fileSystemId'   => 'FileSystemId',
        'description'    => 'Description',
        'fileSystemType' => 'FileSystemType',
        'vpcId'          => 'VpcId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'useUTCDateTime' => 'UseUTCDateTime',
        'storageType'    => 'StorageType',
        'packageIds'     => 'PackageIds',
        'fileSystemIds'  => 'FileSystemIds',
        'orderByField'   => 'OrderByField',
        'sortOrder'      => 'SortOrder',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->useUTCDateTime) {
            $res['UseUTCDateTime'] = $this->useUTCDateTime;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->packageIds) {
            $res['PackageIds'] = $this->packageIds;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }
        if (null !== $this->orderByField) {
            $res['OrderByField'] = $this->orderByField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
     * @return DescribeFileSystemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['UseUTCDateTime'])) {
            $model->useUTCDateTime = $map['UseUTCDateTime'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['PackageIds'])) {
            $model->packageIds = $map['PackageIds'];
        }
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
        }
        if (isset($map['OrderByField'])) {
            $model->orderByField = $map['OrderByField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
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
