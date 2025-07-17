<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\knowledgeReferences;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\similarSql;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\tables;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var knowledgeReferences[]
     */
    public $knowledgeReferences;

    /**
     * @var string
     */
    public $question;

    /**
     * @var similarSql[]
     */
    public $similarSql;

    /**
     * @example SELECT * FROM table WHERE condition;
     *
     * @var string
     */
    public $sql;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @example 通过分析用户的问题和提供的知识，生成了相应的SQL语句。
     *
     * @var string
     */
    public $thought;
    protected $_name = [
        'knowledgeReferences' => 'KnowledgeReferences',
        'question' => 'Question',
        'similarSql' => 'SimilarSql',
        'sql' => 'Sql',
        'tables' => 'Tables',
        'thought' => 'Thought',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeReferences) {
            $res['KnowledgeReferences'] = [];
            if (null !== $this->knowledgeReferences && \is_array($this->knowledgeReferences)) {
                $n = 0;
                foreach ($this->knowledgeReferences as $item) {
                    $res['KnowledgeReferences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->similarSql) {
            $res['SimilarSql'] = [];
            if (null !== $this->similarSql && \is_array($this->similarSql)) {
                $n = 0;
                foreach ($this->similarSql as $item) {
                    $res['SimilarSql'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thought) {
            $res['Thought'] = $this->thought;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeReferences'])) {
            if (!empty($map['KnowledgeReferences'])) {
                $model->knowledgeReferences = [];
                $n = 0;
                foreach ($map['KnowledgeReferences'] as $item) {
                    $model->knowledgeReferences[$n++] = null !== $item ? knowledgeReferences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['SimilarSql'])) {
            if (!empty($map['SimilarSql'])) {
                $model->similarSql = [];
                $n = 0;
                foreach ($map['SimilarSql'] as $item) {
                    $model->similarSql[$n++] = null !== $item ? similarSql::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Thought'])) {
            $model->thought = $map['Thought'];
        }

        return $model;
    }
}
