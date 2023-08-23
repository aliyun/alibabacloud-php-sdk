<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload;

use AlibabaCloud\Tea\Model;

class actionDTOs extends Model
{
    /**
     * @example {"k1":"v1","k2":{"key":1}}
     *
     * @var mixed[]
     */
    public $customAction;
    protected $_name = [
        'customAction' => 'customAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customAction) {
            $res['customAction'] = $this->customAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionDTOs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customAction'])) {
            $model->customAction = $map['customAction'];
        }

        return $model;
    }
}
