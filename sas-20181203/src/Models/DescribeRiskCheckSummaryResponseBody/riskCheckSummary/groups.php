<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups\countByStatus;
use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description An array that consists of the statistics about check results.
     *
     * @var countByStatus[]
     */
    public $countByStatus;

    /**
     * @description The ID of the check item type.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The remaining time before the check is complete.
     *
     * @example 0
     *
     * @var int
     */
    public $remainingTime;

    /**
     * @description The sequence number of the check item type in the **All Types** drop-down list in the Security Center console.
     *
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @description The status of the check. Valid values:
     *
     *   **finish**: The check is finished.
     *   **running**: The check is in progress.
     *   **waiting**: The check is pending.
     *   **notStart**: The check is not started.
     *
     * @example finish
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the check item type.
     *
     * @example Identity authentication and permissions
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'countByStatus' => 'CountByStatus',
        'id'            => 'Id',
        'remainingTime' => 'RemainingTime',
        'sort'          => 'Sort',
        'status'        => 'Status',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countByStatus) {
            $res['CountByStatus'] = [];
            if (null !== $this->countByStatus && \is_array($this->countByStatus)) {
                $n = 0;
                foreach ($this->countByStatus as $item) {
                    $res['CountByStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountByStatus'])) {
            if (!empty($map['CountByStatus'])) {
                $model->countByStatus = [];
                $n                    = 0;
                foreach ($map['CountByStatus'] as $item) {
                    $model->countByStatus[$n++] = null !== $item ? countByStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
