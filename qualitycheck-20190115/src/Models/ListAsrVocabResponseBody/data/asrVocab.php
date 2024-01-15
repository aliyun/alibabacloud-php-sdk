<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody\data;

use AlibabaCloud\Tea\Model;

class asrVocab extends Model
{
    /**
     * @example 2019-04-15T14:57Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 18
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2019-04-15T14:57Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example a01daaaxxxxxxxxx
     *
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'id'           => 'Id',
        'name'         => 'Name',
        'updateTime'   => 'UpdateTime',
        'vocabularyId' => 'VocabularyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

    /**
     * @param array $map
     *
     * @return asrVocab
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
