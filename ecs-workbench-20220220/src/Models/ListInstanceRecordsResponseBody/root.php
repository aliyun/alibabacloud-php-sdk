<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponseBody;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponseBody\root\recordList;
use AlibabaCloud\Tea\Model;

class root extends Model
{
    /**
     * @var recordList[]
     */
    public $recordList;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'recordList' => 'RecordList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordList) {
            $res['RecordList'] = [];
            if (null !== $this->recordList && \is_array($this->recordList)) {
                $n = 0;
                foreach ($this->recordList as $item) {
                    $res['RecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return root
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n                 = 0;
                foreach ($map['RecordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? recordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
