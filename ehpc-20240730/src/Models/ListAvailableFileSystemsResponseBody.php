<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody\fileSystemList;
use AlibabaCloud\Tea\Model;

class ListAvailableFileSystemsResponseBody extends Model
{
    /**
     * @var fileSystemList[]
     */
    public $fileSystemList;

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
     * @example BF4E8AB1-02A3-5ECF-87CC-3AB7BE98**
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 65
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fileSystemList' => 'FileSystemList',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemList) {
            $res['FileSystemList'] = [];
            if (null !== $this->fileSystemList && \is_array($this->fileSystemList)) {
                $n = 0;
                foreach ($this->fileSystemList as $item) {
                    $res['FileSystemList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAvailableFileSystemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemList'])) {
            if (!empty($map['FileSystemList'])) {
                $model->fileSystemList = [];
                $n                     = 0;
                foreach ($map['FileSystemList'] as $item) {
                    $model->fileSystemList[$n++] = null !== $item ? fileSystemList::fromMap($item) : $item;
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
