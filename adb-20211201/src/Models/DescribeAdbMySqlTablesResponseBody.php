<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeAdbMySqlTablesResponseBody extends Model
{
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
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'schema'    => 'Schema',
        'success'   => 'Success',
        'tables'    => 'Tables',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1            = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = $item1;
                }
            }
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

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1            = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
