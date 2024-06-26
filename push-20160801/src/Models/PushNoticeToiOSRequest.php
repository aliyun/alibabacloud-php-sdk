<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class PushNoticeToiOSRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $apnsEnv;

    /**
     * @description This parameter is required.
     *
     * @example 24780725
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example Hello World
     *
     * @var string
     */
    public $body;

    /**
     * @example {"k1":"ios","k2":"v2"}
     *
     * @var string
     */
    public $extParameters;

    /**
     * @example 123
     *
     * @var string
     */
    public $jobKey;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
     * @var string
     */
    public $target;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
     * @var string
     */
    public $targetValue;

    /**
     * @example title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'apnsEnv'       => 'ApnsEnv',
        'appKey'        => 'AppKey',
        'body'          => 'Body',
        'extParameters' => 'ExtParameters',
        'jobKey'        => 'JobKey',
        'target'        => 'Target',
        'targetValue'   => 'TargetValue',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return PushNoticeToiOSRequest
     */
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
