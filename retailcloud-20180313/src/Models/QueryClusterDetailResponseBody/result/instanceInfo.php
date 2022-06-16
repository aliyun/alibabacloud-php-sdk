<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $allocatePodCount;

    /**
     * @var string[]
     */
    public $allocatedPodInfoList;

    /**
     * @var int
     */
    public $appCount;

    /**
     * @var string[]
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
            $res['AllocatedPodInfoList'] = $this->allocatedPodInfoList;
        }
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->availablePodInfoList) {
            $res['AvailablePodInfoList'] = $this->availablePodInfoList;
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
                $model->allocatedPodInfoList = $map['AllocatedPodInfoList'];
            }
        }
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['AvailablePodInfoList'])) {
            if (!empty($map['AvailablePodInfoList'])) {
                $model->availablePodInfoList = $map['AvailablePodInfoList'];
            }
        }

        return $model;
    }
}
