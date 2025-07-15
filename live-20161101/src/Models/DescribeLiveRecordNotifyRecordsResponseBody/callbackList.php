<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class callbackList extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the result. A value of success indicates that the request is successful. If the request fails, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The callback content.
     *
     * @example July 26,  16:14{"domain":"al.xxxx.com","stream":"livestream01","pull _stream_result":true,"cdn":"al"}
     *
     * @var string
     */
    public $notifyContent;

    /**
     * @description The callback result. Valid values:
     *
     *   success
     *   failed
     *
     * @example success
     *
     * @var string
     */
    public $notifyResult;

    /**
     * @description The time when the callback was returned. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-10-19T19:09:28Z
     *
     * @var string
     */
    public $notifyTime;

    /**
     * @description The callback type. Valid values:
     *
     *   file_created: The recording file is created.
     *   record_error: A recording error occurs.
     *   record_started: Recording is started.
     *   record_paused: Recording is paused.
     *   record_resumed: Recording is resumed.
     *   record_force_transcode_fail: The recording task fails to trigger transcoding.
     *   transformat_error: An error occurs when the live stream is parsed.
     *
     * @example record_started
     *
     * @var string
     */
    public $notifyType;

    /**
     * @description The recording callback URL.
     *
     * @example http://learn.aliyundoc.com/examplecallback.action
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'notifyContent' => 'NotifyContent',
        'notifyResult' => 'NotifyResult',
        'notifyTime' => 'NotifyTime',
        'notifyType' => 'NotifyType',
        'notifyUrl' => 'NotifyUrl',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->notifyContent) {
            $res['NotifyContent'] = $this->notifyContent;
        }
        if (null !== $this->notifyResult) {
            $res['NotifyResult'] = $this->notifyResult;
        }
        if (null !== $this->notifyTime) {
            $res['NotifyTime'] = $this->notifyTime;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callbackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NotifyContent'])) {
            $model->notifyContent = $map['NotifyContent'];
        }
        if (isset($map['NotifyResult'])) {
            $model->notifyResult = $map['NotifyResult'];
        }
        if (isset($map['NotifyTime'])) {
            $model->notifyTime = $map['NotifyTime'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
