<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponseBody\rebootStatuses;

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
        if (\is_array($this->rebootStatuses)) {
            Model::validateArray($this->rebootStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rebootStatuses) {
            if (\is_array($this->rebootStatuses)) {
                $res['RebootStatuses'] = [];
                $n1                    = 0;
                foreach ($this->rebootStatuses as $item1) {
                    $res['RebootStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RebootStatuses'])) {
            if (!empty($map['RebootStatuses'])) {
                $model->rebootStatuses = [];
                $n1                    = 0;
                foreach ($map['RebootStatuses'] as $item1) {
                    $model->rebootStatuses[$n1++] = rebootStatuses::fromMap($item1);
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
