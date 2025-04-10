<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBatchSlsDispatchStatusResponseBody\slsConfigStatusList;

class DescribeBatchSlsDispatchStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slsConfigStatusList[]
     */
    public $slsConfigStatusList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'slsConfigStatusList' => 'SlsConfigStatusList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->slsConfigStatusList)) {
            Model::validateArray($this->slsConfigStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsConfigStatusList) {
            if (\is_array($this->slsConfigStatusList)) {
                $res['SlsConfigStatusList'] = [];
                $n1 = 0;
                foreach ($this->slsConfigStatusList as $item1) {
                    $res['SlsConfigStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SlsConfigStatusList'])) {
            if (!empty($map['SlsConfigStatusList'])) {
                $model->slsConfigStatusList = [];
                $n1 = 0;
                foreach ($map['SlsConfigStatusList'] as $item1) {
                    $model->slsConfigStatusList[$n1++] = slsConfigStatusList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
