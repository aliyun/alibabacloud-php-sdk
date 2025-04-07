<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class CommonAgentQuery extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $querySceneEnumCode;

    /**
     * @var string
     */
    public $searchModel;
    protected $_name = [
        'limit' => 'limit',
        'query' => 'query',
        'querySceneEnumCode' => 'querySceneEnumCode',
        'searchModel' => 'searchModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->querySceneEnumCode) {
            $res['querySceneEnumCode'] = $this->querySceneEnumCode;
        }

        if (null !== $this->searchModel) {
            $res['searchModel'] = $this->searchModel;
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
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['querySceneEnumCode'])) {
            $model->querySceneEnumCode = $map['querySceneEnumCode'];
        }

        if (isset($map['searchModel'])) {
            $model->searchModel = $map['searchModel'];
        }

        return $model;
    }
}
