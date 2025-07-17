<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data;

use AlibabaCloud\Tea\Model;

class similarSql extends Model
{
    /**
     * @var string
     */
    public $question;

    /**
     * @example 0.52
     *
     * @var string
     */
    public $score;

    /**
     * @example SELECT * WHERE ResourceType = \\"ACS::ECS::Instance\\" AND ResourceGroupId != \\"rg-xxx\\"
     *
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $thought;
    protected $_name = [
        'question' => 'Question',
        'score' => 'Score',
        'sql' => 'Sql',
        'thought' => 'Thought',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->thought) {
            $res['Thought'] = $this->thought;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarSql
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Thought'])) {
            $model->thought = $map['Thought'];
        }

        return $model;
    }
}
