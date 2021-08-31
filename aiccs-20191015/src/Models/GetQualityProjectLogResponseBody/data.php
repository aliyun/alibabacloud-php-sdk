<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $projectCreateTime;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $actionTime;

    /**
     * @var string
     */
    public $actionData;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'projectCreateTime' => 'ProjectCreateTime',
        'actionType'        => 'ActionType',
        'actionTime'        => 'ActionTime',
        'actionData'        => 'ActionData',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectCreateTime) {
            $res['ProjectCreateTime'] = $this->projectCreateTime;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectCreateTime'])) {
            $model->projectCreateTime = $map['ProjectCreateTime'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
