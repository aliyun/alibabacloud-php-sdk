<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UnLinkAccountRequest extends Model
{
    /**
     * @description Additional information for the unique account identifier. For example, when the account is a phone number, this field should be filled with the area code of the phone, such as 86 for Mainland China. If not provided, it defaults to 86.
     *
     * @example 1
     *
     * @var string
     */
    public $extra;

    /**
     * @description Unique identifier of the account, such as a phone number
     *
     * This parameter is required.
     *
     * @example 139****
     *
     * @var string
     */
    public $identity;

    /**
     * @description Account type
     *
     * mobile: Phone number
     *
     * email: Email address
     *
     * ding: DingTalk
     *
     * ram: Alibaba Cloud RAM User
     *
     * wechat: WeCom
     *
     * ldap: LDAP account
     *
     * custom: Custom account
     *
     * This parameter is required.
     *
     * @example mobile
     *
     * @var string
     */
    public $type;

    /**
     * @description User identifier
     *
     * This parameter is required.
     *
     * @example uid1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'extra' => 'extra',
        'identity' => 'identity',
        'type' => 'type',
        'userId' => 'user_id',
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
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnLinkAccountRequest
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
