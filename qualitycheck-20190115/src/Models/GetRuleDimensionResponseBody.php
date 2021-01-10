<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDimensionResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetRuleDimensionResponseBody extends Model
{
    /**
     * @var int
     */
    public $compSubTaskCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $reviewStatus;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalSubTaskCount;
    protected $_name = [
        'compSubTaskCount'  => 'CompSubTaskCount',
        'totalCount'        => 'TotalCount',
        'requestId'         => 'RequestId',
        'message'           => 'Message',
        'pageSize'          => 'PageSize',
        'currentPage'       => 'CurrentPage',
        'reviewStatus'      => 'ReviewStatus',
        'dataSize'          => 'DataSize',
        'data'              => 'Data',
        'code'              => 'Code',
        'success'           => 'Success',
        'totalSubTaskCount' => 'TotalSubTaskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compSubTaskCount) {
            $res['CompSubTaskCount'] = $this->compSubTaskCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalSubTaskCount) {
            $res['TotalSubTaskCount'] = $this->totalSubTaskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRuleDimensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompSubTaskCount'])) {
            $model->compSubTaskCount = $map['CompSubTaskCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalSubTaskCount'])) {
            $model->totalSubTaskCount = $map['TotalSubTaskCount'];
        }

        return $model;
    }
}
