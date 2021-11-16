<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class cancelProblemOperateLogs extends Model
{
    /**
     * @description 动作名称
     *
     * @var string
     */
    public $actionName;

    /**
     * @description 操作时间
     *
     * @var string
     */
    public $actionTime;

    /**
     * @description 操作人
     *
     * @var string
     */
    public $operator;

    /**
     * @description 用户ID
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'actionName' => 'actionName',
        'actionTime' => 'actionTime',
        'operator'   => 'operator',
        'userId'     => 'userId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cancelProblemOperateLogs
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

        return $model;
    }
}
