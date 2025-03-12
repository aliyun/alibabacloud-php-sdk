<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetConfigResponseBody\targetList;
use AlibabaCloud\Tea\Model;

class DescribeCommonTargetConfigResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8BF6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the details of the configuration items.
     *
     * @var targetList[]
     */
    public $targetList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'targetList' => 'TargetList',
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
        if (null !== $this->targetList) {
            $res['TargetList'] = [];
            if (null !== $this->targetList && \is_array($this->targetList)) {
                $n = 0;
                foreach ($this->targetList as $item) {
                    $res['TargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonTargetConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n                 = 0;
                foreach ($map['TargetList'] as $item) {
                    $model->targetList[$n++] = null !== $item ? targetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
