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
    public $requestId;

    /**
     * @var stageList[]
     */
    public $stageList;

    /**
     * @var string
     */
    public $originInfo;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'requestId'  => 'RequestId',
        'stageList'  => 'StageList',
        'originInfo' => 'OriginInfo',
        'detail'     => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['OriginInfo'])) {
            $model->originInfo = $map['OriginInfo'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        return $model;
    }
}
