<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails;

use AlibabaCloud\Dara\Model;

class opLogDetail extends Model
{
    /**
     * @var string
     */
    public $database;
    /**
     * @var string
     */
    public $module;
    /**
     * @var string
     */
    public $opContent;
    /**
     * @var string
     */
    public $opTime;
    /**
     * @var int
     */
    public $opUserId;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'database'  => 'Database',
        'module'    => 'Module',
        'opContent' => 'OpContent',
        'opTime'    => 'OpTime',
        'opUserId'  => 'OpUserId',
        'orderId'   => 'OrderId',
        'userId'    => 'UserId',
        'userNick'  => 'UserNick',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->opContent) {
            $res['OpContent'] = $this->opContent;
        }

        if (null !== $this->opTime) {
            $res['OpTime'] = $this->opTime;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['OpContent'])) {
            $model->opContent = $map['OpContent'];
        }

        if (isset($map['OpTime'])) {
            $model->opTime = $map['OpTime'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
