<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeResponseBody\jobInfoList\subJobInfoList;
use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @description 日期时间戳
     *
     * @var int
     */
    public $dateTs;

    /**
     * @description 任务总时长,单位分钟
     *
     * @var int
     */
    public $duration;

    /**
     * @description 子任务信息列表
     *
     * @var subJobInfoList[]
     */
    public $subJobInfoList;
    protected $_name = [
        'dateTs'         => 'DateTs',
        'duration'       => 'Duration',
        'subJobInfoList' => 'SubJobInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateTs) {
            $res['DateTs'] = $this->dateTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->subJobInfoList) {
            $res['SubJobInfoList'] = [];
            if (null !== $this->subJobInfoList && \is_array($this->subJobInfoList)) {
                $n = 0;
                foreach ($this->subJobInfoList as $item) {
                    $res['SubJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateTs'])) {
            $model->dateTs = $map['DateTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['SubJobInfoList'])) {
            if (!empty($map['SubJobInfoList'])) {
                $model->subJobInfoList = [];
                $n                     = 0;
                foreach ($map['SubJobInfoList'] as $item) {
                    $model->subJobInfoList[$n++] = null !== $item ? subJobInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
