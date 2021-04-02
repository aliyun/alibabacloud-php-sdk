<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse\accountSecurityPracticeInfo;

use AlibabaCloud\Tea\Model;

class accountSecurityPracticeUserInfo extends Model
{
    /**
     * @var int
     */
    public $subUser;

    /**
     * @var int
     */
    public $subUserBindMfa;

    /**
     * @var int
     */
    public $subUserWithUnusedAccessKey;

    /**
     * @var int
     */
    public $rootWithAccessKey;

    /**
     * @var int
     */
    public $subUserWithOldAccessKey;

    /**
     * @var string
     */
    public $subUserPwdLevel;

    /**
     * @var int
     */
    public $oldAkNum;

    /**
     * @var int
     */
    public $unusedAkNum;

    /**
     * @var bool
     */
    public $bindMfa;
    protected $_name = [
        'subUser'                    => 'SubUser',
        'subUserBindMfa'             => 'SubUserBindMfa',
        'subUserWithUnusedAccessKey' => 'SubUserWithUnusedAccessKey',
        'rootWithAccessKey'          => 'RootWithAccessKey',
        'subUserWithOldAccessKey'    => 'SubUserWithOldAccessKey',
        'subUserPwdLevel'            => 'SubUserPwdLevel',
        'oldAkNum'                   => 'OldAkNum',
        'unusedAkNum'                => 'UnusedAkNum',
        'bindMfa'                    => 'BindMfa',
    ];

    public function validate()
    {
        Model::validateRequired('subUser', $this->subUser, true);
        Model::validateRequired('subUserBindMfa', $this->subUserBindMfa, true);
        Model::validateRequired('subUserWithUnusedAccessKey', $this->subUserWithUnusedAccessKey, true);
        Model::validateRequired('rootWithAccessKey', $this->rootWithAccessKey, true);
        Model::validateRequired('subUserWithOldAccessKey', $this->subUserWithOldAccessKey, true);
        Model::validateRequired('subUserPwdLevel', $this->subUserPwdLevel, true);
        Model::validateRequired('oldAkNum', $this->oldAkNum, true);
        Model::validateRequired('unusedAkNum', $this->unusedAkNum, true);
        Model::validateRequired('bindMfa', $this->bindMfa, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subUser) {
            $res['SubUser'] = $this->subUser;
        }
        if (null !== $this->subUserBindMfa) {
            $res['SubUserBindMfa'] = $this->subUserBindMfa;
        }
        if (null !== $this->subUserWithUnusedAccessKey) {
            $res['SubUserWithUnusedAccessKey'] = $this->subUserWithUnusedAccessKey;
        }
        if (null !== $this->rootWithAccessKey) {
            $res['RootWithAccessKey'] = $this->rootWithAccessKey;
        }
        if (null !== $this->subUserWithOldAccessKey) {
            $res['SubUserWithOldAccessKey'] = $this->subUserWithOldAccessKey;
        }
        if (null !== $this->subUserPwdLevel) {
            $res['SubUserPwdLevel'] = $this->subUserPwdLevel;
        }
        if (null !== $this->oldAkNum) {
            $res['OldAkNum'] = $this->oldAkNum;
        }
        if (null !== $this->unusedAkNum) {
            $res['UnusedAkNum'] = $this->unusedAkNum;
        }
        if (null !== $this->bindMfa) {
            $res['BindMfa'] = $this->bindMfa;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountSecurityPracticeUserInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubUser'])) {
            $model->subUser = $map['SubUser'];
        }
        if (isset($map['SubUserBindMfa'])) {
            $model->subUserBindMfa = $map['SubUserBindMfa'];
        }
        if (isset($map['SubUserWithUnusedAccessKey'])) {
            $model->subUserWithUnusedAccessKey = $map['SubUserWithUnusedAccessKey'];
        }
        if (isset($map['RootWithAccessKey'])) {
            $model->rootWithAccessKey = $map['RootWithAccessKey'];
        }
        if (isset($map['SubUserWithOldAccessKey'])) {
            $model->subUserWithOldAccessKey = $map['SubUserWithOldAccessKey'];
        }
        if (isset($map['SubUserPwdLevel'])) {
            $model->subUserPwdLevel = $map['SubUserPwdLevel'];
        }
        if (isset($map['OldAkNum'])) {
            $model->oldAkNum = $map['OldAkNum'];
        }
        if (isset($map['UnusedAkNum'])) {
            $model->unusedAkNum = $map['UnusedAkNum'];
        }
        if (isset($map['BindMfa'])) {
            $model->bindMfa = $map['BindMfa'];
        }

        return $model;
    }
}
