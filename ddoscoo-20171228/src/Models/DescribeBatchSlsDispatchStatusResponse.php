<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBatchSlsDispatchStatusResponse\slsConfigStatusList;
use AlibabaCloud\Tea\Model;

class DescribeBatchSlsDispatchStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var slsConfigStatusList[]
     */
    public $slsConfigStatusList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'slsConfigStatusList' => 'SlsConfigStatusList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('slsConfigStatusList', $this->slsConfigStatusList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchSlsDispatchStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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

        return $model;
    }
}
