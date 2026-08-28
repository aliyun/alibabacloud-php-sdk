<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SubmitMaterialTaskRequest extends Model
{
    /**
     * @var string
     */
    public $bizGroupId;

    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'bizGroupId' => 'BizGroupId',
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
        if (null !== $this->bizGroupId) {
            $res['BizGroupId'] = $this->bizGroupId;
        }

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
        if (isset($map['BizGroupId'])) {
            $model->bizGroupId = $map['BizGroupId'];
        }

        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
