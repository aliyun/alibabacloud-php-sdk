<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @description The TradeManager ID of the alert contact.
     *
     * Specify at least one of the following alert notification targets: email address or webhook URL of the DingTalk chatbot.
     * @example Jim
     *
     * @var string
     */
    public $aliIM;

    /**
     * @description The webhook URL of the DingTalk chatbot.
     *
     * Specify at least one of the following alert notification targets: email address or webhook URL of the DingTalk chatbot.
     * @example https://oapi.dingtalk.com/robot/send?access_token=7d49515e8ebf21106a80a9cc4bb3d247771305d52fb15d6201234565****
     *
     * @var string
     */
    public $dingWebHook;

    /**
     * @description The email address of the alert contact. After you add or modify an email address, the recipient receives an email that contains an activation link. The system adds the recipient to the list of alert contacts only after the recipient activates the email address.
     *
     * Specify at least one of the following alert notification targets: email address or webhook URL of the DingTalk chatbot.
     * @example test@aliyun.com
     *
     * @var string
     */
    public $mail;

    /**
     * @description The phone number of the alert contact. After you add or modify a phone number, the recipient receives a text message that contains an activation link. The system adds the recipient to the list of alert contacts only after the recipient activates the phone number.
     *
     * Specify at least one of the following alert notification targets: email address or webhook URL of the DingTalk chatbot.
     * @example 1333333****
     *
     * @var string
     */
    public $SMS;
    protected $_name = [
        'aliIM'       => 'AliIM',
        'dingWebHook' => 'DingWebHook',
        'mail'        => 'Mail',
        'SMS'         => 'SMS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliIM) {
            $res['AliIM'] = $this->aliIM;
        }
        if (null !== $this->dingWebHook) {
            $res['DingWebHook'] = $this->dingWebHook;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->SMS) {
            $res['SMS'] = $this->SMS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliIM'])) {
            $model->aliIM = $map['AliIM'];
        }
        if (isset($map['DingWebHook'])) {
            $model->dingWebHook = $map['DingWebHook'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['SMS'])) {
            $model->SMS = $map['SMS'];
        }

        return $model;
    }
}
