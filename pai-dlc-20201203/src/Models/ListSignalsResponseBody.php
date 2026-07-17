<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSignalsResponseBody\signals;

class ListSignalsResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

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
     * @var signals[]
     */
    public $signals;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobId' => 'JobId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'signals' => 'Signals',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->signals)) {
            Model::validateArray($this->signals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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

        if (null !== $this->signals) {
            if (\is_array($this->signals)) {
                $res['Signals'] = [];
                $n1 = 0;
                foreach ($this->signals as $item1) {
                    $res['Signals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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

        if (isset($map['Signals'])) {
            if (!empty($map['Signals'])) {
                $model->signals = [];
                $n1 = 0;
                foreach ($map['Signals'] as $item1) {
                    $model->signals[$n1] = signals::fromMap($item1);
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
