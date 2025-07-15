<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody\notifyRecordsInfo;

use AlibabaCloud\Tea\Model;

class liveStreamNotifyRecordsInfo extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The result of the request. If success is returned, the request is successful. If an error message is returned, the request failed.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description The ingest domain.
     *
     * @example push.example1.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The callback content.
     *
     * @example {\\"action\\":\\"publish_done\\",\\"app\\":\\"push.example1.com\\"}
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
     * @description The time when the callback was invoked. The time is displayed in UTC.
     *
     * @example 2022-10-19T19:09:28Z
     *
     * @var string
     */
    public $notifyTime;

    /**
     * @description The event. Valid values:
     *
     *   publish: The stream ingest starts.
     *   publish_done: The stream ingest is interrupted.
     *
     * @example publish_done
     *
     * @var string
     */
    public $notifyType;

    /**
     * @description The callback URL.
     *
     * @example http://xx.xx.xx.xx/callbacks
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The name of the live stream.
     *
     * @example stream
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
     * @return liveStreamNotifyRecordsInfo
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
