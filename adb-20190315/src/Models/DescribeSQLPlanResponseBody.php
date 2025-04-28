<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\detail;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\stageList;

class DescribeSQLPlanResponseBody extends Model
{
    /**
     * @var detail
     */
    public $detail;

    /**
     * @var string
     */
    public $originInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stageList[]
     */
    public $stageList;
    protected $_name = [
        'detail' => 'Detail',
        'originInfo' => 'OriginInfo',
        'requestId' => 'RequestId',
        'stageList' => 'StageList',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (\is_array($this->stageList)) {
            Model::validateArray($this->stageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stageList) {
            if (\is_array($this->stageList)) {
                $res['StageList'] = [];
                $n1 = 0;
                foreach ($this->stageList as $item1) {
                    $res['StageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['OriginInfo'])) {
            $model->originInfo = $map['OriginInfo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StageList'])) {
            if (!empty($map['StageList'])) {
                $model->stageList = [];
                $n1 = 0;
                foreach ($map['StageList'] as $item1) {
                    $model->stageList[$n1++] = stageList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
