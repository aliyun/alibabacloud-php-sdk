<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ModifyContacterRequest extends Model
{
    /**
     * @var string
     */
    public $contacterAddress;

    /**
     * @var string
     */
    public $contacterDingding;

    /**
     * @var string
     */
    public $contacterEmail;

    /**
     * @var int
     */
    public $contacterId;

    /**
     * @var string
     */
    public $contacterMobile;

    /**
     * @var string
     */
    public $contacterName;

    /**
     * @var string
     */
    public $contacterPosition;

    /**
     * @var string
     */
    public $contacterStaffNo;

    /**
     * @var string
     */
    public $contacterType;

    /**
     * @var string
     */
    public $contacterWangwang;

    /**
     * @var bool
     */
    public $emailConfirmed;

    /**
     * @var bool
     */
    public $mobileConfirmed;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'contacterAddress' => 'ContacterAddress',
        'contacterDingding' => 'ContacterDingding',
        'contacterEmail' => 'ContacterEmail',
        'contacterId' => 'ContacterId',
        'contacterMobile' => 'ContacterMobile',
        'contacterName' => 'ContacterName',
        'contacterPosition' => 'ContacterPosition',
        'contacterStaffNo' => 'ContacterStaffNo',
        'contacterType' => 'ContacterType',
        'contacterWangwang' => 'ContacterWangwang',
        'emailConfirmed' => 'EmailConfirmed',
        'mobileConfirmed' => 'MobileConfirmed',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacterAddress) {
            $res['ContacterAddress'] = $this->contacterAddress;
        }

        if (null !== $this->contacterDingding) {
            $res['ContacterDingding'] = $this->contacterDingding;
        }

        if (null !== $this->contacterEmail) {
            $res['ContacterEmail'] = $this->contacterEmail;
        }

        if (null !== $this->contacterId) {
            $res['ContacterId'] = $this->contacterId;
        }

        if (null !== $this->contacterMobile) {
            $res['ContacterMobile'] = $this->contacterMobile;
        }

        if (null !== $this->contacterName) {
            $res['ContacterName'] = $this->contacterName;
        }

        if (null !== $this->contacterPosition) {
            $res['ContacterPosition'] = $this->contacterPosition;
        }

        if (null !== $this->contacterStaffNo) {
            $res['ContacterStaffNo'] = $this->contacterStaffNo;
        }

        if (null !== $this->contacterType) {
            $res['ContacterType'] = $this->contacterType;
        }

        if (null !== $this->contacterWangwang) {
            $res['ContacterWangwang'] = $this->contacterWangwang;
        }

        if (null !== $this->emailConfirmed) {
            $res['EmailConfirmed'] = $this->emailConfirmed;
        }

        if (null !== $this->mobileConfirmed) {
            $res['MobileConfirmed'] = $this->mobileConfirmed;
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
        if (isset($map['ContacterAddress'])) {
            $model->contacterAddress = $map['ContacterAddress'];
        }

        if (isset($map['ContacterDingding'])) {
            $model->contacterDingding = $map['ContacterDingding'];
        }

        if (isset($map['ContacterEmail'])) {
            $model->contacterEmail = $map['ContacterEmail'];
        }

        if (isset($map['ContacterId'])) {
            $model->contacterId = $map['ContacterId'];
        }

        if (isset($map['ContacterMobile'])) {
            $model->contacterMobile = $map['ContacterMobile'];
        }

        if (isset($map['ContacterName'])) {
            $model->contacterName = $map['ContacterName'];
        }

        if (isset($map['ContacterPosition'])) {
            $model->contacterPosition = $map['ContacterPosition'];
        }

        if (isset($map['ContacterStaffNo'])) {
            $model->contacterStaffNo = $map['ContacterStaffNo'];
        }

        if (isset($map['ContacterType'])) {
            $model->contacterType = $map['ContacterType'];
        }

        if (isset($map['ContacterWangwang'])) {
            $model->contacterWangwang = $map['ContacterWangwang'];
        }

        if (isset($map['EmailConfirmed'])) {
            $model->emailConfirmed = $map['EmailConfirmed'];
        }

        if (isset($map['MobileConfirmed'])) {
            $model->mobileConfirmed = $map['MobileConfirmed'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
