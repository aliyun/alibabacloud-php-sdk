<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class UpdateAppRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $enableLog;

    /**
     * @var int
     */
    public $labelRouteStrategy;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'enableLog' => 'EnableLog',
        'labelRouteStrategy' => 'LabelRouteStrategy',
        'maxConcurrency' => 'MaxConcurrency',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->enableLog) {
            $res['EnableLog'] = $this->enableLog;
        }

        if (null !== $this->labelRouteStrategy) {
            $res['LabelRouteStrategy'] = $this->labelRouteStrategy;
        }

        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['EnableLog'])) {
            $model->enableLog = $map['EnableLog'];
        }

        if (isset($map['LabelRouteStrategy'])) {
            $model->labelRouteStrategy = $map['LabelRouteStrategy'];
        }

        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
