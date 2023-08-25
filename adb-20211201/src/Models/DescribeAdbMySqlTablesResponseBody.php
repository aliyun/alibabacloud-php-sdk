<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAdbMySqlTablesResponseBody extends Model
{
    /**
     * @description The message returned for the operation. Valid values:
     *
     *   **Success** is returned if the operation is successful.
     *   An error message is returned if the operation fails.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 7A7D49E3-5585-5DF8-B62C-75C46B4991DC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schema;

    /**
     * @description Indicates whether the operation is successful. Valid values:
     *
     *   **true**: The operation is successful.
     *   **false**: The operation fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The names of tables.
     *
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
    }

    public function toMap()
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
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdbMySqlTablesResponseBody
     */
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
                $model->tables = $map['Tables'];
            }
        }

        return $model;
    }
}
