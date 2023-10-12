<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class PushMessageToiOSRequest extends Model
{
    /**
     * @example 24780725
     *
     * @var int
     */
    public $appKey;

    /**
     * @example my body
     *
     * @var string
     */
    public $body;

    /**
     * @example 123
     *
     * @var string
     */
    public $jobKey;

    /**
     * @var bool
     */
    public $storeOffline;

    /**
     * @example ALL
     *
     * @var string
     */
    public $target;

    /**
     * @example all
     *
     * @var string
     */
    public $targetValue;

    /**
     * @example my title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'appKey'       => 'AppKey',
        'body'         => 'Body',
        'jobKey'       => 'JobKey',
        'storeOffline' => 'StoreOffline',
        'target'       => 'Target',
        'targetValue'  => 'TargetValue',
        'title'        => 'Title',
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
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->storeOffline) {
            $res['StoreOffline'] = $this->storeOffline;
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
     * @return PushMessageToiOSRequest
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
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['StoreOffline'])) {
            $model->storeOffline = $map['StoreOffline'];
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
