<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups;

use AlibabaCloud\Tea\Model;

class countByStatus extends Model
{
    /**
     * @description The number of detected risk items.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The status of the check item after the check is finished. Valid values:
     *
     *   **pass**: The check item passes the check, which indicates that the check item is normal.
     *   **failed**: The check item fails the check, which indicates that risks are detected for the check item.
     *
     * @example pass
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'count'  => 'Count',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return countByStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
