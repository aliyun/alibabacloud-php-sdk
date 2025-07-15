<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubEventResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The application ID.
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The HTTP status code. A value of 200 indicates that the callback was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The callback duration. Unit: milliseconds.
     *
     * @example 22
     *
     * @var int
     */
    public $cost;

    /**
     * @description The details about the callback.
     *
     * @example {\\"MsgId\\":\\"875d5266cbabb1834cc84a105cf68454\\",\\"MsgTimestamp\\":1697545591,\\"SubscribeId\\":\\"09be0d2254cb5a89f4cbd86403ec5343\\",\\"AppId\\":\\"xxx\\",\\"ChannelId\\":\\"9099\\",\\"Contents\\":[{\\"Event\\":\\"UserEvent\\",\\"UserEvent\\":{\\"UserId\\":\\"linux_test\\",\\"EventTag\\":\\"Leave\\",\\"SessionId\\":\\"je7y2sBZJZQ0VBJZrh4LnBkxvGH2WyVs\\",\\"Timestamp\\":1697545591,\\"ChannelProfile\\":\\"interactive_live\\",\\"US\\":5068748604047364,\\"Reason\\":1,\\"Role\\":1,\\"TerminalType\\":6,\\"UserType\\":2}}]}
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the callback record.
     *
     * @example 875d5266cbabb1834cc84a105cf6****
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The subscription ID.
     *
     * @example ad53276431c****
     *
     * @var string
     */
    public $subId;

    /**
     * @description The time when the callback was generated.
     *
     * @example 2023-10-17 20:26:31.988
     *
     * @var string
     */
    public $time;

    /**
     * @description The callback URL.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'appId' => 'AppId',
        'code' => 'Code',
        'cost' => 'Cost',
        'data' => 'Data',
        'messageId' => 'MessageId',
        'subId' => 'SubId',
        'time' => 'Time',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
