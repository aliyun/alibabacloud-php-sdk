<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatCustomizationDataInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatIntentUserSayInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatTagInfoList;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList\annotationMissionChatVocabularyInfoList;

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
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @var int
     */
    public $annotationStatus;

    /**
     * @var string
     */
    public $answer;

    /**
     * @var int
     */
    public $asrAnnotationStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $intentAnnotationStatus;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $occurTime;

    /**
     * @var string
     */
    public $originalAsrResult;

    /**
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

    public function validate()
    {
        if (\is_array($this->annotationMissionChatCustomizationDataInfoList)) {
            Model::validateArray($this->annotationMissionChatCustomizationDataInfoList);
        }
        if (\is_array($this->annotationMissionChatIntentUserSayInfoList)) {
            Model::validateArray($this->annotationMissionChatIntentUserSayInfoList);
        }
        if (\is_array($this->annotationMissionChatTagInfoList)) {
            Model::validateArray($this->annotationMissionChatTagInfoList);
        }
        if (\is_array($this->annotationMissionChatVocabularyInfoList)) {
            Model::validateArray($this->annotationMissionChatVocabularyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationAsrResult) {
            $res['AnnotationAsrResult'] = $this->annotationAsrResult;
        }

        if (null !== $this->annotationMissionChatCustomizationDataInfoList) {
            if (\is_array($this->annotationMissionChatCustomizationDataInfoList)) {
                $res['AnnotationMissionChatCustomizationDataInfoList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionChatCustomizationDataInfoList as $item1) {
                    $res['AnnotationMissionChatCustomizationDataInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }

        if (null !== $this->annotationMissionChatIntentUserSayInfoList) {
            if (\is_array($this->annotationMissionChatIntentUserSayInfoList)) {
                $res['AnnotationMissionChatIntentUserSayInfoList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionChatIntentUserSayInfoList as $item1) {
                    $res['AnnotationMissionChatIntentUserSayInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->annotationMissionChatTagInfoList) {
            if (\is_array($this->annotationMissionChatTagInfoList)) {
                $res['AnnotationMissionChatTagInfoList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionChatTagInfoList as $item1) {
                    $res['AnnotationMissionChatTagInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->annotationMissionChatVocabularyInfoList) {
            if (\is_array($this->annotationMissionChatVocabularyInfoList)) {
                $res['AnnotationMissionChatVocabularyInfoList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionChatVocabularyInfoList as $item1) {
                    $res['AnnotationMissionChatVocabularyInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationAsrResult'])) {
            $model->annotationAsrResult = $map['AnnotationAsrResult'];
        }

        if (isset($map['AnnotationMissionChatCustomizationDataInfoList'])) {
            if (!empty($map['AnnotationMissionChatCustomizationDataInfoList'])) {
                $model->annotationMissionChatCustomizationDataInfoList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionChatCustomizationDataInfoList'] as $item1) {
                    $model->annotationMissionChatCustomizationDataInfoList[$n1++] = annotationMissionChatCustomizationDataInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }

        if (isset($map['AnnotationMissionChatIntentUserSayInfoList'])) {
            if (!empty($map['AnnotationMissionChatIntentUserSayInfoList'])) {
                $model->annotationMissionChatIntentUserSayInfoList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionChatIntentUserSayInfoList'] as $item1) {
                    $model->annotationMissionChatIntentUserSayInfoList[$n1++] = annotationMissionChatIntentUserSayInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnnotationMissionChatTagInfoList'])) {
            if (!empty($map['AnnotationMissionChatTagInfoList'])) {
                $model->annotationMissionChatTagInfoList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionChatTagInfoList'] as $item1) {
                    $model->annotationMissionChatTagInfoList[$n1++] = annotationMissionChatTagInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnnotationMissionChatVocabularyInfoList'])) {
            if (!empty($map['AnnotationMissionChatVocabularyInfoList'])) {
                $model->annotationMissionChatVocabularyInfoList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionChatVocabularyInfoList'] as $item1) {
                    $model->annotationMissionChatVocabularyInfoList[$n1++] = annotationMissionChatVocabularyInfoList::fromMap($item1);
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
