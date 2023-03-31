<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody\folderPagingResult\folders;
use AlibabaCloud\Tea\Model;

class folderPagingResult extends Model
{
    /**
     * @description The folders.
     *
     * @var folders[]
     */
    public $folders;

    /**
     * @description The page number of the returned page. The value of this parameter is the same as that of the PageNumber parameter in the request.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'folders'    => 'Folders',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folders) {
            $res['Folders'] = [];
            if (null !== $this->folders && \is_array($this->folders)) {
                $n = 0;
                foreach ($this->folders as $item) {
                    $res['Folders'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return folderPagingResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Folders'])) {
            if (!empty($map['Folders'])) {
                $model->folders = [];
                $n              = 0;
                foreach ($map['Folders'] as $item) {
                    $model->folders[$n++] = null !== $item ? folders::fromMap($item) : $item;
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
