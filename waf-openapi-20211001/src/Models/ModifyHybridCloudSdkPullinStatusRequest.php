<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridCloudSdkPullinStatusRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstanceInfo](https://help.aliyun.com/document_detail/140857.html) operation to query the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf-cn-7pp2le***01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the SDK.
     *
     * This parameter is required.
     *
     * @example b3dbc5153317c79d8ca9f9***ea
     *
     * @var string
     */
    public $mid;

    /**
     * @description The status of traffic redirection. Valid values:
     *
     *   **on**
     *   **off**
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $pullinStatus;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mid' => 'Mid',
        'pullinStatus' => 'PullinStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->pullinStatus) {
            $res['PullinStatus'] = $this->pullinStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridCloudSdkPullinStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['PullinStatus'])) {
            $model->pullinStatus = $map['PullinStatus'];
        }

        return $model;
    }
}
