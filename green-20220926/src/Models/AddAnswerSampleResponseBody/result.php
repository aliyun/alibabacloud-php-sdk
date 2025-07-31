<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\AddAnswerSampleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $i18nKey;

    /**
     * @var string[]
     */
    public $illegalLengthSamples;

    /**
     * @example 118
     *
     * @var int
     */
    public $invalidCount;

    /**
     * @example alxxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example 98
     *
     * @var int
     */
    public $repeatCount;

    /**
     * @var string[]
     */
    public $repeatSamples;

    /**
     * @example 318
     *
     * @var int
     */
    public $successCount;

    /**
     * @example alAxbbxxxx-xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 534
     *
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
        'successCount' => 'SuccessCount',
        'taskId' => 'TaskId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->i18nKey) {
            $res['I18nKey'] = $this->i18nKey;
        }
        if (null !== $this->illegalLengthSamples) {
            $res['IllegalLengthSamples'] = $this->illegalLengthSamples;
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
            $res['RepeatSamples'] = $this->repeatSamples;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['I18nKey'])) {
            $model->i18nKey = $map['I18nKey'];
        }
        if (isset($map['IllegalLengthSamples'])) {
            if (!empty($map['IllegalLengthSamples'])) {
                $model->illegalLengthSamples = $map['IllegalLengthSamples'];
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
                $model->repeatSamples = $map['RepeatSamples'];
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
