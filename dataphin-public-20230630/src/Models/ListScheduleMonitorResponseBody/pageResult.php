<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList;

class pageResult extends Model
{
    /**
     * @var monitorItemList[]
     */
    public $monitorItemList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'monitorItemList' => 'MonitorItemList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->monitorItemList)) {
            Model::validateArray($this->monitorItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorItemList) {
            if (\is_array($this->monitorItemList)) {
                $res['MonitorItemList'] = [];
                $n1 = 0;
                foreach ($this->monitorItemList as $item1) {
                    $res['MonitorItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MonitorItemList'])) {
            if (!empty($map['MonitorItemList'])) {
                $model->monitorItemList = [];
                $n1 = 0;
                foreach ($map['MonitorItemList'] as $item1) {
                    $model->monitorItemList[$n1] = monitorItemList::fromMap($item1);
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
