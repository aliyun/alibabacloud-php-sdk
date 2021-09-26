<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetLogMaskConfigsRequest extends Model
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
     * @var string
     */
    public $maskName;

    /**
     * @var int
     */
    public $maskType;

    /**
     * @var int
     */
    public $maskState;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'maskName'   => 'MaskName',
        'maskType'   => 'MaskType',
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
        if (null !== $this->maskName) {
            $res['MaskName'] = $this->maskName;
        }
        if (null !== $this->maskType) {
            $res['MaskType'] = $this->maskType;
        }
        if (null !== $this->maskState) {
            $res['MaskState'] = $this->maskState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogMaskConfigsRequest
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
        if (isset($map['MaskName'])) {
            $model->maskName = $map['MaskName'];
        }
        if (isset($map['MaskType'])) {
            $model->maskType = $map['MaskType'];
        }
        if (isset($map['MaskState'])) {
            $model->maskState = $map['MaskState'];
        }

        return $model;
    }
}
