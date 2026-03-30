<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeStoryboardJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $exceptionStoryboardIds;

    /**
     * @var string
     */
    public $failureShotList;

    /**
     * @var string
     */
    public $outputUrl;

    /**
     * @var string
     */
    public $storyboardInfoList;

    /**
     * @var string
     */
    public $successStoryboardIds;

    /**
     * @var string
     */
    public $successStoryboardList;
    protected $_name = [
        'exceptionStoryboardIds' => 'ExceptionStoryboardIds',
        'failureShotList' => 'FailureShotList',
        'outputUrl' => 'OutputUrl',
        'storyboardInfoList' => 'StoryboardInfoList',
        'successStoryboardIds' => 'SuccessStoryboardIds',
        'successStoryboardList' => 'SuccessStoryboardList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionStoryboardIds) {
            $res['ExceptionStoryboardIds'] = $this->exceptionStoryboardIds;
        }

        if (null !== $this->failureShotList) {
            $res['FailureShotList'] = $this->failureShotList;
        }

        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }

        if (null !== $this->storyboardInfoList) {
            $res['StoryboardInfoList'] = $this->storyboardInfoList;
        }

        if (null !== $this->successStoryboardIds) {
            $res['SuccessStoryboardIds'] = $this->successStoryboardIds;
        }

        if (null !== $this->successStoryboardList) {
            $res['SuccessStoryboardList'] = $this->successStoryboardList;
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
        if (isset($map['ExceptionStoryboardIds'])) {
            $model->exceptionStoryboardIds = $map['ExceptionStoryboardIds'];
        }

        if (isset($map['FailureShotList'])) {
            $model->failureShotList = $map['FailureShotList'];
        }

        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        if (isset($map['StoryboardInfoList'])) {
            $model->storyboardInfoList = $map['StoryboardInfoList'];
        }

        if (isset($map['SuccessStoryboardIds'])) {
            $model->successStoryboardIds = $map['SuccessStoryboardIds'];
        }

        if (isset($map['SuccessStoryboardList'])) {
            $model->successStoryboardList = $map['SuccessStoryboardList'];
        }

        return $model;
    }
}
