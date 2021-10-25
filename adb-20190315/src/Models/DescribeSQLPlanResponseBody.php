<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\detail;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\stageList;
use AlibabaCloud\Tea\Model;

class DescribeSQLPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $originInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var detail
     */
    public $detail;

    /**
     * @var stageList[]
     */
    public $stageList;
    protected $_name = [
        'originInfo' => 'OriginInfo',
        'requestId'  => 'RequestId',
        'detail'     => 'Detail',
        'stageList'  => 'StageList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->stageList) {
            $res['StageList'] = [];
            if (null !== $this->stageList && \is_array($this->stageList)) {
                $n = 0;
                foreach ($this->stageList as $item) {
                    $res['StageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginInfo'])) {
            $model->originInfo = $map['OriginInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['StageList'])) {
            if (!empty($map['StageList'])) {
                $model->stageList = [];
                $n                = 0;
                foreach ($map['StageList'] as $item) {
                    $model->stageList[$n++] = null !== $item ? stageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
