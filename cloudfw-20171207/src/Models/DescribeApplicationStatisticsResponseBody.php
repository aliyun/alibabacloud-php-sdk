<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeApplicationStatisticsResponseBody\categoryList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeApplicationStatisticsResponseBody\riskList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeApplicationStatisticsResponseBody\technologyList;

class DescribeApplicationStatisticsResponseBody extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskList[]
     */
    public $riskList;

    /**
     * @var technologyList[]
     */
    public $technologyList;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'requestId' => 'RequestId',
        'riskList' => 'RiskList',
        'technologyList' => 'TechnologyList',
    ];

    public function validate()
    {
        if (\is_array($this->categoryList)) {
            Model::validateArray($this->categoryList);
        }
        if (\is_array($this->riskList)) {
            Model::validateArray($this->riskList);
        }
        if (\is_array($this->technologyList)) {
            Model::validateArray($this->technologyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryList) {
            if (\is_array($this->categoryList)) {
                $res['CategoryList'] = [];
                $n1 = 0;
                foreach ($this->categoryList as $item1) {
                    $res['CategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskList) {
            if (\is_array($this->riskList)) {
                $res['RiskList'] = [];
                $n1 = 0;
                foreach ($this->riskList as $item1) {
                    $res['RiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->technologyList) {
            if (\is_array($this->technologyList)) {
                $res['TechnologyList'] = [];
                $n1 = 0;
                foreach ($this->technologyList as $item1) {
                    $res['TechnologyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n1 = 0;
                foreach ($map['CategoryList'] as $item1) {
                    $model->categoryList[$n1] = categoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n1 = 0;
                foreach ($map['RiskList'] as $item1) {
                    $model->riskList[$n1] = riskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TechnologyList'])) {
            if (!empty($map['TechnologyList'])) {
                $model->technologyList = [];
                $n1 = 0;
                foreach ($map['TechnologyList'] as $item1) {
                    $model->technologyList[$n1] = technologyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
