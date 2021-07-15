<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody\data\record;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var record[]
     */
    public $record;
    protected $_name = [
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
        'record'   => 'Record',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->record) {
            $res['Record'] = [];
            if (null !== $this->record && \is_array($this->record)) {
                $n = 0;
                foreach ($this->record as $item) {
                    $res['Record'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Record'])) {
            if (!empty($map['Record'])) {
                $model->record = [];
                $n             = 0;
                foreach ($map['Record'] as $item) {
                    $model->record[$n++] = null !== $item ? record::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
