<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Dara\Model;

class annotationMissionChatVocabularyInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @var string
     */
    public $annotationMissionChatVocabularyInfoId;

    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @var bool
     */
    public $create;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $vocabulary;

    /**
     * @var string
     */
    public $vocabularyDescription;

    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string
     */
    public $vocabularyName;

    /**
     * @var int
     */
    public $vocabularyWeight;
    protected $_name = [
        'annotationMissionChatId' => 'AnnotationMissionChatId',
        'annotationMissionChatVocabularyInfoId' => 'AnnotationMissionChatVocabularyInfoId',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'create' => 'Create',
        'createTime' => 'CreateTime',
        'delete' => 'Delete',
        'instanceId' => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
        'vocabulary' => 'Vocabulary',
        'vocabularyDescription' => 'VocabularyDescription',
        'vocabularyId' => 'VocabularyId',
        'vocabularyName' => 'VocabularyName',
        'vocabularyWeight' => 'VocabularyWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }

        if (null !== $this->annotationMissionChatVocabularyInfoId) {
            $res['AnnotationMissionChatVocabularyInfoId'] = $this->annotationMissionChatVocabularyInfoId;
        }

        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }

        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->vocabulary) {
            $res['Vocabulary'] = $this->vocabulary;
        }

        if (null !== $this->vocabularyDescription) {
            $res['VocabularyDescription'] = $this->vocabularyDescription;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->vocabularyName) {
            $res['VocabularyName'] = $this->vocabularyName;
        }

        if (null !== $this->vocabularyWeight) {
            $res['VocabularyWeight'] = $this->vocabularyWeight;
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
        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }

        if (isset($map['AnnotationMissionChatVocabularyInfoId'])) {
            $model->annotationMissionChatVocabularyInfoId = $map['AnnotationMissionChatVocabularyInfoId'];
        }

        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }

        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Vocabulary'])) {
            $model->vocabulary = $map['Vocabulary'];
        }

        if (isset($map['VocabularyDescription'])) {
            $model->vocabularyDescription = $map['VocabularyDescription'];
        }

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        if (isset($map['VocabularyName'])) {
            $model->vocabularyName = $map['VocabularyName'];
        }

        if (isset($map['VocabularyWeight'])) {
            $model->vocabularyWeight = $map['VocabularyWeight'];
        }

        return $model;
    }
}
