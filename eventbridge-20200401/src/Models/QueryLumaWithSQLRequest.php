<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class QueryLumaWithSQLRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'agentName' => 'AgentName',
        'maxRows' => 'MaxRows',
        'sql' => 'Sql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->maxRows) {
            $res['MaxRows'] = $this->maxRows;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['MaxRows'])) {
            $model->maxRows = $map['MaxRows'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
