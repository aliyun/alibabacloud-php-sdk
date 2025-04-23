<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostOptimizationOverviewRequest extends Model
{
    /**
     * @var int
     */
    public $assumeAliyunId;

    /**
     * @var int[]
     */
    public $assumeAliyunIdList;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'assumeAliyunId' => 'AssumeAliyunId',
        'assumeAliyunIdList' => 'AssumeAliyunIdList',
        'checkPlanId' => 'CheckPlanId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (\is_array($this->assumeAliyunIdList)) {
            Model::validateArray($this->assumeAliyunIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunId) {
            $res['AssumeAliyunId'] = $this->assumeAliyunId;
        }

        if (null !== $this->assumeAliyunIdList) {
            if (\is_array($this->assumeAliyunIdList)) {
                $res['AssumeAliyunIdList'] = [];
                $n1 = 0;
                foreach ($this->assumeAliyunIdList as $item1) {
                    $res['AssumeAliyunIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AssumeAliyunId'])) {
            $model->assumeAliyunId = $map['AssumeAliyunId'];
        }

        if (isset($map['AssumeAliyunIdList'])) {
            if (!empty($map['AssumeAliyunIdList'])) {
                $model->assumeAliyunIdList = [];
                $n1 = 0;
                foreach ($map['AssumeAliyunIdList'] as $item1) {
                    $model->assumeAliyunIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
