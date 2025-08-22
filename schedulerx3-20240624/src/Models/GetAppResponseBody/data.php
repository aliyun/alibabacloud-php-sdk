<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetAppResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $enableLog;

    /**
     * @var int
     */
    public $executorNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $jobNum;

    /**
     * @var int
     */
    public $labelRouteStrategy;

    /**
     * @var string
     */
    public $leader;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var int
     */
    public $maxJobs;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updater;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'creator' => 'Creator',
        'enableLog' => 'EnableLog',
        'executorNum' => 'ExecutorNum',
        'id' => 'Id',
        'jobNum' => 'JobNum',
        'labelRouteStrategy' => 'LabelRouteStrategy',
        'leader' => 'Leader',
        'maxConcurrency' => 'MaxConcurrency',
        'maxJobs' => 'MaxJobs',
        'title' => 'Title',
        'updater' => 'Updater',
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

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->enableLog) {
            $res['EnableLog'] = $this->enableLog;
        }

        if (null !== $this->executorNum) {
            $res['ExecutorNum'] = $this->executorNum;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobNum) {
            $res['JobNum'] = $this->jobNum;
        }

        if (null !== $this->labelRouteStrategy) {
            $res['LabelRouteStrategy'] = $this->labelRouteStrategy;
        }

        if (null !== $this->leader) {
            $res['Leader'] = $this->leader;
        }

        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }

        if (null !== $this->maxJobs) {
            $res['MaxJobs'] = $this->maxJobs;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updater) {
            $res['Updater'] = $this->updater;
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

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['EnableLog'])) {
            $model->enableLog = $map['EnableLog'];
        }

        if (isset($map['ExecutorNum'])) {
            $model->executorNum = $map['ExecutorNum'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobNum'])) {
            $model->jobNum = $map['JobNum'];
        }

        if (isset($map['LabelRouteStrategy'])) {
            $model->labelRouteStrategy = $map['LabelRouteStrategy'];
        }

        if (isset($map['Leader'])) {
            $model->leader = $map['Leader'];
        }

        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }

        if (isset($map['MaxJobs'])) {
            $model->maxJobs = $map['MaxJobs'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Updater'])) {
            $model->updater = $map['Updater'];
        }

        return $model;
    }
}
