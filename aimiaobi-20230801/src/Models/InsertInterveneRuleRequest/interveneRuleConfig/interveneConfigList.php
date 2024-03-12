<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;

use AlibabaCloud\Tea\Model;

class interveneConfigList extends Model
{
    /**
     * @description id
     *
     * @example 37249
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $operationType;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'id'            => 'Id',
        'operationType' => 'OperationType',
        'query'         => 'Query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interveneConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
