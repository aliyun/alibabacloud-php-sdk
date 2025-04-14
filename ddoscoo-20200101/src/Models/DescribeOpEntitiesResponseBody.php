<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeOpEntitiesResponseBody\opEntities;

class DescribeOpEntitiesResponseBody extends Model
{
    /**
     * @var opEntities[]
     */
    public $opEntities;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'opEntities' => 'OpEntities',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->opEntities)) {
            Model::validateArray($this->opEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opEntities) {
            if (\is_array($this->opEntities)) {
                $res['OpEntities'] = [];
                $n1 = 0;
                foreach ($this->opEntities as $item1) {
                    $res['OpEntities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OpEntities'])) {
            if (!empty($map['OpEntities'])) {
                $model->opEntities = [];
                $n1 = 0;
                foreach ($map['OpEntities'] as $item1) {
                    $model->opEntities[$n1++] = opEntities::fromMap($item1);
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
