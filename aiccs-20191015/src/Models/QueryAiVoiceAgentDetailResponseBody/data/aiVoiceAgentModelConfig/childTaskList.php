<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

use AlibabaCloud\Dara\Model;

class childTaskList extends Model
{
    /**
     * @var string
     */
    public $childTaskDescription;

    /**
     * @var string
     */
    public $childTaskName;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'childTaskDescription' => 'ChildTaskDescription',
        'childTaskName' => 'ChildTaskName',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childTaskDescription) {
            $res['ChildTaskDescription'] = $this->childTaskDescription;
        }

        if (null !== $this->childTaskName) {
            $res['ChildTaskName'] = $this->childTaskName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ChildTaskDescription'])) {
            $model->childTaskDescription = $map['ChildTaskDescription'];
        }

        if (isset($map['ChildTaskName'])) {
            $model->childTaskName = $map['ChildTaskName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
