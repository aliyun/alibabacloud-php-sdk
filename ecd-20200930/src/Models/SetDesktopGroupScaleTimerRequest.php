<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerRequest\scaleTimerInfos;
use AlibabaCloud\Tea\Model;

class SetDesktopGroupScaleTimerRequest extends Model
{
    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by Elastic Desktop Service.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information about the scheduled auto scaling task.
     *
     * @var scaleTimerInfos[]
     */
    public $scaleTimerInfos;
    protected $_name = [
        'desktopGroupId'  => 'DesktopGroupId',
        'regionId'        => 'RegionId',
        'scaleTimerInfos' => 'ScaleTimerInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scaleTimerInfos) {
            $res['ScaleTimerInfos'] = [];
            if (null !== $this->scaleTimerInfos && \is_array($this->scaleTimerInfos)) {
                $n = 0;
                foreach ($this->scaleTimerInfos as $item) {
                    $res['ScaleTimerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDesktopGroupScaleTimerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleTimerInfos'])) {
            if (!empty($map['ScaleTimerInfos'])) {
                $model->scaleTimerInfos = [];
                $n                      = 0;
                foreach ($map['ScaleTimerInfos'] as $item) {
                    $model->scaleTimerInfos[$n++] = null !== $item ? scaleTimerInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
