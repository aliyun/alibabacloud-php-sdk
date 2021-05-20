<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody\data\fileVersions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var fileVersions[]
     */
    public $fileVersions;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'fileVersions' => 'FileVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->fileVersions) {
            $res['FileVersions'] = [];
            if (null !== $this->fileVersions && \is_array($this->fileVersions)) {
                $n = 0;
                foreach ($this->fileVersions as $item) {
                    $res['FileVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FileVersions'])) {
            if (!empty($map['FileVersions'])) {
                $model->fileVersions = [];
                $n                   = 0;
                foreach ($map['FileVersions'] as $item) {
                    $model->fileVersions[$n++] = null !== $item ? fileVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
