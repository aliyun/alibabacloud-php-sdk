<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeResponseBody\jobInfoList;

use AlibabaCloud\Tea\Model;

class subJobInfoList extends Model
{
    /**
     * @description 子任务类型
     *
     * @var string
     */
    public $subJobType;

    /**
     * @description 子任务时长
     *
     * @var int
     */
    public $subJobDuration;
    protected $_name = [
        'subJobType'     => 'SubJobType',
        'subJobDuration' => 'SubJobDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subJobType) {
            $res['SubJobType'] = $this->subJobType;
        }
        if (null !== $this->subJobDuration) {
            $res['SubJobDuration'] = $this->subJobDuration;
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
        if (isset($map['SubJobType'])) {
            $model->subJobType = $map['SubJobType'];
        }
        if (isset($map['SubJobDuration'])) {
            $model->subJobDuration = $map['SubJobDuration'];
        }

        return $model;
    }
}
