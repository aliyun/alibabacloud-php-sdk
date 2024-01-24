<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result\targetAzones;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the source azoneId.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $originAzoneId;

    /**
     * @description regionId.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the job can be switched.
     *
     * @example true
     *
     * @var bool
     */
    public $switchAble;

    /**
     * @description Target azones.
     *
     * @var targetAzones
     */
    public $targetAzones;
    protected $_name = [
        'originAzoneId' => 'OriginAzoneId',
        'regionId'      => 'RegionId',
        'switchAble'    => 'SwitchAble',
        'targetAzones'  => 'TargetAzones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originAzoneId) {
            $res['OriginAzoneId'] = $this->originAzoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchAble) {
            $res['SwitchAble'] = $this->switchAble;
        }
        if (null !== $this->targetAzones) {
            $res['TargetAzones'] = null !== $this->targetAzones ? $this->targetAzones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginAzoneId'])) {
            $model->originAzoneId = $map['OriginAzoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SwitchAble'])) {
            $model->switchAble = $map['SwitchAble'];
        }
        if (isset($map['TargetAzones'])) {
            $model->targetAzones = targetAzones::fromMap($map['TargetAzones']);
        }

        return $model;
    }
}
