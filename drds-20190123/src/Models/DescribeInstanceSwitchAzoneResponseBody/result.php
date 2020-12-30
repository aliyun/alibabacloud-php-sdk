<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result\targetAzones;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var targetAzones
     */
    public $targetAzones;

    /**
     * @var bool
     */
    public $switchAble;

    /**
     * @var string
     */
    public $originAzoneId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'targetAzones'  => 'TargetAzones',
        'switchAble'    => 'SwitchAble',
        'originAzoneId' => 'OriginAzoneId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetAzones) {
            $res['TargetAzones'] = null !== $this->targetAzones ? $this->targetAzones->toMap() : null;
        }
        if (null !== $this->switchAble) {
            $res['SwitchAble'] = $this->switchAble;
        }
        if (null !== $this->originAzoneId) {
            $res['OriginAzoneId'] = $this->originAzoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['TargetAzones'])) {
            $model->targetAzones = targetAzones::fromMap($map['TargetAzones']);
        }
        if (isset($map['SwitchAble'])) {
            $model->switchAble = $map['SwitchAble'];
        }
        if (isset($map['OriginAzoneId'])) {
            $model->originAzoneId = $map['OriginAzoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
