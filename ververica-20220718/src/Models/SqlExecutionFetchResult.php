<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlExecutionFetchResult extends Model
{
    /**
     * @var DqlResult
     */
    public $dqlResult;

    /**
     * @var SqlExecution
     */
    public $sqlExecution;
    protected $_name = [
        'dqlResult' => 'dqlResult',
        'sqlExecution' => 'sqlExecution',
    ];

    public function validate()
    {
        if (null !== $this->dqlResult) {
            $this->dqlResult->validate();
        }
        if (null !== $this->sqlExecution) {
            $this->sqlExecution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dqlResult) {
            $res['dqlResult'] = null !== $this->dqlResult ? $this->dqlResult->toArray($noStream) : $this->dqlResult;
        }

        if (null !== $this->sqlExecution) {
            $res['sqlExecution'] = null !== $this->sqlExecution ? $this->sqlExecution->toArray($noStream) : $this->sqlExecution;
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
        if (isset($map['dqlResult'])) {
            $model->dqlResult = DqlResult::fromMap($map['dqlResult']);
        }

        if (isset($map['sqlExecution'])) {
            $model->sqlExecution = SqlExecution::fromMap($map['sqlExecution']);
        }

        return $model;
    }
}
