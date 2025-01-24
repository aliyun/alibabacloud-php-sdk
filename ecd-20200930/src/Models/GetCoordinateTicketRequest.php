<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetCoordinateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $coId;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'coId'      => 'CoId',
        'endUserId' => 'EndUserId',
        'regionId'  => 'RegionId',
        'taskId'    => 'TaskId',
        'userType'  => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coId) {
            $res['CoId'] = $this->coId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['CoId'])) {
            $model->coId = $map['CoId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
