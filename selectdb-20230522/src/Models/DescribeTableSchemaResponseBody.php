<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeTableSchemaResponseBody extends Model
{
    /**
     * @var string
     */
    public $createStatement;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'createStatement' => 'CreateStatement',
        'database' => 'Database',
        'requestId' => 'RequestId',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createStatement) {
            $res['CreateStatement'] = $this->createStatement;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
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
        if (isset($map['CreateStatement'])) {
            $model->createStatement = $map['CreateStatement'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
