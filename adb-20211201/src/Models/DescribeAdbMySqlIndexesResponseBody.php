<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlIndexesResponseBody\indexes;

class DescribeAdbMySqlIndexesResponseBody extends Model
{
    /**
     * @var int
     */
    public $indexCount;

    /**
     * @var indexes[]
     */
    public $indexes;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'indexCount' => 'IndexCount',
        'indexes' => 'Indexes',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'schema' => 'Schema',
        'success' => 'Success',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->indexes)) {
            Model::validateArray($this->indexes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexCount) {
            $res['IndexCount'] = $this->indexCount;
        }

        if (null !== $this->indexes) {
            if (\is_array($this->indexes)) {
                $res['Indexes'] = [];
                $n1 = 0;
                foreach ($this->indexes as $item1) {
                    $res['Indexes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['IndexCount'])) {
            $model->indexCount = $map['IndexCount'];
        }

        if (isset($map['Indexes'])) {
            if (!empty($map['Indexes'])) {
                $model->indexes = [];
                $n1 = 0;
                foreach ($map['Indexes'] as $item1) {
                    $model->indexes[$n1++] = indexes::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
