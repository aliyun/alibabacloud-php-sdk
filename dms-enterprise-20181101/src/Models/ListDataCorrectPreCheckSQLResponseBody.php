<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody\preCheckSQLList;
use AlibabaCloud\Tea\Model;

class ListDataCorrectPreCheckSQLResponseBody extends Model
{
    /**
     * @description The SQL statement.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the data change ticket. You can call the [ListOrders](~~144643~~) operation to query the ID of the data change ticket.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the database. The database can be a physical database or a logical database.
     *
     *   To query the ID of a physical database, call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation.
     *   To query the ID of a logical database, call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation.
     *
     * @var preCheckSQLList[]
     */
    public $preCheckSQLList;

    /**
     * @description The error message returned.
     *
     * @example 31853A2B-DC9D-5B39-8492-D2AC8BCF550E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the database.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'preCheckSQLList' => 'PreCheckSQLList',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->preCheckSQLList) {
            $res['PreCheckSQLList'] = [];
            if (null !== $this->preCheckSQLList && \is_array($this->preCheckSQLList)) {
                $n = 0;
                foreach ($this->preCheckSQLList as $item) {
                    $res['PreCheckSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataCorrectPreCheckSQLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PreCheckSQLList'])) {
            if (!empty($map['PreCheckSQLList'])) {
                $model->preCheckSQLList = [];
                $n                      = 0;
                foreach ($map['PreCheckSQLList'] as $item) {
                    $model->preCheckSQLList[$n++] = null !== $item ? preCheckSQLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
