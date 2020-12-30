<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $dualStackMountTargetDomain;
    protected $_name = [
        'fileSystemId'               => 'FileSystemId',
        'mountTargetDomain'          => 'MountTargetDomain',
        'pageSize'                   => 'PageSize',
        'pageNumber'                 => 'PageNumber',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
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
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }

        return $model;
    }
}
