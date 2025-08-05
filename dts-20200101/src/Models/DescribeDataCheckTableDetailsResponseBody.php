<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsResponseBody\tableDetails;

class DescribeDataCheckTableDetailsResponseBody extends Model
{
    /**
     * @var int
     */
    public $diffTableCount;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $failedTableCount;

    /**
     * @var int
     */
    public $finishedCount;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var tableDetails[]
     */
    public $tableDetails;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'diffTableCount' => 'DiffTableCount',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'failedTableCount' => 'FailedTableCount',
        'finishedCount' => 'FinishedCount',
        'httpStatusCode' => 'HttpStatusCode',
        'pageNumber' => 'PageNumber',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tableDetails' => 'TableDetails',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tableDetails)) {
            Model::validateArray($this->tableDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->failedTableCount) {
            $res['FailedTableCount'] = $this->failedTableCount;
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
            if (\is_array($this->tableDetails)) {
                $res['TableDetails'] = [];
                $n1 = 0;
                foreach ($this->tableDetails as $item1) {
                    $res['TableDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['FailedTableCount'])) {
            $model->failedTableCount = $map['FailedTableCount'];
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
                $n1 = 0;
                foreach ($map['TableDetails'] as $item1) {
                    $model->tableDetails[$n1] = tableDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
