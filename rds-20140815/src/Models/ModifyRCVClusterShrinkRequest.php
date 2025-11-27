<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCVClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $supportDiskPerformanceLevelShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'supportDiskPerformanceLevelShrink' => 'SupportDiskPerformanceLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportDiskPerformanceLevelShrink) {
            $res['SupportDiskPerformanceLevel'] = $this->supportDiskPerformanceLevelShrink;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportDiskPerformanceLevel'])) {
            $model->supportDiskPerformanceLevelShrink = $map['SupportDiskPerformanceLevel'];
        }

        return $model;
    }
}
