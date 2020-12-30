<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails;

use AlibabaCloud\Tea\Model;

class opLogDetail extends Model
{
    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $opContent;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $opTime;
    protected $_name = [
        'module'    => 'Module',
        'database'  => 'Database',
        'userId'    => 'UserId',
        'opContent' => 'OpContent',
        'userNick'  => 'UserNick',
        'orderId'   => 'OrderId',
        'opTime'    => 'OpTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->opContent) {
            $res['OpContent'] = $this->opContent;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->opTime) {
            $res['OpTime'] = $this->opTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opLogDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OpContent'])) {
            $model->opContent = $map['OpContent'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OpTime'])) {
            $model->opTime = $map['OpTime'];
        }

        return $model;
    }
}
