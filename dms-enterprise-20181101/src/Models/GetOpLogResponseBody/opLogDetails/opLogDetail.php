<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails;

use AlibabaCloud\Tea\Model;

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
     * @example SELECT * FROM `orders` \n LIMIT 20
     *
     * @var string
     */
    public $opContent;

    /**
     * @example 2022-03-28 16:45:19
     *
     * @var string
     */
    public $opTime;

    /**
     * @example 51****
     *
     * @var int
     */
    public $opUserId;

    /**
     * @example 509****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 22275482072787****
     *
     * @var string
     */
    public $userId;

    /**
     * @example test_name
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return opLogDetail
     */
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
