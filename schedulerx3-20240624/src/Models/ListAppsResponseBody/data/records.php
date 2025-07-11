<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppsResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description AccessToken
     *
     * @example 2f4ddeab8e344ed68e0402cf9b8502ffv3
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1827811800555555
     *
     * @var string
     */
    public $creator;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableLog;

    /**
     * @example 1
     *
     * @var int
     */
    public $executorNum;

    /**
     * @example 43885
     *
     * @var int
     */
    public $id;

    /**
     * @example 10
     *
     * @var int
     */
    public $jobNum;

    /**
     * @var int
     */
    public $labelRouteStrategy;

    /**
     * @example http://28.5.128.3:80
     *
     * @var string
     */
    public $leader;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxJobs;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 1827811800555555
     *
     * @var string
     */
    public $updater;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'appName' => 'AppName',
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
