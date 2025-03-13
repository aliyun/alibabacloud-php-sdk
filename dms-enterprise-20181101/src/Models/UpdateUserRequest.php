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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description The maximum number of queries that can be performed each day.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @description The maximum number of rows that can be queried each day.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxResultCount;

    /**
     * @description The DingTalk ID or mobile number of the user.
     *
     * @example 188xxxxxxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The roles that the user assumes. For more information about the valid values, see the Request parameters section in the [UpdateUser](https://help.aliyun.com/document_detail/465812.html) topic.
     *
     * @example ADMIN,DBA
     *
     * @var string
     */
    public $roleNames;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The Alibaba Cloud unique ID (UID) of the user to update.
     *
     * This parameter is required.
     *
     * @example 123456789
     *
     * @var int
     */
    public $uid;

    /**
     * @description The UID of the String type. If you specify this parameter, the UID of the Long type is replaced.
     *
     * @example 322824****:dmstest.wu@A201***
     *
     * @var string
     */
    public $uidString;

    /**
     * @description The nickname of the user.
     *
     * @example test
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'maxExecuteCount' => 'MaxExecuteCount',
        'maxResultCount' => 'MaxResultCount',
        'mobile' => 'Mobile',
        'roleNames' => 'RoleNames',
        'tid' => 'Tid',
        'uid' => 'Uid',
        'uidString' => 'UidString',
        'userNick' => 'UserNick',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxExecuteCount) {
            $res['MaxExecuteCount'] = $this->maxExecuteCount;
        }
        if (null !== $this->maxResultCount) {
            $res['MaxResultCount'] = $this->maxResultCount;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->uidString) {
            $res['UidString'] = $this->uidString;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxExecuteCount'])) {
            $model->maxExecuteCount = $map['MaxExecuteCount'];
        }
        if (isset($map['MaxResultCount'])) {
            $model->maxResultCount = $map['MaxResultCount'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['RoleNames'])) {
            $model->roleNames = $map['RoleNames'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UidString'])) {
            $model->uidString = $map['UidString'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
