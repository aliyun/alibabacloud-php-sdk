<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups\countByStatus;

class groups extends Model
{
    /**
     * @var countByStatus[]
     */
    public $countByStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'countByStatus' => 'CountByStatus',
        'id' => 'Id',
        'remainingTime' => 'RemainingTime',
        'sort' => 'Sort',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->countByStatus)) {
            Model::validateArray($this->countByStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countByStatus) {
            if (\is_array($this->countByStatus)) {
                $res['CountByStatus'] = [];
                $n1 = 0;
                foreach ($this->countByStatus as $item1) {
                    $res['CountByStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountByStatus'])) {
            if (!empty($map['CountByStatus'])) {
                $model->countByStatus = [];
                $n1 = 0;
                foreach ($map['CountByStatus'] as $item1) {
                    $model->countByStatus[$n1] = countByStatus::fromMap($item1);
                    ++$n1;
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
