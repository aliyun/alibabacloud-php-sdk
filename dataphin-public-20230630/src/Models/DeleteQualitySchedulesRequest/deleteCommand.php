<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteQualitySchedulesRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var int[]
     */
    public $scheduleIdList;
    protected $_name = [
        'scheduleIdList' => 'ScheduleIdList',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleIdList)) {
            Model::validateArray($this->scheduleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduleIdList) {
            if (\is_array($this->scheduleIdList)) {
                $res['ScheduleIdList'] = [];
                $n1 = 0;
                foreach ($this->scheduleIdList as $item1) {
                    $res['ScheduleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ScheduleIdList'])) {
            if (!empty($map['ScheduleIdList'])) {
                $model->scheduleIdList = [];
                $n1 = 0;
                foreach ($map['ScheduleIdList'] as $item1) {
                    $model->scheduleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
