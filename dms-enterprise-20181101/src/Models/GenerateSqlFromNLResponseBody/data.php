<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\knowledgeReferences;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\similarSql;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data\tables;

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
     * @var string
     */
    public $sql;

    /**
     * @var tables[]
     */
    public $tables;

    /**
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

    public function validate()
    {
        if (\is_array($this->knowledgeReferences)) {
            Model::validateArray($this->knowledgeReferences);
        }
        if (\is_array($this->similarSql)) {
            Model::validateArray($this->similarSql);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeReferences) {
            if (\is_array($this->knowledgeReferences)) {
                $res['KnowledgeReferences'] = [];
                $n1 = 0;
                foreach ($this->knowledgeReferences as $item1) {
                    $res['KnowledgeReferences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->similarSql) {
            if (\is_array($this->similarSql)) {
                $res['SimilarSql'] = [];
                $n1 = 0;
                foreach ($this->similarSql as $item1) {
                    $res['SimilarSql'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->thought) {
            $res['Thought'] = $this->thought;
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
        if (isset($map['KnowledgeReferences'])) {
            if (!empty($map['KnowledgeReferences'])) {
                $model->knowledgeReferences = [];
                $n1 = 0;
                foreach ($map['KnowledgeReferences'] as $item1) {
                    $model->knowledgeReferences[$n1++] = knowledgeReferences::fromMap($item1);
                }
            }
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['SimilarSql'])) {
            if (!empty($map['SimilarSql'])) {
                $model->similarSql = [];
                $n1 = 0;
                foreach ($map['SimilarSql'] as $item1) {
                    $model->similarSql[$n1++] = similarSql::fromMap($item1);
                }
            }
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['Thought'])) {
            $model->thought = $map['Thought'];
        }

        return $model;
    }
}
