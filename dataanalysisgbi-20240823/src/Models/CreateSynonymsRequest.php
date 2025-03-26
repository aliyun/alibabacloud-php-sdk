<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class CreateSynonymsRequest extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var string
     */
    public $word;

    /**
     * @var string[]
     */
    public $wordSynonyms;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'columns' => 'columns',
        'word' => 'word',
        'wordSynonyms' => 'wordSynonyms',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->wordSynonyms)) {
            Model::validateArray($this->wordSynonyms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->word) {
            $res['word'] = $this->word;
        }

        if (null !== $this->wordSynonyms) {
            if (\is_array($this->wordSynonyms)) {
                $res['wordSynonyms'] = [];
                $n1 = 0;
                foreach ($this->wordSynonyms as $item1) {
                    $res['wordSynonyms'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['word'])) {
            $model->word = $map['word'];
        }

        if (isset($map['wordSynonyms'])) {
            if (!empty($map['wordSynonyms'])) {
                $model->wordSynonyms = [];
                $n1 = 0;
                foreach ($map['wordSynonyms'] as $item1) {
                    $model->wordSynonyms[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
