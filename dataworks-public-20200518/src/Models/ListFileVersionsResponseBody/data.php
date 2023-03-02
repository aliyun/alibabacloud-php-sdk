<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody\data\fileVersions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the file version.
     *
     * @var fileVersions[]
     */
    public $fileVersions;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fileVersions' => 'FileVersions',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileVersions) {
            $res['FileVersions'] = [];
            if (null !== $this->fileVersions && \is_array($this->fileVersions)) {
                $n = 0;
                foreach ($this->fileVersions as $item) {
                    $res['FileVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileVersions'])) {
            if (!empty($map['FileVersions'])) {
                $model->fileVersions = [];
                $n                   = 0;
                foreach ($map['FileVersions'] as $item) {
                    $model->fileVersions[$n++] = null !== $item ? fileVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
