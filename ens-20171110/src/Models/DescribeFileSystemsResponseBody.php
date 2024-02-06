<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems;
use AlibabaCloud\Tea\Model;

class DescribeFileSystemsResponseBody extends Model
{
    /**
     * @description The information about the file systems.
     *
     * @var fileSystems[]
     */
    public $fileSystems;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 762DD527-358B-1E48-8005-CCE3ED4EB9E0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fileSystems' => 'FileSystems',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystems) {
            $res['FileSystems'] = [];
            if (null !== $this->fileSystems && \is_array($this->fileSystems)) {
                $n = 0;
                foreach ($this->fileSystems as $item) {
                    $res['FileSystems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileSystemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystems'])) {
            if (!empty($map['FileSystems'])) {
                $model->fileSystems = [];
                $n                  = 0;
                foreach ($map['FileSystems'] as $item) {
                    $model->fileSystems[$n++] = null !== $item ? fileSystems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
