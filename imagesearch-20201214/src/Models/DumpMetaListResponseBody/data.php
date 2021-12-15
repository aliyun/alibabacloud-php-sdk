<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponseBody\data\dumpMetaList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dumpMetaList[]
     */
    public $dumpMetaList;

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
    protected $_name = [
        'dumpMetaList' => 'DumpMetaList',
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
        if (null !== $this->dumpMetaList) {
            $res['DumpMetaList'] = [];
            if (null !== $this->dumpMetaList && \is_array($this->dumpMetaList)) {
                $n = 0;
                foreach ($this->dumpMetaList as $item) {
                    $res['DumpMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DumpMetaList'])) {
            if (!empty($map['DumpMetaList'])) {
                $model->dumpMetaList = [];
                $n                   = 0;
                foreach ($map['DumpMetaList'] as $item) {
                    $model->dumpMetaList[$n++] = null !== $item ? dumpMetaList::fromMap($item) : $item;
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
