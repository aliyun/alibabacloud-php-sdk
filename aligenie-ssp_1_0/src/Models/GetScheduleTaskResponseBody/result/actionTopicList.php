<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customAction) {
            $res['CustomAction'] = $this->customAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionTopicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomAction'])) {
            $model->customAction = $map['CustomAction'];
        }

        return $model;
    }
}
