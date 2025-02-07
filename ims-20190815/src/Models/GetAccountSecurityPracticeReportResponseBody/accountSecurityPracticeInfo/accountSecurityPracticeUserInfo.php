<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo;

use AlibabaCloud\Dara\Model;

class accountSecurityPracticeUserInfo extends Model
{
    /**
     * @var bool
     */
    public $bindMfa;
    /**
     * @var int
     */
    public $oldAkNum;
    /**
     * @var int
     */
    public $rootWithAccessKey;
    /**
     * @var int
     */
    public $subUser;
    /**
     * @var int
     */
    public $subUserBindMfa;
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
    public $subUserWithUnusedAccessKey;
    /**
     * @var int
     */
    public $unusedAkNum;
    protected $_name = [
        'bindMfa'                    => 'BindMfa',
        'oldAkNum'                   => 'OldAkNum',
        'rootWithAccessKey'          => 'RootWithAccessKey',
        'subUser'                    => 'SubUser',
        'subUserBindMfa'             => 'SubUserBindMfa',
        'subUserPwdLevel'            => 'SubUserPwdLevel',
        'subUserWithOldAccessKey'    => 'SubUserWithOldAccessKey',
        'subUserWithUnusedAccessKey' => 'SubUserWithUnusedAccessKey',
        'unusedAkNum'                => 'UnusedAkNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindMfa) {
            $res['BindMfa'] = $this->bindMfa;
        }

        if (null !== $this->oldAkNum) {
            $res['OldAkNum'] = $this->oldAkNum;
        }

        if (null !== $this->rootWithAccessKey) {
            $res['RootWithAccessKey'] = $this->rootWithAccessKey;
        }

        if (null !== $this->subUser) {
            $res['SubUser'] = $this->subUser;
        }

        if (null !== $this->subUserBindMfa) {
            $res['SubUserBindMfa'] = $this->subUserBindMfa;
        }

        if (null !== $this->subUserPwdLevel) {
            $res['SubUserPwdLevel'] = $this->subUserPwdLevel;
        }

        if (null !== $this->subUserWithOldAccessKey) {
            $res['SubUserWithOldAccessKey'] = $this->subUserWithOldAccessKey;
        }

        if (null !== $this->subUserWithUnusedAccessKey) {
            $res['SubUserWithUnusedAccessKey'] = $this->subUserWithUnusedAccessKey;
        }

        if (null !== $this->unusedAkNum) {
            $res['UnusedAkNum'] = $this->unusedAkNum;
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
        if (isset($map['BindMfa'])) {
            $model->bindMfa = $map['BindMfa'];
        }

        if (isset($map['OldAkNum'])) {
            $model->oldAkNum = $map['OldAkNum'];
        }

        if (isset($map['RootWithAccessKey'])) {
            $model->rootWithAccessKey = $map['RootWithAccessKey'];
        }

        if (isset($map['SubUser'])) {
            $model->subUser = $map['SubUser'];
        }

        if (isset($map['SubUserBindMfa'])) {
            $model->subUserBindMfa = $map['SubUserBindMfa'];
        }

        if (isset($map['SubUserPwdLevel'])) {
            $model->subUserPwdLevel = $map['SubUserPwdLevel'];
        }

        if (isset($map['SubUserWithOldAccessKey'])) {
            $model->subUserWithOldAccessKey = $map['SubUserWithOldAccessKey'];
        }

        if (isset($map['SubUserWithUnusedAccessKey'])) {
            $model->subUserWithUnusedAccessKey = $map['SubUserWithUnusedAccessKey'];
        }

        if (isset($map['UnusedAkNum'])) {
            $model->unusedAkNum = $map['UnusedAkNum'];
        }

        return $model;
    }
}
