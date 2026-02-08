<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SubmitMaterialTaskRequest extends Model
{
    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskParam' => 'TaskParam',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
