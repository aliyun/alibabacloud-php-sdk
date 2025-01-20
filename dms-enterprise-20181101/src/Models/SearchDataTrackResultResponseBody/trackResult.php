<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult\eventList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult\tableInfoList;

class trackResult extends Model
{
    /**
     * @var eventList[]
     */
    public $eventList;
    /**
     * @var tableInfoList[]
     */
    public $tableInfoList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eventList'     => 'EventList',
        'tableInfoList' => 'TableInfoList',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->eventList)) {
            Model::validateArray($this->eventList);
        }
        if (\is_array($this->tableInfoList)) {
            Model::validateArray($this->tableInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['EventList'] = [];
                $n1               = 0;
                foreach ($this->eventList as $item1) {
                    $res['EventList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableInfoList) {
            if (\is_array($this->tableInfoList)) {
                $res['TableInfoList'] = [];
                $n1                   = 0;
                foreach ($this->tableInfoList as $item1) {
                    $res['TableInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n1               = 0;
                foreach ($map['EventList'] as $item1) {
                    $model->eventList[$n1++] = eventList::fromMap($item1);
                }
            }
        }

        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n1                   = 0;
                foreach ($map['TableInfoList'] as $item1) {
                    $model->tableInfoList[$n1++] = tableInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
