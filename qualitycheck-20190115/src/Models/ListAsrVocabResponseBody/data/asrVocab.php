<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody\data;

use AlibabaCloud\Dara\Model;

class asrVocab extends Model
{
    /**
     * @var int
     */
    public $asrVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modelCustomizationId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'asrVersion' => 'AsrVersion',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modelCustomizationId' => 'ModelCustomizationId',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
        'vocabularyId' => 'VocabularyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrVersion) {
            $res['AsrVersion'] = $this->asrVersion;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modelCustomizationId) {
            $res['ModelCustomizationId'] = $this->modelCustomizationId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
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
        if (isset($map['AsrVersion'])) {
            $model->asrVersion = $map['AsrVersion'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModelCustomizationId'])) {
            $model->modelCustomizationId = $map['ModelCustomizationId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        return $model;
    }
}
