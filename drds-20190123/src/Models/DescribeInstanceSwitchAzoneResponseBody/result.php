<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result\targetAzones;

class result extends Model
{
    /**
     * @var string
     */
    public $originAzoneId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $switchAble;

    /**
     * @var targetAzones
     */
    public $targetAzones;
    protected $_name = [
        'originAzoneId' => 'OriginAzoneId',
        'regionId' => 'RegionId',
        'switchAble' => 'SwitchAble',
        'targetAzones' => 'TargetAzones',
    ];

    public function validate()
    {
        if (null !== $this->targetAzones) {
            $this->targetAzones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TargetAzones'] = null !== $this->targetAzones ? $this->targetAzones->toArray($noStream) : $this->targetAzones;
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
