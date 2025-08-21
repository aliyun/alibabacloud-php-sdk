<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload;

use AlibabaCloud\Dara\Model;

class actionDTOs extends Model
{
    /**
     * @var mixed[]
     */
    public $customAction;
    protected $_name = [
        'customAction' => 'customAction',
    ];

    public function validate()
    {
        if (\is_array($this->customAction)) {
            Model::validateArray($this->customAction);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAction) {
            if (\is_array($this->customAction)) {
                $res['customAction'] = [];
                foreach ($this->customAction as $key1 => $value1) {
                    $res['customAction'][$key1] = $value1;
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
        if (isset($map['customAction'])) {
            if (!empty($map['customAction'])) {
                $model->customAction = [];
                foreach ($map['customAction'] as $key1 => $value1) {
                    $model->customAction[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
