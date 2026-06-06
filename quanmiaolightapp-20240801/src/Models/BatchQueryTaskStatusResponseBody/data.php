<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\BatchQueryTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\BatchQueryTaskStatusResponseBody\data\taskStatusList;

class data extends Model
{
    /**
     * @var taskStatusList[]
     */
    public $taskStatusList;
    protected $_name = [
        'taskStatusList' => 'taskStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->taskStatusList)) {
            Model::validateArray($this->taskStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskStatusList) {
            if (\is_array($this->taskStatusList)) {
                $res['taskStatusList'] = [];
                $n1 = 0;
                foreach ($this->taskStatusList as $item1) {
                    $res['taskStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['taskStatusList'])) {
            if (!empty($map['taskStatusList'])) {
                $model->taskStatusList = [];
                $n1 = 0;
                foreach ($map['taskStatusList'] as $item1) {
                    $model->taskStatusList[$n1] = taskStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
