<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest\query;

class CreateEduProblemSolveRequest extends Model
{
    /**
     * @var query
     */
    public $query;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'query' => 'query',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->query) {
            $this->query->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['query'])) {
            $model->query = query::fromMap($map['query']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
