<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetAnswerImportProgressResponseBody extends Model
{
    /**
     * @var string
     */
    public $i18nKey;

    /**
     * @var string[]
     */
    public $illegalLengthSamples;

    /**
     * @var int
     */
    public $invalidCount;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $repeatCount;

    /**
     * @var string[]
     */
    public $repeatSamples;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'i18nKey' => 'I18nKey',
        'illegalLengthSamples' => 'IllegalLengthSamples',
        'invalidCount' => 'InvalidCount',
        'libId' => 'LibId',
        'progress' => 'Progress',
        'repeatCount' => 'RepeatCount',
        'repeatSamples' => 'RepeatSamples',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
        'taskId' => 'TaskId',
        'tips' => 'Tips',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->illegalLengthSamples)) {
            Model::validateArray($this->illegalLengthSamples);
        }
        if (\is_array($this->repeatSamples)) {
            Model::validateArray($this->repeatSamples);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->i18nKey) {
            $res['I18nKey'] = $this->i18nKey;
        }

        if (null !== $this->illegalLengthSamples) {
            if (\is_array($this->illegalLengthSamples)) {
                $res['IllegalLengthSamples'] = [];
                $n1 = 0;
                foreach ($this->illegalLengthSamples as $item1) {
                    $res['IllegalLengthSamples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->invalidCount) {
            $res['InvalidCount'] = $this->invalidCount;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->repeatCount) {
            $res['RepeatCount'] = $this->repeatCount;
        }

        if (null !== $this->repeatSamples) {
            if (\is_array($this->repeatSamples)) {
                $res['RepeatSamples'] = [];
                $n1 = 0;
                foreach ($this->repeatSamples as $item1) {
                    $res['RepeatSamples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['I18nKey'])) {
            $model->i18nKey = $map['I18nKey'];
        }

        if (isset($map['IllegalLengthSamples'])) {
            if (!empty($map['IllegalLengthSamples'])) {
                $model->illegalLengthSamples = [];
                $n1 = 0;
                foreach ($map['IllegalLengthSamples'] as $item1) {
                    $model->illegalLengthSamples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InvalidCount'])) {
            $model->invalidCount = $map['InvalidCount'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RepeatCount'])) {
            $model->repeatCount = $map['RepeatCount'];
        }

        if (isset($map['RepeatSamples'])) {
            if (!empty($map['RepeatSamples'])) {
                $model->repeatSamples = [];
                $n1 = 0;
                foreach ($map['RepeatSamples'] as $item1) {
                    $model->repeatSamples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
