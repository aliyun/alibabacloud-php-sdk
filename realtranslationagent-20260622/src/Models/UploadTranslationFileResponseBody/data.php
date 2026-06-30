<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\UploadTranslationFileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $creditBreakdown;

    /**
     * @var bool
     */
    public $creditsAvailable;

    /**
     * @var string
     */
    public $detectedLang;

    /**
     * @var float
     */
    public $estimatedCostCredits;

    /**
     * @var int
     */
    public $estimatedTime;

    /**
     * @var string[][]
     */
    public $fonts;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var bool
     */
    public $sensitiveDetected;

    /**
     * @var string[]
     */
    public $sensitiveTags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $wordCount;
    protected $_name = [
        'creditBreakdown' => 'CreditBreakdown',
        'creditsAvailable' => 'CreditsAvailable',
        'detectedLang' => 'DetectedLang',
        'estimatedCostCredits' => 'EstimatedCostCredits',
        'estimatedTime' => 'EstimatedTime',
        'fonts' => 'Fonts',
        'pageCount' => 'PageCount',
        'sensitiveDetected' => 'SensitiveDetected',
        'sensitiveTags' => 'SensitiveTags',
        'taskId' => 'TaskId',
        'wordCount' => 'WordCount',
    ];

    public function validate()
    {
        if (\is_array($this->fonts)) {
            Model::validateArray($this->fonts);
        }
        if (\is_array($this->sensitiveTags)) {
            Model::validateArray($this->sensitiveTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditBreakdown) {
            $res['CreditBreakdown'] = $this->creditBreakdown;
        }

        if (null !== $this->creditsAvailable) {
            $res['CreditsAvailable'] = $this->creditsAvailable;
        }

        if (null !== $this->detectedLang) {
            $res['DetectedLang'] = $this->detectedLang;
        }

        if (null !== $this->estimatedCostCredits) {
            $res['EstimatedCostCredits'] = $this->estimatedCostCredits;
        }

        if (null !== $this->estimatedTime) {
            $res['EstimatedTime'] = $this->estimatedTime;
        }

        if (null !== $this->fonts) {
            if (\is_array($this->fonts)) {
                $res['Fonts'] = [];
                foreach ($this->fonts as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Fonts'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['Fonts'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->sensitiveDetected) {
            $res['SensitiveDetected'] = $this->sensitiveDetected;
        }

        if (null !== $this->sensitiveTags) {
            if (\is_array($this->sensitiveTags)) {
                $res['SensitiveTags'] = [];
                $n1 = 0;
                foreach ($this->sensitiveTags as $item1) {
                    $res['SensitiveTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
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
        if (isset($map['CreditBreakdown'])) {
            $model->creditBreakdown = $map['CreditBreakdown'];
        }

        if (isset($map['CreditsAvailable'])) {
            $model->creditsAvailable = $map['CreditsAvailable'];
        }

        if (isset($map['DetectedLang'])) {
            $model->detectedLang = $map['DetectedLang'];
        }

        if (isset($map['EstimatedCostCredits'])) {
            $model->estimatedCostCredits = $map['EstimatedCostCredits'];
        }

        if (isset($map['EstimatedTime'])) {
            $model->estimatedTime = $map['EstimatedTime'];
        }

        if (isset($map['Fonts'])) {
            if (!empty($map['Fonts'])) {
                $model->fonts = [];
                foreach ($map['Fonts'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->fonts[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->fonts[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['SensitiveDetected'])) {
            $model->sensitiveDetected = $map['SensitiveDetected'];
        }

        if (isset($map['SensitiveTags'])) {
            if (!empty($map['SensitiveTags'])) {
                $model->sensitiveTags = [];
                $n1 = 0;
                foreach ($map['SensitiveTags'] as $item1) {
                    $model->sensitiveTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
