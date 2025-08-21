<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class actionTopicList extends Model
{
    /**
     * @var mixed[]
     */
    public $customAction;
    protected $_name = [
        'customAction' => 'CustomAction',
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
                $res['CustomAction'] = [];
                foreach ($this->customAction as $key1 => $value1) {
                    $res['CustomAction'][$key1] = $value1;
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
        if (isset($map['CustomAction'])) {
            if (!empty($map['CustomAction'])) {
                $model->customAction = [];
                foreach ($map['CustomAction'] as $key1 => $value1) {
                    $model->customAction[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
