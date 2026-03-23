<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class NewJobOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $clientSystem;

    /**
     * @var string
     */
    public $clientUniqueId;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $referUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'callbackUrl' => 'CallbackUrl',
        'changeType' => 'ChangeType',
        'clientSystem' => 'ClientSystem',
        'clientUniqueId' => 'ClientUniqueId',
        'creator' => 'Creator',
        'paramsShrink' => 'Params',
        'referUrl' => 'ReferUrl',
        'requestId' => 'RequestId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->clientSystem) {
            $res['ClientSystem'] = $this->clientSystem;
        }

        if (null !== $this->clientUniqueId) {
            $res['ClientUniqueId'] = $this->clientUniqueId;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }

        if (null !== $this->referUrl) {
            $res['ReferUrl'] = $this->referUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['ClientSystem'])) {
            $model->clientSystem = $map['ClientSystem'];
        }

        if (isset($map['ClientUniqueId'])) {
            $model->clientUniqueId = $map['ClientUniqueId'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }

        if (isset($map['ReferUrl'])) {
            $model->referUrl = $map['ReferUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
