<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionResponseBody\data;

use AlibabaCloud\Dara\Model;

class actioner extends Model
{
    /**
     * @var string
     */
    public $buName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $employeeType;
    /**
     * @var string
     */
    public $employeeTypeInformation;
    /**
     * @var string
     */
    public $humanResourceGroupWorkNumber;
    /**
     * @var bool
     */
    public $isSystemAdmin;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nickName;
    /**
     * @var string
     */
    public $orderNumber;
    /**
     * @var string
     */
    public $personalPhoto;
    /**
     * @var string
     */
    public $personalPhotoUrl;
    /**
     * @var string
     */
    public $pinyinNameAll;
    /**
     * @var string
     */
    public $pinyinNickName;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $superUserId;
    /**
     * @var string
     */
    public $tbWang;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
