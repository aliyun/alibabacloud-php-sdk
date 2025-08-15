<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;

use AlibabaCloud\Dara\Model;

class interveneConfigList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $operationType;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'id' => 'Id',
        'operationType' => 'OperationType',
        'query' => 'Query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
