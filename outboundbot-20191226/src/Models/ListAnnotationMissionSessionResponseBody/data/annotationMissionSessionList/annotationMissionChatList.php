<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatCustomizationDataInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatIntentUserSayInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatTagInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatVocabularyInfoList;
use AlibabaCloud\Tea\Model;

class annotationMissionChatList extends Model
{
    /**
     * @var string
     */
    public $annotationAsrResult;

    /**
     * @var annotationMissionChatCustomizationDataInfoList[]
     */
    public $annotationMissionChatCustomizationDataInfoList;

    /**
     * @description chat id
     *
     * @example 40669e52-c1c8-487f-9593-29749086bdc9
     *
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @var annotationMissionChatIntentUserSayInfoList[]
     */
    public $annotationMissionChatIntentUserSayInfoList;

    /**
     * @var annotationMissionChatTagInfoList[]
     */
    public $annotationMissionChatTagInfoList;

    /**
     * @var annotationMissionChatVocabularyInfoList[]
     */
    public $annotationMissionChatVocabularyInfoList;

    /**
     * @example 03f56192-fa8a-40dc-9558-39b357f0618f
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationStatus;

    /**
     * @example {\\"Answer\\": u\\"\\u53c2\\u8003\\u6587\\u6863\\uff1ahttps://help.aliyun.com/document_detail/215402.html\\", \\"QuestionId\\": 371159, \\"Uuid\\": \\"ac14000116781568127896224d0044\\"}
     *
     * @var string
     */
    public $answer;

    /**
     * @var int
     */
    public $asrAnnotationStatus;

    /**
     * @example 1682216045619
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $intentAnnotationStatus;

    /**
     * @example 1571649300000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 1682390676403
     *
     * @var int
     */
    public $occurTime;

    /**
     * @var string
     */
    public $originalAsrResult;

    /**
     * @example 380578077
     *
     * @var string
     */
    public $sequenceId;

    /**
     * @var int
     */
    public $subStatus;

    /**
     * @var int
     */
    public $tagAnnotationStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $translationError;
    protected $_name = [
        'annotationAsrResult' => 'AnnotationAsrResult',
        'annotationMissionChatCustomizationDataInfoList' => 'AnnotationMissionChatCustomizationDataInfoList',
        'annotationMissionChatId' => 'AnnotationMissionChatId',
        'annotationMissionChatIntentUserSayInfoList' => 'AnnotationMissionChatIntentUserSayInfoList',
        'annotationMissionChatTagInfoList' => 'AnnotationMissionChatTagInfoList',
        'annotationMissionChatVocabularyInfoList' => 'AnnotationMissionChatVocabularyInfoList',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'annotationStatus' => 'AnnotationStatus',
        'answer' => 'Answer',
        'asrAnnotationStatus' => 'AsrAnnotationStatus',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'intentAnnotationStatus' => 'IntentAnnotationStatus',
        'modifiedTime' => 'ModifiedTime',
        'occurTime' => 'OccurTime',
        'originalAsrResult' => 'OriginalAsrResult',
        'sequenceId' => 'SequenceId',
        'subStatus' => 'SubStatus',
        'tagAnnotationStatus' => 'TagAnnotationStatus',
        'translationError' => 'TranslationError',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationAsrResult) {
            $res['AnnotationAsrResult'] = $this->annotationAsrResult;
        }
        if (null !== $this->annotationMissionChatCustomizationDataInfoList) {
            $res['AnnotationMissionChatCustomizationDataInfoList'] = [];
            if (null !== $this->annotationMissionChatCustomizationDataInfoList && \is_array($this->annotationMissionChatCustomizationDataInfoList)) {
                $n = 0;
                foreach ($this->annotationMissionChatCustomizationDataInfoList as $item) {
                    $res['AnnotationMissionChatCustomizationDataInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }
        if (null !== $this->annotationMissionChatIntentUserSayInfoList) {
            $res['AnnotationMissionChatIntentUserSayInfoList'] = [];
            if (null !== $this->annotationMissionChatIntentUserSayInfoList && \is_array($this->annotationMissionChatIntentUserSayInfoList)) {
                $n = 0;
                foreach ($this->annotationMissionChatIntentUserSayInfoList as $item) {
                    $res['AnnotationMissionChatIntentUserSayInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->annotationMissionChatTagInfoList) {
            $res['AnnotationMissionChatTagInfoList'] = [];
            if (null !== $this->annotationMissionChatTagInfoList && \is_array($this->annotationMissionChatTagInfoList)) {
                $n = 0;
                foreach ($this->annotationMissionChatTagInfoList as $item) {
                    $res['AnnotationMissionChatTagInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->annotationMissionChatVocabularyInfoList) {
            $res['AnnotationMissionChatVocabularyInfoList'] = [];
            if (null !== $this->annotationMissionChatVocabularyInfoList && \is_array($this->annotationMissionChatVocabularyInfoList)) {
                $n = 0;
                foreach ($this->annotationMissionChatVocabularyInfoList as $item) {
                    $res['AnnotationMissionChatVocabularyInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }
        if (null !== $this->annotationStatus) {
            $res['AnnotationStatus'] = $this->annotationStatus;
        }
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }
        if (null !== $this->asrAnnotationStatus) {
            $res['AsrAnnotationStatus'] = $this->asrAnnotationStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentAnnotationStatus) {
            $res['IntentAnnotationStatus'] = $this->intentAnnotationStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->occurTime) {
            $res['OccurTime'] = $this->occurTime;
        }
        if (null !== $this->originalAsrResult) {
            $res['OriginalAsrResult'] = $this->originalAsrResult;
        }
        if (null !== $this->sequenceId) {
            $res['SequenceId'] = $this->sequenceId;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->tagAnnotationStatus) {
            $res['TagAnnotationStatus'] = $this->tagAnnotationStatus;
        }
        if (null !== $this->translationError) {
            $res['TranslationError'] = $this->translationError;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotationMissionChatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationAsrResult'])) {
            $model->annotationAsrResult = $map['AnnotationAsrResult'];
        }
        if (isset($map['AnnotationMissionChatCustomizationDataInfoList'])) {
            if (!empty($map['AnnotationMissionChatCustomizationDataInfoList'])) {
                $model->annotationMissionChatCustomizationDataInfoList = [];
                $n = 0;
                foreach ($map['AnnotationMissionChatCustomizationDataInfoList'] as $item) {
                    $model->annotationMissionChatCustomizationDataInfoList[$n++] = null !== $item ? annotationMissionChatCustomizationDataInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }
        if (isset($map['AnnotationMissionChatIntentUserSayInfoList'])) {
            if (!empty($map['AnnotationMissionChatIntentUserSayInfoList'])) {
                $model->annotationMissionChatIntentUserSayInfoList = [];
                $n = 0;
                foreach ($map['AnnotationMissionChatIntentUserSayInfoList'] as $item) {
                    $model->annotationMissionChatIntentUserSayInfoList[$n++] = null !== $item ? annotationMissionChatIntentUserSayInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnnotationMissionChatTagInfoList'])) {
            if (!empty($map['AnnotationMissionChatTagInfoList'])) {
                $model->annotationMissionChatTagInfoList = [];
                $n = 0;
                foreach ($map['AnnotationMissionChatTagInfoList'] as $item) {
                    $model->annotationMissionChatTagInfoList[$n++] = null !== $item ? annotationMissionChatTagInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnnotationMissionChatVocabularyInfoList'])) {
            if (!empty($map['AnnotationMissionChatVocabularyInfoList'])) {
                $model->annotationMissionChatVocabularyInfoList = [];
                $n = 0;
                foreach ($map['AnnotationMissionChatVocabularyInfoList'] as $item) {
                    $model->annotationMissionChatVocabularyInfoList[$n++] = null !== $item ? annotationMissionChatVocabularyInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }
        if (isset($map['AnnotationStatus'])) {
            $model->annotationStatus = $map['AnnotationStatus'];
        }
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }
        if (isset($map['AsrAnnotationStatus'])) {
            $model->asrAnnotationStatus = $map['AsrAnnotationStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentAnnotationStatus'])) {
            $model->intentAnnotationStatus = $map['IntentAnnotationStatus'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OccurTime'])) {
            $model->occurTime = $map['OccurTime'];
        }
        if (isset($map['OriginalAsrResult'])) {
            $model->originalAsrResult = $map['OriginalAsrResult'];
        }
        if (isset($map['SequenceId'])) {
            $model->sequenceId = $map['SequenceId'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['TagAnnotationStatus'])) {
            $model->tagAnnotationStatus = $map['TagAnnotationStatus'];
        }
        if (isset($map['TranslationError'])) {
            $model->translationError = $map['TranslationError'];
        }

        return $model;
    }
}
