<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UpdateFotaTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskUid;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'regionId' => 'RegionId',
        'taskUid' => 'TaskUid',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
