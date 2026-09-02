<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class QueryAttachment extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var ExecutionResult
     */
    public $result;
    protected $_name = [
        'query' => 'Query',
        'queryId' => 'QueryId',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['Result'])) {
            $model->result = ExecutionResult::fromMap($map['Result']);
        }

        return $model;
    }
}
