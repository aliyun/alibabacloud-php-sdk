<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncResponseBody\jobGroups;

class ListJobGroupsAsyncResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var jobGroups[]
     */
    public $jobGroups;

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
     * @var bool
     */
    public $timeout;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var bool
     */
    public $vaild;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'jobGroups' => 'JobGroups',
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'timeout' => 'Timeout',
        'totalCount' => 'TotalCount',
        'vaild' => 'Vaild',
    ];

    public function validate()
    {
        if (\is_array($this->jobGroups)) {
            Model::validateArray($this->jobGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->jobGroups) {
            if (\is_array($this->jobGroups)) {
                $res['JobGroups'] = [];
                $n1 = 0;
                foreach ($this->jobGroups as $item1) {
                    $res['JobGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vaild) {
            $res['Vaild'] = $this->vaild;
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

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['JobGroups'])) {
            if (!empty($map['JobGroups'])) {
                $model->jobGroups = [];
                $n1 = 0;
                foreach ($map['JobGroups'] as $item1) {
                    $model->jobGroups[$n1++] = jobGroups::fromMap($item1);
                }
            }
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

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Vaild'])) {
            $model->vaild = $map['Vaild'];
        }

        return $model;
    }
}
