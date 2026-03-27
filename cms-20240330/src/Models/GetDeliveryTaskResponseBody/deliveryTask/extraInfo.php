<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskResponseBody\deliveryTask;

use AlibabaCloud\Dara\Model;

class extraInfo extends Model
{
    /**
     * @var string[]
     */
    public $taskNameList;
    protected $_name = [
        'taskNameList' => 'taskNameList',
    ];

    public function validate()
    {
        if (\is_array($this->taskNameList)) {
            Model::validateArray($this->taskNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskNameList) {
            if (\is_array($this->taskNameList)) {
                $res['taskNameList'] = [];
                $n1 = 0;
                foreach ($this->taskNameList as $item1) {
                    $res['taskNameList'][$n1] = $item1;
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
        if (isset($map['taskNameList'])) {
            if (!empty($map['taskNameList'])) {
                $model->taskNameList = [];
                $n1 = 0;
                foreach ($map['taskNameList'] as $item1) {
                    $model->taskNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
