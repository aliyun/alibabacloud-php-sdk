<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\instanceInfo\allocatedPodInfoList;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\instanceInfo\availablePodInfoList;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $allocatePodCount;

    /**
     * @var allocatedPodInfoList[]
     */
    public $allocatedPodInfoList;

    /**
     * @var int
     */
    public $appCount;

    /**
     * @var availablePodInfoList[]
     */
    public $availablePodInfoList;
    protected $_name = [
        'allocatePodCount'     => 'AllocatePodCount',
        'allocatedPodInfoList' => 'AllocatedPodInfoList',
        'appCount'             => 'AppCount',
        'availablePodInfoList' => 'AvailablePodInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatePodCount) {
            $res['AllocatePodCount'] = $this->allocatePodCount;
        }
        if (null !== $this->allocatedPodInfoList) {
            $res['AllocatedPodInfoList'] = [];
            if (null !== $this->allocatedPodInfoList && \is_array($this->allocatedPodInfoList)) {
                $n = 0;
                foreach ($this->allocatedPodInfoList as $item) {
                    $res['AllocatedPodInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->availablePodInfoList) {
            $res['AvailablePodInfoList'] = [];
            if (null !== $this->availablePodInfoList && \is_array($this->availablePodInfoList)) {
                $n = 0;
                foreach ($this->availablePodInfoList as $item) {
                    $res['AvailablePodInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePodCount'])) {
            $model->allocatePodCount = $map['AllocatePodCount'];
        }
        if (isset($map['AllocatedPodInfoList'])) {
            if (!empty($map['AllocatedPodInfoList'])) {
                $model->allocatedPodInfoList = [];
                $n                           = 0;
                foreach ($map['AllocatedPodInfoList'] as $item) {
                    $model->allocatedPodInfoList[$n++] = null !== $item ? allocatedPodInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['AvailablePodInfoList'])) {
            if (!empty($map['AvailablePodInfoList'])) {
                $model->availablePodInfoList = [];
                $n                           = 0;
                foreach ($map['AvailablePodInfoList'] as $item) {
                    $model->availablePodInfoList[$n++] = null !== $item ? availablePodInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
