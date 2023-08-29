<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponseBody\databaseResult;
use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponseBody\tableResult;
use AlibabaCloud\Tea\Model;

class SearchResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var databaseResult
     */
    public $databaseResult;

    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @example 460C862F-BB91-5C04-BC3F-946EEF467862
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var tableResult
     */
    public $tableResult;
    protected $_name = [
        'code'           => 'Code',
        'databaseResult' => 'DatabaseResult',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'tableResult'    => 'TableResult',
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
        if (null !== $this->databaseResult) {
            $res['DatabaseResult'] = null !== $this->databaseResult ? $this->databaseResult->toMap() : null;
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
        if (null !== $this->tableResult) {
            $res['TableResult'] = null !== $this->tableResult ? $this->tableResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseResult'])) {
            $model->databaseResult = databaseResult::fromMap($map['DatabaseResult']);
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
        if (isset($map['TableResult'])) {
            $model->tableResult = tableResult::fromMap($map['TableResult']);
        }

        return $model;
    }
}
