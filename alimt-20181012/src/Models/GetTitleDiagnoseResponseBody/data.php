<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleDiagnoseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Boy
     *
     * @var string
     */
    public $allUppercaseWords;

    /**
     * @example true
     *
     * @var string
     */
    public $containCoreClasses;

    /**
     * @example baba
     *
     * @var string
     */
    public $disableWords;

    /**
     * @example hi
     *
     * @var string
     */
    public $duplicateWords;

    /**
     * @example 2
     *
     * @var string
     */
    public $languageQualityScore;

    /**
     * @example no
     *
     * @var string
     */
    public $noFirstUppercaseList;

    /**
     * @example 100
     *
     * @var string
     */
    public $overLengthLimit;

    /**
     * @example 3
     *
     * @var string
     */
    public $totalScore;

    /**
     * @example 10
     *
     * @var string
     */
    public $wordCount;

    /**
     * @example ahk
     *
     * @var string
     */
    public $wordSpelledCorrectError;
    protected $_name = [
        'allUppercaseWords'       => 'AllUppercaseWords',
        'containCoreClasses'      => 'ContainCoreClasses',
        'disableWords'            => 'DisableWords',
        'duplicateWords'          => 'DuplicateWords',
        'languageQualityScore'    => 'LanguageQualityScore',
        'noFirstUppercaseList'    => 'NoFirstUppercaseList',
        'overLengthLimit'         => 'OverLengthLimit',
        'totalScore'              => 'TotalScore',
        'wordCount'               => 'WordCount',
        'wordSpelledCorrectError' => 'WordSpelledCorrectError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allUppercaseWords) {
            $res['AllUppercaseWords'] = $this->allUppercaseWords;
        }
        if (null !== $this->containCoreClasses) {
            $res['ContainCoreClasses'] = $this->containCoreClasses;
        }
        if (null !== $this->disableWords) {
            $res['DisableWords'] = $this->disableWords;
        }
        if (null !== $this->duplicateWords) {
            $res['DuplicateWords'] = $this->duplicateWords;
        }
        if (null !== $this->languageQualityScore) {
            $res['LanguageQualityScore'] = $this->languageQualityScore;
        }
        if (null !== $this->noFirstUppercaseList) {
            $res['NoFirstUppercaseList'] = $this->noFirstUppercaseList;
        }
        if (null !== $this->overLengthLimit) {
            $res['OverLengthLimit'] = $this->overLengthLimit;
        }
        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }
        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
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
        if (isset($map['AllUppercaseWords'])) {
            $model->allUppercaseWords = $map['AllUppercaseWords'];
        }
        if (isset($map['ContainCoreClasses'])) {
            $model->containCoreClasses = $map['ContainCoreClasses'];
        }
        if (isset($map['DisableWords'])) {
            $model->disableWords = $map['DisableWords'];
        }
        if (isset($map['DuplicateWords'])) {
            $model->duplicateWords = $map['DuplicateWords'];
        }
        if (isset($map['LanguageQualityScore'])) {
            $model->languageQualityScore = $map['LanguageQualityScore'];
        }
        if (isset($map['NoFirstUppercaseList'])) {
            $model->noFirstUppercaseList = $map['NoFirstUppercaseList'];
        }
        if (isset($map['OverLengthLimit'])) {
            $model->overLengthLimit = $map['OverLengthLimit'];
        }
        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }
        if (isset($map['WordSpelledCorrectError'])) {
            $model->wordSpelledCorrectError = $map['WordSpelledCorrectError'];
        }

        return $model;
    }
}
