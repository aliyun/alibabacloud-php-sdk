<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList;

class DescribeNisInspectionReportCheckItemsResponseBody extends Model
{
    /**
     * @var checkItemList[]
     */
    public $checkItemList;

    /**
     * @var string
     */
    public $inspectionReportId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkItemList' => 'CheckItemList',
        'inspectionReportId' => 'InspectionReportId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->checkItemList)) {
            Model::validateArray($this->checkItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItemList) {
            if (\is_array($this->checkItemList)) {
                $res['CheckItemList'] = [];
                $n1 = 0;
                foreach ($this->checkItemList as $item1) {
                    $res['CheckItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CheckItemList'])) {
            if (!empty($map['CheckItemList'])) {
                $model->checkItemList = [];
                $n1 = 0;
                foreach ($map['CheckItemList'] as $item1) {
                    $model->checkItemList[$n1] = checkItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
