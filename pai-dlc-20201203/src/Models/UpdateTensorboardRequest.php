<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class UpdateTensorboardRequest extends Model
{
    /**
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'maxRunningTimeMinutes' => 'MaxRunningTimeMinutes',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRunningTimeMinutes) {
            $res['MaxRunningTimeMinutes'] = $this->maxRunningTimeMinutes;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTensorboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRunningTimeMinutes'])) {
            $model->maxRunningTimeMinutes = $map['MaxRunningTimeMinutes'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
