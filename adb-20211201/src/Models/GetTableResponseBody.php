<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetTableResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The error message returned.
     *
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the query succeeded.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Details of the table.
     *
     * @var TableModel
     */
    public $table;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'table'     => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Table'])) {
            $model->table = TableModel::fromMap($map['Table']);
        }

        return $model;
    }
}
