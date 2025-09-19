<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponseBody\root\recordList;

class root extends Model
{
    /**
     * @var recordList[]
     */
    public $recordList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'recordList' => 'RecordList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recordList)) {
            Model::validateArray($this->recordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordList) {
            if (\is_array($this->recordList)) {
                $res['RecordList'] = [];
                $n1 = 0;
                foreach ($this->recordList as $item1) {
                    $res['RecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n1 = 0;
                foreach ($map['RecordList'] as $item1) {
                    $model->recordList[$n1] = recordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
