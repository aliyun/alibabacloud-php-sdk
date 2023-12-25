<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails;
use AlibabaCloud\Tea\Model;

class CheckScaleOutBalancedResponseBody extends Model
{
    /**
     * @description The check result. Valid values:
     *
     *   **400**: The cluster failed the check.
     *   **200**: The cluster passed the check.
     *
     * @example 400
     *
     * @var string
     */
    public $checkCode;

    /**
     * @description The total number of returned pages.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Valid values:
     *
     *   **30** (default)
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example F5178C10-1407-4987-9133-DE4DC9119F75
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error information returned for a check failure.
     *
     * @var tableDetails
     */
    public $tableDetails;

    /**
     * @description The amount of time that is required for the migration and scale-out. Unit: minutes.
     *
     * @example 21
     *
     * @var string
     */
    public $timeDuration;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkCode'    => 'CheckCode',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'tableDetails' => 'TableDetails',
        'timeDuration' => 'TimeDuration',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TableDetails'] = null !== $this->tableDetails ? $this->tableDetails->toMap() : null;
        }
        if (null !== $this->timeDuration) {
            $res['TimeDuration'] = $this->timeDuration;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
