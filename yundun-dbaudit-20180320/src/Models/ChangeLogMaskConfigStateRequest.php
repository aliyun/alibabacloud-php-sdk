<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ChangeLogMaskConfigStateRequest extends Model
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

    /**
     * @var int
     */
    public $maskState;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'maskId'     => 'MaskId',
        'maskState'  => 'MaskState',
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
        if (null !== $this->maskState) {
            $res['MaskState'] = $this->maskState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeLogMaskConfigStateRequest
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
        if (isset($map['MaskState'])) {
            $model->maskState = $map['MaskState'];
        }

        return $model;
    }
}
