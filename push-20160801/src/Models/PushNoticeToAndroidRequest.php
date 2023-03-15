<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class PushNoticeToAndroidRequest extends Model
{
    /**
     * @example 23267207
     *
     * @var int
     */
    public $appKey;

    /**
     * @example body
     *
     * @var string
     */
    public $body;

    /**
     * @example {"key1":"value1","api_name":"PushNoticeToAndroidRequest"}
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
     * @example ALL
     *
     * @var string
     */
    public $target;

    /**
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
     * @return PushNoticeToAndroidRequest
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
