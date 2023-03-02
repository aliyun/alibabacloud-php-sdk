<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponseBody\data\folders;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the folder.
     *
     * @var folders[]
     */
    public $folders;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries on the returned page.
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
     * @return data
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
