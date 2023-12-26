<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountTargetsRequest extends Model
{
    /**
     * @description The dual-stack (IPv4 and IPv6) domain name of the mount target.
     *
     * > Only Extreme NAS file systems that reside in the Chinese mainland support IPv6.
     * @example 174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: 31a8e4\*\*\*\*.
     *   The IDs of Extreme NAS file systems must start with `extreme-`, for example, extreme-0015\*\*\*\*.
     *   The IDs of Cloud Parallel File Storage (CPFS) file systems must start with `cpfs-`, for example, cpfs-125487\*\*\*\*.
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The domain name of the mount target.
     *
     * @example 1ca404a666-x****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

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
    protected $_name = [
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'fileSystemId'               => 'FileSystemId',
        'mountTargetDomain'          => 'MountTargetDomain',
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMountTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
