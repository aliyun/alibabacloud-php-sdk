<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class callbackList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $notifyContent;

    /**
     * @var string
     */
    public $notifyResponse;

    /**
     * @var string
     */
    public $notifyResult;

    /**
     * @var string
     */
    public $notifyTime;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'notifyContent' => 'NotifyContent',
        'notifyResponse' => 'NotifyResponse',
        'notifyResult' => 'NotifyResult',
        'notifyTime' => 'NotifyTime',
        'notifyType' => 'NotifyType',
        'notifyUrl' => 'NotifyUrl',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->notifyResponse) {
            $res['NotifyResponse'] = $this->notifyResponse;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['NotifyResponse'])) {
            $model->notifyResponse = $map['NotifyResponse'];
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
