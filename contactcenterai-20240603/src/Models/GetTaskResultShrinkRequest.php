<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class GetTaskResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $requiredFieldListShrink;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requiredFieldListShrink' => 'requiredFieldList',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requiredFieldListShrink) {
            $res['requiredFieldList'] = $this->requiredFieldListShrink;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['requiredFieldList'])) {
            $model->requiredFieldListShrink = $map['requiredFieldList'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
