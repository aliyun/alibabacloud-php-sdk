<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventTopAttackTypeResponseBody\topAttackTypeList;

class DescribeRiskEventTopAttackTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topAttackTypeList[]
     */
    public $topAttackTypeList;

    /**
     * @var int
     */
    public $totalAttackCnt;

    /**
     * @var int
     */
    public $totalProtectCnt;
    protected $_name = [
        'requestId' => 'RequestId',
        'topAttackTypeList' => 'TopAttackTypeList',
        'totalAttackCnt' => 'TotalAttackCnt',
        'totalProtectCnt' => 'TotalProtectCnt',
    ];

    public function validate()
    {
        if (\is_array($this->topAttackTypeList)) {
            Model::validateArray($this->topAttackTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topAttackTypeList) {
            if (\is_array($this->topAttackTypeList)) {
                $res['TopAttackTypeList'] = [];
                $n1 = 0;
                foreach ($this->topAttackTypeList as $item1) {
                    $res['TopAttackTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalAttackCnt) {
            $res['TotalAttackCnt'] = $this->totalAttackCnt;
        }

        if (null !== $this->totalProtectCnt) {
            $res['TotalProtectCnt'] = $this->totalProtectCnt;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopAttackTypeList'])) {
            if (!empty($map['TopAttackTypeList'])) {
                $model->topAttackTypeList = [];
                $n1 = 0;
                foreach ($map['TopAttackTypeList'] as $item1) {
                    $model->topAttackTypeList[$n1] = topAttackTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalAttackCnt'])) {
            $model->totalAttackCnt = $map['TotalAttackCnt'];
        }

        if (isset($map['TotalProtectCnt'])) {
            $model->totalProtectCnt = $map['TotalProtectCnt'];
        }

        return $model;
    }
}
