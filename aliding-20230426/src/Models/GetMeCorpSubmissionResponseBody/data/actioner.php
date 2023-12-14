<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionResponseBody\data;

use AlibabaCloud\Tea\Model;

class actioner extends Model
{
    /**
     * @example 某研究部
     *
     * @var string
     */
    public $buName;

    /**
     * @example abc@alimail.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 正式
     *
     * @var string
     */
    public $employeeType;

    /**
     * @example official
     *
     * @var string
     */
    public $employeeTypeInformation;

    /**
     * @example 123311221
     *
     * @var string
     */
    public $humanResourceGroupWorkNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSystemAdmin;

    /**
     * @example P7
     *
     * @var string
     */
    public $level;

    /**
     * @example 请购单
     *
     * @var string
     */
    public $name;

    /**
     * @example 与心
     *
     * @var string
     */
    public $nickName;

    /**
     * @example o-YDJKINSxxx
     *
     * @var string
     */
    public $orderNumber;

    /**
     * @example https://abc.com/a.png
     *
     * @var string
     */
    public $personalPhoto;

    /**
     * @example https://oss/zhangsan.png
     *
     * @var string
     */
    public $personalPhotoUrl;

    /**
     * @example XIAOHONG
     *
     * @var string
     */
    public $pinyinNameAll;

    /**
     * @example xiaohong
     *
     * @var string
     */
    public $pinyinNickName;

    /**
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @example manager123
     *
     * @var string
     */
    public $superUserId;

    /**
     * @example wang123
     *
     * @var string
     */
    public $tbWang;

    /**
     * @example manager123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'buName'                       => 'BuName',
        'email'                        => 'Email',
        'employeeType'                 => 'EmployeeType',
        'employeeTypeInformation'      => 'EmployeeTypeInformation',
        'humanResourceGroupWorkNumber' => 'HumanResourceGroupWorkNumber',
        'isSystemAdmin'                => 'IsSystemAdmin',
        'level'                        => 'Level',
        'name'                         => 'Name',
        'nickName'                     => 'NickName',
        'orderNumber'                  => 'OrderNumber',
        'personalPhoto'                => 'PersonalPhoto',
        'personalPhotoUrl'             => 'PersonalPhotoUrl',
        'pinyinNameAll'                => 'PinyinNameAll',
        'pinyinNickName'               => 'PinyinNickName',
        'state'                        => 'State',
        'superUserId'                  => 'SuperUserId',
        'tbWang'                       => 'TbWang',
        'userId'                       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buName) {
            $res['BuName'] = $this->buName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->employeeType) {
            $res['EmployeeType'] = $this->employeeType;
        }
        if (null !== $this->employeeTypeInformation) {
            $res['EmployeeTypeInformation'] = $this->employeeTypeInformation;
        }
        if (null !== $this->humanResourceGroupWorkNumber) {
            $res['HumanResourceGroupWorkNumber'] = $this->humanResourceGroupWorkNumber;
        }
        if (null !== $this->isSystemAdmin) {
            $res['IsSystemAdmin'] = $this->isSystemAdmin;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->personalPhoto) {
            $res['PersonalPhoto'] = $this->personalPhoto;
        }
        if (null !== $this->personalPhotoUrl) {
            $res['PersonalPhotoUrl'] = $this->personalPhotoUrl;
        }
        if (null !== $this->pinyinNameAll) {
            $res['PinyinNameAll'] = $this->pinyinNameAll;
        }
        if (null !== $this->pinyinNickName) {
            $res['PinyinNickName'] = $this->pinyinNickName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->superUserId) {
            $res['SuperUserId'] = $this->superUserId;
        }
        if (null !== $this->tbWang) {
            $res['TbWang'] = $this->tbWang;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actioner
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuName'])) {
            $model->buName = $map['BuName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmployeeType'])) {
            $model->employeeType = $map['EmployeeType'];
        }
        if (isset($map['EmployeeTypeInformation'])) {
            $model->employeeTypeInformation = $map['EmployeeTypeInformation'];
        }
        if (isset($map['HumanResourceGroupWorkNumber'])) {
            $model->humanResourceGroupWorkNumber = $map['HumanResourceGroupWorkNumber'];
        }
        if (isset($map['IsSystemAdmin'])) {
            $model->isSystemAdmin = $map['IsSystemAdmin'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['PersonalPhoto'])) {
            $model->personalPhoto = $map['PersonalPhoto'];
        }
        if (isset($map['PersonalPhotoUrl'])) {
            $model->personalPhotoUrl = $map['PersonalPhotoUrl'];
        }
        if (isset($map['PinyinNameAll'])) {
            $model->pinyinNameAll = $map['PinyinNameAll'];
        }
        if (isset($map['PinyinNickName'])) {
            $model->pinyinNickName = $map['PinyinNickName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SuperUserId'])) {
            $model->superUserId = $map['SuperUserId'];
        }
        if (isset($map['TbWang'])) {
            $model->tbWang = $map['TbWang'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
