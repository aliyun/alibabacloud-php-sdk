<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskRequest;

use AlibabaCloud\Dara\Model;

class callTimeList extends Model
{
    /**
     * @var string[]
     */
    public $callTime;
    protected $_name = [
        'callTime' => 'CallTime',
    ];

    public function validate()
    {
        if (\is_array($this->callTime)) {
            Model::validateArray($this->callTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callTime) {
            if (\is_array($this->callTime)) {
                $res['CallTime'] = [];
                $n1 = 0;
                foreach ($this->callTime as $item1) {
                    $res['CallTime'][$n1++] = $item1;
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
        if (isset($map['CallTime'])) {
            if (!empty($map['CallTime'])) {
                $model->callTime = [];
                $n1 = 0;
                foreach ($map['CallTime'] as $item1) {
                    $model->callTime[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
