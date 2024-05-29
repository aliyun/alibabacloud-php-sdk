<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyBizBandWidthModeRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-zvp2ay9b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The metering method of the burstable clean bandwidth feature. Valid values:
     *
     *   **month**: the metering method of monthly 95th percentile
     *   **day**: the metering method of daily 95th percentile
     *
     * This parameter is required.
     * @example month
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mode'       => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBizBandWidthModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
