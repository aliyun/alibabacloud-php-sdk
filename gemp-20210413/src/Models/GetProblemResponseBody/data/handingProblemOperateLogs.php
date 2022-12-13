<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class handingProblemOperateLogs extends Model
{
    /**
     * @example 取消故障
     *
     * @var string
     */
    public $actionName;

    /**
     * @example 2010-03-09 15:53:45
     *
     * @var string
     */
    public $actionTime;

    /**
     * @example 王宇
     *
     * @var string
     */
    public $operator;

    /**
     * @example 233
     *
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $userIsValid;
    protected $_name = [
        'actionName'  => 'actionName',
        'actionTime'  => 'actionTime',
        'operator'    => 'operator',
        'userId'      => 'userId',
        'userIsValid' => 'userIsValid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['actionName'] = $this->actionName;
        }
        if (null !== $this->actionTime) {
            $res['actionTime'] = $this->actionTime;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userIsValid) {
            $res['userIsValid'] = $this->userIsValid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handingProblemOperateLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionName'])) {
            $model->actionName = $map['actionName'];
        }
        if (isset($map['actionTime'])) {
            $model->actionTime = $map['actionTime'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userIsValid'])) {
            $model->userIsValid = $map['userIsValid'];
        }

        return $model;
    }
}
