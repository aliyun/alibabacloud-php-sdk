<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups\countByStatus;
use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $id;

    /**
     * @var countByStatus[]
     */
    public $countByStatus;
    protected $_name = [
        'remainingTime' => 'RemainingTime',
        'status'        => 'Status',
        'sort'          => 'Sort',
        'title'         => 'Title',
        'id'            => 'Id',
        'countByStatus' => 'CountByStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->countByStatus) {
            $res['CountByStatus'] = [];
            if (null !== $this->countByStatus && \is_array($this->countByStatus)) {
                $n = 0;
                foreach ($this->countByStatus as $item) {
                    $res['CountByStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CountByStatus'])) {
            if (!empty($map['CountByStatus'])) {
                $model->countByStatus = [];
                $n                    = 0;
                foreach ($map['CountByStatus'] as $item) {
                    $model->countByStatus[$n++] = null !== $item ? countByStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
