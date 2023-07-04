<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class RecoverPhysicalConnectionRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to precheck the request only. Valid values:
     *
     *   **true**: only prechecks the request but does not resume the Express Connect circuit. The system prechecks the request syntax, instance status, and whether the required parameters are specified. An error message is returned if the request fails to pass the precheck. If the request passes the precheck, the system returns the ID of the request.
     *   **false** (default): sends the request. If the request passes the precheck, the Express Connect circuit is resumed.
     *
     * @example pc-bp1mrgfbtmc9brre7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'dryRun'     => 'DryRun',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'token'      => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverPhysicalConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
