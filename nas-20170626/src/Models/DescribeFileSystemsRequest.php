<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeFileSystemsRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: 31a8e4\\*\\*\\*\\*.
     *   The IDs of Extreme NAS file systems must start with extreme-, for example, extreme-0015\\*\\*\\*\\*.
     *   The IDs of Cloud Parallel File Storage (CPFS) file systems must start with cpfs-, for example, cpfs-125487\\*\\*\\*\\*.
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example 109c04****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   all (default): all types
     *   standard: General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *   cpfs: CPFS file system
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The details about the tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * If you want to mount the file system on an Elastic Compute Service (ECS) instance, the file system and the ECS instance must reside in the same VPC.
     * @example vpc-bp1sevsgtqvk5gxbl****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'fileSystemId'    => 'FileSystemId',
        'fileSystemType'  => 'FileSystemType',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
