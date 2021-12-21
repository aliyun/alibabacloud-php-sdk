<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeResponseBody\jobInfoList;

use AlibabaCloud\Tea\Model;

class subJobInfoList extends Model
{
    /**
     * @description 子任务时长
     *
     * @var int
     */
    public $subJobDuration;

    /**
     * @description 子任务类型
     *
     * @var string
     */
    public $subJobType;
    protected $_name = [
        'subJobDuration' => 'SubJobDuration',
        'subJobType'     => 'SubJobType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subJobDuration) {
            $res['SubJobDuration'] = $this->subJobDuration;
        }
        if (null !== $this->subJobType) {
            $res['SubJobType'] = $this->subJobType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subJobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubJobDuration'])) {
            $model->subJobDuration = $map['SubJobDuration'];
        }
        if (isset($map['SubJobType'])) {
            $model->subJobType = $map['SubJobType'];
        }

        return $model;
    }
}
