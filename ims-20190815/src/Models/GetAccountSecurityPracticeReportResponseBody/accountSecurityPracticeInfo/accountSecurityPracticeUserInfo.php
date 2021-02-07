<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo;

use AlibabaCloud\Tea\Model;

class accountSecurityPracticeUserInfo extends Model
{
    /**
     * @var int
     */
    public $unusedAkNum;

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
    public $subUser;

    /**
     * @var bool
     */
    public $bindMfa;

    /**
     * @var int
     */
    public $oldAkNum;

    /**
     * @var string
     */
    public $subUserPwdLevel;

    /**
     * @var int
     */
    public $subUserWithOldAccessKey;

    /**
     * @var int
     */
    public $subUserBindMfa;
    protected $_name = [
        'unusedAkNum'                => 'UnusedAkNum',
        'subUserWithUnusedAccessKey' => 'SubUserWithUnusedAccessKey',
        'rootWithAccessKey'          => 'RootWithAccessKey',
        'subUser'                    => 'SubUser',
        'bindMfa'                    => 'BindMfa',
        'oldAkNum'                   => 'OldAkNum',
        'subUserPwdLevel'            => 'SubUserPwdLevel',
        'subUserWithOldAccessKey'    => 'SubUserWithOldAccessKey',
        'subUserBindMfa'             => 'SubUserBindMfa',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unusedAkNum) {
            $res['UnusedAkNum'] = $this->unusedAkNum;
        }
        if (null !== $this->subUserWithUnusedAccessKey) {
            $res['SubUserWithUnusedAccessKey'] = $this->subUserWithUnusedAccessKey;
        }
        if (null !== $this->rootWithAccessKey) {
            $res['RootWithAccessKey'] = $this->rootWithAccessKey;
        }
        if (null !== $this->subUser) {
            $res['SubUser'] = $this->subUser;
        }
        if (null !== $this->bindMfa) {
            $res['BindMfa'] = $this->bindMfa;
        }
        if (null !== $this->oldAkNum) {
            $res['OldAkNum'] = $this->oldAkNum;
        }
        if (null !== $this->subUserPwdLevel) {
            $res['SubUserPwdLevel'] = $this->subUserPwdLevel;
        }
        if (null !== $this->subUserWithOldAccessKey) {
            $res['SubUserWithOldAccessKey'] = $this->subUserWithOldAccessKey;
        }
        if (null !== $this->subUserBindMfa) {
            $res['SubUserBindMfa'] = $this->subUserBindMfa;
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
        if (isset($map['UnusedAkNum'])) {
            $model->unusedAkNum = $map['UnusedAkNum'];
        }
        if (isset($map['SubUserWithUnusedAccessKey'])) {
            $model->subUserWithUnusedAccessKey = $map['SubUserWithUnusedAccessKey'];
        }
        if (isset($map['RootWithAccessKey'])) {
            $model->rootWithAccessKey = $map['RootWithAccessKey'];
        }
        if (isset($map['SubUser'])) {
            $model->subUser = $map['SubUser'];
        }
        if (isset($map['BindMfa'])) {
            $model->bindMfa = $map['BindMfa'];
        }
        if (isset($map['OldAkNum'])) {
            $model->oldAkNum = $map['OldAkNum'];
        }
        if (isset($map['SubUserPwdLevel'])) {
            $model->subUserPwdLevel = $map['SubUserPwdLevel'];
        }
        if (isset($map['SubUserWithOldAccessKey'])) {
            $model->subUserWithOldAccessKey = $map['SubUserWithOldAccessKey'];
        }
        if (isset($map['SubUserBindMfa'])) {
            $model->subUserBindMfa = $map['SubUserBindMfa'];
        }

        return $model;
    }
}
