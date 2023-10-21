<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact;

use AlibabaCloud\Tea\Model;

class channelsState extends Model
{
    /**
     * @description The status of the TradeManager ID.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @example OK
     *
     * @var string
     */
    public $aliIM;

    /**
     * @description The status of the DingTalk chatbot.
     *
     * Valid value: OK. The value OK indicates that the DingTalk chatbot is normal and alert notifications can be received in a DingTalk group.
     * @example OK
     *
     * @var string
     */
    public $dingWebHook;

    /**
     * @description The status of the email address. Valid values:
     *
     *   PENDING: The email address is not activated. Alert notifications can be sent to the email address only after the email address is activated.
     *   OK: The email address is activated and can receive alert notifications.
     *
     * @example PENDING
     *
     * @var string
     */
    public $mail;

    /**
     * @description The status of the phone number. Valid values:
     *
     *   PENDING: The phone number is not activated. Alert notifications can be sent to the phone number by using text messages only after the phone number is activated.
     *   OK: The phone number is activated and can receive alert notifications.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @example OK
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
     * @return channelsState
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
