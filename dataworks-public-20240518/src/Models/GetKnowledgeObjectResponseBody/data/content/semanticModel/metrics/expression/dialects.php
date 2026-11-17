<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\content\semanticModel\metrics\expression;

use AlibabaCloud\Dara\Model;

class dialects extends Model
{
    /**
     * @var string
     */
    public $dialect;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'dialect' => 'Dialect',
        'sql' => 'Sql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialect) {
            $res['Dialect'] = $this->dialect;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
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
        if (isset($map['Dialect'])) {
            $model->dialect = $map['Dialect'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
