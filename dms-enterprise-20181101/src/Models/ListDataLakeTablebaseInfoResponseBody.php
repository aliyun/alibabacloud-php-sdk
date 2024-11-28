<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataLakeTablebaseInfoResponseBody\tablebaseInfoList;
use AlibabaCloud\Tea\Model;

class ListDataLakeTablebaseInfoResponseBody extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Specified parameter Rows is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example B43AD641-49C2-5299-9E06-1B37EC1B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var tablebaseInfoList
     */
    public $tablebaseInfoList;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'tablebaseInfoList' => 'TablebaseInfoList',
        'totalCount'        => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tablebaseInfoList) {
            $res['TablebaseInfoList'] = null !== $this->tablebaseInfoList ? $this->tablebaseInfoList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeTablebaseInfoResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TablebaseInfoList'])) {
            $model->tablebaseInfoList = tablebaseInfoList::fromMap($map['TablebaseInfoList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
