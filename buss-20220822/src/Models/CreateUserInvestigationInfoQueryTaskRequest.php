<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class CreateUserInvestigationInfoQueryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $employeeId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dataType' => 'dataType',
        'employeeId' => 'employeeId',
        'endTime' => 'endTime',
        'ossFileName' => 'ossFileName',
        'startTime' => 'startTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->employeeId) {
            $res['employeeId'] = $this->employeeId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->ossFileName) {
            $res['ossFileName'] = $this->ossFileName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['employeeId'])) {
            $model->employeeId = $map['employeeId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['ossFileName'])) {
            $model->ossFileName = $map['ossFileName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
