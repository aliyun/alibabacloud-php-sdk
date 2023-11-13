<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticBizBandWidthRequest extends Model
{
    /**
     * @description The burstable clean bandwidth. Unit: Mbit/s. The burstable clean bandwidth cannot exceed nine times the clean bandwidth of your Anti-DDoS Pro or Anti-DDoS Premium instance, and the sum of the clean bandwidth and the burstable clean bandwidth cannot exceed the maximum clean bandwidth that is supported by your instance. The value 0 indicates that the burstable clean bandwidth feature is disabled. You can disable the burstable clean bandwidth feature once a month.
     *
     * @example 0
     *
     * @var int
     */
    public $elasticBizBandwidth;

    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-tl32morr****
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
     * @example month
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'elasticBizBandwidth' => 'ElasticBizBandwidth',
        'instanceId'          => 'InstanceId',
        'mode'                => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBizBandwidth) {
            $res['ElasticBizBandwidth'] = $this->elasticBizBandwidth;
        }
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
     * @return ModifyElasticBizBandWidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBizBandwidth'])) {
            $model->elasticBizBandwidth = $map['ElasticBizBandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
