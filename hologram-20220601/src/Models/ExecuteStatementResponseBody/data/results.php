<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ExecuteStatementResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ExecuteStatementResponseBody\data\results\columnMetadata;

class results extends Model
{
    /**
     * @var columnMetadata[]
     */
    public $columnMetadata;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string[][]
     */
    public $records;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $truncated;

    /**
     * @var int
     */
    public $updateCount;
    protected $_name = [
        'columnMetadata' => 'columnMetadata',
        'count' => 'count',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'queryId' => 'queryId',
        'records' => 'records',
        'sql' => 'sql',
        'success' => 'success',
        'truncated' => 'truncated',
        'updateCount' => 'updateCount',
    ];

    public function validate()
    {
        if (\is_array($this->columnMetadata)) {
            Model::validateArray($this->columnMetadata);
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            if (\is_array($this->columnMetadata)) {
                $res['columnMetadata'] = [];
                $n1 = 0;
                foreach ($this->columnMetadata as $item1) {
                    $res['columnMetadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->queryId) {
            $res['queryId'] = $this->queryId;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    if (\is_array($item1)) {
                        $res['records'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['records'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->truncated) {
            $res['truncated'] = $this->truncated;
        }

        if (null !== $this->updateCount) {
            $res['updateCount'] = $this->updateCount;
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
        if (isset($map['columnMetadata'])) {
            if (!empty($map['columnMetadata'])) {
                $model->columnMetadata = [];
                $n1 = 0;
                foreach ($map['columnMetadata'] as $item1) {
                    $model->columnMetadata[$n1] = columnMetadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['queryId'])) {
            $model->queryId = $map['queryId'];
        }

        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['records'] as $item1) {
                    if (!empty($item1)) {
                        $model->records[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->records[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['truncated'])) {
            $model->truncated = $map['truncated'];
        }

        if (isset($map['updateCount'])) {
            $model->updateCount = $map['updateCount'];
        }

        return $model;
    }
}
