<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Tea\Model;

class annotationMissionChatVocabularyInfoList extends Model
{
    /**
     * @description chat id
     *
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @description id
     *
     * @var string
     */
    public $annotationMissionChatVocabularyInfoId;

    /**
     * @example 977a45dc-b636-4407-9e98-9f572c709ada
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $create;

    /**
     * @example 1677552860720
     *
     * @var int
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $delete;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1679283408230
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return annotationMissionChatVocabularyInfoList
     */
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
