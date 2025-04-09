<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class intentSummaryInfo extends Model
{
    /**
     * @var int
     */
    public $annotationCorrectCount;

    /**
     * @var int
     */
    public $annotationInvalid;

    /**
     * @var int
     */
    public $chatTotalCount;

    /**
     * @var int
     */
    public $intentUserSayCount;

    /**
     * @var int
     */
    public $intentionNotCoveredCount;

    /**
     * @var int
     */
    public $matchErrorCount;

    /**
     * @var int
     */
    public $noAnnotation;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
