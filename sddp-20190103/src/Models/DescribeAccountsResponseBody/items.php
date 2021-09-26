<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponseBody\items\eventCount;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $dataInstance;

    /**
     * @var string
     */
    public $loginPolicyName;

    /**
     * @var int
     */
    public $accountTypeId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var int
     */
    public $firstLevelDepartId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $deleteStatus;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $roleNames;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $cellphoneNum;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $firstLevelDepartName;

    /**
     * @var int
     */
    public $loginDataTime;

    /**
     * @var string
     */
    public $telephoneNum;

    /**
     * @var string
     */
    public $activeStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var eventCount
     */
    public $eventCount;
    protected $_name = [
        'dataInstance'         => 'DataInstance',
        'loginPolicyName'      => 'LoginPolicyName',
        'accountTypeId'        => 'AccountTypeId',
        'loginName'            => 'LoginName',
        'firstLevelDepartId'   => 'FirstLevelDepartId',
        'createTime'           => 'CreateTime',
        'fullName'             => 'FullName',
        'deleteStatus'         => 'DeleteStatus',
        'userId'               => 'UserId',
        'aliUid'               => 'AliUid',
        'roleNames'            => 'RoleNames',
        'email'                => 'Email',
        'cellphoneNum'         => 'CellphoneNum',
        'instanceName'         => 'InstanceName',
        'firstLevelDepartName' => 'FirstLevelDepartName',
        'loginDataTime'        => 'LoginDataTime',
        'telephoneNum'         => 'TelephoneNum',
        'activeStatus'         => 'ActiveStatus',
        'id'                   => 'Id',
        'eventCount'           => 'EventCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInstance) {
            $res['DataInstance'] = $this->dataInstance;
        }
        if (null !== $this->loginPolicyName) {
            $res['LoginPolicyName'] = $this->loginPolicyName;
        }
        if (null !== $this->accountTypeId) {
            $res['AccountTypeId'] = $this->accountTypeId;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->firstLevelDepartId) {
            $res['FirstLevelDepartId'] = $this->firstLevelDepartId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->deleteStatus) {
            $res['DeleteStatus'] = $this->deleteStatus;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->cellphoneNum) {
            $res['CellphoneNum'] = $this->cellphoneNum;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->firstLevelDepartName) {
            $res['FirstLevelDepartName'] = $this->firstLevelDepartName;
        }
        if (null !== $this->loginDataTime) {
            $res['LoginDataTime'] = $this->loginDataTime;
        }
        if (null !== $this->telephoneNum) {
            $res['TelephoneNum'] = $this->telephoneNum;
        }
        if (null !== $this->activeStatus) {
            $res['ActiveStatus'] = $this->activeStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = null !== $this->eventCount ? $this->eventCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInstance'])) {
            $model->dataInstance = $map['DataInstance'];
        }
        if (isset($map['LoginPolicyName'])) {
            $model->loginPolicyName = $map['LoginPolicyName'];
        }
        if (isset($map['AccountTypeId'])) {
            $model->accountTypeId = $map['AccountTypeId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['FirstLevelDepartId'])) {
            $model->firstLevelDepartId = $map['FirstLevelDepartId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['DeleteStatus'])) {
            $model->deleteStatus = $map['DeleteStatus'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['RoleNames'])) {
            $model->roleNames = $map['RoleNames'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['CellphoneNum'])) {
            $model->cellphoneNum = $map['CellphoneNum'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['FirstLevelDepartName'])) {
            $model->firstLevelDepartName = $map['FirstLevelDepartName'];
        }
        if (isset($map['LoginDataTime'])) {
            $model->loginDataTime = $map['LoginDataTime'];
        }
        if (isset($map['TelephoneNum'])) {
            $model->telephoneNum = $map['TelephoneNum'];
        }
        if (isset($map['ActiveStatus'])) {
            $model->activeStatus = $map['ActiveStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = eventCount::fromMap($map['EventCount']);
        }

        return $model;
    }
}
