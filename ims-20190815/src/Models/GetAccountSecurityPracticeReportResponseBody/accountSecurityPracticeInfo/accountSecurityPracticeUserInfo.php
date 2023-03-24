<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo;

use AlibabaCloud\Tea\Model;

class accountSecurityPracticeUserInfo extends Model
{
    /**
     * @description Indicates whether MFA is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $bindMfa;

    /**
     * @description The number of old AccessKey pairs for the Alibaba Cloud account.
     *
     * @example 0
     *
     * @var int
     */
    public $oldAkNum;

    /**
     * @description The number of AccessKey pairs for the Alibaba Cloud account.
     *
     * @example 1
     *
     * @var int
     */
    public $rootWithAccessKey;

    /**
     * @description The number of RAM users within the Alibaba Cloud account.
     *
     * @example 9
     *
     * @var int
     */
    public $subUser;

    /**
     * @description The number of RAM users that have MFA devices bound.
     *
     * @example 0
     *
     * @var int
     */
    public $subUserBindMfa;

    /**
     * @description The complexity level of the password for the RAM user. Valid values:
     *
     *   low
     *   mid
     *   high
     *
     * @example low
     *
     * @var string
     */
    public $subUserPwdLevel;

    /**
     * @description The number of RAM users that use the old AccessKey pairs.
     *
     * @example 0
     *
     * @var int
     */
    public $subUserWithOldAccessKey;

    /**
     * @description The number of RAM users that have no AccessKey pairs.
     *
     * @example 0
     *
     * @var int
     */
    public $subUserWithUnusedAccessKey;

    /**
     * @description The number of AccessKey pairs that are not used for the Alibaba Cloud account.
     *
     * @example 0
     *
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
    }

    public function toMap()
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
