<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataLakeTableResponseBody extends Model
{
    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example NesLoKLEdIZrKhDT7I2gS****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 3D3FB827-E667-50DB-AD59-C83F8237FECB
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
     * @var DLTable[]
     */
    public $tableList;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tableList' => 'TableList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = [];
            if (null !== $this->tableList && \is_array($this->tableList)) {
                $n = 0;
                foreach ($this->tableList as $item) {
                    $res['TableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeTableResponseBody
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = [];
                $n = 0;
                foreach ($map['TableList'] as $item) {
                    $model->tableList[$n++] = null !== $item ? DLTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
