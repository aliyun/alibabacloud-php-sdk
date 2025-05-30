<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest\methodList;

class PushResourcePlanRequest extends Model
{
    /**
     * @var int
     */
    public $bufferCnt;

    /**
     * @var int
     */
    public $demandCount;

    /**
     * @var string
     */
    public $demandId;

    /**
     * @var methodList[]
     */
    public $methodList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requireCnt;

    /**
     * @var string
     */
    public $subDemandId;
    protected $_name = [
        'bufferCnt' => 'bufferCnt',
        'demandCount' => 'demandCount',
        'demandId' => 'demandId',
        'methodList' => 'methodList',
        'requestId' => 'requestId',
        'requireCnt' => 'requireCnt',
        'subDemandId' => 'subDemandId',
    ];

    public function validate()
    {
        if (\is_array($this->methodList)) {
            Model::validateArray($this->methodList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bufferCnt) {
            $res['bufferCnt'] = $this->bufferCnt;
        }

        if (null !== $this->demandCount) {
            $res['demandCount'] = $this->demandCount;
        }

        if (null !== $this->demandId) {
            $res['demandId'] = $this->demandId;
        }

        if (null !== $this->methodList) {
            if (\is_array($this->methodList)) {
                $res['methodList'] = [];
                $n1 = 0;
                foreach ($this->methodList as $item1) {
                    $res['methodList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requireCnt) {
            $res['requireCnt'] = $this->requireCnt;
        }

        if (null !== $this->subDemandId) {
            $res['subDemandId'] = $this->subDemandId;
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
        if (isset($map['bufferCnt'])) {
            $model->bufferCnt = $map['bufferCnt'];
        }

        if (isset($map['demandCount'])) {
            $model->demandCount = $map['demandCount'];
        }

        if (isset($map['demandId'])) {
            $model->demandId = $map['demandId'];
        }

        if (isset($map['methodList'])) {
            if (!empty($map['methodList'])) {
                $model->methodList = [];
                $n1 = 0;
                foreach ($map['methodList'] as $item1) {
                    $model->methodList[$n1++] = methodList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requireCnt'])) {
            $model->requireCnt = $map['requireCnt'];
        }

        if (isset($map['subDemandId'])) {
            $model->subDemandId = $map['subDemandId'];
        }

        return $model;
    }
}
