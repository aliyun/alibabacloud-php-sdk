<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody\data\sqlOutputs;

class data extends Model
{
    /**
     * @var int[]
     */
    public $executionTime;

    /**
     * @var string
     */
    public $sqlErrorCode;

    /**
     * @var string
     */
    public $sqlErrorMessage;

    /**
     * @var sqlOutputs[]
     */
    public $sqlOutputs;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statementId;
    protected $_name = [
        'executionTime' => 'executionTime',
        'sqlErrorCode' => 'sqlErrorCode',
        'sqlErrorMessage' => 'sqlErrorMessage',
        'sqlOutputs' => 'sqlOutputs',
        'state' => 'state',
        'statementId' => 'statementId',
    ];

    public function validate()
    {
        if (\is_array($this->executionTime)) {
            Model::validateArray($this->executionTime);
        }
        if (\is_array($this->sqlOutputs)) {
            Model::validateArray($this->sqlOutputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionTime) {
            if (\is_array($this->executionTime)) {
                $res['executionTime'] = [];
                $n1 = 0;
                foreach ($this->executionTime as $item1) {
                    $res['executionTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sqlErrorCode) {
            $res['sqlErrorCode'] = $this->sqlErrorCode;
        }

        if (null !== $this->sqlErrorMessage) {
            $res['sqlErrorMessage'] = $this->sqlErrorMessage;
        }

        if (null !== $this->sqlOutputs) {
            if (\is_array($this->sqlOutputs)) {
                $res['sqlOutputs'] = [];
                $n1 = 0;
                foreach ($this->sqlOutputs as $item1) {
                    $res['sqlOutputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->statementId) {
            $res['statementId'] = $this->statementId;
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
        if (isset($map['executionTime'])) {
            if (!empty($map['executionTime'])) {
                $model->executionTime = [];
                $n1 = 0;
                foreach ($map['executionTime'] as $item1) {
                    $model->executionTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sqlErrorCode'])) {
            $model->sqlErrorCode = $map['sqlErrorCode'];
        }

        if (isset($map['sqlErrorMessage'])) {
            $model->sqlErrorMessage = $map['sqlErrorMessage'];
        }

        if (isset($map['sqlOutputs'])) {
            if (!empty($map['sqlOutputs'])) {
                $model->sqlOutputs = [];
                $n1 = 0;
                foreach ($map['sqlOutputs'] as $item1) {
                    $model->sqlOutputs[$n1] = sqlOutputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['statementId'])) {
            $model->statementId = $map['statementId'];
        }

        return $model;
    }
}
