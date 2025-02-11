<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actionData;
    /**
     * @var string
     */
    public $actionTime;
    /**
     * @var string
     */
    public $actionType;
    /**
     * @var string
     */
    public $projectCreateTime;
    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'actionData'        => 'ActionData',
        'actionTime'        => 'ActionTime',
        'actionType'        => 'ActionType',
        'projectCreateTime' => 'ProjectCreateTime',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
        }

        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }

        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->projectCreateTime) {
            $res['ProjectCreateTime'] = $this->projectCreateTime;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }

        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }

        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['ProjectCreateTime'])) {
            $model->projectCreateTime = $map['ProjectCreateTime'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
