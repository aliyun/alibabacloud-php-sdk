<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListLhTaskFlowAndScenarioRequest extends Model
{
    /**
     * @description The name of the user who creates the workspace.
     *
     * @example 24
     *
     * @var int
     */
    public $spaceId;

    /**
     * @description The ID of the workspace. You can call the [GetLhSpaceByName](~~424379~~) operation to obtain the workspace ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The user ID of the task flow owner.
     *
     * @example 51****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'spaceId' => 'SpaceId',
        'tid'     => 'Tid',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLhTaskFlowAndScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
