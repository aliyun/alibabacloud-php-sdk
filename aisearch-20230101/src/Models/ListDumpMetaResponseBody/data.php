<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ListDumpMetaResponseBody;

use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListDumpMetaResponseBody\data\dumpMetaList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dumpMetaList[]
     */
    public $dumpMetaList;

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
     * @example 2000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'dumpMetaList' => 'DumpMetaList',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'total'        => 'Total',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
