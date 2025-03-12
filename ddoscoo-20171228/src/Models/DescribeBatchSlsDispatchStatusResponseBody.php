<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBatchSlsDispatchStatusResponseBody\slsConfigStatusList;
use AlibabaCloud\Tea\Model;

class DescribeBatchSlsDispatchStatusResponseBody extends Model
{
    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @var slsConfigStatusList[]
     */
    public $slsConfigStatusList;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'           => 'RequestId',
        'slsConfigStatusList' => 'SlsConfigStatusList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsConfigStatusList) {
            $res['SlsConfigStatusList'] = [];
            if (null !== $this->slsConfigStatusList && \is_array($this->slsConfigStatusList)) {
                $n = 0;
                foreach ($this->slsConfigStatusList as $item) {
                    $res['SlsConfigStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchSlsDispatchStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsConfigStatusList'])) {
            if (!empty($map['SlsConfigStatusList'])) {
                $model->slsConfigStatusList = [];
                $n                          = 0;
                foreach ($map['SlsConfigStatusList'] as $item) {
                    $model->slsConfigStatusList[$n++] = null !== $item ? slsConfigStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
