<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTaskRuleListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $compSubTaskCount;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var data
     */
    public $data;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $reviewStatus;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalSubTaskCount;
    protected $_name = [
        'code'              => 'Code',
        'compSubTaskCount'  => 'CompSubTaskCount',
        'currentPage'       => 'CurrentPage',
        'data'              => 'Data',
        'dataSize'          => 'DataSize',
        'message'           => 'Message',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'reviewStatus'      => 'ReviewStatus',
        'success'           => 'Success',
        'totalCount'        => 'TotalCount',
        'totalSubTaskCount' => 'TotalSubTaskCount',
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
        if (null !== $this->compSubTaskCount) {
            $res['CompSubTaskCount'] = $this->compSubTaskCount;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalSubTaskCount) {
            $res['TotalSubTaskCount'] = $this->totalSubTaskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompSubTaskCount'])) {
            $model->compSubTaskCount = $map['CompSubTaskCount'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalSubTaskCount'])) {
            $model->totalSubTaskCount = $map['TotalSubTaskCount'];
        }

        return $model;
    }
}
