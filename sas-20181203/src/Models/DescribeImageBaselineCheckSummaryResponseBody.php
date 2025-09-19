<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody\baselineResultSummary;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody\pageInfo;

class DescribeImageBaselineCheckSummaryResponseBody extends Model
{
    /**
     * @var baselineResultSummary[]
     */
    public $baselineResultSummary;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineResultSummary' => 'BaselineResultSummary',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->baselineResultSummary)) {
            Model::validateArray($this->baselineResultSummary);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineResultSummary) {
            if (\is_array($this->baselineResultSummary)) {
                $res['BaselineResultSummary'] = [];
                $n1 = 0;
                foreach ($this->baselineResultSummary as $item1) {
                    $res['BaselineResultSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BaselineResultSummary'])) {
            if (!empty($map['BaselineResultSummary'])) {
                $model->baselineResultSummary = [];
                $n1 = 0;
                foreach ($map['BaselineResultSummary'] as $item1) {
                    $model->baselineResultSummary[$n1] = baselineResultSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
