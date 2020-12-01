<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse\accountSecurityPracticeInfo;

use AlibabaCloud\Tea\Model;

class accountSecurityPracticeUserInfo extends Model
{
    /**
     * @var bool
     */
    public $bindMfa;

    /**
     * @var string
     */
    public $subUserPwdLevel;

    /**
     * @var int
     */
    public $rootWithAccessKey;

    /**
     * @var int
     */
    public $oldAkNum;

    /**
     * @var int
     */
    public $unusedAkNum;

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
    public $subUserWithOldAccessKey;

    /**
     * @var int
     */
    public $subUserWithUnusedAccessKey;
    protected $_name = [
        'bindMfa'                    => 'BindMfa',
        'subUserPwdLevel'            => 'SubUserPwdLevel',
        'rootWithAccessKey'          => 'RootWithAccessKey',
        'oldAkNum'                   => 'OldAkNum',
        'unusedAkNum'                => 'UnusedAkNum',
        'subUser'                    => 'SubUser',
        'subUserBindMfa'             => 'SubUserBindMfa',
        'subUserWithOldAccessKey'    => 'SubUserWithOldAccessKey',
        'subUserWithUnusedAccessKey' => 'SubUserWithUnusedAccessKey',
    ];

    public function validate()
    {
        Model::validateRequired('bindMfa', $this->bindMfa, true);
        Model::validateRequired('subUserPwdLevel', $this->subUserPwdLevel, true);
        Model::validateRequired('rootWithAccessKey', $this->rootWithAccessKey, true);
        Model::validateRequired('oldAkNum', $this->oldAkNum, true);
        Model::validateRequired('unusedAkNum', $this->unusedAkNum, true);
        Model::validateRequired('subUser', $this->subUser, true);
        Model::validateRequired('subUserBindMfa', $this->subUserBindMfa, true);
        Model::validateRequired('subUserWithOldAccessKey', $this->subUserWithOldAccessKey, true);
        Model::validateRequired('subUserWithUnusedAccessKey', $this->subUserWithUnusedAccessKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindMfa) {
            $res['BindMfa'] = $this->bindMfa;
        }
        if (null !== $this->subUserPwdLevel) {
            $res['SubUserPwdLevel'] = $this->subUserPwdLevel;
        }
        if (null !== $this->rootWithAccessKey) {
            $res['RootWithAccessKey'] = $this->rootWithAccessKey;
        }
        if (null !== $this->oldAkNum) {
            $res['OldAkNum'] = $this->oldAkNum;
        }
        if (null !== $this->unusedAkNum) {
            $res['UnusedAkNum'] = $this->unusedAkNum;
        }
        if (null !== $this->subUser) {
            $res['SubUser'] = $this->subUser;
        }
        if (null !== $this->subUserBindMfa) {
            $res['SubUserBindMfa'] = $this->subUserBindMfa;
        }
        if (null !== $this->subUserWithOldAccessKey) {
            $res['SubUserWithOldAccessKey'] = $this->subUserWithOldAccessKey;
        }
        if (null !== $this->subUserWithUnusedAccessKey) {
            $res['SubUserWithUnusedAccessKey'] = $this->subUserWithUnusedAccessKey;
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
        if (isset($map['BindMfa'])) {
            $model->bindMfa = $map['BindMfa'];
        }
        if (isset($map['SubUserPwdLevel'])) {
            $model->subUserPwdLevel = $map['SubUserPwdLevel'];
        }
        if (isset($map['RootWithAccessKey'])) {
            $model->rootWithAccessKey = $map['RootWithAccessKey'];
        }
        if (isset($map['OldAkNum'])) {
            $model->oldAkNum = $map['OldAkNum'];
        }
        if (isset($map['UnusedAkNum'])) {
            $model->unusedAkNum = $map['UnusedAkNum'];
        }
        if (isset($map['SubUser'])) {
            $model->subUser = $map['SubUser'];
        }
        if (isset($map['SubUserBindMfa'])) {
            $model->subUserBindMfa = $map['SubUserBindMfa'];
        }
        if (isset($map['SubUserWithOldAccessKey'])) {
            $model->subUserWithOldAccessKey = $map['SubUserWithOldAccessKey'];
        }
        if (isset($map['SubUserWithUnusedAccessKey'])) {
            $model->subUserWithUnusedAccessKey = $map['SubUserWithUnusedAccessKey'];
        }

        return $model;
    }
}
