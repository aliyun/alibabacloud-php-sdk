<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRisksResponseBody\risks;

class DescribeRisksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var risks[]
     */
    public $risks;
    /**
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
        if (\is_array($this->risks)) {
            Model::validateArray($this->risks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->risks) {
            if (\is_array($this->risks)) {
                $res['Risks'] = [];
                $n1           = 0;
                foreach ($this->risks as $item1) {
                    $res['Risks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Risks'])) {
            if (!empty($map['Risks'])) {
                $model->risks = [];
                $n1           = 0;
                foreach ($map['Risks'] as $item1) {
                    $model->risks[$n1++] = risks::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
