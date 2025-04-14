<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList;

class DescribeWebPreciseAccessRuleResponseBody extends Model
{
    /**
     * @var preciseAccessConfigList[]
     */
    public $preciseAccessConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preciseAccessConfigList' => 'PreciseAccessConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->preciseAccessConfigList)) {
            Model::validateArray($this->preciseAccessConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preciseAccessConfigList) {
            if (\is_array($this->preciseAccessConfigList)) {
                $res['PreciseAccessConfigList'] = [];
                $n1 = 0;
                foreach ($this->preciseAccessConfigList as $item1) {
                    $res['PreciseAccessConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreciseAccessConfigList'])) {
            if (!empty($map['PreciseAccessConfigList'])) {
                $model->preciseAccessConfigList = [];
                $n1 = 0;
                foreach ($map['PreciseAccessConfigList'] as $item1) {
                    $model->preciseAccessConfigList[$n1++] = preciseAccessConfigList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
