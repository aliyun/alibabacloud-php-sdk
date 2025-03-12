<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class maxIdleDays extends Model
{
    /**
     * @description The maximum number of days that the AccessKey pair of a RAM user can stay unused. If an AccessKey pair is not used in the previous specified number of days, the AccessKey pair is automatically disabled on the next day. The default value is 730. You cannot change the value.
     *
     * @example 730
     *
     * @var int
     */
    public $maxIdleDaysForAccessKeys;

    /**
     * @description The maximum number of days that a RAM user can stay idle. If a RAM user for whom console logon is enabled does not log on to the console in the previous specified number of days, console logon is automatically disabled for the RAM user on the next day. Single sign-on (SSO) is not involved. The default value is 730. You cannot change the value.
     *
     * @example 730
     *
     * @var int
     */
    public $maxIdleDaysForUsers;
    protected $_name = [
        'maxIdleDaysForAccessKeys' => 'MaxIdleDaysForAccessKeys',
        'maxIdleDaysForUsers'      => 'MaxIdleDaysForUsers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxIdleDaysForAccessKeys) {
            $res['MaxIdleDaysForAccessKeys'] = $this->maxIdleDaysForAccessKeys;
        }
        if (null !== $this->maxIdleDaysForUsers) {
            $res['MaxIdleDaysForUsers'] = $this->maxIdleDaysForUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maxIdleDays
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxIdleDaysForAccessKeys'])) {
            $model->maxIdleDaysForAccessKeys = $map['MaxIdleDaysForAccessKeys'];
        }
        if (isset($map['MaxIdleDaysForUsers'])) {
            $model->maxIdleDaysForUsers = $map['MaxIdleDaysForUsers'];
        }

        return $model;
    }
}
