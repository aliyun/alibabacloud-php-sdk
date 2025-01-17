<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTargetResponseBody\targets;

class DescribeTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var targets[]
     */
    public $targets;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'targets'    => 'Targets',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1             = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1             = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
