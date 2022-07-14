<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponseBody\rebootStatuses;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRebootStatusResponseBody extends Model
{
    /**
     * @var rebootStatuses[]
     */
    public $rebootStatuses;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'rebootStatuses' => 'RebootStatuses',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rebootStatuses) {
            $res['RebootStatuses'] = [];
            if (null !== $this->rebootStatuses && \is_array($this->rebootStatuses)) {
                $n = 0;
                foreach ($this->rebootStatuses as $item) {
                    $res['RebootStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceRebootStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RebootStatuses'])) {
            if (!empty($map['RebootStatuses'])) {
                $model->rebootStatuses = [];
                $n                     = 0;
                foreach ($map['RebootStatuses'] as $item) {
                    $model->rebootStatuses[$n++] = null !== $item ? rebootStatuses::fromMap($item) : $item;
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
