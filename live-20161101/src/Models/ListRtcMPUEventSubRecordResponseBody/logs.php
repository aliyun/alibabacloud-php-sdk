<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUEventSubRecordResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The callback URL.
     *
     * @example http://testcallback***.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The callback duration. Unit: milliseconds.
     *
     * @example 22
     *
     * @var int
     */
    public $cost;

    /**
     * @description For more information about the callback, see [CreateRtcMPUEventSub](https://help.aliyun.com/document_detail/2804583.html).
     *
     * @example {\\"EventType\\":1,\\"MsgId\\":\\"42bba8b5-94ab-468c-9dae-9b501dd6c***\\",\\"AppId\\":\\"rtcdev\\",\\"SubId\\":\\"Sub-9799B2C45009799B2C4***\\",\\"TaskId\\":\\"mpucallbacktest\\",\\"CallbackTs\\":1712656430***,\\"Payload\\":{\\"DstUrl\\":\\"rtmp://domain/app/stream?auth\\",\\"EventTs\\":1712656430***,\\"EventCode\\":1,\\"ErrorCode\\":0,\\"ErrorMessage\\":\\"\\"}}
     *
     * @var string
     */
    public $data;

    /**
     * @description The HTTP status code. 200 indicates that the callback is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $HTTPCode;

    /**
     * @description The ID of the callback record.
     *
     * @example 42bba8b5-********-9b501dd6cb6e
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The ID of the subscription.
     *
     * @example Sub-******9799B2C4500******
     *
     * @var string
     */
    public $subId;

    /**
     * @description The time when the callback was invoked. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 1970-01-01T00:00:00Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'appId' => 'AppId',
        'callbackUrl' => 'CallbackUrl',
        'cost' => 'Cost',
        'data' => 'Data',
        'HTTPCode' => 'HTTPCode',
        'msgId' => 'MsgId',
        'subId' => 'SubId',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->HTTPCode) {
            $res['HTTPCode'] = $this->HTTPCode;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['HTTPCode'])) {
            $model->HTTPCode = $map['HTTPCode'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
