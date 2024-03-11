<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurSummaryOverviewResponseBody\jobInfoList;
use AlibabaCloud\Tea\Model;

class DescribeIceDurSummaryOverviewResponseBody extends Model
{
    /**
     * @var jobInfoList[]
     */
    public $jobInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobInfoList' => 'JobInfoList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfoList) {
            $res['JobInfoList'] = [];
            if (null !== $this->jobInfoList && \is_array($this->jobInfoList)) {
                $n = 0;
                foreach ($this->jobInfoList as $item) {
                    $res['JobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeIceDurSummaryOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfoList'])) {
            if (!empty($map['JobInfoList'])) {
                $model->jobInfoList = [];
                $n                  = 0;
                foreach ($map['JobInfoList'] as $item) {
                    $model->jobInfoList[$n++] = null !== $item ? jobInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
