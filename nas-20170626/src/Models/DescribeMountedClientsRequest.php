<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountedClientsRequest extends Model
{
    /**
     * @description The IP address of the client.
     *
     *   If you specify an IP address, the operation checks whether the client list includes this IP address. If the client list includes the IP address, the operation returns the IP address. If the client list does not include the IP address, the operation returns an empty list.
     *   If you do not specify an IP address, the operation returns the IP addresses of all clients that have accessed the specified NAS file system within the last minute.
     *
     * @example 10.10.10.1
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 109c****66
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The domain name of the mount target.
     *
     * This parameter is required.
     * @example 1111222****95.cn-hangzhou.nas.aliyuncs.com
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
     * @description The number of IP addresses to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientIP'          => 'ClientIP',
        'fileSystemId'      => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMountedClientsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
