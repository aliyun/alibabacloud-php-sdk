<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact;

use AlibabaCloud\Tea\Model;

class channelsState extends Model
{
    /**
     * @description Queries alert contacts.
     *
     * @example OK
     *
     * @var string
     */
    public $aliIM;

    /**
     * @example OK
     *
     * @var string
     */
    public $dingWebHook;

    /**
     * @description The status of the DingTalk chatbot.
     *
     * Valid value: OK. The value OK indicates that the DingTalk chatbot is normal and alert notifications can be received in a DingTalk group.
     * @example PENDING
     *
     * @var string
     */
    public $mail;

    /**
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
