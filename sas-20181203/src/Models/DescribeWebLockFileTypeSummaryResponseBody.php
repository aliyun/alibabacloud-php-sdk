<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileTypeSummaryResponseBody\list_;
use AlibabaCloud\Tea\Model;

class DescribeWebLockFileTypeSummaryResponseBody extends Model
{
    /**
     * @description An array that consists of events on web tamper proofing returned.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4BB99533-4FDC-5B9C-A5E4-5AE3E9BE5C78
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of events on web tamper proofing.
     *
     * @example 639
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'list'       => 'List',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebLockFileTypeSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
