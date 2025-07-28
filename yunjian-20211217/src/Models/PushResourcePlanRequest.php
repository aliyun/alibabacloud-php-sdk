<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest\methodList;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['methodList'] = [];
            if (null !== $this->methodList && \is_array($this->methodList)) {
                $n = 0;
                foreach ($this->methodList as $item) {
                    $res['methodList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return PushResourcePlanRequest
     */
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
                $n = 0;
                foreach ($map['methodList'] as $item) {
                    $model->methodList[$n++] = null !== $item ? methodList::fromMap($item) : $item;
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
