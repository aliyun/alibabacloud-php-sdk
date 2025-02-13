<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponseBody\data\dumpMetaList;

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
        if (\is_array($this->dumpMetaList)) {
            Model::validateArray($this->dumpMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dumpMetaList) {
            if (\is_array($this->dumpMetaList)) {
                $res['DumpMetaList'] = [];
                $n1                  = 0;
                foreach ($this->dumpMetaList as $item1) {
                    $res['DumpMetaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DumpMetaList'])) {
            if (!empty($map['DumpMetaList'])) {
                $model->dumpMetaList = [];
                $n1                  = 0;
                foreach ($map['DumpMetaList'] as $item1) {
                    $model->dumpMetaList[$n1++] = dumpMetaList::fromMap($item1);
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
