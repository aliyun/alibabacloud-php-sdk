<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class LinkAccountRequest extends Model
{
    /**
     * @description The additional information about the unique identifier of the account. For example, if type is set to mobile, set the value of extra to a country code. For example, a value of 86 specifies a mobile number in the Chinese mainland. If you do not specify this parameter, 86 is used by default.
     *
     * @example 86
     *
     * @var string
     */
    public $extra;

    /**
     * @description The unique identifier of the account, such as a mobile number.
     *
     * @example eyy***
     *
     * @var string
     */
    public $identity;

    /**
     * @description The account type. Valid values:
     *
     *   mobile: a mobile number.
     *   email: an email address.
     *   ding: a DingTalk account.
     *   ram: an Alibaba Cloud Resource Access Management (RAM) user.
     *   wechat: a WeCom account.
     *   ldap: a Lightweight Directory Access Protocol (LDAP) account.
     *   custom: a custom account.
     *
     * @example ding
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the user with which you want to associate an account.
     *
     * @example xxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'extra'    => 'extra',
        'identity' => 'identity',
        'type'     => 'type',
        'userId'   => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LinkAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
