<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsResponseBody\data\viewPoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2323ac73e174428a98c91097a59c67e0
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @example 观点
     *
     * @var string
     */
    public $attitude;

    /**
     * @example 2024-08-15 16:18:59
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 709806dd051042d5ab9de8bdbb3a64ca
     *
     * @var string
     */
    public $id;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 参数校验失败
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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
            $res['ViewPoints'] = [];
            if (null !== $this->viewPoints && \is_array($this->viewPoints)) {
                $n = 0;
                foreach ($this->viewPoints as $item) {
                    $res['ViewPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n = 0;
                foreach ($map['ViewPoints'] as $item) {
                    $model->viewPoints[$n++] = null !== $item ? viewPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
