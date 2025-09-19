<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody\warningSummarys;

class DescribeCheckWarningSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var warningSummarys[]
     */
    public $warningSummarys;
    protected $_name = [
        'count' => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'warningSummarys' => 'WarningSummarys',
    ];

    public function validate()
    {
        if (\is_array($this->warningSummarys)) {
            Model::validateArray($this->warningSummarys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->warningSummarys) {
            if (\is_array($this->warningSummarys)) {
                $res['WarningSummarys'] = [];
                $n1 = 0;
                foreach ($this->warningSummarys as $item1) {
                    $res['WarningSummarys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WarningSummarys'])) {
            if (!empty($map['WarningSummarys'])) {
                $model->warningSummarys = [];
                $n1 = 0;
                foreach ($map['WarningSummarys'] as $item1) {
                    $model->warningSummarys[$n1] = warningSummarys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
