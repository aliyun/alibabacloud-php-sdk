<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteOncallSchedulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $oncallScheduleIds;
    protected $_name = [
        'oncallScheduleIds' => 'oncallScheduleIds',
    ];

    public function validate()
    {
        if (\is_array($this->oncallScheduleIds)) {
            Model::validateArray($this->oncallScheduleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oncallScheduleIds) {
            if (\is_array($this->oncallScheduleIds)) {
                $res['oncallScheduleIds'] = [];
                $n1 = 0;
                foreach ($this->oncallScheduleIds as $item1) {
                    $res['oncallScheduleIds'][$n1] = $item1;
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
        if (isset($map['oncallScheduleIds'])) {
            if (!empty($map['oncallScheduleIds'])) {
                $model->oncallScheduleIds = [];
                $n1 = 0;
                foreach ($map['oncallScheduleIds'] as $item1) {
                    $model->oncallScheduleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
