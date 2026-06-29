<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class GetTaskWorkforceStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

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
    public $totalPage;

    /**
     * @var UserStatistic[]
     */
    public $usersStatistic;
    protected $_name = [
        'code' => 'Code',
        'details' => 'Details',
        'errorCode' => 'ErrorCode',
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
        'usersStatistic' => 'UsersStatistic',
    ];

    public function validate()
    {
        if (\is_array($this->usersStatistic)) {
            Model::validateArray($this->usersStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        if (null !== $this->usersStatistic) {
            if (\is_array($this->usersStatistic)) {
                $res['UsersStatistic'] = [];
                $n1 = 0;
                foreach ($this->usersStatistic as $item1) {
                    $res['UsersStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        if (isset($map['UsersStatistic'])) {
            if (!empty($map['UsersStatistic'])) {
                $model->usersStatistic = [];
                $n1 = 0;
                foreach ($map['UsersStatistic'] as $item1) {
                    $model->usersStatistic[$n1] = UserStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
