<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigListResponseBody\overallList;

class DescribeCommonOverallConfigListResponseBody extends Model
{
    /**
     * @var overallList[]
     */
    public $overallList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'overallList' => 'OverallList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->overallList)) {
            Model::validateArray($this->overallList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallList) {
            if (\is_array($this->overallList)) {
                $res['OverallList'] = [];
                $n1                 = 0;
                foreach ($this->overallList as $item1) {
                    $res['OverallList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OverallList'])) {
            if (!empty($map['OverallList'])) {
                $model->overallList = [];
                $n1                 = 0;
                foreach ($map['OverallList'] as $item1) {
                    $model->overallList[$n1++] = overallList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
