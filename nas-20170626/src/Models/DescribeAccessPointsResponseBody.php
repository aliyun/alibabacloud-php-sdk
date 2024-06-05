<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsResponseBody\accessPoints;
use AlibabaCloud\Tea\Model;

class DescribeAccessPointsResponseBody extends Model
{
    /**
     * @var accessPoints[]
     */
    public $accessPoints;

    /**
     * @example MTY4NzcxOTcwMjAzMDk2Nzc0MyM4MDM4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @example 6299428C-3861-435D-AE54-9B330A00****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessPoints' => 'AccessPoints',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPoints) {
            $res['AccessPoints'] = [];
            if (null !== $this->accessPoints && \is_array($this->accessPoints)) {
                $n = 0;
                foreach ($this->accessPoints as $item) {
                    $res['AccessPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return DescribeAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPoints'])) {
            if (!empty($map['AccessPoints'])) {
                $model->accessPoints = [];
                $n                   = 0;
                foreach ($map['AccessPoints'] as $item) {
                    $model->accessPoints[$n++] = null !== $item ? accessPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
