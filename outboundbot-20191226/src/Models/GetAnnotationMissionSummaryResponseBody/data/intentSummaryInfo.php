<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class intentSummaryInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $annotationCorrectCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationInvalid;

    /**
     * @example 1
     *
     * @var int
     */
    public $chatTotalCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $intentUserSayCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $intentionNotCoveredCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $matchErrorCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $noAnnotation;

    /**
     * @example 1
     *
     * @var int
     */
    public $translationUnrecognizedCount;
    protected $_name = [
        'annotationCorrectCount' => 'AnnotationCorrectCount',
        'annotationInvalid' => 'AnnotationInvalid',
        'chatTotalCount' => 'ChatTotalCount',
        'intentUserSayCount' => 'IntentUserSayCount',
        'intentionNotCoveredCount' => 'IntentionNotCoveredCount',
        'matchErrorCount' => 'MatchErrorCount',
        'noAnnotation' => 'NoAnnotation',
        'translationUnrecognizedCount' => 'TranslationUnrecognizedCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationCorrectCount) {
            $res['AnnotationCorrectCount'] = $this->annotationCorrectCount;
        }
        if (null !== $this->annotationInvalid) {
            $res['AnnotationInvalid'] = $this->annotationInvalid;
        }
        if (null !== $this->chatTotalCount) {
            $res['ChatTotalCount'] = $this->chatTotalCount;
        }
        if (null !== $this->intentUserSayCount) {
            $res['IntentUserSayCount'] = $this->intentUserSayCount;
        }
        if (null !== $this->intentionNotCoveredCount) {
            $res['IntentionNotCoveredCount'] = $this->intentionNotCoveredCount;
        }
        if (null !== $this->matchErrorCount) {
            $res['MatchErrorCount'] = $this->matchErrorCount;
        }
        if (null !== $this->noAnnotation) {
            $res['NoAnnotation'] = $this->noAnnotation;
        }
        if (null !== $this->translationUnrecognizedCount) {
            $res['TranslationUnrecognizedCount'] = $this->translationUnrecognizedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intentSummaryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationCorrectCount'])) {
            $model->annotationCorrectCount = $map['AnnotationCorrectCount'];
        }
        if (isset($map['AnnotationInvalid'])) {
            $model->annotationInvalid = $map['AnnotationInvalid'];
        }
        if (isset($map['ChatTotalCount'])) {
            $model->chatTotalCount = $map['ChatTotalCount'];
        }
        if (isset($map['IntentUserSayCount'])) {
            $model->intentUserSayCount = $map['IntentUserSayCount'];
        }
        if (isset($map['IntentionNotCoveredCount'])) {
            $model->intentionNotCoveredCount = $map['IntentionNotCoveredCount'];
        }
        if (isset($map['MatchErrorCount'])) {
            $model->matchErrorCount = $map['MatchErrorCount'];
        }
        if (isset($map['NoAnnotation'])) {
            $model->noAnnotation = $map['NoAnnotation'];
        }
        if (isset($map['TranslationUnrecognizedCount'])) {
            $model->translationUnrecognizedCount = $map['TranslationUnrecognizedCount'];
        }

        return $model;
    }
}
