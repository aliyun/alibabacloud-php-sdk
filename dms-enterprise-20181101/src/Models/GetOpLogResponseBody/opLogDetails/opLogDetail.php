<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails;

use AlibabaCloud\Tea\Model;

class opLogDetail extends Model
{
    /**
     * @description The endpoint of the database instance.
     *
     * >
     *
     *   This parameter is valid only for database instances of the LocalInstance type.
     *
     *   This parameter is valid only for operations on the functional modules related to tasks.
     *
     * @example dmstest_prod_database@dmstest.rds... [Test instance]
     *
     * @var string
     */
    public $database;

    /**
     * @description The functional module for which the operation log is queried.
     *
     * @example SECURITY_RULE
     *
     * @var string
     */
    public $module;

    /**
     * @description The details of the operation.
     *
     * @example SELECT * FROM `orders` \\n LIMIT 20
     *
     * @var string
     */
    public $opContent;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2022-03-28 16:45:19
     *
     * @var string
     */
    public $opTime;

    /**
     * @description The ID of the user who performed the operation.
     *
     * @example 51****
     *
     * @var int
     */
    public $opUserId;

    /**
     * @description The ID of the ticket or task.
     *
     * >  This parameter is valid only for operations on the functional modules related to tasks and the task management module in system management.
     *
     * @example 509****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 22275482072787****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The display name of the user.
     *
     * @example test_name
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'database' => 'Database',
        'module' => 'Module',
        'opContent' => 'OpContent',
        'opTime' => 'OpTime',
        'opUserId' => 'OpUserId',
        'orderId' => 'OrderId',
        'userId' => 'UserId',
        'userNick' => 'UserNick',
    ];

    public function validate(): void {}

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
