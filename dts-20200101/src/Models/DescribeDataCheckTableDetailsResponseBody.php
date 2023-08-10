<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsResponseBody\tableDetails;
use AlibabaCloud\Tea\Model;

class DescribeDataCheckTableDetailsResponseBody extends Model
{
    /**
     * @description The number of tables that contain inconsistent data.
     *
     * @example 1
     *
     * @var int
     */
    public $diffTableCount;

    /**
     * @description The dynamic error code. This parameter will be removed in the future.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the **%s** variable in the value of **ErrMessage**.
     *
     * >  For example, if the return value of **ErrMessage** is **The Value of Input Parameter %s is not valid** and the return value of **DynamicMessage** is **Type**, the specified value of **Type** is invalid.
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The total number of data rows that were verified.
     *
     * @example 7
     *
     * @var int
     */
    public $finishedCount;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The request ID.
     *
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The details of data verification results.
     *
     * @var tableDetails[]
     */
    public $tableDetails;

    /**
     * @description The total number of tables on which data verification was performed.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'diffTableCount' => 'DiffTableCount',
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'finishedCount'  => 'FinishedCount',
        'httpStatusCode' => 'HttpStatusCode',
        'pageNumber'     => 'PageNumber',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'tableDetails'   => 'TableDetails',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diffTableCount) {
            $res['DiffTableCount'] = $this->diffTableCount;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->finishedCount) {
            $res['FinishedCount'] = $this->finishedCount;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tableDetails) {
            $res['TableDetails'] = [];
            if (null !== $this->tableDetails && \is_array($this->tableDetails)) {
                $n = 0;
                foreach ($this->tableDetails as $item) {
                    $res['TableDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCheckTableDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiffTableCount'])) {
            $model->diffTableCount = $map['DiffTableCount'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['FinishedCount'])) {
            $model->finishedCount = $map['FinishedCount'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TableDetails'])) {
            if (!empty($map['TableDetails'])) {
                $model->tableDetails = [];
                $n                   = 0;
                foreach ($map['TableDetails'] as $item) {
                    $model->tableDetails[$n++] = null !== $item ? tableDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
