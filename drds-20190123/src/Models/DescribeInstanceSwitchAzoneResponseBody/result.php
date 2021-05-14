<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result\targetAzones;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $originAzoneId;

    /**
     * @var bool
     */
    public $switchAble;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var targetAzones
     */
    public $targetAzones;
    protected $_name = [
        'originAzoneId' => 'OriginAzoneId',
        'switchAble'    => 'SwitchAble',
        'regionId'      => 'RegionId',
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
        if (null !== $this->switchAble) {
            $res['SwitchAble'] = $this->switchAble;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['SwitchAble'])) {
            $model->switchAble = $map['SwitchAble'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetAzones'])) {
            $model->targetAzones = targetAzones::fromMap($map['TargetAzones']);
        }

        return $model;
    }
}
