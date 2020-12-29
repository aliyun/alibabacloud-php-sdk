<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleDiagnoseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $duplicateWords;

    /**
     * @var string
     */
    public $containCoreClasses;

    /**
     * @var string
     */
    public $wordCount;

    /**
     * @var string
     */
    public $languageQualityScore;

    /**
     * @var string
     */
    public $allUppercaseWords;

    /**
     * @var string
     */
    public $overLengthLimit;

    /**
     * @var string
     */
    public $disableWords;

    /**
     * @var string
     */
    public $noFirstUppercaseList;

    /**
     * @var string
     */
    public $totalScore;

    /**
     * @var string
     */
    public $wordSpelledCorrectError;
    protected $_name = [
        'duplicateWords'          => 'DuplicateWords',
        'containCoreClasses'      => 'ContainCoreClasses',
        'wordCount'               => 'WordCount',
        'languageQualityScore'    => 'LanguageQualityScore',
        'allUppercaseWords'       => 'AllUppercaseWords',
        'overLengthLimit'         => 'OverLengthLimit',
        'disableWords'            => 'DisableWords',
        'noFirstUppercaseList'    => 'NoFirstUppercaseList',
        'totalScore'              => 'TotalScore',
        'wordSpelledCorrectError' => 'WordSpelledCorrectError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duplicateWords) {
            $res['DuplicateWords'] = $this->duplicateWords;
        }
        if (null !== $this->containCoreClasses) {
            $res['ContainCoreClasses'] = $this->containCoreClasses;
        }
        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }
        if (null !== $this->languageQualityScore) {
            $res['LanguageQualityScore'] = $this->languageQualityScore;
        }
        if (null !== $this->allUppercaseWords) {
            $res['AllUppercaseWords'] = $this->allUppercaseWords;
        }
        if (null !== $this->overLengthLimit) {
            $res['OverLengthLimit'] = $this->overLengthLimit;
        }
        if (null !== $this->disableWords) {
            $res['DisableWords'] = $this->disableWords;
        }
        if (null !== $this->noFirstUppercaseList) {
            $res['NoFirstUppercaseList'] = $this->noFirstUppercaseList;
        }
        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }
        if (null !== $this->wordSpelledCorrectError) {
            $res['WordSpelledCorrectError'] = $this->wordSpelledCorrectError;
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
        if (isset($map['DuplicateWords'])) {
            $model->duplicateWords = $map['DuplicateWords'];
        }
        if (isset($map['ContainCoreClasses'])) {
            $model->containCoreClasses = $map['ContainCoreClasses'];
        }
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }
        if (isset($map['LanguageQualityScore'])) {
            $model->languageQualityScore = $map['LanguageQualityScore'];
        }
        if (isset($map['AllUppercaseWords'])) {
            $model->allUppercaseWords = $map['AllUppercaseWords'];
        }
        if (isset($map['OverLengthLimit'])) {
            $model->overLengthLimit = $map['OverLengthLimit'];
        }
        if (isset($map['DisableWords'])) {
            $model->disableWords = $map['DisableWords'];
        }
        if (isset($map['NoFirstUppercaseList'])) {
            $model->noFirstUppercaseList = $map['NoFirstUppercaseList'];
        }
        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }
        if (isset($map['WordSpelledCorrectError'])) {
            $model->wordSpelledCorrectError = $map['WordSpelledCorrectError'];
        }

        return $model;
    }
}
