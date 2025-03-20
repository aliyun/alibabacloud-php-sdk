<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetLinkInfoRequest extends Model
{
    /**
     * @description The additional information about the unique identifier of the account. For example, if type is set to mobile, set the value of extra to a country code.
     *
     * @example 1
     *
     * @var string
     */
    public $extra;

    /**
     * @description The unique identifier of the account, such as a mobile number.
     *
     * This parameter is required.
     *
     * @example 130***
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
     * This parameter is required.
     *
     * @example mobile
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'extra' => 'extra',
        'identity' => 'identity',
        'type' => 'type',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLinkInfoRequest
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

        return $model;
    }
}
