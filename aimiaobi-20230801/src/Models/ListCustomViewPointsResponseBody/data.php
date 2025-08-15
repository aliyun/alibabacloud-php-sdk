<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsResponseBody\data\viewPoints;

class data extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $attitude;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var viewPoints[]
     */
    public $viewPoints;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'attitude' => 'Attitude',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'id' => 'Id',
        'status' => 'Status',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskStatus' => 'TaskStatus',
        'viewPoints' => 'ViewPoints',
    ];

    public function validate()
    {
        if (\is_array($this->viewPoints)) {
            Model::validateArray($this->viewPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->viewPoints) {
            if (\is_array($this->viewPoints)) {
                $res['ViewPoints'] = [];
                $n1 = 0;
                foreach ($this->viewPoints as $item1) {
                    $res['ViewPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['ViewPoints'])) {
            if (!empty($map['ViewPoints'])) {
                $model->viewPoints = [];
                $n1 = 0;
                foreach ($map['ViewPoints'] as $item1) {
                    $model->viewPoints[$n1] = viewPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
