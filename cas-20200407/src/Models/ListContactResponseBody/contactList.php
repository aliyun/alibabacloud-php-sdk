<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListContactResponseBody;

use AlibabaCloud\Tea\Model;

class contactList extends Model
{
    /**
     * @description The ID of the contact.
     *
     * @example 519580
     *
     * @var int
     */
    public $contactId;

    /**
     * @description The email address of the contact.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the email address passed the verification.
     *
     * @example 1
     *
     * @var int
     */
    public $emailStatus;

    /**
     * @description The phone number.
     *
     * @example 139****8888
     *
     * @var string
     */
    public $mobile;

    /**
     * @description Indicates whether the phone number was verified.
     *
     * @example 1
     *
     * @var int
     */
    public $mobileStatus;

    /**
     * @description The name of the contact.
     *
     * @example ty-yaoyue.com
     *
     * @var string
     */
    public $name;

    /**
     * @description The webhook URL of the chatbot.
     *
     * @example [\\"https://open.feishu.cn/open-apis/bot/v2/hook/XXX\\",\\"https://oapi.dingtalk.com/robot/send?access_token=XXX\\",\\"https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=XXX\\"]
     *
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'contactId' => 'ContactId',
        'email' => 'Email',
        'emailStatus' => 'EmailStatus',
        'mobile' => 'Mobile',
        'mobileStatus' => 'MobileStatus',
        'name' => 'Name',
        'webhooks' => 'Webhooks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailStatus) {
            $res['EmailStatus'] = $this->emailStatus;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->mobileStatus) {
            $res['MobileStatus'] = $this->mobileStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailStatus'])) {
            $model->emailStatus = $map['EmailStatus'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['MobileStatus'])) {
            $model->mobileStatus = $map['MobileStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
