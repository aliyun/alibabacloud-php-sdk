<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponseBody\conditionList;
use AlibabaCloud\Tea\Model;

class DescribeSearchConditionResponseBody extends Model
{
    /**
     * @description An array that consists of the filter conditions.
     *
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 3AEC47AF-8CFA-485E-AC9A-3A8ABC06EA7F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionList' => 'ConditionList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionList) {
            $res['ConditionList'] = [];
            if (null !== $this->conditionList && \is_array($this->conditionList)) {
                $n = 0;
                foreach ($this->conditionList as $item) {
                    $res['ConditionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSearchConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n                    = 0;
                foreach ($map['ConditionList'] as $item) {
                    $model->conditionList[$n++] = null !== $item ? conditionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
