<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRisksResponseBody\risks;
use AlibabaCloud\Tea\Model;

class DescribeRisksResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example EA54FE21-B006-5DFF-8D64-C4FFECDA****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The baselines.
     *
     * @var risks[]
     */
    public $risks;

    /**
     * @description The total number of entries returned.
     *
     * @example 23
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'risks'      => 'Risks',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->risks) {
            $res['Risks'] = [];
            if (null !== $this->risks && \is_array($this->risks)) {
                $n = 0;
                foreach ($this->risks as $item) {
                    $res['Risks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Risks'])) {
            if (!empty($map['Risks'])) {
                $model->risks = [];
                $n            = 0;
                foreach ($map['Risks'] as $item) {
                    $model->risks[$n++] = null !== $item ? risks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
