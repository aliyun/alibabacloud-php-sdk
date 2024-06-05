<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessGroupsRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * Limits:
     *
     *   The name must be 3 to 64 characters in length.
     *   The name must start with a letter and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard (default): General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *   cpfs: Cloud Parallel File Storage (CPFS) file system
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
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to display the creation time of the permission group in UTC.
     *
     * Valid values:
     *
     *   true (default): The time is displayed in UTC.
     *   false: The time is not displayed in UTC.
     *
     * @example true
     *
     * @var bool
     */
    public $useUTCDateTime;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'fileSystemType'  => 'FileSystemType',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'useUTCDateTime'  => 'UseUTCDateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
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
        if (null !== $this->useUTCDateTime) {
            $res['UseUTCDateTime'] = $this->useUTCDateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
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
        if (isset($map['UseUTCDateTime'])) {
            $model->useUTCDateTime = $map['UseUTCDateTime'];
        }

        return $model;
    }
}
