<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibResponseBody\data;

use AlibabaCloud\Tea\Model;

class keywordsResult extends Model
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
    public $illegalLengthKeywords;

    /**
     * @example 1
     *
     * @var int
     */
    public $invalidCount;

    /**
     * @var string[]
     */
    public $invalidKeywords;

    /**
     * @example customxx_xxxx
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
     * @example 1
     *
     * @var int
     */
    public $repeatCount;

    /**
     * @var string[]
     */
    public $repeatKeywords;

    /**
     * @example 8
     *
     * @var int
     */
    public $successCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'i18nKey' => 'I18nKey',
        'illegalLengthKeywords' => 'IllegalLengthKeywords',
        'invalidCount' => 'InvalidCount',
        'invalidKeywords' => 'InvalidKeywords',
        'libId' => 'LibId',
        'progress' => 'Progress',
        'repeatCount' => 'RepeatCount',
        'repeatKeywords' => 'RepeatKeywords',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->i18nKey) {
            $res['I18nKey'] = $this->i18nKey;
        }
        if (null !== $this->illegalLengthKeywords) {
            $res['IllegalLengthKeywords'] = $this->illegalLengthKeywords;
        }
        if (null !== $this->invalidCount) {
            $res['InvalidCount'] = $this->invalidCount;
        }
        if (null !== $this->invalidKeywords) {
            $res['InvalidKeywords'] = $this->invalidKeywords;
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
        if (null !== $this->repeatKeywords) {
            $res['RepeatKeywords'] = $this->repeatKeywords;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywordsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['I18nKey'])) {
            $model->i18nKey = $map['I18nKey'];
        }
        if (isset($map['IllegalLengthKeywords'])) {
            if (!empty($map['IllegalLengthKeywords'])) {
                $model->illegalLengthKeywords = $map['IllegalLengthKeywords'];
            }
        }
        if (isset($map['InvalidCount'])) {
            $model->invalidCount = $map['InvalidCount'];
        }
        if (isset($map['InvalidKeywords'])) {
            if (!empty($map['InvalidKeywords'])) {
                $model->invalidKeywords = $map['InvalidKeywords'];
            }
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
        if (isset($map['RepeatKeywords'])) {
            if (!empty($map['RepeatKeywords'])) {
                $model->repeatKeywords = $map['RepeatKeywords'];
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
