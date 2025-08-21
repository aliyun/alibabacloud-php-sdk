<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class PushNoticeToiOSRequest extends Model
{
    /**
     * @var string
     */
    public $apnsEnv;

    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $extParameters;

    /**
     * @var string
     */
    public $jobKey;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $targetValue;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'apnsEnv' => 'ApnsEnv',
        'appKey' => 'AppKey',
        'body' => 'Body',
        'extParameters' => 'ExtParameters',
        'jobKey' => 'JobKey',
        'target' => 'Target',
        'targetValue' => 'TargetValue',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apnsEnv) {
            $res['ApnsEnv'] = $this->apnsEnv;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        if (null !== $this->extParameters) {
            $res['ExtParameters'] = $this->extParameters;
        }

        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['ApnsEnv'])) {
            $model->apnsEnv = $map['ApnsEnv'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        if (isset($map['ExtParameters'])) {
            $model->extParameters = $map['ExtParameters'];
        }

        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
