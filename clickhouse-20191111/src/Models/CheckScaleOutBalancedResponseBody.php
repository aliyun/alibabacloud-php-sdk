<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails;

class CheckScaleOutBalancedResponseBody extends Model
{
    /**
     * @var string
     */
    public $checkCode;

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
     * @var tableDetails
     */
    public $tableDetails;

    /**
     * @var string
     */
    public $timeDuration;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkCode' => 'CheckCode',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'tableDetails' => 'TableDetails',
        'timeDuration' => 'TimeDuration',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->tableDetails) {
            $this->tableDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkCode) {
            $res['CheckCode'] = $this->checkCode;
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

        if (null !== $this->tableDetails) {
            $res['TableDetails'] = null !== $this->tableDetails ? $this->tableDetails->toArray($noStream) : $this->tableDetails;
        }

        if (null !== $this->timeDuration) {
            $res['TimeDuration'] = $this->timeDuration;
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
        if (isset($map['CheckCode'])) {
            $model->checkCode = $map['CheckCode'];
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

        if (isset($map['TableDetails'])) {
            $model->tableDetails = tableDetails::fromMap($map['TableDetails']);
        }

        if (isset($map['TimeDuration'])) {
            $model->timeDuration = $map['TimeDuration'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
