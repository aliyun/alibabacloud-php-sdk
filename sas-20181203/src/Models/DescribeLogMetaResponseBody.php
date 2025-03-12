<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogMetaResponseBody\logMetaList;
use AlibabaCloud\Tea\Model;

class DescribeLogMetaResponseBody extends Model
{
    /**
     * @description An array that consists of the configurations of the log analysis feature.
     *
     * @var logMetaList[]
     */
    public $logMetaList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D0D6E6E4-CB8C-4897-B852-46AEFDA04B21
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'logMetaList' => 'LogMetaList',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logMetaList) {
            $res['LogMetaList'] = [];
            if (null !== $this->logMetaList && \is_array($this->logMetaList)) {
                $n = 0;
                foreach ($this->logMetaList as $item) {
                    $res['LogMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeLogMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogMetaList'])) {
            if (!empty($map['LogMetaList'])) {
                $model->logMetaList = [];
                $n                  = 0;
                foreach ($map['LogMetaList'] as $item) {
                    $model->logMetaList[$n++] = null !== $item ? logMetaList::fromMap($item) : $item;
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
