<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordImportResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $i18nKey;

    /**
     * @var string[]
     */
    public $illegalLengthKeywords;

    /**
     * @var int
     */
    public $invalidCount;

    /**
     * @var string[]
     */
    public $invalidKeywords;

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
    public $repeatKeywords;

    /**
     * @var int
     */
    public $successCount;

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
        'illegalLengthKeywords' => 'IllegalLengthKeywords',
        'invalidCount' => 'InvalidCount',
        'invalidKeywords' => 'InvalidKeywords',
        'libId' => 'LibId',
        'progress' => 'Progress',
        'repeatCount' => 'RepeatCount',
        'repeatKeywords' => 'RepeatKeywords',
        'successCount' => 'SuccessCount',
        'tips' => 'Tips',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->illegalLengthKeywords)) {
            Model::validateArray($this->illegalLengthKeywords);
        }
        if (\is_array($this->invalidKeywords)) {
            Model::validateArray($this->invalidKeywords);
        }
        if (\is_array($this->repeatKeywords)) {
            Model::validateArray($this->repeatKeywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->i18nKey) {
            $res['I18nKey'] = $this->i18nKey;
        }

        if (null !== $this->illegalLengthKeywords) {
            if (\is_array($this->illegalLengthKeywords)) {
                $res['IllegalLengthKeywords'] = [];
                $n1 = 0;
                foreach ($this->illegalLengthKeywords as $item1) {
                    $res['IllegalLengthKeywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->invalidCount) {
            $res['InvalidCount'] = $this->invalidCount;
        }

        if (null !== $this->invalidKeywords) {
            if (\is_array($this->invalidKeywords)) {
                $res['InvalidKeywords'] = [];
                $n1 = 0;
                foreach ($this->invalidKeywords as $item1) {
                    $res['InvalidKeywords'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->repeatKeywords)) {
                $res['RepeatKeywords'] = [];
                $n1 = 0;
                foreach ($this->repeatKeywords as $item1) {
                    $res['RepeatKeywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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

        if (isset($map['IllegalLengthKeywords'])) {
            if (!empty($map['IllegalLengthKeywords'])) {
                $model->illegalLengthKeywords = [];
                $n1 = 0;
                foreach ($map['IllegalLengthKeywords'] as $item1) {
                    $model->illegalLengthKeywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InvalidCount'])) {
            $model->invalidCount = $map['InvalidCount'];
        }

        if (isset($map['InvalidKeywords'])) {
            if (!empty($map['InvalidKeywords'])) {
                $model->invalidKeywords = [];
                $n1 = 0;
                foreach ($map['InvalidKeywords'] as $item1) {
                    $model->invalidKeywords[$n1++] = $item1;
                }
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
                $model->repeatKeywords = [];
                $n1 = 0;
                foreach ($map['RepeatKeywords'] as $item1) {
                    $model->repeatKeywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
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
