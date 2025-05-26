<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTableMetaResponseBody\tableMeta;

class DescribeAdbMySqlTableMetaResponseBody extends Model
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
     * @var bool
     */
    public $success;

    /**
     * @var tableMeta
     */
    public $tableMeta;
    protected $_name = [
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tableMeta' => 'TableMeta',
    ];

    public function validate()
    {
        if (null !== $this->tableMeta) {
            $this->tableMeta->validate();
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

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tableMeta) {
            $res['TableMeta'] = null !== $this->tableMeta ? $this->tableMeta->toArray($noStream) : $this->tableMeta;
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

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TableMeta'])) {
            $model->tableMeta = tableMeta::fromMap($map['TableMeta']);
        }

        return $model;
    }
}
