<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class RemoveLogMaskConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maskId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'maskId'     => 'MaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maskId) {
            $res['MaskId'] = $this->maskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveLogMaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaskId'])) {
            $model->maskId = $map['MaskId'];
        }

        return $model;
    }
}
