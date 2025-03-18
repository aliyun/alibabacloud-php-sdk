<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos;

use AlibabaCloud\Tea\Model;

class pushInfo extends Model
{
    /**
     * @example 333526247
     *
     * @var int
     */
    public $appKey;

    /**
     * @example abcd
     *
     * @var string
     */
    public $body;

    /**
     * @example ANDROID
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 510431
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 2021-09-15T02:05:24Z
     *
     * @var string
     */
    public $pushTime;

    /**
     * @example NOTICE
     *
     * @var string
     */
    public $pushType;

    /**
     * @example DEVICE
     *
     * @var string
     */
    public $source;

    /**
     * @example SENT
     *
     * @var string
     */
    public $status;

    /**
     * @example DEVICE
     *
     * @var string
     */
    public $target;

    /**
     * @example sssss
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'appKey' => 'AppKey',
        'body' => 'Body',
        'deviceType' => 'DeviceType',
        'messageId' => 'MessageId',
        'pushTime' => 'PushTime',
        'pushType' => 'PushType',
        'source' => 'Source',
        'status' => 'Status',
        'target' => 'Target',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
