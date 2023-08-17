<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\detail;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody\stageList;
use AlibabaCloud\Tea\Model;

class DescribeSQLPlanResponseBody extends Model
{
    /**
     * @description Details about the execution of the SQL statement.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The original details of the SQL statement.
     *
     * @example {\"queryId\":\"20210527_160443_10581_hdhzr\",\"session\":{\"queryId\":\"20210527_160443_10581_hdhzr\",\"hasSharedStage\":false,\"parentId\":0}}
     *
     * @var string
     */
    public $originInfo;

    /**
     * @description The ID of the request.
     *
     * @example 22D6DEF0-CBC7-4388-A41C-D5FD62******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the plan stages.
     *
     * @var stageList[]
     */
    public $stageList;
    protected $_name = [
        'detail'     => 'Detail',
        'originInfo' => 'OriginInfo',
        'requestId'  => 'RequestId',
        'stageList'  => 'StageList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }
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
                $n                = 0;
                foreach ($map['StageList'] as $item) {
                    $model->stageList[$n++] = null !== $item ? stageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
