<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody\data;

use AlibabaCloud\Tea\Model;

class asrVocab extends Model
{
    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'vocabularyId' => 'VocabularyId',
        'updateTime'   => 'UpdateTime',
        'createTime'   => 'CreateTime',
        'name'         => 'Name',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrVocab
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
