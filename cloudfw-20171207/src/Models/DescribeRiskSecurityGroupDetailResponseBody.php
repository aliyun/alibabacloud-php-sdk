<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskSecurityGroupDetailResponseBody\riskSgDetail;

class DescribeRiskSecurityGroupDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskSgDetail[]
     */
    public $riskSgDetail;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'riskSgDetail' => 'RiskSgDetail',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->riskSgDetail)) {
            Model::validateArray($this->riskSgDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskSgDetail) {
            if (\is_array($this->riskSgDetail)) {
                $res['RiskSgDetail'] = [];
                $n1 = 0;
                foreach ($this->riskSgDetail as $item1) {
                    $res['RiskSgDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskSgDetail'])) {
            if (!empty($map['RiskSgDetail'])) {
                $model->riskSgDetail = [];
                $n1 = 0;
                foreach ($map['RiskSgDetail'] as $item1) {
                    $model->riskSgDetail[$n1] = riskSgDetail::fromMap($item1);
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
