<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryMetricDistributionResponseBody\distributionList;

class QueryHistoryMetricDistributionResponseBody extends Model
{
    /**
     * @var distributionList[]
     */
    public $distributionList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'distributionList' => 'DistributionList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->distributionList)) {
            Model::validateArray($this->distributionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributionList) {
            if (\is_array($this->distributionList)) {
                $res['DistributionList'] = [];
                $n1 = 0;
                foreach ($this->distributionList as $item1) {
                    $res['DistributionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DistributionList'])) {
            if (!empty($map['DistributionList'])) {
                $model->distributionList = [];
                $n1 = 0;
                foreach ($map['DistributionList'] as $item1) {
                    $model->distributionList[$n1] = distributionList::fromMap($item1);
                    ++$n1;
                }
            }
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
