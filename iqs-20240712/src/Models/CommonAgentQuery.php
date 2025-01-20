<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class CommonAgentQuery extends Model
{
    /**
     * @var string
     */
    public $query;
    /**
     * @var string
     */
    public $querySceneEnumCode;
    protected $_name = [
        'query'              => 'query',
        'querySceneEnumCode' => 'querySceneEnumCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->querySceneEnumCode) {
            $res['querySceneEnumCode'] = $this->querySceneEnumCode;
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
            $model->query = $map['query'];
        }

        if (isset($map['querySceneEnumCode'])) {
            $model->querySceneEnumCode = $map['querySceneEnumCode'];
        }

        return $model;
    }
}
