<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails;
use AlibabaCloud\Tea\Model;

class CheckScaleOutBalancedResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var tableDetails
     */
    public $tableDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $checkCode;

    /**
     * @var string
     */
    public $timeDuration;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'tableDetails' => 'TableDetails',
        'requestId'    => 'RequestId',
        'pageSize'     => 'PageSize',
        'pageNumber'   => 'PageNumber',
        'checkCode'    => 'CheckCode',
        'timeDuration' => 'TimeDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->tableDetails) {
            $res['TableDetails'] = null !== $this->tableDetails ? $this->tableDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->checkCode) {
            $res['CheckCode'] = $this->checkCode;
        }
        if (null !== $this->timeDuration) {
            $res['TimeDuration'] = $this->timeDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckScaleOutBalancedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TableDetails'])) {
            $model->tableDetails = tableDetails::fromMap($map['TableDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['CheckCode'])) {
            $model->checkCode = $map['CheckCode'];
        }
        if (isset($map['TimeDuration'])) {
            $model->timeDuration = $map['TimeDuration'];
        }

        return $model;
    }
}
