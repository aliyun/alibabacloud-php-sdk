<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirQuotasRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

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
     * @description The number of entries per page. Default value: 10.
     *
     * Valid values: 1 to 100.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The absolute path of a directory.
     *
     * If you do not specify this parameter, all directories for which quotas are created are returned.
     * @example /data/sub1
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'path'         => 'Path',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
