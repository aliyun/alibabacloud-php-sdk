<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class UpdateSynonymsRequest extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @description This parameter is required.
     *
     * @example synonyms-AAAAAAAAAUpwTTVrwTFJwQ
     *
     * @var string
     */
    public $synonymIdKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $word;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $wordSynonyms;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'columns' => 'columns',
        'synonymIdKey' => 'synonymIdKey',
        'word' => 'word',
        'wordSynonyms' => 'wordSynonyms',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
        }
        if (null !== $this->synonymIdKey) {
            $res['synonymIdKey'] = $this->synonymIdKey;
        }
        if (null !== $this->word) {
            $res['word'] = $this->word;
        }
        if (null !== $this->wordSynonyms) {
            $res['wordSynonyms'] = $this->wordSynonyms;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSynonymsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = $map['columns'];
            }
        }
        if (isset($map['synonymIdKey'])) {
            $model->synonymIdKey = $map['synonymIdKey'];
        }
        if (isset($map['word'])) {
            $model->word = $map['word'];
        }
        if (isset($map['wordSynonyms'])) {
            if (!empty($map['wordSynonyms'])) {
                $model->wordSynonyms = $map['wordSynonyms'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
