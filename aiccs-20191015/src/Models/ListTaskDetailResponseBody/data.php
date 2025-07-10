<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody\data\record;

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
     * @var record[]
     */
    public $record;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'record' => 'Record',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->record)) {
            Model::validateArray($this->record);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->record) {
            if (\is_array($this->record)) {
                $res['Record'] = [];
                $n1 = 0;
                foreach ($this->record as $item1) {
                    $res['Record'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Record'])) {
            if (!empty($map['Record'])) {
                $model->record = [];
                $n1 = 0;
                foreach ($map['Record'] as $item1) {
                    $model->record[$n1] = record::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
