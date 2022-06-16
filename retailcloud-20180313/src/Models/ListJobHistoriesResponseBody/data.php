<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListJobHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @var int
     */
    public $backoffLimit;

    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var int
     */
    public $completions;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var string[]
     */
    public $podList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $succeeded;
    protected $_name = [
        'activeDeadlineSeconds' => 'ActiveDeadlineSeconds',
        'backoffLimit'          => 'BackoffLimit',
        'completionTime'        => 'CompletionTime',
        'completions'           => 'Completions',
        'failed'                => 'Failed',
        'message'               => 'Message',
        'name'                  => 'Name',
        'parallelism'           => 'Parallelism',
        'podList'               => 'PodList',
        'startTime'             => 'StartTime',
        'succeeded'             => 'Succeeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeDeadlineSeconds) {
            $res['ActiveDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }
        if (null !== $this->backoffLimit) {
            $res['BackoffLimit'] = $this->backoffLimit;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->completions) {
            $res['Completions'] = $this->completions;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->podList) {
            $res['PodList'] = $this->podList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['ActiveDeadlineSeconds'];
        }
        if (isset($map['BackoffLimit'])) {
            $model->backoffLimit = $map['BackoffLimit'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['Completions'])) {
            $model->completions = $map['Completions'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['PodList'])) {
            if (!empty($map['PodList'])) {
                $model->podList = $map['PodList'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}
