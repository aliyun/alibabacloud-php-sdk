<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigListResponseBody\overallList;
use AlibabaCloud\Tea\Model;

class DescribeCommonOverallConfigListResponseBody extends Model
{
    /**
     * @description The information about the configuration items.
     *
     * @var overallList[]
     */
    public $overallList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'overallList' => 'OverallList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallList) {
            $res['OverallList'] = [];
            if (null !== $this->overallList && \is_array($this->overallList)) {
                $n = 0;
                foreach ($this->overallList as $item) {
                    $res['OverallList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonOverallConfigListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallList'])) {
            if (!empty($map['OverallList'])) {
                $model->overallList = [];
                $n = 0;
                foreach ($map['OverallList'] as $item) {
                    $model->overallList[$n++] = null !== $item ? overallList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
